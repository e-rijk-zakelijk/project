<?php

    namespace Application\Repository;
     
    use Doctrine\ORM\EntityRepository;

    class TopicRepository extends EntityRepository
    {
        const TOPIC_FETCH_LIMIT = 10;
        
        public function fetchLatestsTopics()
        {
            $sQuery = '
                SELECT t 
                FROM Application\Entity\Topic t
            ';
            $oQuery = $this->_em->createQuery( $sQuery );
            $oQuery->setMaxResults( self::TOPIC_FETCH_LIMIT );

            \Doctrine\Common\Util\Debug::dump( $oQuery->getResult() );
        }
    }