<h3 class="text-center">Análise dos Clientes</h3>
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?= $this->Url->build('/', true);?>">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Análise dos Cliente</li>
   </ol>
</nav>
<blockquote class="blockquote mb-0">
   <p>Análise dos dados contendo os clientes cadastrados no <b>mês</b> atual e os clientes cadastrados no <b>dia</b></p>
   <footer class="blockquote-footer"><cite title="Source Title">Requisito</cite></footer>
</blockquote>
<div class="row">
   <canvas class="my-4" id="myChart" width="800" height="500"></canvas>
</div>
<script>
   var ctx = document.getElementById("myChart");
   var data = new Date();
   var dias = new Array(
     'Domingo','Segunda-Feira','Terça-Feira','Quarta-Feira','Quinta-Feira','Sexta-Feira','Sábado'
   );
   var mes = data.getDate() + '/' + data.getMonth() + '/' + data.getFullYear();

   var myChart = new Chart(ctx, {
     type: 'bar',
     data: {
       labels: ['Mês atual - ' + mes, 'Dia da Semana - ' + dias[data.getDay()]],
       datasets: [{
         label: 'Total - Clientes Cadastrados no Mês',
         lineTension: 0,
         backgroundColor: '#4285F4',
         data: [<?= $registerOfMonth?>]
       },
       {
         label: 'Total - Clientes Cadastrados Hoje',
         lineTension: 0,
         backgroundColor: '#34A853',
         data: [<?= $registerOfDay?>]
       }]
     },
     options: {
       responsive: true,
       scales: {
         yAxes: [{
           ticks: {
             beginAtZero: true
           }
         }]
       }
     }
   });
</script>
