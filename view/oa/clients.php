

   <div class="container" style="margin-top: 25px;">
        <div class="row">
            <div class="col s12 l3"><button data-target="modal1" class="btn modal-trigger">Agregar nuevo Cliente</button></div>         
        </div>
     
        <div class="row">
           <?php echo $cliente->CreateTable(); ?>
        </div>
   </div>

   <!-- Modal Structure -->
  
   <div id="modal1" class="modal modal-fixed-footer">
      
      <div class="modal-content">
         <h4>Agregar un nuevo cliente</h4>
         <div class="row">
             <?php echo $cliente->FormCaptura(); ?>
         </div>
      </div>
      
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      </div>
      
   </div>

