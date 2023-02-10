<?php
class Victory
{
    public static function success($player='x') :void {
        $_SESSION['PLAYER_' . strtoupper($player) . '_WINS']++;
    }
    public static function score($player='x') {
        $score = $_SESSION['PLAYER_' . strtoupper($player) . '_WINS'];
        return $score ? $score : 0;
    }
}