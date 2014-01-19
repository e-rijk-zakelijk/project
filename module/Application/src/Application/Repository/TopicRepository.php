<?php

    namespace Application\Repository;
     
    use Doctrine\ORM\EntityRepository;

    class TopicRepository extends EntityRepository
    {
        const TOPIC_FETCH_LIMIT = 10;
        
        public function fetchLatestsTopics( $iForumId )
        {
            $sQuery = "
                SELECT    t 
                FROM      Application\Entity\Topic t
                WHERE     t.forum = '" . $iForumId . "'
            ";
            $oQuery = $this->_em->createQuery( $sQuery );
            $oQuery->setMaxResults( self::TOPIC_FETCH_LIMIT );

            return $oQuery->getResult();
        }
    }