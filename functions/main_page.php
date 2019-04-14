<?php
function make_main_page()
{
  # if not logged in, go to login page
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
    

    if ((! array_key_exists("cat_add", $_POST)) &&
        (! array_key_exists("owner_add", $_POST)) &&
        (! array_key_exists("searching", $_POST)) &&
        (! array_key_exists("statistics", $_POST)))
    {
    ?>

      <form method="post"
          action="<?= htmlentities($_SERVER['PHP_SELF'],
                                   ENT_QUOTES) ?>">

           <div id="add_cat">
               <input type="submit" id="cat" value="Add a cat" name="cat_add" /> 
           </div>

           <div id="add_owner">
               <input type="submit" id="owner" value="Add a owner" name="owner_add" />
           </div>

           <div id="search">
              <input type="submit" id="lookup" value="Search" name="searching" />

           </div>

           <div id="stats">
             <input type="submit" id="stat" value="Stats" name="statistics" />
           </div>

      </form>
  <?php
  }
}
?>
