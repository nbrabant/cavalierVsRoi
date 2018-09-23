<?php

class Cavalier extends Piece
{
    // le cavalier se déplace de 2 cases dans une direction
    // puis une case sur la latérale
    protected $directions = [
        ['directionX' => 'P2', 'directionY' => 'M1'],
        ['directionX' => 'P2', 'directionY' => 'P1'],
        ['directionX' => 'P1', 'directionY' => 'M2'],
        ['directionX' => 'P1', 'directionY' => 'P2'],
        ['directionX' => 'M1', 'directionY' => 'M2'],
        ['directionX' => 'M1', 'directionY' => 'P2'],
        ['directionX' => 'M2', 'directionY' => 'M1'],
        ['directionX' => 'M2', 'directionY' => 'P1'],
    ];
    
}
