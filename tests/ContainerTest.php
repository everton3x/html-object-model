<?php

use PHPUnit\Framework\TestCase;
use HtmlObjectModel\Container;

class ElementTest extends TestCase
{
    protected $container = null;

    public function setUp():void
    {
        $this->container = new Container('p');
    }

    public function testConstruct()
    {
        $this->assertEquals('p', $this->element->getTag());
    }

    public function testAddNode()
    {
        
    }

    public function testBuild()
    {
        $this->element->setAttribute('name', 'fld1');
        $this->element->setAttribute('type', 'text');
        $this->expectOutputString('<input name="fld1" type="text">');
        print $this->element;
    }
}