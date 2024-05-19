<?php
namespace cliente;

class Cliente
{
    private $documento;
    private $nombre;
    private $apellido;
    private $correoElectronico;
    private $telefono;
    private $direccion;

    public function getDocumento()
    {
        return $this->documento;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDocumento($value)
    {
        $this->documento = $value;
    }
    public function setApellido($value)
    {
        $this->apellido = $value;
    }
    public function setNombre($value)
    {
        $this->nombre = $value;
    }
    public function setCorreoElectronico($value)
    {
        $this->correoElectronico = $value;
    }
    public function setTelefono($value)
    {
        $this->telefono = $value;
    }
    public function setDireccion($value)
    {
        $this->direccion = $value;
    }
    
}
?>