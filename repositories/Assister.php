<?php



/**
 * Assister
 */
class Assister
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $note;

    /**
     * @var \Employe
     */
    private $idEmploye;

    /**
     * @var \Session
     */
    private $idSession;


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
     * Set note
     *
     * @param float $note
     *
     * @return Assister
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idEmploye
     *
     * @param \Employe $idEmploye
     *
     * @return Assister
     */
    public function setIdEmploye(\Employe $idEmploye = null)
    {
        $this->idEmploye = $idEmploye;

        return $this;
    }

    /**
     * Get idEmploye
     *
     * @return \Employe
     */
    public function getIdEmploye()
    {
        return $this->idEmploye;
    }

    /**
     * Set idSession
     *
     * @param \Session $idSession
     *
     * @return Assister
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
}
