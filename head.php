<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>SIGESPE</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	</head>
<body onload="startTime()">
<div class="row top">
	<div class="col col-md-2 p-2 ml-3">
		<img src="img/logo.png" class="img-fluid logo">
	</div>
	<div class="col col-md-3">
	</div>
	<div class="col col-md-6 text-right ml-4">
		<div id="data_cavecalho">
			<script language="JavaScript">
			  document.write("<font color='#FFFFFF' face='arial'>")
			  	var mydate=new Date()
			  	var year=mydate.getYear()
				  if (year<2000)
					  year += (year < 1900) ? 1900 : 0
					  var day=mydate.getDay()
					  var month=mydate.getMonth()
					  var daym=mydate.getDate()
				  if (daym<10)
					  daym="0"+daym
					  var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado")
					  var montharray=new Array(" de Janeiro de "," de Fevereiro de "," de Março de ","de Abril de ","de Maio de ","de Junho de","de Julho de ","de Agosto de ","de Setembro de "," de Outubro de "," de Novembro de "," de Dezembro de ")
					  document.write("   "+dayarray[day]+", "+daym+" "+montharray[month]+year+" ")
					  document.write("</b></i></font>")
			  </script> -
		</div>
		<div id="txt"></div>
		<div id="nome">Boa tarde, Administrador do Sistema </div>
	</div>
</div>
<ul class="nav nav-tabs">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CADASTRAR</a>
    <div class="dropdown-menu">
      	<a href="#" class="dropdown-item">Pedidos</a>
		<a href="#" class="dropdown-item">Fornecedor</a>
		<a href="#" class="dropdown-item">Lojas</a>
		<a href="#" class="dropdown-item">Produtos</a>
		<a href="#" class="dropdown-item">Cotas</a>
		<a href="#" class="dropdown-item">Condições de Pagamento</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ADMINISTRAR</a>
    <div class="dropdown-menu">
      	<a href="#" class="dropdown-item">Pedidos</a>
		<a href="#" class="dropdown-item">Fornecedor</a>
		<a href="#" class="dropdown-item">Lojas</a>
		<a href="#" class="dropdown-item">Produtos</a>
		<a href="#" class="dropdown-item">Cotas</a>
		<a href="#" class="dropdown-item">Condições de Pagamento</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">RELATÓRIOS</a>
    <div class="dropdown-menu">
      	<a href="#" class="dropdown-item">Pedidos</a>
		<a href="#" class="dropdown-item">Fornecedor</a>
		<a href="#" class="dropdown-item">Lojas</a>
		<a href="#" class="dropdown-item">Produtos</a>
		<a href="#" class="dropdown-item">Cotas</a>
		<a href="#" class="dropdown-item">Condições de Pagamento</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">USUÁRIOS</a>
    <div class="dropdown-menu">
      	<a href="#" class="dropdown-item">Dados</a>
		<a href="#" class="dropdown-item">Alterar Senha</a>
		<a href="#" class="dropdown-item">Cadastrar Usuário</a>
		<a href="#" class="dropdown-item">Usuários Cadastrados</a>
		<a href="#" class="dropdown-item">Fazer BKP do Banco de Dados</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#">Logoff</a>
  </li>
</ul>

