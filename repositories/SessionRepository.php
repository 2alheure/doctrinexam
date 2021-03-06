<?php

/**
 * SessionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SessionRepository extends Doctrine\ORM\EntityRepository
{
    public function getRoomForSession($idMatiere)
    {
        return $this->_em->createQuery("select s from \Session s where s.idMatiere = ".$idMatiere)->getResult();
    }

    public function getDifferentConfig()
    {
        $query = "SELECT p.nom, p.prenom, s.debut, s.duree
                  FROM Enseignement e
                  JOIN e.idSession s
                  JOIN s.idMatiere m
                  JOIN m.idProf pp
                  JOIN e.idProf p
                  WHERE p.id <> pp.id";

        return $this->_em->createQuery($query)->getResult();
    }
}