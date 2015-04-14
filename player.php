<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- folhas de estilo -->
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/selectric.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/nanoscroller.css">
        <link href="css/jplayer.pink.flag.min.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jplayer/jquery.jplayer.min.js"></script>
        <script type="text/javascript" src="js/jplayer/jplayer.playlist.min.js"></script>             
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.selectric.min.js"></script>
        <script type="text/javascript" src="js/jplayer/playlist.js"></script>
        
    </head>
    <body>

        <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>

        <div class="container-player">
            <header class="topo-player">
                <div class="logo-player">
                    <img src="img/logo-player.png" class="img-logo" alt="Playlist Aberta">
                </div>
                <div class="player-info">
                    <p id="player-num">#136</p>
                    <p id="player-data">
                    	<?php
                    		header( 'Content-Type: text/html; charset = utf-8' );
							setlocale( LC_ALL, 'pt', 'pt.utf-8', 'pt_BR', 'pt_BR.utf-8', 'portuguese' );
							date_default_timezone_set( 'America/Bahia' );
							$data = date("d/m/Y");
							echo $data;
						?>
                    </p>
                </div>
                
                <div class="voltar-player">
                	<a href="lista.html">
	                    <img src="img/voltar.png" class="voltar-img" height="35" width="41" alt="">
	                    <p>Voltar</p>
                    </a>
                </div>
            </header>

            <div class="player-wrapper">

                <div class="card-img">
                    <img src="img/card-player.png" alt="Player">
                </div>
                <div class="player">
                    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
                    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="jp-type-playlist">
                            <div class="jp-gui jp-interface">
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" role="button" tabindex="0">mute</button>
                                    <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value"></div>
                                    </div>
                                </div>
                                <div class="jp-controls-holder">
                                    <div class="jp-controls">
                                        <button class="jp-play" role="button" tabindex="0">play</button>                                        
                                        <button class="jp-stop" role="button" tabindex="0">stop</button>
                                        <button class="jp-previous" role="button" tabindex="0">previous</button>
                                        <button class="jp-next" role="button" tabindex="0">next</button>
                                    </div>
                                    <div class="jp-progress">
                                        <div class="jp-seek-bar">
                                            <div class="jp-play-bar"></div>
                                        </div>
                                    </div>
                                    <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                                    <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                                    <div class="jp-toggles">
                                        <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                                        <button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
                                    </div>
                                </div>
                            </div>
                            <div class="jp-playlist">
                                <ul>
                                    <li class="line-border">&nbsp;</li>
                                </ul>
                            </div>
                            <div class="jp-no-solution">
                                <span>Atualização Necessária</span>
                                Para reproduzir a mídia será necessário atualizar seu navegador para uma versão mais recente ou atualize seu 
                                <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="redes-sociais">
                    <div class="facebook fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
                    <div class="twitter">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-via="fmariasantosl">Tweet</a>
                        <script>!function(d,s,id){
                            var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                            if(!d.getElementById(id)){
                                js=d.createElement(s);
                                js.id=id;js.src=p+'://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js,fjs);
                            }}(document, 'script', 'twitter-wjs');
                        </script>
                    </div> 
                    <div class="e-mail">
                        
                    </div>   
                </div>

                <section class="comentarios-wrapper nano">
                    <div class="comentarios-inner nano-content">
                        <div class="coment">
                            <img class="avatar" src="img/avatar.png" />
                            <h4>Fernanda Lima</h4>
                            <p>"Sed ac posuere elit, imperdiet sollicitudin odio. Sed blandit tempus finibus. Fusce efficitur nisl mauris, sed convallis purus eleifend non. Vivamus pellentesque, est non feugiat malesuada, risus nunc egestas turpis, a rhoncus urna augue id justo."</p>
                            <div class="coment-info">
                                <span class="data">12.01.2015 -</span>
                                <a data-url="#" class="ver-coment" href="javascript:;">Ver comentário</a>
                            </div>
                            <div class="separador"></div>
                        </div>
                        <div class="coment">
                            <img class="avatar" src="img/avatar.png" />
                            <h4>Fábio Sales</h4>
                            <p>"Sed ac posuere elit, imperdiet sollicitudin odio. Sed blandit tempus finibus. Fusce efficitur nisl mauris, sed convallis purus eleifend non. Vivamus pellentesque, est non feugiat malesuada, risus nunc egestas turpis, a rhoncus urna augue id justo."</p>
                            <div class="coment-info">
                                <span class="data">12.01.2015 -</span>
                                <a data-url="#" class="ver-coment" href="javascript:;">Ver comentário</a>
                            </div>
                            <div class="separador"></div>
                        </div>
                        <div class="coment">
                            <img class="avatar" src="img/avatar.png" />
                            <h4>Marco Antonio</h4>
                            <p>"Sed ac posuere elit, imperdiet sollicitudin odio. Sed blandit tempus finibus. Fusce efficitur nisl mauris, sed convallis purus eleifend non. Vivamus pellentesque, est non feugiat malesuada, risus nunc egestas turpis, a rhoncus urna augue id justo."</p>
                            <div class="coment-info">
                                <span class="data">12.01.2015 -</span>
                                <a data-url="#" class="ver-coment" href="javascript:;">Ver comentário</a>
                            </div>
                            <div class="separador"></div>
                        </div> 
                        <div class="coment">
                        	<img class="avatar" src="img/avatar.png" />
                        	<h4>Raul Constantino</h4>
                        	<p>"Sed ac posuere elit, imperdiet sollicitudin odio. Sed blandit tempus finibus. Fusce efficitur nisl mauris, sed convallis purus eleifend non. Vivamus pellentesque, est non feugiat malesuada, risus nunc egestas turpis, a rhoncus urna augue id justo."</p>
                        	<div class="coment-info">
                        		<span class="data">12.01.2015 -</span>
                        		<a data-url="#" class="ver-coment" href="javascript:;">Ver comentário</a>
                        	</div>
                        	<div class="separador"></div>
                        </div>
                        <div class="coment">
                        	<img class="avatar" src="img/avatar.png" />
                        	<h4>Tuiris</h4>
                        	<p>"Sed ac posuere elit, imperdiet sollicitudin odio. Sed blandit tempus finibus. Fusce efficitur nisl mauris, sed convallis purus eleifend non. Vivamus pellentesque, est non feugiat malesuada, risus nunc egestas turpis, a rhoncus urna augue id justo."</p>
                        	<div class="coment-info">
                        		<span class="data">12.01.2015 -</span>
                        		<a data-url="#" class="ver-coment" href="javascript:;">Ver comentário</a>
                        	</div>
                        	<div class="separador"></div>
                        </div> 
                        <div class="coment">
                        	<img class="avatar" src="img/avatar.png" />
                        	<h4>Flávio Leite</h4>
                        	<p>"Sed ac posuere elit, imperdiet sollicitudin odio. Sed blandit tempus finibus. Fusce efficitur nisl mauris, sed convallis purus eleifend non. Vivamus pellentesque, est non feugiat malesuada, risus nunc egestas turpis, a rhoncus urna augue id justo."</p>
                        	<div class="coment-info">
                        		<span class="data">12.01.2015 -</span>
                        		<a data-url="#" class="ver-coment" href="javascript:;">Ver comentário</a>
                        	</div>
                        	<div class="separador"></div>
                        </div>  
                        <div class="coment">
                        	<img class="avatar" src="img/avatar.png" />
                        	<h4>Fernando Leite</h4>
                        	<p>"Sed ac posuere elit, imperdiet sollicitudin odio. Sed blandit tempus finibus. Fusce efficitur nisl mauris, sed convallis purus eleifend non. Vivamus pellentesque, est non feugiat malesuada, risus nunc egestas turpis, a rhoncus urna augue id justo."</p>
                        	<div class="coment-info">
                        		<span class="data">12.01.2015 -</span>
                        		<a data-url="#" class="ver-coment" href="javascript:;">Ver comentário</a>
                        	</div>
                        	<div class="separador"></div>
                        </div>          
                    </div>            
                </section>
                
            </div>

            <footer>
                <a href="http://www.educadora.ba.gov.br/" target="_blank">
                    <img src="img/educadora-logo.png" class="educadora-logo-player" alt="Educadora FM">
                </a>
            </footer>
            
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
            <script type="text/javascript" src="js/main.js"></script>
            <script type="text/javascript" src="js/jquery.nanoscroller.min.js"></script>
            
        </div> <!-- /container-player -->

    </body>
</html>
