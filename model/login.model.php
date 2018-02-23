<?php

   /*
    * To change this license header, choose License Headers in Project Properties.
    * To change this template file, choose Tools | Templates
    * and open the template in the editor.
    */

   /**
    * Description of login
    *
    * @author gesfor.rgonzalez
    */
   class login
   {
      
      public function AllDatsClientes()
      {
         
         $dummy = array(
               0=>(object)array(
                  'id' => 1, 
                  'user' => 'jazdian', 
                  'pass' => '1234', 
                  'date' => '2017-02-25'
                                 ),
               1=>(object)array(
                  'id' => 2, 
                  'user' => 'jazdian', 
                  'pass' => '1234', 
                  'date' => '2017-02-25'                  
               )
            
            );
            return $dummy;;
      }
      
      
   }
   