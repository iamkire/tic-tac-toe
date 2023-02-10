<?php
class Cell
{
    public static function get(string $cell='') {
        return $_SESSION['CELL_' . $cell];
    }
}