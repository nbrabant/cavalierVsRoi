<?php

abstract class Piece
{
    protected $matriceX = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];

    protected $matriceY = [1, 2, 3, 4, 5, 6, 7, 8];

    protected $positionX;

    protected $positionY;

    public function __construct($positionX, $positionY)
    {
        $this->positionX = $positionX;
        $this->positionY = $positionY;
    }

    public function prendPiece($piece)
    {
        return (boolean)(in_array(($piece->positionX . $piece->positionY), $this->getLegalPositions()));
    }

    private function getLegalPositions($legalPositions = [])
    {
        foreach ($this->directions as $direction) {
            $this->getMovement($legalPositions, $direction['directionX'], $direction['directionY']);
        }

        return $legalPositions;
    }

    private function getMovement(&$legalPositions, $directionX, $directionY)
    {
        $indexX = array_search($this->positionX, $this->matriceX);
        $this->changeIndexPosition($indexX, $directionX);

        $indexY = array_search($this->positionY, $this->matriceY);
        $this->changeIndexPosition($indexY, $directionY);

        // le mouvement est-il légal?
        if (isset($this->matriceX[$indexX]) && isset($this->matriceY[$indexY])) {
            $legalPositions[] = $this->matriceX[$indexX] . $this->matriceY[$indexY];
        }
    }

    private function changeIndexPosition(&$index, $movement)
    {
        if ($movement == 'P1') {
            $index += 1;
        } elseif ($movement == 'P2') {
            $index += 2;
        } elseif ($movement == 'M1') {
            $index -= 1;
        } elseif ($movement == 'M2') {
            $index -= 2;
        }
    }

}
