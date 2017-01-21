<?php

namespace AppBundle\Tests\Model;

use AppBundle\Model\Backpack;

/**
 * Backpack unit tests
 *
 * @author Binh Tran <tranthienbinh1989@gmail.com>
 */
class BackpackTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Backpack $backPack
     */
    protected $backPack;

    protected function setUp() {
        $this->backPack = new Backpack();
    }

    public function testAddOk() {
        $this->backPack->add("Apple");
        $this->assertTrue($this->backPack->add("Banana"));
    }

    public function testFindOk() {
        $this->backPack->add("Banana");
        $this->assertSame("Banana", $this->backPack->find("Banana"));
    }

    public function testCountOk() {
        $this->backPack->add("Orange");
        $this->backPack->add("Apple");
        $this->backPack->add("Lemon");

        $this->assertEquals(3, $this->backPack->count());
    }

    public function testRemoveOk() {
        $this->backPack->add("Orange");
        $this->backPack->add("Apple");
        $this->backPack->remove("Apple");
        $this->assertSame(null, $this->backPack->find("Banana"));
    }
}