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
            
            $iForumId = $this->getEvent()->getRouteMatch()->getParam( 'id' );
            
            $oTopics = $oObjectManager->getRepository( 'Application\Entity\Topic' )->fetchLatestsTopics( $iForumId );

            return array(
                'oTopics' => $oTopics
            );
        }

        public function addAction()
        {
            $oObjectManager = $this->getServiceLocator()->get( 'Doctrine\ORM\EntityManager' );

            $aForums = $oObjectManager->getRepository( 'Application\Entity\Forum' )->findAll();

            $aForumData = array();
            foreach( $aForums as $aForum )
            {
                $aForumData[$aForum->getId()] = $aForum->getName();
            }

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
                    
                    $iForumId = $this->getEvent()->getRouteMatch()->getParam( 'id' );
                    if( $oRequest->getPost( 'forums' ) !== $iForumId )
                    {
                        $iForumId = $oRequest->getPost( 'forums' );
                    }
                    $oTopic->setForum( $oObjectManager->find( 'Application\Entity\Forum', $iForumId ) );
                    $oTopic->setDateAdded( new \DateTime( 'now' ) );

                    $oObjectManager->persist( $oTopic );
                    $oObjectManager->flush();
                }
                else
                {
                    var_dump( $oForm->getMessages() );
                }
            }
            return array(
                'oForm'    => $oForm,
                'aForums'  => $aForumData
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