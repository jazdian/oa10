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
        private $name = '';
        private $apaterno = '';
        private $amaterno = '';
        private $callenum = '';
        private $direction = '';
        private $telefono = '';
        private $sexo = '';
       
    public function SetId($id)
    {
        $this->id = $id;
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
              . '"params":{":name":"'.$this->name.'", ":apat":"'.$this->apaterno.'", ":amat":"'.$this->amaterno.'", ":street":"'.$this->callenum.'", ":direction":"'.$this->direccion.'", ":telephone":"'.$this->telefono.'", ":sex":"'.$this->sexo.'"},'
              . '"vars":{"NumFuncion":"insert","QueryString":"INSERT INTO clients (name, apat, amat, street, direction, telephone, sex) VALUES (?, ?, ?, ?, ?, ?, ?);"},'
              . '"logs":{"usuario":"Rene","fecha":""}'
              . '}';
            $exc = new DataAccess();
            $exc->SetConn($this->Connection());
            $exc->SetJsonParams(json_decode($JsonData));

            $dats = $exc->ExecStoredProcedure();
            return $dats['obj_'];

        }
              
      



 
   }
   