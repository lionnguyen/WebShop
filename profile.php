<?php

session_start();
include('header.php');
include('Includes/function.inc.php');

$user =array();
if (isset($_SESSION['user_id'])) {
     require('Includes/dbh.inc.php');
     $user = get_user_info($con, $_SESSION['user_id']);
}
?>

<?php
     include('Template/_profile-page.php');
?>

<?php
     include('footer.php');
?>