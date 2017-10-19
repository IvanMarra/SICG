<?php require_once "config/conecta.class.php"; ?>
<!doctype html>
<html lang="pt-br">
<title>Sistema de Gestão - IPHAN - MG</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<link rel="stylesheet" href="boot_css/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="boot_css/css/normalize.css" type="text/css" media="all">
<link rel="shortcut icon" href="images/x.ico" type="image/x-icon">
<link rel="icon" href="images/x.ico" type="image/x-icon">
<body onLoad="Load()">

			<script type="text/javascript" src="scripts/jquery_2.1.3.js"></script>
		<script src="boot_css/js/bootstrap.min.js" type="text/javascript"></script>
<!--		<script type="text/javascript" src="scripts/requisicao.js"></script> -->


<script type="text/javascript">
k
			function revelaId(Id){
	
					$('#'+Id).slideDown(2000);	
	
		}
				function ocultaId(Id){
	
					$('#'+Id).slideUp(2000);
		
				}	
				
						/*
					function mostrar(){
						$('#principal').slideUp('slow').css('display','none');
							$('#ver_Chamados').fadeIn('slow').css('display','block');
							
										}
										*/
		
		
		
					</script>
	
<div class="page-header"><h1><a href="index_beta.php" target="_self" style="text-decoration:none" onClick="Load();stopAtualizacao();">Gerenciamento</a> & Gestão -  Ti<kbd>IPHAN-MG</kbd></h1></div> <!-- Esta div fechou o page-header -->
<nav class="navbar navbar-default">
  <div class="container-fluid"> 

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Chamados <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onClick="revelaId('abrir_Chamados'); ocultaId('principal'); ocultaId('ver_Chamados');ocultaId('Chamados');stopLoad();stopAtualizacao();ocultaId('Statisticas');ocultaId('pesquisa');">Abrir</a></li>
            <li><a href="#" onClick="revelaId('Chamados'); ocultaId('abrir_Chamados'); ocultaId('principal'); stopLoad(); Atualizar();ocultaId('Statisticas');ocultaId('pesquisa');">Ver</a></li>
            <li><a href="#" onClick="revelaId('Statisticas'); ocultaId('abrir_Chamados'); ocultaId('principal'); stopLoad(); stopAtualizacao(); ocultaId('Chamados');ocultaId('pesquisa');">Estatísticas</a></li>
                   <li role="separator" class="divider"></li>
<li><a href="#" onClick="revelaId('pesquisa');ocultaId('abrir_Chamados');ocultaId('principal');ocultaId('Statisticas');ocultaId('Chamados');stopLoad();
stopAtualizacao();">Pesquisar</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventários <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" onClick="revelaId('principal');">Abrir</a></li>
            <li><a href="#" onClick="">Consultar</a></li>
            <li><a href="#" onClick="">Fazer</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" onClick="">Pesquisar</a></li>
          </ul>
        </li>
      </ul>
			    </div>	<!-- Fechou o container  -->
		    </div> 	  <!-- Fechou o NavHeader -->
    	</div> <!-- Fechou o Collapse navbar-collapse -->
	  </nav>
      
                                                                  

<div class="container-fluid" data-aria="container_Principal">

<div id="principal" class="col-lg-12" style="display:block">

<script type="text/javascript">

$(document).ready(function(e) {
    $(window).load(function(){
	
		$('#principal').html("Carregando os dados, aguarde um instante por favor...")
		
	})
})

	function Carrega(){
		
		$('#principal').load("config/tabela_Principal.php");	
		
	}
	
			var Carregamento;
			
				function Load(){
					
				Carregamento = window.setInterval(Carrega,3000);	
					
				}
				
					function stopLoad(){
						
						window.clearInterval(Carregamento);	
						
					}
					
							
	
</script>


</div> <!-- Fecha a div principal -->

</div>	<!-- Fecha a Div Container_2 -->

<div id="abrir_Chamados" class="col-lg-12" style="display:none">
<?php 

		//Abrindo Conexão.

	$obj = new conecta;
	$link = $obj->conexao();

		$sql = "select * from localizacao order by Localizacao ASC";
			mysqli_query($link,$sql);
			$busca = mysqli_query($link,$sql);
			//if(mysqli_num_rows($busca)>0){
			//echo mysqli_num_rows($busca);	
						//}
?>



