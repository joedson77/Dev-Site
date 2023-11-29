<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css">
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/app.js"></script>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header class="top-bar">
		<div class="container">
			<div class="logo mobile" onclick="goToHomePage()">
				<img src="<?php bloginfo('template_directory'); ?>/assets/img/img-header.png">
			</div>
			<div class="menu-icon" onclick="toggleSidebar()">&#9776;</div>
			<div class="top-bar-items desktop">
				<div class="top-bar-item top-bar-item-dropdown">
					Quem Somos
					<div class="top-bar-item-dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
						<a href="#">Link 4</a>
					</div>
				</div>
				<div class="top-bar-item">Contato</div>
				<div class="top-bar-item">Equipe</div>
				<div class="top-bar-item">Cidades</div>
				<div class="top-bar-item">Assunta bem! Comunicação</div>
			</div>
		</div>
    </header>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-content">
            <div class="close-btn" onclick="toggleSidebar()">X</div>
            <ul>
                <li>
                    <a href="#" onclick="toggleSubmenu('quem-somos')">Quem Somos &#9660;</a> 
                    <ul class="submenu" id="quem-somos-submenu">
                        <li><a href="#">Link 1</a></li>
                        <li><a href="#">Link 2</a></li>
                        <li><a href="#">Link 3</a></li>
                        <li><a href="#">Link 4</a></li>
                    </ul>
                </li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Equipe</a></li>
                <li><a href="#">Cidades</a></li>
                <li><a href="#">Assunta bem! Comunicação</a></li>
                <li>
                    <a href="#" onclick="toggleSubmenu('editorias')">Editorias &#9660;</a> 
                    <ul class="submenu" id="editorias-submenu">
                        <li><a href="#">Oxente</a></li>
                        <li><a href="#">Repente</a></li>
                        <li><a href="#">Mainha</a></li>
                    </ul>
                </li>
                <li><a href="#">Patrocinados</a></li>
            </ul>
        </div>
    </div>

    <div class="header-bottom desktop">
        <div class="logo">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/img-header.png">
		</div>
        <ul class="links">
            <li href="#">Início</li>
            <ul class="edit"> 
                <li> Editorias &#9660; </li>
                <ul class="submenu">
                    <li><a href="#">Oxente</a></li>
                    <li><a href="#">Repente</a></li>
                    <li><a href="#">Mainha</a></li>
                </ul>
            </ul>
            <ul href="#">Patrocinados</ul>
        </ul>
        <div class="search-form">
            <input type="text" placeholder="Pesquisar...">
            <div class="search-icon">&#128269;</div> 
        </div>
    </div>