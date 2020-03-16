<?php

use HtmlObjectModel\Container;
use PHPUnit\Framework\TestCase;

/**
 * @covers \HtmlObjectModel\Container
 */
class ContainerTest extends TestCase
{
    /**
     * @covers \HtmlObjectModel\Container::__construct
     *
     * @return void
     */
    public function testConstruct()
    {
        $entity = new Container('div');
        $this->assertEquals('div', $entity->getTag());
    }

    /**
     * @covers \HtmlObjectModel\Container::addNode
     *
     * @return void
     */
    public function testAddNode()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $entity = new Container('div');
        $this->assertInstanceOf(Container::class, $entity->addNode($node, $nodeId));
        $this->assertEquals($node, $entity->getNodeById($nodeId));
        $this->assertEquals($nodeId, $entity->hasNode($node));
    }

    /**
     * @covers \HtmlObjectModel\Container::hasNodeId
     *
     * @return void
     */
    public function testHasNodeId()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $entity = new Container('div');
        $entity->addNode($node, $nodeId);
        
        $this->assertTrue($entity->hasNodeId($nodeId));
        $this->assertFalse($entity->hasNodeId('unknowNodeId'));
    }

    /**
     * @covers \HtmlObjectModel\Container::hasNode
     *
     * @return void
     */
    public function testHasNode()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $entity = new Container('div');
        $entity->addNode($node, $nodeId);
        
        $this->assertEquals($nodeId, $entity->hasNode($node));
        $this->assertFalse($entity->hasNode('unknowId'));
    }

    /**
     * @covers \HtmlObjectModel\Container::getNodeById
     *
     * @return void
     */
    public function testGetNodeById()
    {
        $node = 'New node';
        $nodeId = 'node1';
        $entity = new Container('div');
        $entity->addNode($node, $nodeId);
        
        $this->assertEquals($node, $entity->getNodeById($nodeId));
        
        $this->expectException(UnexpectedValueException::class);
        $entity->getNodeById('unknowId');
    }

    /**
     * @covers \HtmlObjectModel\Container::getAllNodes
     *
     * @return void
     */
    public function testGetAllNodes()
    {
        $nodes = ['Node1', 'Node2'];
        $entity = new Container('div');
        $entity->addNode('Node1');
        $entity->addNode('Node2');
        $this->assertEquals($nodes, $entity->getAllNodes());
    }

    /**
     * @covers \HtmlObjectModel\Container::countNodes
     *
     * @return void
     */
    public function testCountNodes()
    {
        $entity = new Container('div');
        $entity->addNode('Node1');
        $entity->addNode('Node2');
        $this->assertEquals(2, $entity->countNodes());
    }

    /**
     * @covers \HtmlObjectModel\Container::removeNodeById
     *
     * @return void
     */
    public function testRemoveNodeById()
    {
        $entity = new Container('div');
        $entity->addNode('Node1');
        $entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $entity->removeNodeById(0));
        $this->assertEquals([1 => 'Node2'], $entity->getAllNodes());
    }

    /**
     * @covers \HtmlObjectModel\Container::removeNode
     *
     * @return void
     */
    public function testRemoveNode()
    {
        $entity = new Container('div');
        $entity->addNode('Node1');
        $entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $entity->removeNode('Node1'));
        $this->assertEquals([1 => 'Node2'], $entity->getAllNodes());
    }

    /**
     * @covers \HtmlObjectModel\Container::replaceNodeById
     *
     * @return void
     */
    public function testReplaceNodeById()
    {
        $nodes = ['Node1', 'Node2'];
        $entity = new Container('div');
        $entity->addNode('Node1');
        $entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $entity->replaceNodeById(0, 'Node0'));
        $nodes[0] = 'Node0';
        $this->assertEquals($nodes, $entity->getAllNodes());
    }

    /**
     * @covers \HtmlObjectModel\Container::replaceNode
     *
     * @return void
     */
    public function testReplaceNode()
    {
        $nodes = ['Node1', 'Node2'];
        $entity = new Container('div');
        $entity->addNode('Node1');
        $entity->addNode('Node2');
        $this->assertInstanceOf(Container::class, $entity->replaceNode('Node1', 'Node0'));
        $nodes[0] = 'Node0';
        $this->assertEquals($nodes, $entity->getAllNodes());
    }

    /**
     * @covers \HtmlObjectModel\Container::build
     *
     * @return void
     */
    public function testBuild()
    {
        $entity = new Container('div');
        $entity->setAttribute('class', 'mystyle');
        $entity->addNode('Node');
        $this->expectOutputString('<div class="mystyle">Node</div>');
        print $entity;
    }

    /**
     * @covers \HtmlObjectModel\Container::buildNodes
     *
     * @return void
     */
    public function testBuildNodes()
    {
        $entity = new Container('div');
        $entity->addNode('Node 1');
        $this->assertEquals('Node 1', $this->invokeMethod($entity, 'buildNodes'));
    }

    /**
     * Call protected/private method of a class.
     *
     * @param object &$object    Instantiated object that we will run method on.
     * @param string $methodName Method name to call
     * @param array  $parameters Array of parameters to pass into method.
     * @link http://leandrolisura.com.br/phpunit-testes-em-metodos-privados-e-protegidos-da-classe/
     * @return mixed Method return.
     */
    public function invokeMethod(&$object, string $methodName, array $parameters = [])
    {
        $reflection = new \ReflectionClass(get_class($object));
        $method = $reflection->getMethod($methodName);
        $method->setAccessible(true);
        return $method->invokeArgs($object, $parameters);
    }
}