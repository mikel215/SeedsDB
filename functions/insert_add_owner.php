<?php
function insert_add_owner()
{
    // Exit if username or password missing
    if ( (! array_key_exists("username", $_POST)) or
        (! array_key_exists("password", $_POST)) or
        ($_POST["username"] == "") or
        ($_POST["password"] == "") or
        (! isset($_POST["username"])) or
        (! isset($_POST["password"])) )
    {
        destroy_and_exit("must enter a username and password!");
    }
    $username = strip_tags($_POST["username"]);
    $password = $_POST["password"];

    // $_SESSION["username"] = $username;
    // $_SESSION["password"] = $password;

    $conn = connect($username, $password);

    // first, get next sequence value into a variable
    $sequence_query_str = "begin :seq_val := getSequenceVal(); end;";
    $sequence_query = oci_parse($conn, $sequence_query_str);
    oci_bind_by_name($sequence_query, ":seq_val", $indiv_seq_val, 99999);
    oci_execute($sequence_query, OCI_DEFAULT);
    oci_free_statement($sequence_query);

    // Now insert into individual table
    $db_insert_string = "insert into Individual
                  values(:indiv_val, :f_name, :l_name, :adopt_status";
    $db_insert = oci_parse($conn, $db_insert_string);

    // set up bind variables
    $fname_var = strip_tags($_POST["first_name"]);
    $lname_var = strip_tags($_POST["last_name"]);
    $adoptstatus_var = $_POST["owner_adopt"];

    oci_bind_by_name($db_insert, ":indiv_val", $indiv_seq_val);
    oci_bind_by_name($db_insert, ":f_name", $fname_var);
    oci_bind_by_name($db_insert, ":l_name", $lname_var);
    oci_bind_by_name($db_insert, ":adopt_status", $adoptstatus_var);

    oci_execute($db_insert, OCI_DEFAULT);
    oci_commit($conn);
    oci_free_statement($db_insert);

    // if cat name is entered add cat-owner relation into database
    if(array_key_exists("owner_cat_name", $_POST))
    {
        $catname_var = strip_tags($_POST["owner_cat_name"]);

        // get cat_id
        $cat_query_str = "begin :current_cat_id := getCatId(:cat_name); end;";
        $cat_query = oci_parse($conn, $cat_query_str);

        oci_bind_by_name($cat_query, ":cat_name", $catname_var);
        oci_bind_by_name($cat_query, ":current_cat_id", $cat_id_var, 10);
        oci_execute($cat_query, OCI_DEFAULT);
        oci_free_statement($cat_query);

        // now that individual_id and cat_id are available,
        // we can insert into the cat_owner table
        $insert_owner_str = "insert into cat_owner
                             values(:owner_id, :cats_id)";
        $insert_owner = oci_parse($conn, $insert_owner_str);

        oci_bind_by_name($insert_owner, ":owner_id", $indiv_seq_val);
        oci_bind_by_name($insert_owner, ":cats_id", $cat_id_var);

        oci_execute($insert_owner, OCI_DEFAULT);
        oci_commit($conn);
        oci_free_statement($insert_owner);

    }
    oci_close($conn);
}
