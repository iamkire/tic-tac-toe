<?php
require_once 'bootstrap.php';
class WinAxis
{
    function isVertical($column=1, $turn='x') {
        return Cell::get($column) == $turn &&
            Cell::get($column + 3) == $turn &&
            Cell::get($column + 6) == $turn;
    }
    function isHorizontal($row=1, $turn='x') {
        return Cell::get($row) == $turn &&
            Cell::get($row + 1) == $turn &&
            Cell::get($row + 2) == $turn;
    }
    function isDiagonal($turn='x') {
        $win = Cell::get(1) == $turn &&
            Cell::get(9) == $turn;
        if (!$win)
            $win = Cell::get(3) == $turn && Cell::get(7) == $turn;
        return $win && Cell::get(5) == $turn;
    }
}