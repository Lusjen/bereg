<!DOCTYPE html>
<html lang="uk">
<head>
	<meta charset="utf-8">
	<title>Dnieper</title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/main.min.css">
</head>
<body>
<?php include('icons/symbol_sprite.php'); ?>
<header class="header">
	<div class="header__inner">
		<a href="index.php" class="header__logo">
			<img src="img/logo.svg" alt="logo">
		</a>	
		<ul class="menu">
			<li class="menu__item">
				<span class="menu__title">
					Про комплекс
				</span>
				<svg class="svg-arrow">
					<use xlink:href="#icon-arrow"></use>
				</svg>
				<ul class="submenu">
					<li class="submenu__item">
						<a href="about.php" class="submenu__link">Про комплекс</a>
					</li>
					<li class="submenu__item">
						<a href="documentation.php" class="submenu__link">Документи</a>
					</li>
					<li class="submenu__item">
						<a href="characteristics.php" class="submenu__link">Характеристики</a>
					</li>
					<li class="submenu__item">
						<a href="developer.php" class="submenu__link">Забудовник</a>
					</li>
					<li class="submenu__item">
						<a href="infrastructure.php" class="submenu__link">Інфраструктура</a>
					</li>
				</ul>
			</li>
			<li class="menu__item">
				<span class="menu__title">
					<a href="./page-development.php" class="menu__link">планування</a>
				</span>
			</li>
			<li class="menu__item">
				<span class="menu__title">
					Галерея
				</span>
				<svg class="svg-arrow">
					<use xlink:href="#icon-arrow"></use>
				</svg>
				<ul class="submenu">
					<li class="submenu__item">
						<a href="gallery.php" class="submenu__link">Галерея</a>
					</li>
				</ul>
			</li>
			<li class="menu__item">
				<span class="menu__title">
					Ціни
				</span>
				<svg class="svg-arrow">
					<use xlink:href="#icon-arrow"></use>
				</svg>
			</li>
			<li class="menu__item">
				<span class="menu__title">
					<a href="#" class="menu__link">Новини</a>
				</span>
			</li>
			<li class="menu__item">
				<span class="menu__title">
					<a href="contact.php" class="menu__link">Контакти</a>
				</span>
			</li>	
		</ul>
		<div class="header__info">
			<a href="tel:6556" class="tel">
				<!-- <svg class="svg-tel">
					<use xlink:href="#icon-tel"></use>
				</svg> -->
				<svg  width="14px" height=" 22px" viewBox="0 0 14 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M11 0H3C1.34 0 0 1.34 0 3V19C0 20.66 1.34 22 3 22H11C12.66 22 14 20.66 14 19V3C14 1.34 12.66 0 11 0ZM9 20H5V19H9V20ZM12.25 17H1.75V3H12.25V17Z" fill="url(#paint0_linear)"/>
					<defs>
						<linearGradient id="paint0_linear" x1="14" y1="0" x2="0" y2="22" gradientUnits="userSpaceOnUse">
						<stop stop-color="#EB7070"/>
						<stop offset="1" stop-color="#2B5878"/>
						</linearGradient>
					</defs>
				</svg>
				<!-- <span class="tel__link">+38 (044) <span class="bold">91-68-777</span></span> -->
				<span class="tel__link"><span class="bold">6556</span></span>
			</a>
			<div class="lang">
				<div class="lang__list">
					<div class="lang__item">
						<a href="#" class="lang__link">uk</a>
					</div>
					<div class="lang__item">
						<a href="#" class="lang__link">ru</a>
					</div>
					<div class="lang__item">
						<a href="#" class="lang__link">en</a>
					</div>
				</div>
				<a href="#" class="lang__menu-link">
					<svg width="7" height="4" viewBox="0 0 7 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 0L3.5 2.5L6 0L7 0.5L3.5 4L0 0.5L1 0Z" />
					</svg>
				</a>
			</div>
			<div class="menu-btn-mob">
				<div class="line">
					<div class="line__top"></div>
					<div class="line__bottom"></div>	
				</div>
				<p>Меню</p>
			</div>
		</div>
	</div>
</header>

<!-- menu-mob -->
<div class="menu-mob">
	<div class="menu-mob__overlay"></div>
	<div class="menu-mob__content">
		<div class="menu-mob__top">
			<a href="index.php" class="menu-mob__logo">
				<img src="img/logo.svg" alt="logo">
			</a>
			<div class="btn-close">
				<div class="btn-close__text">
					Меню
				</div>
				<div class="btn-close__icon">
					<span></span>
					<span></span>
				</div>		
			</div>	
		</div>
		<ul class="menu-mob__list">
			<li class="menu-mob__item">
				<span class="menu-mob__title">Про комплекс</span>
				<ul class="sub-menu">
	              <li  class="sub-menu__item">
	              	<a class="sub-menu__link" href="./about.php">Про комплекс</a>
	              </li>
	              <li  class="sub-menu__item">
	              	<a class="sub-menu__link" href="documentation.php">Документи</a>
	              </li>
	              <li  class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">Характеристики</a>
	              </li>
	              <li  class="sub-menu__item">
	              	<a class="sub-menu__link" href="./infrastructure.php">Інфраструктура</a>
	              </li>
				</ul>
			</li>
			<li class="menu-mob__item">
				<span class="menu-mob__title">Квартири</span>
				<ul class="sub-menu">
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">Вибір по поверху</a>
	              </li>
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">1-кімнатні</a>
	              </li>
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">2-кімнатні</a>
	              </li>
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">3-кімнатні</a>
	              </li>
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">4-кімнатні</a>
	              </li>
				</ul>
			</li>
			<li class="menu-mob__item">
				<span class="menu-mob__title">Галерея</span>
				<ul class="sub-menu">
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="./gallery.php">Галерея</a>
	              </li>
				</ul>
			</li>
			<li class="menu-mob__item">
				<span class="menu-mob__title">Забудовник</span>
				<ul class="sub-menu">
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">Хід будівництва</a>
	              </li>
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="#">Новини</a>
	              </li>
	              <li class="sub-menu__item">
	              	<a class="sub-menu__link" href="./contact.php">Контакти</a>
	              </li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<!-- menu-mob -->