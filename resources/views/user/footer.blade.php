<div class="mb50"></div>

            <div class="container">
                <h2 class="title-underblock dark mb30">{{$enlaces_interes->titulo_enlaces_interes}}</h2>
                <div class="team-member-carousel owl-carousel nav-border nav-higher">
                	@foreach($enlaces_interes1s as $enlaces_interes1)
	                    <a href="{{$enlaces_interes1->enlace_enlaces_interes}}" target="_blank" title="{{$enlaces_interes1->nombre_enlaces_interes}}">
	                        <img src="{{url('uploads')}}/{{$enlaces_interes1->imagen_enlaces_interes}}" style="width: 80%">
	                    </a>
	                @endforeach
                </div>
            </div>
            <div class="mb40 mb30-xs"></div>
        </div>

        <footer id="footer" role="contentinfo">
            <div id="footer-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget">
                                <div class="corporate-widget">
                                    <a href=""><img src="{{ asset('imgUser/logoSintracolpen.png') }}"></a><br><br>
                                    <p><i>{{$contactanos->texto_descriptivo_contactenos}}</i></p>

                                    <address>
                                        <strong>Domicilio Principal: </strong>{{$contactanos->domicilio_principal_contactenos}}<br> 
                                        <strong>Oficina: </strong> {{$contactanos->oficina1_contactenos}}<br><br>
                                        <strong>Notificaciones: </strong>{{$contactanos->Notificaciones_contactenos}}<br>
                                        <strong>Oficina: </strong>{{$contactanos->oficina2_contactenos}}<br><br>
                                        <strong>Correo: </strong> <a href="mailto:{{$contactanos->correo_contactenos}}">{{$contactanos->correo_contactenos}}</a><br>
                                        <strong>Teléfono: </strong>{{$contactanos->telefono_contactenos}}
                                    </address>
                                    
                                    <span class="social-icons-label">Síguenos en...</span>
                                    <div class="social-icons">
                                        <a href="{{$contactanos->twitter_contactenos}}" target="_blank" class="social-icon icon-twitter" title="Twitter">
                                            <i class="fa fa-twitter sizeIcons-footer" ></i>
                                        </a>
                                        <a href="{{$contactanos->instagram_contactenos}}" target="_blank" class="social-icon icon-instagram" title="Instagram">
                                            <i class="fa fa-instagram sizeIcons-footer"></i>
                                        </a>
                                        <a href="{{$contactanos->youtube_contactenos}}" target="_blank" class="social-icon icon-youtube" title="Youtube">
                                            <i class="fa fa-youtube-play sizeIcons-footer"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-md-4">
                            <div class="widget">
                                <h4>Boletines Generales</h4>
                                <ul class="latest-posts-list">
                                    <li class="clearfix">
                                        <figure><img src="{{ asset('imagesUser/blog/thumbnails/post1.jpg') }}" alt="Nombre del boletin"></figure>
                                        <div class="entry-content">
                                            <h5><a href="#">Lorem ipsum dolor sit amet sine butou.</a></h5>
                                            <p>17/01/2015 - Por <a href="#">Bryan Eon</a></p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="{{ asset('imagesUser/blog/thumbnails/post1.jpg') }}" alt="Nombre del boletin"></figure>
                                        <div class="entry-content">
                                            <h5><a href="#">Quo commodi quidem saepe quos.</a></h5>
                                            <p>12/01/2015 - Por <a href="#">Bryan Eon</a></p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="{{ asset('imagesUser/blog/thumbnails/post1.jpg') }}" alt="Nombre del boletin"></figure>
                                        <div class="entry-content">
                                            <h5><a href="#">Ducimus volupta tibus, alias.</a></h5>
                                            <p>07/01/2015 - Por <a href="#">Bryan Eon</a></p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="{{ asset('imagesUser/blog/thumbnails/post1.jpg') }}" alt="Nombre del boletin"></figure>
                                        <div class="entry-content">
                                            <h5><a href="#">Lorem dolor sit amet vinche mae testai.</a></h5>
                                            <p>01/01/2015 - Por <a href="#">Bryan John</a></p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <figure><img src="{{ asset('imagesUser/blog/thumbnails/post1.jpg') }}" alt="Nombre del boletin"></figure>
                                        <div class="entry-content">
                                            <h5><a href="#">Lorem dolor sit amet vinche mae testai.</a></h5>
                                            <p>01/01/2015 - Por <a href="#">Bryan John</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="widget">
                                <a class="twitter-timeline" href="{{$contactanos->twitter_contactenos}}?ref_src=twsrc%5Etfw" height="450" data-chrome="nofooter">Tweets por Sintracolpen</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>
  
                    </div>
                </div>
            </div>
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6">
                            <ul class="footer-menu">
                                <li><a href="{{url('/')}}">Inicio</a></li>
                                <li><a href="{{url('nosotros')}}">Nosotros</a></li>
                                <li><a href="#">Afiliaciones</a></li>
                                <li><a href="#">Contenidos</a></li>
                                <li><a href="{{url('preguntas-frecuentes')}}">Preguntas</a></li>
                                <li><a href="{{url('contactanos')}}">Contáctanos</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <p class="copyright">
                                <b>Sintracolpen SAS</b><br>
                                &copy; Todos los derechos reservados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <a href="#top" id="scroll-top" title="Back to Top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('jsUser/smoothscroll.js') }}"></script>
    <script src="{{ asset('jsUser/bootstrap.min.js') }}"></script>
    <script src="{{ asset('jsUser/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('jsUser/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('jsUser/waypoints.min.js') }}"></script>
    <script src="{{ asset('jsUser/waypoints-sticky.min.js') }}"></script>
    <script src="{{ asset('jsUser/jquery.debouncedresize.js') }}"></script>
    <script src="{{ asset('jsUser/retina.min.js') }}"></script>
    <script src="{{ asset('jsUser/twitter/jquery.tweet.min.js') }}"></script>
    <script src="{{ asset('jsUser/jflickrfeed.min.js') }}"></script>
    <script src="{{ asset('jsUser/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('jsUser/jquery.kwicks.min.js') }}"></script>
    <script src="{{ asset('jsUser/skrollr.min.js') }}"></script>
    <script src="{{ asset('jsUser/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('jsUser/wow.min.js') }}"></script>
    <script src="{{ asset('jsUser/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('jsUser/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('jsUser/main.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBJuX7MUGkO38AxIIn0K4rIZV5kba7M0&callback=initMap"></script>

    <script type="text/javascript">
        window.onscroll = scroll;
        function scroll(){
            if(window.pageYOffset >= 400){
                $( "#logoHeader" ).removeClass( "marginLogo" ).addClass( "marginLogo2" );    
                $( "#main-navbar-container" ).removeClass( "marginMenu" ).addClass( "marginMenu2" );         
            }else{
                $( "#logoHeader" ).removeClass( "marginLogo2" ).addClass( "marginLogo" );
                $( "#main-navbar-container" ).removeClass( "marginMenu2" ).addClass( "marginMenu" ); 
            }
        }
    </script>

    <script type="text/javascript">
        function initMap() {
            var position = {lat: 4.661520299999999, lng: -74.06472610000003};
            var map = new google.maps.Map(document.getElementById('mapContactanos'), {
                zoom: 14,
                center: position,
                disableDefaultUI: true
            });
            var marker = new google.maps.Marker({
                position: position,
                title: 'Sintracolpen SAS',
                map: map
            });
        }
    </script>
    
    </body>
</html>