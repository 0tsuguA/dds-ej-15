<?php
class Persona
{
    private $id;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $obraSocial;
    private $listDocumentos = array();

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getObraSocial()
    {
        return $this->obraSocial;
    }

    public function setObraSocial($obraSocial)
    {
        $this->obraSocial = $obraSocial;
    }

    public function getListDocumentos()
    {
        return $this->listDocumentos;
    }
    public function setDocumento($ListDocumentos)
    {
        $this->listDocumentos[] = $ListDocumentos;
    }

    public function MostrarDatos()
    {
        echo 'Nombre de la persona: ' . $this->getNombre() . '<br>';
        echo 'Apellido de la persona: ' . $this->getApellido() . '<br>';
        echo 'Fecha de nacimiento: ' . $this->getFechaNacimiento() . '<hr>';
        echo 'Razon social: ' . $this->getObraSocial()->getRazonSocial() . '<br>';
        echo 'Sitio web de la obra social: ' . $this->getObraSocial()->getSitioWeb() . '<hr>';
        foreach ($this->getListDocumentos() as $d) {
            echo 'Tipo de documento: ' . $d->getTipoDocumento()->getDescripcion() . '<br>';
            echo 'Numero de documento: ' . $d->getNumero() . '<hr>';
        }
    }
}
