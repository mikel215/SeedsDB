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
        require_once("get_login.php");
        require_once("make_form_add_pet.php");
        require_once("destroy_and_exit.php");
        require_once("hsu_conn_sess.php");
    ?>

    <link href="http://users.humboldt.edu/smtuttle/styles/normalize.css"
          type="text/css" rel="stylesheet" />
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
        $_SESSION['next-stage'] = "get_dept_info";
    }

    // when user sends their choice of department,
    //    query for and display some details about that department

    elseif ($_SESSION['next-stage'] == "get_dept_info")
    {
        get_dept_info();
        session_destroy();
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
