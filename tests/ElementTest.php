<?php

use HtmlObjectModel\Element;
use PHPUnit\Framework\TestCase;

class ElementTest extends TestCase
{
    protected $entity = null;

    public function setUp():void
    {
        $this->entity = new Element('input');
    }

    public function testConstruct()
    {
        $this->assertEquals('input', $this->entity->getTag());
    }

    public function testGetTag()
    {
        $this->assertEquals('input', $this->entity->getTag());
    }

    public function testSetAttribute()
    {
        $this->assertInstanceOf(Element::class, $this->entity->setAttribute('name', 'fld1'));
        $this->assertEquals('fld1', $this->entity->getAttribute('name'));
    }

    public function testGetAttribute()
    {
        $this->entity->setAttribute('name', 'fld1');
        $this->assertEquals('fld1', $this->entity->getAttribute('name'));
    }

    public function testGetAllAttributes()
    {
        $attr = [
            'name' => 'fld1',
            'type' => 'text'
        ];

        $this->entity->setAttribute('name', 'fld1');
        $this->entity->setAttribute('type', 'text');
        
        $this->assertEquals($attr, $this->entity->getAllAttributes());
    }

    public function testBuild()
    {
        $this->entity->setAttribute('name', 'fld1');
        $this->entity->setAttribute('type', 'text');
        $this->expectOutputString('<input name="fld1" type="text">');
        print $this->entity;
    }
}