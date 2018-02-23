<?php

   require_once PATH_CTRLS . '/Login.php';
   
   $_SESSION['logged'] = false;
   /**
    * Description of login
    *
    * @author gesfor.rgonzalez
    */
   class Logg
   {
      
      function __construct()
      {
         
      }
      
      public function ValidateUser()
      {
  
      }

   }

   $logg = new Logg();
   $mylogin = new Login();
   $mylogin->SetSendByAjax(true);
   $mylogin->SetSendActionFile(PATH_CLLER . '/login.controller.php');
   $mylogin->SetPathLogo("../oa10/assets/img/logoMicro.png");
   $mylogin->setTitle("Inicio de sesión");
   
   require_once PATH_VIEW . '/login/login.php';
      