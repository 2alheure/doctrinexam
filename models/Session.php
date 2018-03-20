<?php



/**
 * Session
 */
class Session
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $debut;

    /**
     * @var integer
     */
    private $duree;

    /**
     * @var \Salle
     */
    private $idSalle;

    /**
     * @var \Matiere
     */
    private $idMatiere;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idProf;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idProf = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Session
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set duree
     *
     * @param integer $duree
     *
     * @return Session
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return integer
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set idSalle
     *
     * @param \Salle $idSalle
     *
     * @return Session
     */
    public function setIdSalle(\Salle $idSalle = null)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    /**
     * Get idSalle
     *
     * @return \Salle
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set idMatiere
     *
     * @param \Matiere $idMatiere
     *
     * @return Session
     */
    public function setIdMatiere(\Matiere $idMatiere = null)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere
     *
     * @return \Matiere
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Add idProf
     *
     * @param \Prof $idProf
     *
     * @return Session
     */
    public function addIdProf(\Prof $idProf)
    {
        $this->idProf[] = $idProf;

        return $this;
    }

    /**
     * Remove idProf
     *
     * @param \Prof $idProf
     */
    public function removeIdProf(\Prof $idProf)
    {
        $this->idProf->removeElement($idProf);
    }

    /**
     * Get idProf
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdProf()
    {
        return $this->idProf;
    }
}

