<?php

use HtmlObjectModel\Container;
use PHPUnit\Framework\TestCase;

/**
 * @covers \HtmlObjectModel\Container
 */
class ContainerTest extends TestCase
{
    public function testGetNodes()
    {
        $entity = new Container('div');

        $entity->addNode('Node 1');
        $entity->addNode('Node 2');
        $this->assertEquals(['Node 1', 'Node 2'], $entity->getNodes());
    }

    public function testAddNode()
    {
        $entity = new Container('div');

        $this->assertInstanceOf(Container::class, $entity->addNode('Node 1'));

        $entity->addNode('Node 2');
        $this->assertEquals(['Node 1', 'Node 2'], $entity->getNodes());
    }

    public function testAddNodeWithId()
    {
        $entity = new Container('div');

        $this->assertInstanceOf(Container::class, $entity->addNode('Node 1', 'node1'));

        $entity->addNode('Node 2', 'node2');
        $this->assertEquals(['node1' => 'Node 1', 'node2' => 'Node 2'], $entity->getNodes());
    }

    public function testBuild()
    {
        $entity = new Container('div');
        $entity->addNode('My node');
        $entity->setAttribute('class', 'mystyle');
        $this->expectOutputString('<div class="mystyle">My node</div>');
        echo $entity;
    }
}