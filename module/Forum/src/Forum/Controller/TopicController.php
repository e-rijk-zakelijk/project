<?php

    namespace Forum\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Application\Entity\Topic;
    use DoctrineORMModule\Form\Annotation\AnnotationBuilder;
    use DoctrineModule\Stdlib\Hydrator\DoctrineObject as DoctrineHydrator;
				
    class TopicController extends AbstractActionController
    {
        public function indexAction()
        {
            $oObjectManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );

            return array();
        }

        public function addAction()
        {
            $oObjectManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );

            $oTopic     = new Topic();
            $oBuilder   = new AnnotationBuilder( $oObjectManager );

            $oForm      = $oBuilder->createForm( $oTopic );
            $oForm->setHydrator( new DoctrineHydrator( $oObjectManager, 'Application\Entity\Topic' ) );

            $oRequest = $this->getRequest();
            if( $oRequest->isPost() )
            {
                $oForm->bind( $oTopic );
                $oForm->setData( $oRequest->getPost() );

                if( $oForm->isValid() )
                {
                    $oTopic->setAccountId( 1 );
                    $oTopic->setForum( $oObjectManager->find( 'Application\Entity\Forum', $this->getEvent()->getRouteMatch()->getParam( 'id' ) ) );

                    $oObjectManager->persist( $oTopic );
                    $oObjectManager->flush();
                }
                else
                {
                    var_dump( $oForm->getMessages() );
                }
            }
            return array(
                'oForm'    => $oForm
            );
        }

        public function updateAction()
        {
            return array();
        }

        public function deleteAction()
        {
            return array();
        }
    }