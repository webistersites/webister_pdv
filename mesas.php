<?php
	include "conectar_mysql.php";
	include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
	protegePagina();
	include "menu.php";
?>

<script type="text/javascript">
  $(function(){
      $(".target-active").find("[href='mesas.php']").parent().addClass("active");
  });
</script>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Mesas</h1>

          <div class="row">
			  <div class="col-xs-6 col-md-2">
			    <a href="#" class="thumbnail">
			      <img src="_img/table-livre.png" alt="Mesa 01">
			    </a>
			    <h1 class="sub">Mesa 01</h1>
			  </div>
			  	<div class="col-xs-6 col-md-2">
			    <a href="#" class="thumbnail">
			      <img src="_img/table-ocupada.png" alt="Mesa 02">
			    </a>
			    <h1 class="sub">Mesa 02</h1>
			  </div>
			</div>

          </div>

<?php
	include "footer.php";
?>