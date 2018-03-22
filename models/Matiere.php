<?php



/**
 * Matiere
 */
class Matiere
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $intitule;

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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Matiere
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set idProf
     *
     * @param \Prof $idProf
     *
     * @return Matiere
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

