<?php

use PHPUnit\Framework\TestCase;
use HtmlObjectModel\Element;

class ElementTest extends TestCase
{
    protected $element = null;

    public function setUp():void
    {
        $this->element = new Element('input');
    }

    public function testConstruct()
    {
        $this->assertEquals('input', $this->element->getTag());
    }

    public function testGetTag()
    {
        $this->assertEquals('input', $this->element->getTag());
    }

    public function testSetAttribute()
    {
        $this->assertInstanceOf(Element::class, $this->element->setAttribute('name', 'fld1'));
        $this->assertEquals('fld1', $this->element->getAttribute('name'));
    }

    public function testGetAttribute()
    {
        $this->element->setAttribute('name', 'fld1');
        $this->assertEquals('fld1', $this->element->getAttribute('name'));
    }

    public function testGetAllAttributes()
    {
        $attr = [
            'name' => 'fld1',
            'type' => 'text'
        ];

        $this->element->setAttribute('name', 'fld1');
        $this->element->setAttribute('type', 'text');
        
        $this->assertEquals($attr, $this->element->getAllAttributes());
    }

    public function testBuild()
    {
        $this->element->setAttribute('name', 'fld1');
        $this->element->setAttribute('type', 'text');
        $this->expectOutputString('<input name="fld1" type="text">');
        print $this->element;
    }
}