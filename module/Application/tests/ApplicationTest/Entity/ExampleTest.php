<?php
namespace ApplicationTest\Entity;

use ApplicationTest\TestCase;
use Application\Entity;

class ExampleTest extends TestCase
{
    public function test_getEntity()
    {
        $entity=new Entity\Example();
        $this->em->persist($entity);
        $this->em->flush();
        
        $this->assertEquals(1, $entity->getId());
    }
}
