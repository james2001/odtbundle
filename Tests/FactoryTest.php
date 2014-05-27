<?php

namespace James2001\Bundle\OdtBundle\Tests;



use James2001\Bundle\OdtBundle\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreate()
    {
        $factory =  new Factory();
        $file = __DIR__.'/test.odt';
        $this->assertInstanceOf('\Odf', $factory->createOdtObject($file));
    }
}
