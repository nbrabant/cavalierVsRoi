<?php

function cavalierVsRoi($positionCavalier, $positionRoi)
{
    $roi = new Roi($positionRoi[0], $positionRoi[1]);
    $cavalier = new Cavalier($positionCavalier[0], $positionCavalier[1]);

    if ($roi->prendPiece($cavalier)) {
        return 'roi';
    } elseif ($cavalier->prendPiece($roi)) {
        return 'cavalier';
    }

    return 'aucun';
}
