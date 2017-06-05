 <?php
 require_once('config/config.php');
 ?>
<!DOCTYPE html>
<html>

	<head>
	<meta charset="utf-8">
	<title><?=(isset($tittle))?$title:"Название страницы"?></title>
	<meta name="description" content="<?=(isset($content))?$content:"Название сайта"?>">
	<meta name ="heywords" content="1,2,3">
	<link type="text/css" rel ="stylesheet"	href="media/bootstrap/css/bootstrap.min.css"/>
	<link type="text/css" rel ="stylesheet"	href="media/css/styles.css"/>
	<body>
		<div class="header">
			<h1 class="logotext">Nova</h1>
			<img class="logo" src="media/img/logo3.png"></div>	
	</head>
		<div  style="stylesheet"/>
			<nav class="menu">
				<a href="/">Главная</a>
				<a href="#">Новости</a>
				<a href="#">Галерея</a>
				<a href="index.php?url=about">О компании</a>
				<a href="index.php?url=contacts">Контакты</a>
			</nav>
		<div class="boot">
			<div class="col-md-2">
			<a href="#" class="btn btn-success btn-block">Програмирование</a>
			<a href="#" class="btn btn-default btn-block"> Оптимизация</a>
			<a href="#" class="btn btn-primary btn-block"> Дизайн</a>
			<a href="#" class="btn btn-info btn-block"> Связь</a>
			<a href="#" class="btn btn-danger btn-block"> Наши работы</a>
			</div>
			<div class="col-md-8 myclass">