<script type="text/javascript">
// Código para atualizar a tabela chamados.
$(document).ready(function() {

   $('#formulario').submit(function(){
	   
	   
	var dados = $(this).serialize();
	
		$.ajax({
			type:"POST",
			url:"config/grava_form_chamado.php",
			data: dados,
			success: function(data){
				
				alert(data)

				}				
				
		})
		
		
		$(function(){
				
					$('#Localizacao_').load("config/select.php")
					$('#Data_Solicitacao').val("")
					$('#Usuario').val("")
					$('#Problema_Relatado').val("")
					$('#Localizacao_').focus()
					
				})
				
		   	return false
				
					//Este se refere a ultima função -> que limpa os campos.

   })
		})
		
		
		
$(document).ready(function() {
					
   $('#form_Usuario').submit(function(){
	   
		var dados = $(this).serialize();
	
		$.ajax({
			type:"POST",
			url:"config/grava_form_Usuario.php",
			data: dados,
			success: function(data){
				
				alert(data);   

					$(function(){
					
					$('.user').load("config/refresh_Usuario.php")
					
					
				})

			}
		})
		
			$(document).ready(function() {
                
				$('#Usuario_').val("");
				$('#Usuario_').focus();
				
											
            });
			
			 return false;   
					
					   }); 
	   
	 });
		
		
		
			
</script>

<form name="formulario_Principal" class="form-group" accept-charset="utf-8" action="#" method="post" enctype="multipart/form-data" id="formulario">
<div class="row col-lg-2">

<label for="Localizacao_">Localização</label>
<select name="Localizacao" required id="Localizacao_" autofocus class="form-control">
<option value="">[ Escolha ]</option>

<?php 
while($houver_localizacao = mysqli_fetch_array($busca)){
?>

<option value="<?php echo $Localizacao = $houver_localizacao['Localizacao']; ?>"><?php echo $Localizacao = $houver_localizacao['Localizacao']; ?></option>

<?php  } ?>

</select>

</div>
<div class="row col-lg-1">
<label>&nbsp</label><br />

<button type="button" class="btn btn-default glyphicon glyphicon-plus" data-toggle="modal" data-target="#ml"></button></div> <!-- ml é modal localizacao -->

<div class="row col-lg-2">
<label for="Data_Solicitacao">Data da Solicitação</label>
<input type="datetime-local" required class="form-control" name="Data_Solicitacao" id="Data_Solicitacao" />
</div>

<?php 

$solicitador = "select * from usuario order by Usuario ASC ";
mysqli_query($link,$solicitador);
$bS = mysqli_query($link,$solicitador);
if(mysqli_num_rows($bS)>0){
	
}
?>

<div class="row col-lg-1"></div>
<div class="row col-lg-2">

<label for="Usuario">Solicitante</label>
<select name="Usuario" required id="Usuario" class="form-control">
<option value=""> Usuário </option>
<?php while($busca_Usuario = mysqli_fetch_array($bS)){ ?>
<option value="<?php echo $Usuario = $busca_Usuario['Usuario'];  ?>"><?php echo $Usuario = $busca_Usuario['Usuario'];  ?></option>
<?php } ?>
</select>
</div>
<div class="row col-lg-1"> 
<label>&nbsp;</label><br />
<button type="button" class="btn btn-default glyphicon glyphicon-plus" data-toggle="modal" data-target="#modal_usuario"></button></div> <!-- ms é modal solicitante -->

<div class="row col-lg-12"></div>
	<div class="row col-lg-6">
    
    <label for="Problema_Relatado">Problema Relatado</label>
    <br>
    <textarea name="Problema" id="Problema_Relatado" class="form-control" required wrap="soft" rows="5"></textarea>
    
    </div>
    
    <div class="row col-lg-12"></div><!-- Aqui dei espaço de uma linha inteira -->
    <div class="row col-lg-2">
    
    <button type="submit" class="btn btn-default btn-md" >Gravar</button>
    </div>

</form>		<!-- 									Aqui termina O formulário Principal 						-->


</div>

<script type="text/javascript">				<!-- Código para formulário 2 o de Localização -->

$(document).ready(function() {
   $('#form_Localizacao').submit(function(){
	   
	   
	var dados = $(this).serialize();
	
		$.ajax({
			type:"POST",
			url:"bin/grava_Localizacao.php",
			data: dados,
			success: function(data){
				
				alert(data);   

					$(function(){
					
					$('.area').load("config/refresh.php")
					
					
				})

			}
		})
		
			$(document).ready(function() {
                
				$('#Localizacao').val("");
				$('#Localizacao').focus();
				
											
            });
			
			 return false;   
					
					   }); 
	   
	 });


