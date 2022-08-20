<?php
class ObraSocial
{
    private $id;
    private $razonSocial;
    private $cuit;
    private $sitioWeb;
    private $telefono;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;
    }


    public function getCuit()
    {
        return $this->cuit;
    }

    public function setCuit($cuit)
    {
        $this->cuit = $cuit;
    }

    public function getSitioWeb()
    {
        return $this->sitioWeb;
    }

    public function setSitioWeb($sitioWeb)
    {
        $this->sitioWeb = $sitioWeb;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
}
