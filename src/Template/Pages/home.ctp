<div class="row">
   <div class="col-md-4">
      <div class="card comp-card">
         <div class="card-body">
            <div class="row align-items-center">
               <div class="col">
                  <h3 class="f-w-700">Novo Cliente</h3>
               </div>
               <div class="col-auto">
                  <a href="<?= $this->Url->build('/clientes/add', true);?>" class="link">
                  <i class="fas fa-user-plus bg-c-green"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-4">
      <div class="card comp-card">
         <div class="card-body">
            <div class="row align-items-center">
               <div class="col">
                  <h3 class="f-w-700">Listar Clientes</h3>
               </div>
               <div class="col-auto">
                  <a href="<?= $this->Url->build('/clientes', true);?>" class="link">
                  <i class="fas fa-list-ul bg-c-blue"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card comp-card">
      <div class="card-body">
         <div class="row align-items-center">
            <div class="col">
               <h3 class="f-w-700">Análise dos Clientes</h3>
            </div>
            <div class="col-auto">
               <a href="<?= $this->Url->build('/clientes/analise', true);?>" class="link">
               <i class="fas fa-chart-bar bg-c-yellow"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
