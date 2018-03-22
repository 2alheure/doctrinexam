<?php



/**
 * Employe
 */
class Employe
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
     * @var \Entreprise
     */
    private $idEntreprise;


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
     * @return Employe
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
     * @return Employe
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
     * Set idEntreprise
     *
     * @param \Entreprise $idEntreprise
     *
     * @return Employe
     */
    public function setIdEntreprise(\Entreprise $idEntreprise = null)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise
     *
     * @return \Entreprise
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
}

