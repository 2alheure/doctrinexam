<?php



/**
 * Salle
 */
class Salle
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $numero;

    /**
     * @var string
     */
    private $lieu;


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
     * Set numero.
     *
     * @param int $numero
     *
     * @return Salle
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero.
     *
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set lieu.
     *
     * @param string $lieu
     *
     * @return Salle
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu.
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }
}
