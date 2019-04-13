<?php
function make_form_add_pet()
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
?>