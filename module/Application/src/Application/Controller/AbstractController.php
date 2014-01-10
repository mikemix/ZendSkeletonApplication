<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

abstract class AbstractController extends AbstractActionController
{
    /** @var \Doctrine\ORM\EntityManager */
    protected $doctrine;

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getDoctrine()
    {
        if (! $this->doctrine) {
            $this->doctrine=$this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->doctrine;
    }
}
