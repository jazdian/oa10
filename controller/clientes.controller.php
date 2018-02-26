<?php

require_once PATH_MODEL . '/clientes.model.php';   
   
require_once PATH_CTRLS . '/DataAccess.php';
require_once PATH_CTRLS . '/Connection.php';
require_once PATH_CTRLS . '/DataTable.php';

require_once PATH_CTRLS . '/Form.php';
require_once PATH_CTRLS . '/TextBox.php';
require_once PATH_CTRLS . '/Button.php';

class ClientesUI
{

   private function HTMLWrapBT()
   {   
    $htmlwrap1 = <<<EOF
  <div class="form-group">
    <label for="_ID_">_LNAME_</label>
    _INPUT_
  </div>	
EOF;
      return $htmlwrap1;
   }

   private function HTMLWrapML()
   {
       $htmlwrap = <<<EOF
 <div class="input-field col s12">
    _INPUT_
    <label for=""_ID_">_LNAME_</label>
 </div>
EOF;
       return $htmlwrap;
   }

   public function FormCaptura()
   {
      $fmod = new Form();
      $fmod->SetID('GerenciaModal');
      $str_form = $fmod->form(
                $this->InputId(),
                $this->InputName(),
                $this->InputAPaterno(),
                $this->InputAMaterno(),
                $this->InputCalleNum(),
                $this->InputDireccion(),
                $this->InputTelefono(),
                $this->InputSexo(),
                $this->InputSalvar()
              );
      return $str_form;
   }

   private function InputId()
   {
      $tb = new TextBox();
      $tb->SetID("Id");
      $tb->SetType("text");
      $tb->SetName("IdGerencia");
      $tb->SetLabelName("ID Cliente");
      $tb->SetDisabled(true);
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   } 

   private function InputName()
   {
      $tb = new TextBox();
      $tb->SetID("name");
      $tb->SetType("text");
      $tb->SetName("name");
      $tb->SetLabelName("Nombre Cliente");
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   }

   private function InputAPaterno()
   {
      $tb = new TextBox();
      $tb->SetID("apaterno");
      $tb->SetType("text");
      $tb->SetName("apaterno");
      $tb->SetLabelName("Apellido Paterno");
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   }    

   private function InputAMaterno()
   {
      $tb = new TextBox();
      $tb->SetID("amaterno");
      $tb->SetType("text");
      $tb->SetName("amaterno");
      $tb->SetLabelName("Apellido Materno");
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   }

   private function InputCalleNum()
   {
      $tb = new TextBox();
      $tb->SetID("callenum");
      $tb->SetType("text");
      $tb->SetName("callenum");
      $tb->SetLabelName("Calle y número");
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   }

   private function InputDireccion()
   {
      $tb = new TextBox();
      $tb->SetID("direccion");
      $tb->SetType("text");
      $tb->SetName("direccion");
      $tb->SetLabelName("Colonia, municipio y ciudad");
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   }   

   private function InputTelefono()
   {
      $tb = new TextBox();
      $tb->SetID("telefono");
      $tb->SetType("text");
      $tb->SetName("telefono");
      $tb->SetLabelName("Telefono o celular");
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   } 

   private function InputSexo()
   {
      $tb = new TextBox();
      $tb->SetID("sexo");
      $tb->SetType("text");
      $tb->SetName("sexo");
      $tb->SetLabelName("Hombre/Mujer");
      $tb->SetWrapHtmlCode($this->HTMLWrapML());
      return $tb->TextBox();
   }

   private function InputSalvar()
   {
      $btn = new Button();
      $btn->SetType('button');
      $btn->SetID('BtnGuardar');
      $btn->SetClass('btn waves-effect waves-light blue darken-4');
      $btn->SetText('Guardar Datos');
      $btn->SetOnclick('GuardarDatos();');      
      return $btn->Button();
   }
   
   private function GetAllDats()
   {
      $dats = new ClientesM();
      $obj = $dats->AllDatsClientes();
      //$jobj = json_encode($obj);
      return $obj;
   }
   
   public function CreateTable()
   {
      $tbl = new DataTable();
      $tbl->SetID("tclietes");
      $tbl->SetDataSource($this->GetAllDats());
      $tbl->SetClass("striped");
      $tbl->SetBtnEdit(array("type"=>"button", "name"=>"Editar", "show"=>true, "class"=>"waves-effect waves-light btn-flat"));      
      return $tbl->CreateDT();
   }


}


class ClientesDat
{
    
}


$cliente = new ClientesUI();

require_once PATH_VIEW . '/oa/clients.php';
