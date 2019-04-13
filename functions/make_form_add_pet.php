<?php
function make_form_add_pet()
{
    ?>
    <form method="post"
          action="<?= htmlentities($_SERVER['PHP_SELF'],
              ENT_QUOTES) ?>">
    <?php

}
?>