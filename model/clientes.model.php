<?php
    
    require_once PATH_CTRLS . '/Connection.php';
    require_once PATH_CTRLS . '/DataAccess.php';

   /**
    * Description of clients
    *
    * @author gesfor.rgonzalez
    */
   class ClientesM
   {
        private $id = '';
       
        public function SetId($id_)
        {
           $this->id = $id_;
        }
       
        public function Connection()
        {
             $cn = new Connection(HOST, DATABASE, USER, PASSWORD);
             $conn = $cn->SimpleConnectionPDO();
             return $conn['obj_'];
        }

        public function AllDatsClientes()
        {
            $JsonData = '{'
              . '"params":{":1":"1"},'
              . '"vars":{"NumFuncion":"0","QueryString":"SELECT `id`, `name`, `apat`, `amat`, `street`, `direction`, `telephone`, `sex`, `date_row` FROM `clients` WHERE 1 = ?"},'
              . '"logs":{"usuario":"Rene","fecha":""}'
              . '}';
            $exc = new DataAccess();
            $exc->SetConn($this->Connection());
            $exc->SetJsonParams(json_decode($JsonData));

            $dats = $exc->ExecStoredProcedure();
            return $dats['obj_'];
        }
        
       public function DatCliente()
        {
            $JsonData = '{'
              . '"params":{":id":"' . $this->id . '"},'
              . '"vars":{"NumFuncion":"0","QueryString":"SELECT `id`, `name`, `apat`, `amat`, `street`, `direction`, `telephone`, `sex`, `date_row` FROM `clients` WHERE id = ?"},'
              . '"logs":{"usuario":"Rene","fecha":""}'
              . '}';
            $exc = new DataAccess();
            $exc->SetConn($this->Connection());
            $exc->SetJsonParams(json_decode($JsonData));

            $dats = $exc->ExecStoredProcedure();
            return $dats;
        }
        
        public function NewClient()
        {
            $JsonData = '{'
              . '"params":{":name":"JONH", ":apat":"SMITH", ":amat":"JOE", ":street":"CALLE MIRADOR CHAPULTEPEC NO. 2", ":direction":"LAS AGUILAS, MIGUEL HIDALGO, CDMX", ":telephone":"5544332211", ":sex":"H"},'
              . '"vars":{"NumFuncion":"0","QueryString":"INSERT INTO clients (name, apat, amat, street, direction, telephone, sex) VALUES (?, ?, ?, ?, ?, ?, ?);"},'
              . '"logs":{"usuario":"Rene","fecha":""}'
              . '}';
            $exc = new DataAccess();
            $exc->SetConn($this->Connection());
            $exc->SetJsonParams(json_decode($JsonData));

            $dats = $exc->ExecStoredProcedure();
            return $dats['obj_'];

        }
              
      
   }
   