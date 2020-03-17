<?php

use HtmlObjectModel\EntityAbstract;
use PHPUnit\Framework\TestCase;

/**
 * @covers \HtmlObjectModel\EntityAbstract
 */
class EntityAbstractTest extends TestCase
{

    public function testTag()
    {
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        $this->assertEquals('input', $entity->getTag());
    }

    public function testAttributes()
    {
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        
        $this->assertInstanceOf(EntityAbstract::class, $entity->setAttribute('name', 'field1'));
        $this->assertEquals(['name' => 'field1'], $entity->getAttributes());
        $this->assertEquals(' name="field1"', $this->invokeMethod($entity, 'buildAttributes'));
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