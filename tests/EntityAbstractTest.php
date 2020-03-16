<?php

use HtmlObjectModel\EntityAbstract;
use PHPUnit\Framework\TestCase;

class EntityAbstractTest extends TestCase
{
    /**
     * @covers \HtmlObjectModel\EntityAbstract::__construct
     *
     * @return void
     */
    public function testConstruct()
    {
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        $this->assertEquals('input', $entity->getTag());
    }

    /**
     * @covers \HtmlObjectModel\EntityAbstract::getTag
     *
     * @return void
     */
    public function testGetTag()
    {
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        $this->assertEquals('input', $entity->getTag());
    }

    /**
     * @covers \HtmlObjectModel\EntityAbstract::setAttribute
     *
     * @return void
     */
    public function testSetAttribute()
    {
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        $this->assertInstanceOf(EntityAbstract::class, $entity->setAttribute('name', 'fld1'));
        $this->assertEquals('fld1', $entity->getAttribute('name'));
    }

    /**
     * @covers \HtmlObjectModel\EntityAbstract::getAttribute
     *
     * @return void
     */
    public function testGetAttribute()
    {
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        $entity->setAttribute('name', 'fld1');
        $this->assertEquals('fld1', $entity->getAttribute('name'));
    }

    /**
     * @covers \HtmlObjectModel\EntityAbstract::getAllAttributes
     *
     * @return void
     */
    public function testGetAllAttributes()
    {
        $attr = [
            'name' => 'fld1',
            'type' => 'text'
        ];
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        $entity->setAttribute('name', 'fld1');
        $entity->setAttribute('type', 'text');
        
        $this->assertEquals($attr, $entity->getAllAttributes());
    }

    /**
     * @covers \HtmlObjectModel\EntityAbstract::buildAttributes
     *
     * @return void
     */
    public function testBuildAttributes()
    {
        $entity = $this->getMockForAbstractClass(EntityAbstract::class, ['input']);
        $entity->setAttribute('class', 'mystyle');
        $this->assertEquals(' class="mystyle"', $this->invokeMethod($entity, 'buildAttributes'));
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