<?php


use ResoUpiTester\UpiUS;
use PHPUnit\Framework\TestCase;

class UpiUSTest extends TestCase
{
    /** @var UpiUS $upi */
    public $upi;

    public function setUp()
    {
        $this->upi = new UpiUS();
        $this->upi->setStateAbbreviation('AL');
        $this->upi->setCountyName('Autauga County');
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    public function testBasics()
    {
        $this->upi->setSubCountyName('Autaugaville CCD');
        $this->upi->setPropertyId('123456');
        $this->upi->setSubPropertyTypeCode('R');
        $this->upi->setSubPropertyId('N');

        $this->assertSame('US-01001-90171-123456-R-N', $this->upi->toUPI());
    }
}
