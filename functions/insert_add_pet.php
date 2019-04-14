<?php
function insert_add_pet()
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

    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;

    $conn = connect($username, $password);

    $db_insert_string = "insert into cat_info
                  values(:cat_name, :cat_dob, :cat_intake_date, :cat_adopt_date
                         :cat_breed, :cat_age, :cat_sex)";
    $db_insert = oci_parse($conn, $db_insert_string);

    // set up bind variables
    $name_var = strip_tags($_POST["animal_name"]);
    $dob_var = strip_tags($_POST["animal_dob"]);
    $intake_var = $_POST["animal_intake_date"];
    $adopt_var = $_POST["animal_adopt_date"];
    $breed_var = strip_tags($_POST["animal_breed"]);
    $age_var = strip_tags($_POST["animal_breed"]);
    $sex_var = strip_tags($_POST["animal_gender"]);

    oci_bind_by_name($db_insert, ":cat_name", $name_var);
    oci_bind_by_name($db_insert, ":cat_dob", $dob_var);
    oci_bind_by_name($db_insert, ":cat_intake_date", $intake_var);
    oci_bind_by_name($db_insert, ":cat_adopt_date", $adopt_var);
    oci_bind_by_name($db_insert, ":cat_breed", $breed_var);
    oci_bind_by_name($db_insert, ":cat_age", $age_var);
    oci_bind_by_name($db_insert, ":cat_sex", $sex_var);

    oci_execute($db_insert, OCI_DEFAULT);
    oci_commit($conn);
    oci_free_statement($db_insert);

    oci_close($conn);
}
