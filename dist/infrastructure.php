	<?php include('includes/header-page.php'); ?>
	<!-- begin infrastructure -->
	<div class="infrastructure">
		<div class="infrastructure__map infrastructure__block">
			<div id="map" class="main-map"></div>
		</div>
		<div class="infrastructure__content">
			<div class="infrastructure__info">
				<div class="infrastructure__top">
					<h1 class="page-title wow fadeInRight" data-wow-delay="0.2s">
						Розташування
					</h1>
					<ul class="breadcrumbs wow fadeInRight" data-wow-delay="0.2s">
						<li class="breadcrumbs__item">
							<a href="/" class="breadcrumbs__link">Головна</a>
						</li>
						<li class="breadcrumbs__item">
							<span class="">Інфраструктура</span>
						</li>
					</ul>
				</div>
				<div class="infrastructure__bottom">
					<div class="infrastructure__bottom-in js-wow-container">
						<div class="infrastructure__title wow fadeInDown">
							<h2 class="title-md">Умовні позначення</h2>
						</div>
						<div class="infrastructure__description">
							<div class="infrastructure__button" onclick="filterMarkers($(this).attr('data-category'))" data-category="all">
                                <span class="is-desctop">Показати все</span>
                            </div>
							<ul class="infrastructure__list">
								<li onclick="filterMarkers($(this).attr('data-category'))" data-category="main" class="infrastructure__item wow fadeInDown">
								    <span class="infrastructure__img infrastructure__img-main">
								        <img src="img/infrastructure/main.svg" alt="" class="img-main">
								    </span>
								    
								    <span class="infrastructure__sub-title">ЖК “Берег Дніпра”</span>
								</li>
								<li onclick="filterMarkers($(this).attr('data-category'))" data-category="kinder" class="infrastructure__item wow fadeInDown">
								    <span class="infrastructure__img">
								        <img src="img/infrastructure/kinder.svg" alt="">
								    </span>
								    
								    <span class="infrastructure__sub-title">Дитячі садочки</span>
								</li>
								 <li onclick="filterMarkers($(this).attr('data-category'))" data-category="school" class="infrastructure__item wow fadeInDown">
		                            <span class="infrastructure__img">
		                                <img src="img/infrastructure/school.svg" alt="school">
		                            </span>
		                            
		                            <span class="infrastructure__sub-title">Школи</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="univer" class="infrastructure__item wow fadeInDown">
		                            <span class="infrastructure__img">
		                                <img src="img/infrastructure/university.svg" alt="univer">
		                            </span>
		                            
		                            <span class="infrastructure__sub-title">Університети</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="market" class="infrastructure__item  wow fadeInDown">
		                            <span class="infrastructure__img">
		                                <img src="img/infrastructure/market.svg" alt="market">
		                            </span>
		                            
		                            <span class="infrastructure__sub-title">Супермаркети</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="medicine" class="infrastructure__item  wow fadeInDown">
		                            <span class="infrastructure__img">
		                                <img src="img/infrastructure/medicine.svg" alt="medicine">
		                            </span>
		                            
		                            <span class="infrastructure__sub-title">Медицина</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="metro" class="infrastructure__item  wow fadeInDown">
		                            <span class="infrastructure__img">
		                                 <img src="img/infrastructure/metro.svg" alt="metro">
		                            </span>
		                           
		                            <span class="infrastructure__sub-title">Метро</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="cafe" class="infrastructure__item wow fadeInDown">
		                            <span class="infrastructure__img">
		                                 <img src="img/infrastructure/cafe.svg" alt="cafe">
		                            </span>
		                           
		                            <span class="infrastructure__sub-title">Кафе та ресторани</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="sport" class="infrastructure__item  wow fadeInDown">
		                            <span class="infrastructure__img">
		                                 <img src="img/infrastructure/sport.svg" alt="sport">
		                            </span>
		                           
		                            <span class="infrastructure__sub-title">Спорт</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="park" class="infrastructure__item wow fadeInDown">
		                            <span class="infrastructure__img">
		                                <img src="img/infrastructure/park.svg" alt="park">
		                            </span>
		                            
		                            <span class="infrastructure__sub-title">Парки та сквери</span>
		                        </li>
		                        <li onclick="filterMarkers($(this).attr('data-category'))" data-category="shop" class="infrastructure__item  wow fadeInDown">
		                            <span class="infrastructure__img">
		                                 <img src="img/infrastructure/shop.svg" alt="shop">
		                            </span>
		                           
		                            <span class="infrastructure__sub-title">ТРЦ</span>
		                        </li>
		                       
                    		</ul>
						</div>
					</div>
					<div class="infrastructure__decor">
						<svg width="404" height="65" viewBox="0 0 404 65" fill="none" xmlns="http://www.w3.org/2000/svg" class='svg-decor'>
						<path opacity="0.1" fill-rule="evenodd" clip-rule="evenodd" d="M113.633 7.04843C134.051 4.40528 151.215 5.87368 167.49 9.1042L166.01 0L167.49 9.10415C176.164 10.8068 184.561 12.9665 193.018 15.1416C210.818 19.7195 228.883 24.3657 250.348 24.9629C284.97 25.844 303.613 18.2083 303.613 18.2083C303.613 18.2083 275.205 20.8514 248.276 14.3904C242.29 12.9543 236.685 11.4601 231.213 10.0014C212.066 4.89767 194.548 0.228403 168.082 0H166.01C133.459 0 113.633 7.04843 113.633 7.04843ZM59.4797 21.7313C59.4797 21.7313 84.6329 11.4526 119.847 12.3336C141.745 12.921 154.766 15.5641 168.97 19.3819L168.97 19.3826C172.083 20.1283 175.274 20.9514 178.656 21.8237L178.657 21.824L178.659 21.8244L178.659 21.8245C184.599 23.3566 191.128 25.0405 198.858 26.7245C214.975 30.3725 232.443 31.071 245.84 31.126L247.684 30.8358C259.817 30.5421 268.103 29.6611 268.103 29.6611C268.103 29.6611 254.49 34.3601 235.847 36.7096C226.97 37.8843 216.909 39.0591 203.296 38.4717H199.153C188.204 37.8843 178.735 36.4159 171.337 34.9475L171.337 34.9469C168.789 34.2571 166.422 33.7474 164.236 33.2767L164.235 33.2766L164.235 33.2766C163.629 33.1461 163.038 33.0186 162.46 32.8912C159.634 32.185 156.908 31.4982 154.269 30.8332C118.498 21.819 98.6133 16.8083 59.4797 21.7313ZM222.531 43.7574C222.531 43.7574 183.174 48.4563 145 39.3522C139.475 38.0467 134.409 36.8074 129.679 35.6508L129.679 35.6508C97.1748 27.701 80.6202 23.6521 40.8368 28.7797C12.1327 32.3039 0 39.9395 0 39.9395C48.2232 31.994 77.1168 38.4649 104.076 44.5027C119.964 48.0611 135.181 51.4689 153.286 51.6867C195.898 51.9804 222.531 43.7574 222.531 43.7574ZM429.378 8.80941C448.909 9.98413 458.674 12.3336 457.787 12.3336C437.368 11.4526 423.164 12.3336 410.736 14.3894C375.45 19.171 347.63 28.0607 319.67 36.995C289.242 46.7177 258.65 56.4931 218.092 61.0845C195.898 63.4339 183.174 64.0213 167.49 64.0213C138.786 64.315 124.286 58.4414 124.286 58.4414C128.796 58.6769 132.163 58.8653 134.813 59.0135C139.294 59.2641 141.723 59.3999 144.154 59.4553C147.031 59.521 149.911 59.4739 156.2 59.3712L156.219 59.3708C157.138 59.3558 158.13 59.3396 159.204 59.3224C186.429 58.7351 207.143 56.0919 234.96 48.4562C248.469 44.6927 259.606 40.6466 270.898 36.5442C287.802 30.4027 305.054 24.1351 331.133 18.5009L331.14 18.4998C336.465 17.3256 342.085 16.1514 348.297 14.9772C363.091 12.3344 377.589 10.2788 391.791 9.3976L391.797 9.3968C404.817 8.22208 417.542 7.92837 429.378 8.80941ZM407.776 21.4384C426.715 17.9142 446.542 15.8585 464.593 14.6838C492.409 12.9217 495.664 14.6838 495.664 14.6838C495.664 14.6838 477.909 17.0332 464.001 18.7953C431.99 23.0311 412.599 30.3217 393.286 37.5828C385.819 40.3903 378.363 43.1934 370.195 45.8138C343.266 54.6242 314.266 61.3788 275.205 63.4346C270.174 63.7282 248.572 63.7282 239.694 60.4978C252.123 60.7914 259.521 60.4977 276.388 58.1483C303.226 54.2083 324.61 46.8005 346.439 39.2385C365.287 32.7093 384.467 26.065 407.776 21.4384Z" fill=""/>
						</svg>

					</div>
					
				</div>
			</div>
			
		</div>
		<div class="hero__line">
			<div class="hero__line-in"></div>
		</div>
		<div class="infrastructure__link-gallery wow fadeInLeft" data-wow-delay="0.5s">
			<a href="gallery.php" class="link">
				<div class="link__circle">
			      <span class="icon">
			      	<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
			      		<path d="M12.68 8.707V1.359a.453.453 0 00-.453-.453V0c.73 0 1.325.575 1.357 1.297L14.49.39l.213.214-1.119 1.119v.479L15.251.535l.214.214-1.88 1.88v.478l1.666-1.666.214.214-1.88 1.88v.478l1.666-1.666.214.213-1.88 1.88v.479l1.666-1.667.214.214-1.88 1.88v.478l1.666-1.666.214.214-1.88 1.88v.478l1.666-1.666.214.213-1.88 1.88v.479l1.666-1.666.214.213-1.88 1.88v.478l1.666-1.666.214.214-1.88 1.88v.478l1.666-1.666.214.213-1.88 1.88v.479l1.666-1.666.214.213-1.88 1.88v.478l1.666-1.666.214.214-1.88 1.88v.478l1.666-1.666.214.213-1.88 1.88v.479l1.666-1.667.214.214-1.88 1.88v.478l1.666-1.666.214.214-1.88 1.88v.239c0 .09-.009.18-.026.265l1.692-1.692.214.213-2.182 2.182-.053-.053a1.355 1.355 0 01-1.003.443v-.905c.25 0 .453-.203.453-.453V9.94L9.348 6.86l-4.06 5.363a.453.453 0 01-.628.092l-1.637-1.2-2.187 3.458a.453.453 0 11-.766-.484l2.447-3.868a.453.453 0 01.65-.123l1.669 1.223 4.091-5.405a.453.453 0 01.668-.06l3.085 2.85z"/><path d="M4.528 7.547a2.415 2.415 0 110-4.83 2.415 2.415 0 010 4.83zm0-.906a1.51 1.51 0 100-3.019 1.51 1.51 0 000 3.02zm10.723 7.479l.214.214-1.578 1.578-.214-.214 1.578-1.578z"/><path d="M1.359.906a.453.453 0 00-.453.453v13.283c0 .25.203.453.453.453h13.283c.25 0 .453-.203.453-.453V1.359a.453.453 0 00-.453-.453H1.359zm0-.906h13.283C15.392 0 16 .608 16 1.359v13.283c0 .75-.608 1.358-1.358 1.358H1.359C.609 16 0 15.392 0 14.642V1.359C0 .609.608 0 1.36 0z"/>
			      	</svg>
			      </span>
			    </div>
				<p class="link__text">Галерея</p>
			</a>
		</div>
		<div class="infrastructure__link-flat wow fadeInLeft" data-wow-delay="0.2s">
			<a href="index.php" class="link">
				<div class="link__circle">
			      <span class="icon">
			      	<svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
			      		<path d="M.433 7.108a6.674 6.674 0 0010.77 5.271l.902.902-1.368 1.368a.18.18 0 000 .25l.874.874a.179.179 0 00.25 0l1.368-1.368.986.986-1.368 1.368a.18.18 0 000 .25l.873.874a.18.18 0 00.25 0l1.369-1.368 1.433 1.434a.176.176 0 00.248 0l.93-.929a.176.176 0 000-.248l-5.569-5.568a6.676 6.676 0 001.401-4.096 6.674 6.674 0 10-13.349 0zm10.214-3.54a4.967 4.967 0 011.466 3.54c0 1.337-.52 2.595-1.466 3.539a4.966 4.966 0 01-3.54 1.466 4.967 4.967 0 01-3.538-1.466 4.967 4.967 0 01-1.467-3.54c0-1.336.52-2.594 1.467-3.539a4.967 4.967 0 013.539-1.466c1.337 0 2.595.52 3.539 1.466z"/>
			      	</svg>
			      </span>
			    </div>
				<p class="link__text">Обрати квартиру</p>
			</a>
		</div>
		<!-- begin call-form -->
		<div class="call-form">
			<div class="call-form__in">
				<div class="call-form__btn">
			  		<!-- <svg class="svg-arrowgallery">
			  			<use xlink:href="#icon-phone"></use>
			  		</svg> -->
			  		<svg  viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
				  		<g clip-path="url(#clip0)">
				  		<path d="M26.6236 22.4524L22.8169 26.2286C22.2549 26.8049 21.5101 27.0001 20.7847 27.001C17.5769 26.9049 14.5448 25.3291 12.0552 23.7111C7.96867 20.7382 4.21914 17.0519 1.86586 12.5972C0.963298 10.7292 -0.0957327 8.34573 0.00544981 6.26068C0.0144723 5.47633 0.225837 4.70653 0.778235 4.20096L4.58492 0.396186C5.37539 -0.276182 6.13983 -0.0437116 6.64567 0.739468L9.70817 6.54676C10.0305 7.23475 9.8456 7.97189 9.36469 8.46349L7.96222 9.86524C7.87564 9.98384 7.82051 10.1188 7.81912 10.2658C8.35691 12.3475 9.98616 14.2662 11.4254 15.5867C12.8647 16.9072 14.4118 18.6962 16.4199 19.1197C16.6681 19.1889 16.9722 19.2132 17.1498 19.0481L18.7813 17.3889C19.3437 16.9627 20.1557 16.7543 20.7561 17.1029H20.7847L26.3087 20.3641C27.1196 20.8724 27.2042 21.8548 26.6236 22.4524Z" />
				  		</g>	
			  		</svg>
				</div>	
			</div>	
		</div>
		<!-- end call-form -->
	</div>
	<!-- end infrastructure -->
	<?php include('includes/footer-pink.php'); ?>
	<script src="js/scripts.min.js"></script>
	<!-- ключ  замінити перед переносом -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3v4tMpbXGrrr2GY00coDwi9YeP4aqyA4&amp;language=uk&amp;ver=1.16"></script>
	<!-- ключ  замінити перед переносом -->
	<script src="js/map-infrastructure.js"></script>
</body>
</html>