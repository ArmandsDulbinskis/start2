<?php

include __DIR__ . '/../unit/sum.php';
class sumCest
{

    public function _before(UnitTester $I)
    {
    }

    public function _after(UnitTester $I)
    {
    }

    public function sumTest(UnitTester $I)
    {
        $I->assertEquals(4, sum(2,2));
    }
}

?>