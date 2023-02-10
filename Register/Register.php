<?php
require_once 'bootstrap.php';
class Register
{
    public static function players(string $playerX="", string $playerO="") :void{
        $playerTurn = new PlayerTurn();
        $_SESSION['PLAYER_X_NAME'] = $playerX;
        $_SESSION['PLAYER_O_NAME'] = $playerO;
        $playerTurn->setTurn('x');
        Reset::board();
        Reset::wins();
    }
    public static function verifyPlayersSess() :void{
        if (!$_SESSION['PLAYER_X_NAME'] && !$_SESSION['PLAYER_O_NAME']) {
            header("location: index.php");
        }
    }
}