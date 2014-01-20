<?php
namespace ApplicationTest;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;
use Doctrine\ORM\Tools\SchemaTool;

abstract class TestCase extends AbstractHttpControllerTestCase
{
    /** @var \Doctrine\ORM\EntityManager */
    protected $em;

    public function setUp()
    {
        $this->setApplicationConfig(include __DIR__ . '/../../../../config/application.config.php');

        /** @var \Doctrine\ORM\EntityManager em */
        $this->em = $this->getApplicationServiceLocator()->get('Doctrine\ORM\EntityManager');

        $tool = new SchemaTool($this->em);
        $classes=array();
        foreach (glob(__DIR__.'/../../src/Application/Entity/*.php') as $filename) {
            // ommit repositories
            if (strpos($filename, 'Repository') !== false) {
                continue;
            }
            
            $classname=basename($filename, '.php');
            $classes[] = $this->em->getClassMetadata(sprintf('Application\Entity\%s', $classname));
        }
        $tool->createSchema($classes);

        parent::setUp();
    }
}
