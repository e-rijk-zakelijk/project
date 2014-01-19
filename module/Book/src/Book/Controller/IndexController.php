<?php

    namespace Scripts\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Application\Entity\Book;
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

            $oBook      = new Book();
            $oBuilder   = new AnnotationBuilder( $oObjectManager );
            
            $oForm      = $oBuilder->createForm( $oBook );
            $oForm->setHydrator( new DoctrineHydrator( $oObjectManager, 'Application\Entity\Book' ) );
            
            $oRequest   = $this->getRequest();
            if( $oRequest->isPost() )
            {
            	$oForm->bind( $oBook );
            	$oForm->setData( $oRequest->getPost() );
            
            	if( $oForm->isValid() )
            	{
            		$oObjectManager->persist( $oBook );
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