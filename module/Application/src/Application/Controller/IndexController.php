<?php
namespace Application\Controller;

use Zend\View\Model\ViewModel;

class IndexController extends IndexController
{
    public function indexAction()
    {
        // use $this->getDoctrine() to access Doctrine
        
        return new ViewModel();
    }
}
