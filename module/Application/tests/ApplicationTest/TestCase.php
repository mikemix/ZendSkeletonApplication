<?php
namespace ApplicationTest;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Doctrine\ORM\Tools\SchemaTool;

abstract class TestCase extends AbstractHttpControllerTestCase
{
    /** @var \Doctrine\ORM\EntityManager */
    private $em;

    public function setUp()
    {
        $this->setApplicationConfig(include __DIR__ . '/../../../../config/application.config.php');
        parent::setUp();
    }
    
    /**
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine()
    {
        if (! $this->em) {
            $this->em = $this->getApplicationServiceLocator()->get('Doctrine\ORM\EntityManager');
            
            $schemaTool = new SchemaTool($this->em);
            $schemaTool->createSchema($this->em->getMetadataFactory()->getAllMetadata());
        }
    
        return $this->em;
    }
}
