<?php

use HtmlObjectModel\Element;
use PHPUnit\Framework\TestCase;

/**
 * @covers \HtmlObjectModel\Element
 */
class ElementTest extends TestCase
{
    public function testBuild()
    {
        $entity = new Element('input');
        $entity->setAttribute('name', 'field1');
        $this->expectOutputString('<input name="field1">');
        echo $entity;
    }
}