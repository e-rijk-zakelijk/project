<?php

    namespace Forum\Controller;

    use Zend\Mvc\Controller\AbstractActionController;

    class ForumController extends AbstractActionController
    {
        public function indexAction()
        {
            $oObjectManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );
            
            $oFora = $oObjectManager->getRepository( 'Application\Entity\Forum' )->findAll();
            
            foreach( $oFora as $oForum )
            {
                echo count( $oForum->getTopics() );die;
                
                foreach( $oForum->getTopics() as $aTopic )
                {
                    \Doctrine\Common\Util\Debug::dump( $aTopic );die();
                }
            }
            
        }
    }