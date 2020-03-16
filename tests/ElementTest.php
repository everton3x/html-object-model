<?php

use HtmlObjectModel\Element;
use PHPUnit\Framework\TestCase;

class ElementTest extends TestCase
{
    /**
     * @covers \HtmlObjectModel\Element::__construct
     *
     * @return void
     */
    public function testConstruct()
    {
        $entity = new Element('input');
        $this->assertEquals('input', $entity->getTag());
    }

    /**
     * @covers \HtmlObjectModel\Element::build
     *
     * @return void
     */
    public function testBuild()
    {
        $entity = new Element('input');
        $entity->setAttribute('name', 'fld1');
        $entity->setAttribute('type', 'text');
        $this->expectOutputString('<input name="fld1" type="text">');
        print $entity;
    }
}