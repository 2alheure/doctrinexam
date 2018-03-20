<?php



/**
 * Session
 */
class Session
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $debut;

    /**
     * @var float
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set debut.
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
     * Get debut.
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set duree.
     *
     * @param float $duree
     *
     * @return Session
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree.
     *
     * @return float
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set idSalle.
     *
     * @param \Salle|null $idSalle
     *
     * @return Session
     */
    public function setIdSalle(\Salle $idSalle = null)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    /**
     * Get idSalle.
     *
     * @return \Salle|null
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set idMatiere.
     *
     * @param \Matiere|null $idMatiere
     *
     * @return Session
     */
    public function setIdMatiere(\Matiere $idMatiere = null)
    {
        $this->idMatiere = $idMatiere;

        return $this;
    }

    /**
     * Get idMatiere.
     *
     * @return \Matiere|null
     */
    public function getIdMatiere()
    {
        return $this->idMatiere;
    }

    /**
     * Add idProf.
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
     * Remove idProf.
     *
     * @param \Prof $idProf
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdProf(\Prof $idProf)
    {
        return $this->idProf->removeElement($idProf);
    }

    /**
     * Get idProf.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdProf()
    {
        return $this->idProf;
    }
}
