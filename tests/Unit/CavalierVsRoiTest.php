<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Mouvement;

class CavalierVsRoiTest extends TestCase
{

    /**
     * Assertions retournant "aucune" -> aucune de piece ne prend l'autre
     * @param  Array $positionCavalier
     * @param  Array $positionRoi
     *
     * @testWith    [["A", 1], ["H", 8]]
     *              [["H", 8], ["A", 1]]
     *              [["H", 8], ["A", 2]]
     *              [["C", 2], ["C", 4]]
     */
    public function testAucunRetour($positionCavalier, $positionRoi)
    {
        $this->assertEquals(cavalierVsRoi($positionCavalier, $positionRoi), 'aucun', 'Mauvais gagnant lorsque le cavalier est en ' . implode('', $positionCavalier) . ' et le roi en ' . implode('', $positionRoi));
    }

    /**
     * Assertions retournant "roi" -> le roi prend le cavalier
     * @param  Array $positionCavalier
     * @param  Array $positionRoi
     *
     * @testWith    [["B", 7], ["C", 6]]
     *              [["C", 6], ["B", 7]]
     *              [["A", 1], ["B", 2]]
     *              [["H", 1], ["H", 2]]
     */
    public function testRetourRoi($positionCavalier, $positionRoi)
    {
        $this->assertEquals(cavalierVsRoi($positionCavalier, $positionRoi), 'roi', 'Mauvais gagnant lorsque le cavalier est en ' . implode('', $positionCavalier) . ' et le roi en ' . implode('', $positionRoi));
    }

    /**
     * Assertions retournant "cavalier" -> le cavalier prend le roi
     * @param  String $positionCavalier
     * @param  String $positionRoi
     *
     * @testWith    [["C", 3], ["B", 5]]
     *              [["C", 3], ["D", 5]]
     *              [["C", 3], ["A", 2]]
     *              [["C", 4], ["A", 3]]
     *              [["C", 4], ["E", 3]]
     */
    public function testRetourCavalier($positionCavalier, $positionRoi)
    {
        $this->assertEquals(cavalierVsRoi($positionCavalier, $positionRoi), 'cavalier', 'Mauvais gagnant lorsque le cavalier est en ' . implode('', $positionCavalier) . ' et le roi en ' . implode('', $positionRoi));
    }

}