</script>

				<!--  Daqui pra frente lanço as modais // A primeira se refere a Abertura de Chamados Opção Localização -->
						<!--  Esse Script serve para colocar o input Localização com AutoFocus -->
                        
                <script type="text/javascript">			
	
	  				$(document).ready(function(e) {
					 
					 	 $('#ml').on('shown.bs.modal', function () {
		  						
								$('#Localizacao').focus()
			
										})
	        							        });
</script>
																			<!-- Área dos Modais -->
<!-- Primeiro Modal Adicionar Localização -->

<div class="modal fade" id="ml">

<div class="modal-dialog modal-md">

<div class="modal-content">

<!-- Cabeçalho -->
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">

<span>&times;</span></button>

<label>Preencha com nomes de Localização e clique em Gravar</label>

</div>


<div class="modal-body">
<form name="form_Localizacao" action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" id="form_Localizacao">

<input type="text" name="Localizacao" id="Localizacao" class="form-control" autofocus placeholder="Digite a Localização por favor" required /> 
<br />
<hr>
<div class="area">
<script type="text/javascript">

$(function(){
	
		$('.area').load("config/refresh.php")
					<!-- Preciso corrigir o autofocus, pois apos carregar atualização não volta o foco no campo input -->
})
</script>
</div>
<!-- Localizacao = Form Modal - [ Localizacao_ = Formulario_Principal ] -->
<br />
</hr>
<input type="submit" value="Gravar" class="btn btn-primary">

</form>

<script type="text/javascript">				<!-- Esse script atualiza a div Localização quando o modal localização fecha -->

		
	$('#ml').on('hidden.bs.modal', function () {
		
					
			$('#Localizacao_').load("config/select.php")
				

			});
	

</script>
</div>
</div>
</div>
</div>
</div>
					<!--  Daqui pra baixo estou tratando da segunda modal, a de usuario. -->
                <script type="text/javascript">			
	
	  				$(document).ready(function(e) {
					 
					 	 $('#modal_usuario').on('shown.bs.modal', function () {
		  						
								$('#Usuario_').focus()
			
										})
	        							        });
																		</script>

<div class="modal fade" id="modal_usuario">

<div class="modal-dialog modal-md" > 

<div class="modal-content">

<!-- Cabeçalho -->
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal">

<span>&times;</span></button>

<label>Digite o nome do Usuario(a) </label>

</div>


<div class="modal-body">
<form name="form_Usuario" action="" method="post" enctype="multipart/form-data" accept-charset="utf-8" id="form_Usuario">

<input type="text" name="Usuario_" id="Usuario_" class="form-control" autofocus placeholder="Digite o nome de Usuario(a) por favor" required /> 
<br />
<hr>
<div class="user">

<script type="text/javascript">

$(function(){
	
	$('.user').load("config/refresh_Usuario.php")
	
	
});


</script>


</div>



<br />
</hr>
<input type="submit" value="Gravar" class="btn btn-primary">

</form>
<script type="text/javascript">				<!-- Esse script atualiza a div usuario quando o modal localização fecha -->

	$('#modal_usuario').on('hidden.bs.modal', function () {
							
		$('#Usuario').load("config/select_Usuario.php")

			});


</script>

  </div>
  	</div>
    	</div>
        	</div>
            	<div id="Chamados" style="display:none" class="container-fluid">
                
                <script type="text/javascript">

	$(document).ready(function(e) {
        $(window).load(function(){
			
			$('#Chamados').html("Carregando os dados, Aguarde um instante por favor...")
				})
		
    })

				function Atualiza(){
				
					$('#Chamados').load("bin/ver_Chamados.php");
					
					
				}

					var Atualiza_Chamados;

						function Atualizar(){
						
							Atualiza_Chamados = window.setInterval(Atualiza,3000);
					}
						function stopAtualizacao(){
						
							window.clearInterval(Atualiza_Chamados);
							
						}
					

	
						
				
				</script>                
                </div>
                
                <div id="Statisticas" style="display:none">

                <script type="text/javascript">
				
				$(document).ready(function(e) {
                    $(window).load(function(){
					
						$('#Statisticas').html("Atualizando, aguarde por favor...")	
						
							})
                })
						
								$(function(){
					
                $('#Statisticas').load("bin/numeros.php");
				
				})
				
					
				
				
               	 </script>
                </div>
                
                <div id="pesquisa" style="display:none">
                <script type="text/javascript">
				$(document).ready(function(e) {
                    $('#pesquisa').html("Carregando os dados, aguarde um instante por favor")
                });
					$(function(){
						
						$('#pesquisa').load("bin/buscar.php");
						
						
					})
							$(function(){
								$('#input_nome').focus();
							})
				
                
                </script>
                
                
                </div>
													                         


</body>
</html>