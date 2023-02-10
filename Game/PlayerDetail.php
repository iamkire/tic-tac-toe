<?php
require_once('bootstrap.php');
class PlayerDetail
{
    function name($player='x') {
        return $_SESSION['PLAYER_' . strtoupper($player) . '_NAME'];
    }
    function current() {
        $playerTurn = new PlayerTurn;
        return $this->name($playerTurn->getTurn());
    }
}