<?php

    namespace Application\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\View\Model\ViewModel;

    class IndexController extends AbstractActionController
    {
        public function indexAction()
        {
            $oEntityManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );
            $oCategory = $oEntityManager->find( 'Application\Entity\Category', 1 );
            
            foreach( $oCategory->getSubcategories() as $aSubcategory )
            {
                \Doctrine\Common\Util\Debug::dump( $aSubcategory );
            }
            
            return new ViewModel();
        }
    }
