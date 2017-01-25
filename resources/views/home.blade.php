<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Lamutes</title>
	<link rel="icon" href="/img/content/icon.png">
	<!-- ========== CSS INCLUDES ========== -->
	<link rel="stylesheet" href="/css/master.css">
</head>
<body>
	<div class="page-loader">
		 <div class="vertical-align align-center">
			  <img src="/loader/loader.gif" alt="" class="loader-img">
		 </div>
	</div>

	<!-- =============== START BREADCRUMB ================ -->
	<section id="top" class="no-mb">
		<div class="row">
			<div class="col-sm-12">
				<div class="breadcrumb-fullscreen-parent phone-menu-bg">
					<div class="breadcrumb breadcrumb-fullscreen alignleft small-description overlay almost-black-overlay" style="background-image: url({{$cover->cover_image}});" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
						<div class="starTitle">
							@if($cover->subtitle1)
								<h4>{{$cover->subtitle1}}</h4>
							@endif
							<div class="grid__item">
            		<h1>
                	<a class="link link-yaku" href="#">
										@foreach(str_split($cover->title) as $letter)<span>{{$letter}}</span>@endforeach
									</a>
				        </h1>
            	</div>
							@if($cover->subtitle2)
								<h4>{{$cover->subtitle2}}</h4>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END BREADCRUMB ================ -->

	<!-- =============== START PLAYER ================ -->
	<div class="main-music-player">
		<a class="hide-player-button">
			<i class="fa fa-plus"></i>
			<i class="fa fa-minus"></i>
		</a>
		<div id="mesh-main-player" class="jp-jplayer" data-audio-src="/audio/flute.mp3" data-title="See right through ft. Fiora" data-artist="Tensnake"></div>

		<div id="mesh-main-player-content" class="mesh-main-player" role="application" aria-label="media player">
			<div class="container">
				<div class="row">
					<div class="left-player-side">
						<div class="mesh-prev">
							<i class="fa fa-step-backward"></i>
						</div>
						<div class="mesh-play">
							<i class="fa fa-play"></i>
						</div>
						<div class="mesh-pause">
							<i class="fa fa-pause"></i>
						</div>
						<div class="mesh-next">
							<i class="fa fa-step-forward"></i>
						</div>
						<button id="playlist-toggle" class="jplayerButton">
							<span class="span-1"></span>
							<span class="span-2"></span>
							<span class="span-3"></span>
						</button>
					</div>
					<div class="center-side">
						<div class="mesh-current-time">
						</div>
						<div class="mesh-seek-bar">
							<div class="mesh-play-bar">
							</div>
						</div>
						<div class="mesh-duration">
						</div>
					</div>
					<div class="right-player-side">
						<div class="mesh-thumbnail">
							<img src="/img/player/thumbnail.png" alt="">
						</div>
						<div class="mesh-title">
						</div>
						<div class="mesh-artist">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- =============== END PLAYER ================ -->

	<!-- =============== START PLAYLIST ================ -->
	<div class="playlist-wrapper" id="playlist-wrapper">
		<div class="jp-playlist container">
			<div class="about-list clearfix">
				<span class="about-name">NAME</span>
				<span class="about-length">LENGTH</span>
				<span class="about-available">AVAILABLE ON</span>
			</div>
			<div class="trak-item" data-audio="/audio/flute.mp3" data-artist="Tensnake" data-thumbnail="/img/player/thumbnail.png" data-id="trak-200">
				<audio preload="metadata" src="/audio/flute.mp3" title="See right through ft. Fiora"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<a href="#">
							<i class="fa fa-apple"></i>
						</a>
						<a href="#">
							<i class="fa fa-soundcloud"></i>
						</a>
					</div>
				</div>
				<div class="play-pause-button">
					<div class="center-y-table">
						<i class="fa fa-play"></i>
					</div>
				</div>
				<div class="name-artist">
					<div class="center-y-table">
						<h2>
							Tensnake - See Right Through Ft. Fiora
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			<div class="trak-item" data-audio="/audio/2.mp3" data-artist="Jack U ft. Kiesza" data-thumbnail="/img/player/thumbnail.png" data-id="trak-201">
				<audio preload="metadata" src="/audio/2.mp3" title="Take You There"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<a href="#">
							<i class="fa fa-apple"></i>
						</a>
						<a href="#">
							<i class="fa fa-soundcloud"></i>
						</a>
					</div>
				</div>
				<div class="play-pause-button">
					<div class="center-y-table">
						<i class="fa fa-play"></i>
					</div>
				</div>
				<div class="name-artist">
					<div class="center-y-table">
						<h2>
							Jack U ft. Kiesza - Take You There
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			<div class="trak-item" data-audio="/audio/3.mp3" data-artist="Bob Sinclair" data-thumbnail="/img/player/thumbnail.png" data-id="trak-201">
				<audio preload="metadata" src="/audio/3.mp3" title="Cinderella"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<a href="#">
							<i class="fa fa-apple"></i>
						</a>
						<a href="#">
							<i class="fa fa-soundcloud"></i>
						</a>
					</div>
				</div>
				<div class="play-pause-button">
					<div class="center-y-table">
						<i class="fa fa-play"></i>
					</div>
				</div>
				<div class="name-artist">
					<div class="center-y-table">
						<h2>
							Bob Sinclair - Cinderella
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
			<div class="trak-item" data-audio="/audio/4.mp3" data-artist="Yuna" data-thumbnail="/img/player/thumbnail.png" data-id="trak-201">
				<audio preload="metadata" src="/audio/4.mp3" title="Lullabies"></audio>
				<div class="additional-button">
					<div class="center-y-table">
						<a href="#">
							<i class="fa fa-apple"></i>
						</a>
						<a href="#">
							<i class="fa fa-soundcloud"></i>
						</a>
					</div>
				</div>
				<div class="play-pause-button">
					<div class="center-y-table">
						<i class="fa fa-play"></i>
					</div>
				</div>
				<div class="name-artist">
					<div class="center-y-table">
						<h2>
							Yuna - Lullabies
						</h2>
					</div>
				</div>
				<time class="trak-duration">
					00:00
				</time>
			</div>
		</div>
	</div>
	<!-- =============== END PLAYLIST ================ -->

	<!-- =============== START TOP HEADER ================ -->
	<div class="topHeader" >
		<div class="header">
			<div class="rightTopHeader">
				<!-- Open Menu Button -->
				<a class="open-menu">
					<!-- Buttons Bars -->
					<span class="span-1"></span>
					<span class="span-2"></span>
					<span class="span-3"></span>
				</a>
			</div><!-- end rightTopHeader -->
		</div><!-- end header -->
		<!-- Menu Fixed Container -->
		<div class="menu-fixed-container">
			<!-- Menu Fixed Centred Container -->
			<nav>
				<!-- Menu Fixed Close Button -->
				<div class="x-filter">
					<span></span>
					<span></span>
				</div>
				<!-- Menu Fixed Primary List -->
				<ul>
					<!-- Menu Fixed Item -->
					<li>
						<a href="#top">
							Topo
						</a>
					</li>
					<li>
						<a href="#albums">
							Músicas
						</a>
					</li>
					<li>
						<a href="#events">
							Eventos
						</a>
					</li>
					<li>
						<a href="#videoclip">
							Clipes
						</a>
					</li>
				</ul>
				<!-- Menu Fixed Close Button -->
				<div class="x-filter">
					<span></span>
					<span></span>
				</div>
			</nav>
		</div><!-- end menu-fixed-container -->
		<!-- =============== STAR LOGO ================ -->
		<div class="logo-container-top">
			<a href="index.html"><img src="/images/lamutes.png" alt="Aqura"></a>
		</div><!-- end logo-container-top -->
		<!-- =============== END LOGO ================ -->
	</div><!-- end topHeader -->
	<!-- =============== END TOP HEADER ================ -->

	<!-- =============== START ALBUM COVER SECTION ================ -->
	@if(count($albums) > 0)
	<section id="albums" class="padding albumsHome hide-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="sectionTitle paddingBottom">
						<span class="heading-t3"></span>
						<h2><a href="albumsFullBackground.html">Músicas</a></h2>
						<span class="heading-b3"></span>
					</div><!-- end sectionTtile -->
				</div><!-- end col-sm-12 -->
			</div>
			<div class="list-albums">
				<ul class="list-feature col-md-12 col-xs-12 col-sm-12">
					@foreach($albums as $a)
						<li class="col-sm-3 {{$loop->index === 0 ? 'col-sm-offset-3' : ''}} col-xs-12">
							<div class="album-icon">
								<span class="thumbs-album">
									<a href="albumsSingle1.html"><img width="270" height="270" src="{{$a->cover_image}}" class="attachment-album-thumbnail wp-post-image" alt="album-cover-1"></a>
								</span>
								<span style="background: url({{$a->disk_image}}) no-repeat center center;" class="disk"></span>
							</div><!-- END ALBUM ICON -->
							<div class="name">
								<h3>{{$a->title}}</h3>
								<p>{{$a->subtitle}}</p>
							</div><!-- end name -->
						</li>
					@endforeach
				</ul>
			</div><!-- end list-albums -->
		</div><!-- end container -->
	</section>
	<!-- =============== END ALBUM COVER SECTION ================ -->
	@endif
	@if(count($events) > 0)
	<!-- =============== START EVENTS SECTION-1 ================ -->
	<section id="events" style="background-image: url(@if(count($homeImages) > 0) '{{$homeImages->next_event_image}}' @else /img/events/tableEventsHome.png @endif);" class="background-properties hide-section paddingHomeEvents">
		<div class="tableEvents">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="sectionTitle paddingBottom">
							<span class="heading-t3"></span>
							<h2><a href="events.html">Próximos Shows</a></h2>
							<span class="heading-b3"></span>
						</div><!-- end sectionTtile -->
						<table>
							<tr class="tableEventsTitle">
								<th class="date">Data</th>
								<th class="venue">Local</th>
								<th class="location">Endereço</th>
								<th class="tickets"></th>
								<th></th>
							</tr>
							@foreach($events as $e)
							<tr>
								<td class="aqura-date"><a href="#"><i class="fa fa-plus"></i></a><a href="singleEvent.html">{{$e->date}}</a></td>
								<td class="aqura-location"><a href="singleEvent.html">{{$e->venue}}</a></td>
								<td class="aqura-city"><a href="singleEvent.html">{{$e->location}}</a></td>
								@if($e->fb_url)
								<td class="aqura-vip"><a href="{{$e->fb_url}}" target="_blank">+</a></td>
								@endif
							</tr>
							@endforeach
						</table>
					</div><!-- end col-sm-12 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</div><!-- end tableEvents -->
	</section>
	<!-- =============== END EVENTS SECTION-1 ================ -->
	<!-- =============== START EVENTS SECTION-2 ================ -->
	<section class="padding hide-section countdownSection background-properties" style="background-image: url(@if(count($homeImages) > 0) '{{$homeImages->next_event_image2}}' @else /img/events/countdownHome.png @endif);">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="countdownTitle">
						<h4>Próximo Show</h4>
						<h2>{{{$firstEvent['venue']}}}</h2>
					</div>
					<div class="sm-countdown sm_content_element sm-style2" id="sm_countdown-19" data-date="{{$firstEvent['date']}}">
						<div class="displayCounter">
							<div class="column">
								<div class="sm_countdown_inner">
									<input class="element days" readonly="readonly" data-min="0" data-max="365" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit days-title">dias</span>
								</div>
							</div>
							<div class="column">
								<div class="sm_countdown_inner">
									<input class="element hour" readonly="readonly" data-min="0" data-max="24" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit hours-title">hrs</span>
								</div>
							</div>
							<div class="column">
								<div class="sm_countdown_inner">
									<input class="element minute" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit mins-title">min</span>
								</div>
							</div>
							<div class="column">
								<div class="sm_countdown_inner">
									<input class="element second" readonly="readonly" data-min="0" data-max="60" data-width="200" data-height="200" data-thickness="0.15" data-fgcolor="#fff" data-bgcolor="#8e8d8d" data-angleoffset="180">
									<span class="unit secs-title">sec</span>
								</div>
							</div>
						</div>
					</div><!-- end sm-countdown -->
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END EVENTS SECTION-2 ================ -->
	@endif
	@if(false)
	<!-- =============== START HOME-BLOG SECTION ================ -->
	<section class="padding hide-section background-properties blogHomeSection" style="background-image: url(/img/blog/homeBlog.png);">
		<div class="container">
			<div class="row">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="blogGrid.html">News</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->
				<div class="col-sm-4">
					<div class="blogBox">
						<div class="imgBox"><img src="/img/blog/homeGalPost.png" alt="box-img"></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Gallery Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->
				<div class="col-sm-4">
					<div class="blogBox">
						<div class="videoBox"><iframe src="https://player.vimeo.com/video/145837856" width="600" height="410"  ></iframe></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Video Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">28 apr 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->
				<div class="col-sm-4">
					<div class="blogBox">
						<div class="soundcloudBox"><iframe height="203" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/73595878&amp;color=bb9b69&amp;show_artwork=false&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=false&amp;show_reposts=false"></iframe></div>
						<div class="blogBoxContent">
							<div class="blogHeader">
								<h1><a href="blogSingle.html">Soundcloud Post</a></h1>
							</div>
							<div class="admin-list clearfix">
								<ul>
									<li><a href="#">08 dec 2016</a>&nbsp;/&nbsp;</li>
									<li><a href="#">By Admin</a></li>
								</ul>
							</div><!-- end admin-list -->
							<div class="blogParagraph">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
							</div><!--end blogParagraph  -->
							<div class="rmButton">
								<a href="#">Read More</a>
							</div>
						</div><!-- end blogBoxContent -->
					</div><!-- end blogBox -->
				</div><!-- end col-sm-4 -->
			</div><!-- end container -->
		</div><!-- end row -->
	</section>
	<!-- =============== END HOME-NLOG SECTION ================ -->
	@endif
	@if(false)
	<!-- =============== START TWITTER SECTION ================ -->
	<section class="padding hide-section background-properties" style="background-image: url(/img/twitter/homeTwitter.png);">
		<div class="twitter">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="twitterLogo">
							<a href="#"><img src="/img/content/twitterLogo.png" alt="twitterLogo"></a>
							<a href="#" class="linkTwitter">@ThemeBrothers</a>
						</div>
						<p>AQURA - Creative Theme for dj, bands and musicians #HTML#Theme now available on #ThemeForest - <a href="https://twitter.com/?request_context=signup">https://twitter.com/?request_context=signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END TWITTER SECTION ================ -->
	@endif
	<!-- =============== START VIDEO SECTION ================ -->
	<section id="videoclip" class="videoHome hide-section padding">
		<div class="container">
			<div class="row">
				<div class="sectionTitle">
					<span class="heading-t3"></span>
					<h2>Nossos Vídeos</h2>
					<span class="heading-b3"></span>
					<p>Acessem nosso canal no <a href="https://www.youtube.com/channel/UCB023eytdBzky0ZG6fXvOxg">Youtube</a> para mais novidades.</p>
				</div><!-- end sectionTtile -->
				<div class="col-sm-4 col-sm-offset-4">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/BC_A8xQWpVI" allowfullscreen></iframe>
				</div><!-- end col-sm-4 -->
			</div>
		</div>
	</section>
	<!-- =============== END VIDEO SECTION ================ -->
	@if(false)
	<!-- =============== START GALLERY SECTION ================ -->
	<section style="padding-bottom:0; padding-top:0;" class="hide-section">
		<div class="gallerySection">
			<div class="container-fluid" style="padding:0;">
				<div class="col-sm-12">
					<!-- Content Container -->
					<div class="content-container clearfix">
						<!-- Single Album Container -->
						<div class="single-photo-album-container">
							<div class="row">
								<!-- Single Album Article -->
								<article class="col-sm-12 col-md-6 col-xs-12">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<!-- Single Album Image -->
											<div class="hovereffect">
												<img class="img-responsive" src="/img/gallery/wideGal.png" alt="">
												<div class="overlay">
												   <a class="info lightbox" href="/img/gallery/wideGal.png"></a>
												</div>
											</div>
										</figcaption>
										<!-- Single Album View Button -->

									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="/img/gallery/squareGal.png" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="/img/gallery/wideGal.png"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="/img/gallery/squareGal.png" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="/img/gallery/wideGal.png"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="/img/gallery/squareGal.png" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="/img/gallery/wideGal.png"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-3 col-xs-6">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="/img/gallery/squareGal.png" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="/img/gallery/wideGal.png"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
								<!-- Single Album Article -->
								<article class="col-sm-12 col-md-6 col-xs-12">
									<!-- Single Album Contant Container -->
									<figure>
										<!-- Single Album Image -->
										<figcaption>
											<div class="hovereffect">
											<img class="img-responsive" src="/img/gallery/wideGal.png" alt="">
											<div class="overlay">
											   <a class="info lightbox" href="/img/gallery/wideGal.png"></a>
											</div>
										</div>
										</figcaption>
									</figure>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div><!-- end container -->
		</div>
	</section>
	<!-- =============== END GALLERY SECTION ================ -->
	@endif
	@if(false)
	<!-- =============== START HOME-SHOP SECTION ================ -->
	<section class="shopHomePage shopHomePadding hide-section">
		<div class="shopSection">
			<div class="container-fluid">
			<div class="shopContent">
				<div class="sectionTitle paddingBottom">
					<span class="heading-t3"></span>
					<h2><a href="shop.html">Shop Online</a></h2>
					<span class="heading-b3"></span>
				</div><!-- end sectionTtile -->
				<div class="row">
					<nav class="shop-products">
						<ul class="clearfix">
							<li class="col-sm-3">
								<figure>
									<figcaption>
										<img src="/img/shop/shopProduct.png" alt="">
									</figcaption>
									<div class="content">
										<div class="shopHover">
											<div class="price">
												&pound; 15,99
											</div>
											<div  class="proTitle">
												<a href="shopSingle.html">Original T. Brothers</a>
											</div>
											<div class="product">Hoodie Aqura</div>
											<a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
											 <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
										</div>
									</div>
								</figure>
							</li>
							<li class="col-sm-3">
								<figure>
									<figcaption>
										<img src="/img/shop/shopProduct.png" alt="">
									</figcaption>
									<div class="content">
										<div class="shopHover">
											<div class="price">
												&pound; 15,99
											</div>
											<div  class="proTitle">
												<a href="shopSingle.html">Original T. Brothers</a>
											</div>
											<div class="product">Hoodie Aqura</div>
											<a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
											 <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
										</div>
									</div>
								</figure>
							</li>
							<li class="col-sm-3">
								<figure>
									<figcaption>
										<img src="/img/shop/shopProduct.png" alt="">
									</figcaption>
									<div class="content">
										<div class="shopHover">
											<div class="price">
												&pound; 15,99
											</div>
											<div  class="proTitle">
												<a href="shopSingle.html">Original T. Brothers</a>
											</div>
											<div class="product">Hoodie Aqura</div>
											<a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
											 <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
										</div>
									</div>
								</figure>
							</li>
							<li class="col-sm-3">
								<figure>
									<figcaption>
										<img src="/img/shop/shopProduct.png" alt="">
									</figcaption>
									<div class="content">
										<div class="shopHover">
											<div class="price">
												&pound; 15,99
											</div>
											<div  class="proTitle">
												<a href="shopSingle.html">Original T. Brothers</a>
											</div>
											<div class="product">Hoodie Aqura</div>
											<a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-shopping-cart"></i><span></span></a>
											 <a href="shopSingle.html" class="icon-button shopIcon"><i class="fa fa-info"></i><span></span></a>
										</div>
									</div>
								</figure>
							</li>
						</ul>
					</nav><!-- end shop-products -->
				</div><!-- end row -->
			</div><!-- end shopContent -->
		</div>
		</div>
	</section>
	<!-- =============== END HOME-SHOP SECTION ================ -->
	@endif
	<!-- =============== START FOOTER ================ -->
	<section style="background-color:#eeeeee;" class="hide-section">
		<div class="footer footerPadding">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="copyFooter">
							<a href="#">&copy; Lamutes 2017</a>
						</div>
					</div>
					<div class="col-sm-4">
						<nav class="social-icons">
							<ul class="clearfix" style="display:flex;justify-content:center;">
								<li><a href="https://www.facebook.com/lamut3s/" target="_blank" class="icon-button shopIcon"><i class="fa fa-facebook"></i><span></span></a></li>
								<li><a href="https://www.instagram.com/lamutes/" target="_blank" class="icon-button shopIcon"><i class="fa fa-instagram"></i><span></span></a></li>
								<li><a href="https://itunes.apple.com/br/artist/lamutes/" target="_blank" class="icon-button shopIcon"><i class="fa fa-apple"></i><span></span></a></li>
								<li><a href="https://www.youtube.com/channel/UCB023eytdBzky0ZG6fXvOxg" target="_blank" class="icon-button shopIcon"><i class="fa fa-youtube-play"></i><span></span></a></li>
							</ul>
						</nav>
					</div>
					<div class="col-sm-4">
						<div class="goTop back-to-top" id="back-to-top">
							<i class="fa fa-angle-up"></i>
							<a href="#">Topo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- =============== END FOOTER ================ -->

	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/jplayer/jplayer/jquery.jplayer.js"></script>
	<script src="/js/jPlayer.js"></script>
	<script src="/js/plugins.js"></script>
	<script src="/js/main.js"></script>
	<!--[if lte IE 9 ]>
		<script src="/js/placeholder.js"></script>
		<script>
			jQuery(function() {
				jQuery('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
</body>
</html>
