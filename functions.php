<?php
/**
 * FUNctions File
**/

/* Defining the functions directory */
define("FUN", get_template_directory() . "/functions");

/* Theme Functions */
require_once FUN . "/general.php";
require_once FUN . "/custom-post-type.php";
require_once FUN . "/widgets.php";

/* Theme Admin Functions */
require_once FUN . "/admin/theme.php";

/* Do not add anything beneath this line! Else the world crumbles */