<?php



/**
 * Cours
 */
class Cours
{
    /**
     * @var int
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set intitule.
     *
     * @param string $intitule
     *
     * @return Cours
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule.
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set idProf.
     *
     * @param \Prof|null $idProf
     *
     * @return Cours
     */
    public function setIdProf(\Prof $idProf = null)
    {
        $this->idProf = $idProf;

        return $this;
    }

    /**
     * Get idProf.
     *
     * @return \Prof|null
     */
    public function getIdProf()
    {
        return $this->idProf;
    }
}
