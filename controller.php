<?php
    session_start();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<!--
    last modified: 2019-04-11
    you can run this using the URL:
http://nrs-projects.humboldt.edu/~erw35/SeedsDB/controller.php
-->

<head>
    <title> H.A.R.T </title>
    <meta charset="utf-8" />

    <?php
    /* these are bringing in needed PHP functions */
	require_once("functions/get_login.php");
	require_once("functions/make_form_add_pet.php");
	require_once("functions/make_form_add_owner.php");
	require_once("functions/insert_add_owner.php");
	require_once("functions/insert_add_pet.php");
	require_once("functions/destroy_and_exit.php");
	require_once("functions/hsu_conn_sess.php");
	//require_once("functions/getCatId.sql");
	//require_once("functions/getSequenceVal.sql");
	require_once("functions/main_page.php");
    ?>
    <link rel="icon" href="data:image/png;base64,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">
    <link href="pretty.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1> Humboldt Animal Rescue Team </h1>
    <?php
    if (array_key_exists('next-stage',$_SESSION))
    {
	?> <p> <?= $_SESSION['next-stage'] ?> </p>
	<?php
    }
    else
    {
	?> <p> no next-stage in $_SESSION </p> 
	<?php
   }

    // when "first" call this, create a login form
    
    if (! array_key_exists('next-stage', $_SESSION))
    {
        make_login();
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        $_SESSION['next-stage'] = "main_page";
    }

    // when user sends login info, show main page prompts

    elseif ($_SESSION['next-stage'] == "main_page")
    {
        make_main_page();
        $_SESSION['next-stage'] = "main_page_handler";
        // make_main_page() sets the next session itself
    }
    elseif($_SESSION['next-stage'] == "main_page_handler")
    {
        // handle the main page options here
        if (array_key_exists("cat_add", $_POST))
        {
            $_SESSION['next-stage'] = "insert_add_pet";
        }
        if (array_key_exists("owner_add", $_POST))
        {
            $_SESSION['next-stage'] = "insert_add_owner";
        }
        if (array_key_exists("searching", $_POST))
        {
           $_SESSION['next-stage'] = "search";
        }
        if (array_key_exists("statistics", $_POST))
        {
           $_SESSION['next-stage'] = "stats";
        }

    }
    elseif ($_SESSION['next-stage'] == "insert_add_pet")
    {
        make_form_add_pet();
        $_SESSION['next-stage'] = "add_pet_handler";
    }
    elseif ($_SESSION['next-stage'] == "add_pet_handler")
    {
	    // function taken from make_form_add_pet
	    insert_add_pet();
    }
    elseif ($_SESSION['next-stage'] == "insert_add_owner")
    {
        make_form_add_owner();
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
