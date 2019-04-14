<?php
function make_form_add_pet()
{
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
    if(! array_key_exists("animal_name", $_POST))
    {
        ?>
        <form method="post"
              action="<?= htmlentities($_SERVER['PHP_SELF'],
                  ENT_QUOTES) ?>">
            <fieldset>
                <fieldset>
                    <legend>Enter animal information</legend>
                    <label>
                        Name:
                        <input type="text" name="animal_name"
                               required="required"/>
                    </label>
                    <label>
                        Date of Birth:
                        <input type="date" name="animal_dob" />
                    </label>
                    <label>
                        Intake Date:
                        <input type="date" name="animal_intake_date" />
                    </label>
                    <label>
                        Adopt Date:
                        <input type="date" name="animal_adopt_date" />
                    </label>
                    <label>
                        Breed:
                        <input type="text" name="animal_breed" />
                    </label>
                    <label>
                        Age:
                        <input type="text" name="animal_age" />
                    </label>
                    <label>
                        Sex:
                        <input type="radio" name="animal_gender" value="male"> Male <br>
                        <input type="radio" name="animal_gender" value="female"> Female <br>
                    </label>
                </fieldset>
                <input type="submit" name="animal_form_submit"/>
            </fieldset>
        </form>
        <?php
    }
    else
    {
       insert_add_pet();
    }
}
?>