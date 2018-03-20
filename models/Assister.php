<?php



/**
 * Assister
 */
class Assister
{
    /**
     * @var int
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note.
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
     * Get note.
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set idEmploye.
     *
     * @param \Employe|null $idEmploye
     *
     * @return Assister
     */
    public function setIdEmploye(\Employe $idEmploye = null)
    {
        $this->idEmploye = $idEmploye;

        return $this;
    }

    /**
     * Get idEmploye.
     *
     * @return \Employe|null
     */
    public function getIdEmploye()
    {
        return $this->idEmploye;
    }

    /**
     * Set idSession.
     *
     * @param \Session|null $idSession
     *
     * @return Assister
     */
    public function setIdSession(\Session $idSession = null)
    {
        $this->idSession = $idSession;

        return $this;
    }

    /**
     * Get idSession.
     *
     * @return \Session|null
     */
    public function getIdSession()
    {
        return $this->idSession;
    }
}
