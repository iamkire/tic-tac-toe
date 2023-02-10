<?php


class PlayerTurn
{
    function setTurn(string $turn='x') {
        $_SESSION['TURN'] = $turn;
    }
    function getTurn() {
        return $_SESSION['TURN'] ? $_SESSION['TURN'] : 'x';
    }
    function switchTurn() {
        switch ($this->getTurn()) {
            case 'x': $this->setTurn('o'); break;
            default: $this->setTurn('x'); break;
        }
    }
}