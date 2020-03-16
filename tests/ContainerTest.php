<?php

use HtmlObjectModel\Container;
use PHPUnit\Framework\TestCase;

class ContainerTest extends TestCase
{
    protected $entity = null;

    public function setUp():void
    {
        $this->entity = new Container('div');
    }

    public function testConstruct()
    {
        $this->assertEquals('div', $this->entity->getTag());
    }

    public function testGetTag()
    {
        $this->assertEquals('div', $this->entity->getTag());
    }

    public function testSetAttribute()
    {
        $this->assertInstanceOf(Container::class, $this->entity->setAttribute('class', 'mystyle'));
        $this->assertEquals('mystyle', $this->entity->getAttribute('class'));
    }

    public function testGetAttribute()
    {
        $this->entity->setAttribute('class', 'mystyle');
        $this->assertEquals('mystyle', $this->entity->getAttribute('class'));
    }

    public function testGetAllAttributes()
    {
        $attr = [
            'name' => 'el1',
            'class' => 'mystyle'
        ];

        $this->entity->setAttribute('name', 'el1');
        $this->entity->setAttribute('class', 'mystyle');
        
        $this->assertEquals($attr, $this->entity->getAllAttributes());
    }

    public function testAddNode()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $this->assertInstanceOf(Container::class, $this->entity->addNode($node, $nodeId));
        $this->assertEquals($node, $this->entity->getNodeById($nodeId));
        $this->assertEquals($nodeId, $this->entity->hasNode($node));
    }

    public function testHasNodeId()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $this->entity->addNode($node, $nodeId);
        
        $this->assertTrue($this->entity->hasNodeId($nodeId));
        $this->assertFalse($this->entity->hasNodeId('unknowNodeId'));
    }

    public function testHasNode()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $this->entity->addNode($node, $nodeId);
        
        $this->assertEquals($nodeId, $this->entity->hasNode($node));
        $this->assertFalse($this->entity->hasNode('unknowId'));
    }

    public function testGetNodeById()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $this->entity->addNode($node, $nodeId);
        
        $this->assertEquals($node, $this->entity->getNodeById($nodeId));
        
        $this->expectException(UnexpectedValueException::class);
        $this->entity->getNodeById('unknowId');
    }

    public function testGetAllNodes()
    {
        $nodes = ['Node1', 'Node2'];
        $this->entity->addNode('Node1');
        $this->entity->addNode('Node2');
        $this->assertEquals($nodes, $this->entity->getAllNodes());
    }

    public function testCountNodes()
    {
        $nodes = ['Node1', 'Node2'];
        $this->entity->addNode('Node1');
        $this->entity->addNode('Node2');
        $this->assertEquals(2, $this->entity->countNodes());
    }

    public function testRemoveNodeById()
    {
        $nodes = ['Node1', 'Node2'];
        $this->entity->addNode('Node1');
        $this->entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $this->entity->removeNodeById(0));
        $this->assertEquals([1 => 'Node2'], $this->entity->getAllNodes());
    }

    public function testRemoveNode()
    {
        $nodes = ['Node1', 'Node2'];
        $this->entity->addNode('Node1');
        $this->entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $this->entity->removeNode('Node1'));
        $this->assertEquals([1 => 'Node2'], $this->entity->getAllNodes());
    }

    public function testReplaceNodeById()
    {
        $nodes = ['Node1', 'Node2'];
        $this->entity->addNode('Node1');
        $this->entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $this->entity->replaceNodeById(0, 'Node0'));
        $nodes[0] = 'Node0';
        $this->assertEquals($nodes, $this->entity->getAllNodes());
    }

    public function testReplaceNode()
    {
        $nodes = ['Node1', 'Node2'];
        $this->entity->addNode('Node1');
        $this->entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $this->entity->replaceNode('Node1', 'Node0'));
        $nodes[0] = 'Node0';
        $this->assertEquals($nodes, $this->entity->getAllNodes());
    }

    public function testBuild()
    {
        $this->entity->setAttribute('class', 'mystyle');
        $this->entity->addNode('Node');
        $this->expectOutputString('<div class="mystyle">Node</div>');
        print $this->entity;
    }
}