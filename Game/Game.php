<?php
require_once 'bootstrap.php';
class Game
{
    private function plays() :object
    {
        return new Plays;
    }
    private function playerTurn() :object
    {
        return new PlayerTurn;
    }
    private function gameWon($cell=1) {
        if ($this->plays()->playsCount() < 3) return false;
        $column = $cell % 3;
        if (!$column) $column = 3;
        $row = ceil($cell / 3);
        $player = $this->playerTurn()->getTurn();
        $winAxis = new WinAxis;
        return $winAxis->isVertical($column, $player) || $winAxis->isHorizontal($row, $player) || $winAxis->isDiagonal($player);
    }
    function run($cell='') {
        if (Cell::get($cell)) return false;
        $_SESSION['CELL_' . $cell] = $this->playerTurn()->getTurn();
        $this->plays()->addPlaysCount();
        $win = $this->gameWon($cell);
        if(!$win) {
            $this->playerTurn()->switchTurn();
        }
        else {
            Victory::success($this->playerTurn()->getTurn());
            Reset::board();
        }
        return $win;
    }

}