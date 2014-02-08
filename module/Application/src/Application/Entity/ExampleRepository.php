<?php
namespace Application\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ExampleRepository class
 * 
 * To access the repository from the application:
 * $sm=$this->getServiceLocator();
 * $em=$sm->get('Doctrine\ORM\EntityManager');
 * 
 * $repository=$em->getRepository('Application\Entity\Example');
 * echo get_class($repository);
 */
class ExampleRepository extends EntityRepository
{

}
