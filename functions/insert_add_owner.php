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

    $db_insert_string = "insert into Individual
                  values(:f_name, :l_name, :adopt_status";
    $db_insert = oci_parse($conn, $db_insert_string);

    // set up bind variables
    $fname_var = strip_tags($_POST["first_name"]);
    $lname_var = strip_tags($_POST["last_name"]);
    $adoptstatus_var = $_POST["owner_adopt"];
    $catname_var = strip_tags($_POST["owner_cat_name"]);

    oci_bind_by_name($db_insert, ":f_name", $fname_var);
    oci_bind_by_name($db_insert, ":l_name", $lname_var);
    oci_bind_by_name($db_insert, ":adopt_status", $adoptstatus_var);

    oci_execute($db_insert, OCI_DEFAULT);
    oci_commit($conn);
    oci_free_statement($db_insert);
}
