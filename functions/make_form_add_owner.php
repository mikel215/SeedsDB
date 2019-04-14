<?php
function make_form_add_owner()
{
    if((!array_key_exists("first_name", $_POST)) &&
        (!array_key_exists("last_name", $_POST)))
    {
        ?>
        <form method="post"
              action=
              "http://nrs-projects.humboldt.edu/~st10/s19cs328/328lab08/welcome.php">
            <fieldset>
                <fieldset>
                    <legend> Person info: </legend>
                    <label> First Name:
                        <input type="text" name="first_name"
                               required="required"/>
                    </label>
                    <label> Last Name:
                        <input type="text" name= "last_name"
                               required="required"/>
                    </label>

                    <label> Can Owner Adopt:
                        <label> No:
                            <input type="radio" value="false" name="owner_adopt"/>
                        </label>
                        <label>Yes:
                            <input type="radio" value="true" name="owner_adopt"/>
                        </label>
                    </label> <br />
                    <label>
                        Cat name:
                        <input type="text" name="owner_cat_name">
                    </label>

                </fieldset>

                <input type="submit" />
            </fieldset>
        </form>
        <?php
    }
    else
    {
        insert_add_owner();
    }
}
?>