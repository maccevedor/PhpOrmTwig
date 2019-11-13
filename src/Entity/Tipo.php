<?php

/**
 * @Entity @Table(name="tipo")
 */
class Tipo
{
    /**
     * @Id @GeneratedValue @Column(type="integer")
     * @var int
     **/
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $nombre;

    /**
     * @Column(type="string")
     * @var string
     **/
    protected $code;

    /**
     * @Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $fecha;

    /**
     * @Column(type="string", length=50, nullable=true)
     * @var string
     */

    private $hash;

    /**
     * @var int
     * @Column(type="integer", length=1, nullable=true)
     */

    private $estado = 1;


    function __construct()
    {
        $this->hash = md5(time());
        $this->fecha =  new \DateTime('now');
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
     * Set nombre
     *
     * @param string $nombre
     * @return Tipo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Tipo
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Tipo
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return Tipo
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Tipo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
