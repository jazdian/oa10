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

    public function SetId($id_) {
        $this->id = $id_;
    }    
    // Datos regresados por AJAX
    public function GetDat() {
        $dats = new ClientesM();
        $dats->SetId($this->id);
        $obj = $dats->DatCliente();
        //$jobj = json_encode($obj);
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
}

// =============================================================================