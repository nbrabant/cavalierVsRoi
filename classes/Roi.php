<?php

class Roi extends Piece
{
    protected $directions = [
        ['directionX' => 'P1', 'directionY' => 'M1'],
        ['directionX' => 'P1', 'directionY' => 'P0'],
        ['directionX' => 'P1', 'directionY' => 'P1'],
        ['directionX' => 'P0', 'directionY' => 'M1'],
        ['directionX' => 'P0', 'directionY' => 'P1'],
        ['directionX' => 'M1', 'directionY' => 'M1'],
        ['directionX' => 'M1', 'directionY' => 'P0'],
        ['directionX' => 'M1', 'directionY' => 'P1'],
    ];

}
