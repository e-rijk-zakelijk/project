<?php

    namespace Forum\Controller;

    use Zend\Mvc\Controller\AbstractActionController;

    class ForumController extends AbstractActionController
    {
        public function indexAction()
        {
            $oObjectManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );
            
            $oFora = $oObjectManager->getRepository( 'Application\Entity\Forum' )->findAll();
            
            return array(
                'oFora' => $oFora
            );
        }
    }