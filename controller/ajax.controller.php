<?php

# Constantes del  Sistema...
require_once '../classes/config.php';

require_once PATH_MODEL . '/clientes.model.php';

/**
 * Description of ajax
 *
 * @author jazzd
 */
class ajax {
    
   private $id = '';
    private $name = '';
    private $apaterno = '';
    private $amaterno = '';
    private $callenum = '';
    private $direction = '';
    private $telefono = '';
    private $sexo = '';

    public function SetId($id_) {
        $this->id = $id_;
    }
    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Set the value of amaterno
     *
     * @return  self
     */
    public function setAmaterno($amaterno)
    {
        $this->amaterno = $amaterno;

        return $this;
    }

    /**
     * Set the value of apaterno
     *
     * @return  self
     */
    public function setApaterno($apaterno)
    {
        $this->apaterno = $apaterno;

        return $this;
    }

    /**
     * Set the value of callenum
     *
     * @return  self
     */
    public function setCallenum($callenum)
    {
        $this->callenum = $callenum;

        return $this;
    }

    /**
     * Set the value of direccion
     *
     * @return  self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }    





    // Datos regresados por AJAX
    public function GetDat() {
        $dats = new ClientesM();
        $dats->SetId($this->id);
        $obj = $dats->DatCliente();
        //$jobj = json_encode($obj);
        return $obj;
    }

    public function SaveData()
    {
        $save = new ClientesM();
        $save->SetId($this->id);
        $save->setName($this->name);
        $save->setApaterno($this->apaterno);
        $save->setAmaterno($this->amaterno);
        $save->setCallenum($this->callenum);
        $save->setDireccion($this->direction);
        $save->setTelefono($this->telefono);
        $save->setSexo($this->sexo);

        $obj = $save->NewClient();
        return $obj;

    }
}


// SE RECUPERAN LOS DATOS SOLICITADOS POR AJAX =================================

$ajx = new ajax();

if (isset($_POST['MyJson'])) {
    
    $MiJson = array();
    $MiJson = $_POST['MyJson'];

    foreach ($MiJson as $key => $value) {
        if ($key === 'vars') {
            $ArrayVars = $value;
        }
    }

    if ($ArrayVars['NomFunction'] == 'GetClienteJson') {
        $ajx->SetId($ArrayVars['id']);
        $dats = $ajx->GetDat();
        $jdats = json_encode($dats);
        echo $jdats;
    }
    else if ($ArrayVars['NomFunction'] == 'SaveNewClient') {
        
        $ajx->SetId($ArrayVars['id']);
        $ajx->setName($ArrayVars['name']);
        $ajx->setApaterno($ArrayVars['apaterno']);
        $ajx->setAmaterno($ArrayVars['amaterno']);
        $ajx->setCallenum($ArrayVars['callenum']);
        $ajx->setDireccion($ArrayVars['direction']);
        $ajx->setTelefono($ArrayVars['telefono']);
        $ajx->setSexo($ArrayVars['sexo']);

        $dats = $ajx->SaveData();
        $jdats = json_encode($dats);
        echo $jdats;
    }
    

}

// =============================================================================