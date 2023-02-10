<?php
class Plays
{
    function playsCount() {
        return $_SESSION['PLAYS'] ? $_SESSION['PLAYS'] : 0;
    }
    function addPlaysCount() :void {
        if(! $_SESSION['PLAYS']) $_SESSION['PLAYS'] = 0;
        $_SESSION['PLAYS']++;
    }
    function resetPlaysCount() :void {
        $_SESSION['PLAYS'] = 0;
    }
}