<?php
require_once "bootstrap.php";
Register::players($_POST['player-x'], $_POST['player-o']);
if ($_SESSION['PLAYER_X_NAME'] && $_SESSION['PLAYER_O_NAME']) {
    header("location: play.php");
}