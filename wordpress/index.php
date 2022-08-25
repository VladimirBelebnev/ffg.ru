	<?php 
        get_header('main');
    ?>

	<section class="slider" id="slider">
		<div class="swiper slider__slider">
			<div class="swiper-wrapper slider__wrapper">
				<?php 
					$my_posts = get_posts( array(
						'numberposts' => 3,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  =>'',
						'post_type'   => 'slider',
						'suppress_filters' => true, 
					) );

					global $post;

					foreach( $my_posts as $post ){
						setup_postdata( $post );
						?>
				<div class="slider__content swiper-slide">
					<img class="slider__content-photo" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="slider">
					<div class="container">
						<div class="slider__content-block">
							<span
								class="slider__content-type"><?php echo get_post_meta(get_the_ID(), 'category_post', true) ?></span>
							<h2 class="slider__content-header"><?php the_title(); ?></h2>
							<p class="slider__content-descr"><?php echo get_post_meta(get_the_ID(), 'descr', true) ?></p>
						</div>
					</div>
				</div>
				<?php
					}
					wp_reset_postdata();
				?>
			</div>
			<div class="slider__pagination swiper-pagination"></div>
		</div>
		<div class="container">
			<div class="slider__number"></div>
		</div>
	</section>

	<section class="calendar">
		<div class="container">
			<div class="calendar__block">
				<div class="calendar__header">
					<h2>Календарь<br>матчей</h2>
					<a href="https://ffgel.ru/tournaments" data-tournaments="all-tournaments">Турниры</a>
				</div>
				<div class="calendar__slider swiper">
					<div class="calendar__wrapper swiper-wrapper">
						<?php 
							$my_posts = get_posts( array(
								'numberposts' => 3,
								'category'    => 0,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'match_calendar',
								'suppress_filters' => true, 
							) );

							global $post;

							foreach( $my_posts as $post ){
								setup_postdata( $post );
								?>
						<div class="swiper-slide calendar__slide">
							<div class="calendar-match__block">
								<p class="calendar-match__name">
									<?php echo get_post_meta(get_the_ID(), 'tournament', true) ?></p>
								<div class="calendar-match__comand">
									<div class="calendar-comand__wrap">
										<?php 
											$logo1 = pods_image_url(get_post_meta($id, 'comand_logo-1', true), null); ?>
										<img class="calendar-comand__photo" src="<?php echo $logo1; ?>" alt="comand photo">
										<p class="calendar-comand__name">
											<?php echo get_post_meta(get_the_ID(), 'comand_name-1', true) ?></p>
									</div>
									<p class="calendar-match__check">
										<?php echo get_post_meta(get_the_ID(), 'match_check', true) ?></p>
									<div class="calendar-comand__wrap">
										<?php 
											$logo2 = pods_image_url(get_post_meta($id, 'comand_logo-2', true), null); ?>
										<img class="calendar-comand__photo" src="<?php echo $logo2; ?>" alt="comand photo">
										<p class="calendar-comand__name"><?php echo get_post_meta(get_the_ID(), 'comand_name-2', true) ?></p>
									</div>
								</div>
								<div class="calendar-match__info">
									<p class="calendar-info__date">
										<?php echo get_post_meta(get_the_ID(), 'match_date', true) ?></p>
									<p class="calendar-info__place">
										<?php echo get_post_meta(get_the_ID(), 'match_place', true) ?></p>
								</div>
							</div>
						</div>
						<?php
							}
							wp_reset_postdata();
						?>
					</div>
					<div class="calendar__navigation">
						<div class="calendar__pagination swiper-pagination"></div>
						<svg class="calendar__prev swiper-button-prev" viewBox="0 0 61 35" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<circle r="17" transform="matrix(-1 0 0 1 18 17.5)" stroke="url(#paint0_linear_1_206)" />
							<path
								d="M60.5 17C60.7761 17 61 17.2239 61 17.5C61 17.7761 60.7761 18 60.5 18V17ZM18.1464 17.8536C17.9512 17.6583 17.9512 17.3417 18.1464 17.1464L21.3284 13.9645C21.5237 13.7692 21.8403 13.7692 22.0355 13.9645C22.2308 14.1597 22.2308 14.4763 22.0355 14.6716L19.2071 17.5L22.0355 20.3284C22.2308 20.5237 22.2308 20.8403 22.0355 21.0355C21.8403 21.2308 21.5237 21.2308 21.3284 21.0355L18.1464 17.8536ZM60.5 18H18.5V17H60.5V18Z"
								fill="#EDF6F9" />
							<defs>
								<linearGradient id="paint0_linear_1_206" x1="15" y1="18.5" x2="2.24751e-07" y2="25.5"
									gradientUnits="userSpaceOnUse">
									<stop stop-color="#EDF6F9" />
									<stop offset="1" stop-color="#EDF6F9" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
						<svg class="calendar__next swiper-button-next" viewBox="0 0 61 35" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<circle cx="43" cy="17.5" r="17" stroke="url(#paint0_linear_2_206)" />
							<path
								d="M1 17C0.723858 17 0.5 17.2239 0.5 17.5C0.5 17.7761 0.723858 18 1 18V17ZM43.3536 17.8536C43.5488 17.6583 43.5488 17.3417 43.3536 17.1464L40.1716 13.9645C39.9763 13.7692 39.6597 13.7692 39.4645 13.9645C39.2692 14.1597 39.2692 14.4763 39.4645 14.6716L42.2929 17.5L39.4645 20.3284C39.2692 20.5237 39.2692 20.8403 39.4645 21.0355C39.6597 21.2308 39.9763 21.2308 40.1716 21.0355L43.3536 17.8536ZM1 18H43V17H1V18Z"
								fill="#EDF6F9" />
							<defs>
								<linearGradient id="paint0_linear_2_206" x1="60.5" y1="17.5" x2="25.5" y2="17.5"
									gradientUnits="userSpaceOnUse">
									<stop stop-color="#EDF6F9" />
									<stop offset="1" stop-color="#EDF6F9" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<div class="news__wrap">
				<div class="news__news">
					<h2 class="header-title">Новости</h2>
					<div class="news__cards">
						<?php 
							$my_posts = get_posts( array(
								'numberposts' => 4,
								'category'    => 6,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'include'     => array(),
								'exclude'     => array(),
								'meta_key'    => '',
								'meta_value'  =>'',
								'post_type'   => 'post',
								'suppress_filters' => true, 
							) );

							global $post;

							foreach( $my_posts as $post ){
								setup_postdata( $post );
								?>
						<a href="<?php the_permalink(); ?>" class="news-card">
							<?php $image = get_field('news_thumbnail'); ?>
							<img class="news-card__photo" src="<?php echo $image['url']; ?>"
								alt="<?php echo $image['alt']; ?>">
							<div class="news-card__content">
								<p class="news-card__date"><?php the_time('j F Y'); ?></p>
								<h4 class="news-card__header"><?php the_title(); ?></h4>
								<p class="news-card__descr"><?php the_field('news_descr'); ?></p>
							</div>
						</a>
						<?php
							}
							wp_reset_postdata();
						?>
					</div>
					<div class="news__btn btn">
						<a class="news__link" data-news="all-news" href="https://ffgel.ru/news">
							Все новости
							<svg viewBox="0 0 61 35" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="43" cy="17.5" r="17" stroke="url(#paint0_linear_3_598)" />
								<path
									d="M1 17C0.723858 17 0.5 17.2239 0.5 17.5C0.5 17.7761 0.723858 18 1 18V17ZM43.3536 17.8536C43.5488 17.6583 43.5488 17.3417 43.3536 17.1464L40.1716 13.9645C39.9763 13.7692 39.6597 13.7692 39.4645 13.9645C39.2692 14.1597 39.2692 14.4763 39.4645 14.6716L42.2929 17.5L39.4645 20.3284C39.2692 20.5237 39.2692 20.8403 39.4645 21.0355C39.6597 21.2308 39.9763 21.2308 40.1716 21.0355L43.3536 17.8536ZM1 18H43V17H1V18Z"
									fill="#023E8A" />
								<defs>
									<linearGradient id="paint0_linear_3_598" x1="60.5" y1="17.5" x2="25.5" y2="17.5"
										gradientUnits="userSpaceOnUse">
										<stop stop-color="#023E8A" />
										<stop offset="1" stop-color="#EDF6F9" stop-opacity="0" />
									</linearGradient>
								</defs>
							</svg>
						</a>
					</div>
				</div>
				<div class="news__tables">
					<div class="news-tables__wrap">
						<p class="news-tables__header">"Спартак Геленджик" - Кубок Губернатора Краснодарского края</p>
						<a class="tournaments__link" data-tournaments="kubok-gubernatora"
													href="https://ffgel.ru/tournaments">
							<?php echo do_shortcode("[table id=4 /]"); ?>
						</a>
					</div>
					<div class="news-tables__wrap">
						<p class="news-tables__header">"Vista" - чемпионат Краснодарского края</p>
						<a class="tournaments__link" data-tournaments="vishaya-liga"
													href="https://ffgel.ru/tournaments">
							<?php echo do_shortcode("[table id=3 /]"); ?>
						</a>
					</div>
					<div class="news__btn news-table__btn btn">
						<a class="tournaments__link" data-tournaments="all-tournaments"
							href="https://ffgel.ru/tournaments">
							Все турниры
							<svg viewBox="0 0 61 35" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="43" cy="17.5" r="17" stroke="url(#paint0_linear_3_598)" />
								<path
									d="M1 17C0.723858 17 0.5 17.2239 0.5 17.5C0.5 17.7761 0.723858 18 1 18V17ZM43.3536 17.8536C43.5488 17.6583 43.5488 17.3417 43.3536 17.1464L40.1716 13.9645C39.9763 13.7692 39.6597 13.7692 39.4645 13.9645C39.2692 14.1597 39.2692 14.4763 39.4645 14.6716L42.2929 17.5L39.4645 20.3284C39.2692 20.5237 39.2692 20.8403 39.4645 21.0355C39.6597 21.2308 39.9763 21.2308 40.1716 21.0355L43.3536 17.8536ZM1 18H43V17H1V18Z"
									fill="#023E8A" />
								<defs>
									<linearGradient id="paint0_linear_3_598" x1="60.5" y1="17.5" x2="25.5" y2="17.5"
										gradientUnits="userSpaceOnUse">
										<stop stop-color="#023E8A" />
										<stop offset="1" stop-color="#EDF6F9" stop-opacity="0" />
									</linearGradient>
								</defs>
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="media">
		<div class="container">
			<div class="media__photo">
				<h3 class="title media__header">фото</h3>
				<div class="media__block">
					<?php 
						$my_posts = get_posts( array(
							'numberposts' => 2,
							'category'    => 8,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true, 
						) );

						global $post;

						foreach( $my_posts as $post ){
							setup_postdata( $post );
							?>
					<a href="<?php the_permalink(); ?>" class="media__item">
						<?php $image = get_field('main-photo_thumbnail'); ?>
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
						<p class="media__date"><?php the_time('j F Y'); ?></p>
						<p class="media__name"><?php the_title(); ?></p>
					</a>
					<?php
						}
						wp_reset_postdata();
					?>
				</div>
				<div class="media__btn btn">
					<a href="https://ffgel.ru/media-photo">
						Все фото
						<svg viewBox="0 0 61 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="43" cy="17.5" r="17" stroke="url(#paint0_linear_3_598)" />
							<path
								d="M1 17C0.723858 17 0.5 17.2239 0.5 17.5C0.5 17.7761 0.723858 18 1 18V17ZM43.3536 17.8536C43.5488 17.6583 43.5488 17.3417 43.3536 17.1464L40.1716 13.9645C39.9763 13.7692 39.6597 13.7692 39.4645 13.9645C39.2692 14.1597 39.2692 14.4763 39.4645 14.6716L42.2929 17.5L39.4645 20.3284C39.2692 20.5237 39.2692 20.8403 39.4645 21.0355C39.6597 21.2308 39.9763 21.2308 40.1716 21.0355L43.3536 17.8536ZM1 18H43V17H1V18Z"
								fill="#023E8A" />
							<defs>
								<linearGradient id="paint0_linear_3_598" x1="60.5" y1="17.5" x2="25.5" y2="17.5"
									gradientUnits="userSpaceOnUse">
									<stop stop-color="#023E8A" />
									<stop offset="1" stop-color="#EDF6F9" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
					</a>
				</div>
			</div>
			<div class="media__video">
				<h3 class="title media__header">видео</h3>
				<div class="media__block">
					<?php 
						$my_posts = get_posts( array(
							'numberposts' => 2,
							'category'    => 10,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  =>'',
							'post_type'   => 'post',
							'suppress_filters' => true, 
						) );

						global $post;

						foreach( $my_posts as $post ){
							setup_postdata( $post );
							?>
					<a href="<?php the_field('video_url'); ?>" class="media__item">
						<div class="media__wrap">
							<?php $image = get_field('video_thumbnail'); ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="15" cy="15" r="15" fill="#EDF6F9" />
								<path
									d="M20.7 14.4338C21.3667 14.8187 21.3667 15.7809 20.7 16.1658L12.45 20.929C11.7833 21.3139 10.95 20.8327 10.95 20.0629V10.5367C10.95 9.76686 11.7833 9.28574 12.45 9.67064L20.7 14.4338Z"
									fill="#023E8A" />
							</svg>
						</div>
						<p class="media__date"><?php the_time('j F Y'); ?></p>
						<p class="media__name"><?php the_title(); ?></p>
					</a>
					<?php
						}
						wp_reset_postdata();
					?>
				</div>
				<div class="media__btn btn">
					<a class="media__link" href="https://ffgel.ru/media-video">
						Все видео
						<svg viewBox="0 0 61 35" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="43" cy="17.5" r="17" stroke="url(#paint0_linear_3_598)" />
							<path
								d="M1 17C0.723858 17 0.5 17.2239 0.5 17.5C0.5 17.7761 0.723858 18 1 18V17ZM43.3536 17.8536C43.5488 17.6583 43.5488 17.3417 43.3536 17.1464L40.1716 13.9645C39.9763 13.7692 39.6597 13.7692 39.4645 13.9645C39.2692 14.1597 39.2692 14.4763 39.4645 14.6716L42.2929 17.5L39.4645 20.3284C39.2692 20.5237 39.2692 20.8403 39.4645 21.0355C39.6597 21.2308 39.9763 21.2308 40.1716 21.0355L43.3536 17.8536ZM1 18H43V17H1V18Z"
								fill="#023E8A" />
							<defs>
								<linearGradient id="paint0_linear_3_598" x1="60.5" y1="17.5" x2="25.5" y2="17.5"
									gradientUnits="userSpaceOnUse">
									<stop stop-color="#023E8A" />
									<stop offset="1" stop-color="#EDF6F9" stop-opacity="0" />
								</linearGradient>
							</defs>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="adversting">
		<div class="adversting__contact">
			<h3 class="title">Мы в соцсетях:</h3>
			<p>Следите за нами в соиацльных сетях, подписывайтесь на новостные паблики, чтобы узнать о событиях клуба
				первыми!</p>
			<div class="adversting__icon">
				<a href="https://t.me/FedFGel">
					<svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M25 0C11.1887 0 0 11.1903 0 25C0 38.8097 11.1903 50 25 50C38.8113 50 50 38.8097 50 25C50 11.1903 38.8097 0 25 0ZM37.279 17.1274L33.1758 36.4629C32.8726 37.8339 32.0565 38.1661 30.9177 37.521L24.6677 32.9145L21.6532 35.8177C21.321 36.15 21.0387 36.4323 20.3935 36.4323L20.8371 30.071L32.4194 19.6065C32.9242 19.1629 32.3081 18.9113 31.6419 19.3548L17.3274 28.3661L11.1581 26.4403C9.81774 26.0177 9.7871 25.1 11.4403 24.4548L35.5435 15.1597C36.6629 14.7565 37.6403 15.4323 37.2774 17.1258L37.279 17.1274Z"
							fill="white" />
					</svg>
				</a>
				<a href="https://www.youtube.com/channel/UCZKJ_spSZ-fmnmCdxBakQaQ">
					<svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="25" cy="25" r="25" fill="white" />
						<path
							d="M42.0283 16.856C41.8205 16.1131 41.4244 15.4365 40.8783 14.8917C40.3323 14.3468 39.6548 13.9522 38.9115 13.746C36.1213 13 24.9046 13 24.9046 13C24.9046 13 13.7091 12.9821 10.8899 13.746C10.1477 13.9531 9.4716 14.3481 8.9268 14.8929C8.38199 15.4377 7.98693 16.1139 7.77982 16.856C7.24996 19.7124 6.989 22.6122 7.00036 25.5174C6.99519 28.4085 7.25611 31.294 7.77982 34.1373C7.9876 34.8799 8.38277 35.5565 8.92739 36.1023C9.47201 36.6481 10.1478 37.0447 10.8899 37.2541C13.6801 38 24.9046 38 24.9046 38C24.9046 38 36.0934 38 38.9115 37.2541C39.6548 37.0456 40.3319 36.6494 40.8777 36.1035C41.4236 35.5577 41.8198 34.8806 42.0283 34.1373C42.5416 31.2957 42.7921 28.406 42.7742 25.5174C42.7921 22.6097 42.5472 19.7155 42.0283 16.856ZM21.3215 30.8707V20.1405L30.6583 25.5174L21.3215 30.8707Z"
							fill="#0A0A30" />
					</svg>
				</a>
				<a href="https://vk.com/ffgel">
					<svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<circle cx="25" cy="25" r="25" fill="white" />
						<rect x="8" y="15" width="36" height="21" fill="#0A0A30" />
						<path
							d="M9.9 12.375C6.38549 15.4504 3 14.6086 3 24.5078V29.0104C3 38.9098 6.38549 35.2998 9.9 38.375C13.4147 41.4503 12.8116 43.875 24.125 43.875H27.375C38.6885 43.875 40.8855 42.4503 44.4 39.375C47.9146 36.2998 46.7 36.2848 46.7 26.3854V22.5136C46.7 12.6143 45.4313 13.9503 41.9166 10.875C38.4021 7.7998 37.4385 4 26.125 4H24.125C12.8115 4 13.4146 9.2998 9.9 12.375ZM8.5625 17.3074H14.2709C14.4584 25.6563 18.6666 29.1928 22 29.922V17.3073H27.375V24.5078C30.6666 24.1979 34.125 20.9167 35.2916 17.3073H40.6666C40.2269 19.1792 39.3505 20.9516 38.0923 22.5136C36.834 24.0756 35.221 25.3937 33.3541 26.3854C35.4386 27.2909 37.2798 28.5732 38.7558 30.1476C40.2318 31.722 41.3092 33.5525 41.9166 35.5183H36C35.4548 33.8108 34.3454 32.2822 32.8109 31.1244C31.2765 29.9666 29.3854 29.2312 27.375 29.0104V35.5183H26.7291C15.3334 35.5183 8.83337 28.6824 8.5625 17.3074Z"
							fill="white" />
					</svg>
				</a>
			</div>
		</div>
	</section>

	<section class="partner">
		<div class="container">
			<div class="partner__header">
				<span class="partner__line"></span>
				<h3 class="partner__title title">Наши партнеры</h3>
				<span class="partner__line"></span>
			</div>
			<div class="partner__block">
				<?php 
					$image1 = get_field('partner_logo-1');
					$image2 = get_field('partner_logo-2');
					$image3 = get_field('partner_logo-3');
					$image4 = get_field('partner_logo-4');
					$image5 = get_field('partner_logo-5');
					$image6 = get_field('partner_logo-6');
					$image7 = get_field('partner_logo-7');
					$image8 = get_field('partner_logo-8');
					$image9 = get_field('partner_logo-9');
				?>
				<div class="partner__row">
					<a href="<?php the_field('partner_url-1'); ?>"><img src="<?php echo $image1['url']; ?>"
							alt="<?php echo $image1['alt']; ?>"></a>
					<a href="<?php the_field('partner_url-2'); ?>"><img src="<?php echo $image2['url']; ?>"
							alt="<?php echo $image2['alt']; ?>"></a>
					<a href="<?php the_field('partner_url-3'); ?>"><img src="<?php echo $image3['url']; ?>"
							alt="<?php echo $image3['alt']; ?>"></a>
					<a href="<?php the_field('partner_url-4'); ?>"><img src="<?php echo $image4['url']; ?>"
							alt="<?php echo $image4['alt']; ?>"></a>
					<a href="<?php the_field('partner_url-5'); ?>"><img src="<?php echo $image5['url']; ?>"
							alt="<?php echo $image5['alt']; ?>"></a>
				</div>
				<div class="partner__row">
					<a href="<?php the_field('partner_url-6'); ?>"><img src="<?php echo $image6['url']; ?>"
							alt="<?php echo $image6['alt']; ?>"></a>
					<a href="<?php the_field('partner_url-7'); ?>"><img src="<?php echo $image7['url']; ?>"
							alt="<?php echo $image7['alt']; ?>"></a>
					<a href="<?php the_field('partner_url-8'); ?>"><img src="<?php echo $image8['url']; ?>"
							alt="<?php echo $image8['alt']; ?>"></a>
					<a href="<?php the_field('partner_url-9'); ?>"><img src="<?php echo $image9['url']; ?>"
							alt="<?php echo $image9['alt']; ?>"></a>
				</div>
			</div>
		</div>
	</section>

	<?php 
        get_footer();
    ?>
