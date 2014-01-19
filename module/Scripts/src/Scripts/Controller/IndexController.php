<?php

    namespace Scripts\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Application\Entity\Script;
    use Zend\Form\Annotation\AnnotationBuilder;
    use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
								
    class IndexController extends AbstractActionController
    {
        public function indexAction()
        {
            $oObjectManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );
        }
        
        public function addAction()
        {
            $oObjectManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );

            $oScript    = new Script();
            $oBuilder   = new AnnotationBuilder( $oObjectManager );
            
            $oForm      = $oBuilder->createForm( $oScript );
            $oForm->setHydrator( new DoctrineHydrator( $oObjectManager, 'Application\Entity\Script' ) );
            
            $oRequest = $this->getRequest();
            if( $oRequest->isPost() )
            {
            	$oForm->bind( $oScript );
            	$oForm->setData( $oRequest->getPost() );
            
            	if( $oForm->isValid() )
            	{
            		$oObjectManager->persist( $oScript );
            		$oObjectManager->flush();
            	}
            	else
            	{
            		var_dump( $oForm->getMessages() );
            	}
            }
            return array(
                'oForm' => $oForm
            );
        }
        
        public function editAction()
        {
            
        }
        
        public function deleteAction()
        {
            
        }
    }