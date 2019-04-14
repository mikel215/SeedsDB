<?php
    session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!--
    last modified: 2019-04-11
    you can run this using the URL:
http://nrs-projects.humboldt.edu/~st10/s19cs328/328lect11-2/dept-details.php
-->

<head>
    <title> H.A.R.T </title>
    <meta charset="utf-8" />

    <?php
    /* these are bringing in needed PHP functions */
<<<<<<< Updated upstream:controller.php
        require_once("/functions/get_login.php");
        require_once("/functions/make_form_add_pet.php");
        require_once("/functions/destroy_and_exit.php");
        require_once("/functions/hsu_conn_sess.php");
        require_once("/functions/main_page.php");
=======
        require_once("get_login.php");
        require_once("make_form_add_pet.php");
        require_once("destroy_and_exit.php");
        require_once("hsu_conn_sess.php");
        require_once("main_page.php);
<<<<<<< Updated upstream:controller.php
>>>>>>> Stashed changes:controller.php
=======
>>>>>>> Stashed changes:controller.php
    ?>
    <link href="pretty.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1> Humboldt Animal Rescue Team </h1>

    <?php

    // when "first" call this, create a login form

    if (! array_key_exists('next-stage', $_SESSION))
    {
        make_login();
        $_SESSION['next-stage'] = "main_page";
    }

    // when user sends login info, dynamically create a select/drop-down
    //    of possible departments, queried from the database

    elseif ($_SESSION['next-stage'] == "main_page")
    {
        make_main_page();
        // make_main_page() sets the next session itself
    }
    elseif ($_SESSION['next-stage'] == "insert_add_pet")
    {
        insert_add_pet();
    }
    elseif ($_SESSION['next-stage'] == "insert_add_owner")
    {
        insert_add_owner();
    }
    elseif ($_SESSION['next-stage'] == "search")
    {
        // search_page();
    }
    elseif ($_SESSION['next-stage'] == "stats")
    {
        // get_stats_page()
    }
    else
    {
        ?>
        <p> <strong> Something went wrong! Try again </strong> </p>
        <img src="cat.png" alt="black cat">
        <?php
        session_destroy();
        session_regenerate_id(TRUE);
        session_start();
        make_login();
        $_SESSION['next-stage'] = "create_login";
    }

?>
