<?php
require_once('Game/Plays.php');
 class Reset {
    public static function board() {
        $plays = new Plays;
        $plays->resetPlaysCount();
        for ( $i = 1; $i <= 9; $i++ ) {
            unset($_SESSION['CELL_' . $i]);
        }
    }
     public static function wins() {
         $_SESSION['PLAYER_X_WINS'] = 0;
         $_SESSION['PLAYER_O_WINS'] = 0;
     }
}