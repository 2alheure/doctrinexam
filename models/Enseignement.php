<?php



/**
 * Enseignement
 */
class Enseignement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $compteRendu;

    /**
     * @var \Session
     */
    private $idSession;

    /**
     * @var \Prof
     */
    private $idProf;


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
     * Set compteRendu
     *
     * @param string $compteRendu
     *
     * @return Enseignement
     */
    public function setCompteRendu($compteRendu)
    {
        $this->compteRendu = $compteRendu;

        return $this;
    }

    /**
     * Get compteRendu
     *
     * @return string
     */
    public function getCompteRendu()
    {
        return $this->compteRendu;
    }

    /**
     * Set idSession
     *
     * @param \Session $idSession
     *
     * @return Enseignement
     */
    public function setIdSession(\Session $idSession = null)
    {
        $this->idSession = $idSession;

        return $this;
    }

    /**
     * Get idSession
     *
     * @return \Session
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * Set idProf
     *
     * @param \Prof $idProf
     *
     * @return Enseignement
     */
    public function setIdProf(\Prof $idProf = null)
    {
        $this->idProf = $idProf;

        return $this;
    }

    /**
     * Get idProf
     *
     * @return \Prof
     */
    public function getIdProf()
    {
        return $this->idProf;
    }
}

