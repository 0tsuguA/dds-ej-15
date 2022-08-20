<?php
class Documento
{
    private $id;
    private $numero;
    private $habilitado;
    private $tipoDocumento;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getHabilitado()
    {
        return $this->habilitado;
    }

    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;
    }

    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
    }
}
