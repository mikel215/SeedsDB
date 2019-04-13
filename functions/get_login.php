<?php

function make_login()
{
    ?>
    <form method="post"
          action="<?= htmlentities($_SERVER['PHP_SELF'],
                        ENT_QUOTES) ?>">
        <fieldset>
            <legend>Enter login info:</legend>
            <fieldset>
                <label>
                    Username:
                    <input type="text" name="username" class="usr_field" />
                </label>
                <label>
                    Password:
                    <input type="password" name="password" class="usr_field" />
                </label>
            </fieldset>
            <input type="submit" name="submit_login" />

        </fieldset>

    </form>
<?php
}

function connect()
{
    $db_conn_str =
        "(DESCRIPTION = (ADDRESS = (PROTOCOL = TCP)
                                       (HOST = cedar.humboldt.edu)
                                       (PORT = 1521))
                            (CONNECT_DATA = (SID = STUDENT)))";
    $connection = oci_connect($usr, $pwd, $db_conn_str);

    if(! $connection)
    {
        ?>
        <p> Could not log in to database </p>
        <p> <a
                    href="<?= htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES) ?>">
                Try Again.</a>
        </p>
        <?php
        session_destroy();
        exit;
    }
    return $connection;
}
?>
