<?php



/**
 * Prof
 */
class Prof
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idSession;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSession = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Prof
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Prof
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add idSession
     *
     * @param \Session $idSession
     *
     * @return Prof
     */
    public function addIdSession(\Session $idSession)
    {
        $this->idSession[] = $idSession;

        return $this;
    }

    /**
     * Remove idSession
     *
     * @param \Session $idSession
     */
    public function removeIdSession(\Session $idSession)
    {
        $this->idSession->removeElement($idSession);
    }

    /**
     * Get idSession
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSession()
    {
        return $this->idSession;
    }
}

