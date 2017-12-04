@include('user.header')

            <div id="content" role="main" class="no-padding">
                <div id="revslider-container">
                    <div id="revslider">
                        <ul>
                            <li data-transition="slideleft" data-slotamount="8" data-masterspeed="800">
                                <img data-lazyload="{{url('uploads')}}/{{$inicio1->imagen_banners_inicio}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                                <div class="tp-caption rev-title lfl ltl"
                                    data-x="center"
                                    data-y="220"
                                    data-speed="1000"
                                    data-start="1000"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="600"
                                    style="z-index: 6">{{$inicio1->titulo_banners_inicio}}
                                </div>

                                <div class="tp-caption rev-text text-center lfr ltr"
                                    data-x="center"
                                    data-y="305"
                                    data-speed ="1000"
                                    data-customin="x:0;y:0;z:0;rotationX:-90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-start="1200"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="700"
                                    style="z-index: 12"><b>{!!$inicio1->descripcion_banners_inicio!!}</b>
                                </div>

                                <div class="tp-caption rev-btn lfb ltb"
                                    data-x="center"
                                    data-y="391"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1000"
                                    data-start="1400"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="800"
                                    style="z-index: 14">
                                        <a href="javascript:void()" onclick="llamarModal();" class="btn btn-success no-radius min-width">Ingresa aquí y conócenos</a>
                                </div>
                            </li>
                            <li data-transition="slideleft" data-slotamount="8" data-masterspeed="800">
                                <img data-lazyload="{{url('uploads')}}/{{$inicio2->imagen_banners_inicio}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                                <div class="tp-caption rev-title customin customout"
                                    data-x="right"
                                    data-hoffset="-50"
                                    data-y="220"
                                    data-speed="1100"
                                    data-customin="x:0;y:0;z:0;rotationX:-90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-start="1300"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="600"
                                    style="z-index: 6">{{$inicio2->titulo_banners_inicio}}
                                </div>

                                <div class="tp-caption rev-text text-right customin customout"
                                    data-x="right"
                                    data-hoffset="-50"
                                    data-y="305"
                                    data-speed ="1200"
                                    data-customin="x:0;y:0;z:0;rotationX:-90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-start="1600"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="700"
                                    style="z-index: 12; text-align: right;"><b>{!!$inicio2->descripcion_banners_inicio!!}</b>
                                </div>

                                <div class="tp-caption rev-btn customin customout"
                                    data-x="right"
                                    data-hoffset="-50"
                                    data-y="391"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1200"
                                    data-start="2200"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="800"
                                    style="z-index: 14">
                                        <a href="{{$inicio2->link_banners_inicio}}" class="btn btn-success no-radius min-width">Descargar formulario</a>
                                </div>
                            </li>
                            
                            <li data-transition="slideleft" data-slotamount="8" data-masterspeed="800">
                                <img data-lazyload="{{url('uploads')}}/{{$inicio3->imagen_banners_inicio}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                                <div class="tp-caption rev-title customin customout"
                                    data-x="50"
                                    data-y="220"
                                    data-speed="1100"
                                    data-customin="x:0;y:0;z:0;rotationX:-90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-start="1300"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="600"
                                    style="z-index: 6">{{$inicio3->titulo_banners_inicio}}
                                </div>

                                <div class="tp-caption rev-text customin customout"
                                    data-x="50"
                                    data-y="305"
                                    data-speed ="1200"
                                    data-customin="x:0;y:0;z:0;rotationX:-90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-start="1600"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="700"
                                    style="z-index: 12; text-align: left;"><b>{!!$inicio3->descripcion_banners_inicio!!}</b>
                                </div>

                                <div class="tp-caption rev-btn customin customout"
                                    data-x="50"
                                    data-y="391"
                                    data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                    data-speed="1200"
                                    data-start="2200"
                                    data-easing="Power3.easeInOut"
                                    data-endspeed="800"
                                    style="z-index: 14">
                                        <a href="#" data-toggle="modal" data-target="#verPDF" class="btn btn-success no-radius min-width">Conocelos aquí</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="info-line-section custom">
                    <div class="container">
                        <div class="row">
                            @foreach($inicios1s as $inicios1_item)
                                <div class="col-md-4">
                                    <div class="service">
                                        <span class="service-icon"><img src="{{url('uploads')}}/{{$inicios1_item->imagen_items_inicio}}" alt="" class="wow zoomIn img-responsive center-block"></span>
                                        <div class="service-content">
                                            <h3 class="service-title text-uppercase">{{$inicios1_item->titulo_items_inicio}}</h3>
                                            <p>{!!$inicios1_item->descripcion_items_inicio!!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="mb50 mb60-xs"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="title-border custom text-uppercase mb30">{{$inicios_primera->titulo_primera_inicio}}</h3>
                            <p class="ancho">{!!$inicios_primera->descripcion_primera_inicio!!}</p>
                        </div>

                        <div class="mb50-sm visible-xs visible-sm"></div>

                        <div class="col-md-5">
                            <div class="item">
                                <img src="{{url('uploads')}}/{{$inicios_primera->imagen_primera_inicio}}" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="mb65"></div>

                    <div class="row">
                        <div class="col-md-7 col-md-push-5">
                            <h3 class="title-border custom text-uppercase mb30 wow fadeInUp">{{$inicios_segunda->titulo_segunda_inicio}}</h3>
                            <p class="ancho">{!!$inicios_segunda->descripcion_segunda_inicio!!}</p>
                        </div>

                        <div class="mb35-sm visible-xs visible-sm"></div>

                        <div class="col-md-5 col-md-pull-7">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="7000">
                                <div class="carousel-inner">
                                    <?php $i=0; ?>
                                    @foreach($videos1s as $videos1)
                                        <div class="item <?php if($i==0){ echo "active"; $i++; } ?>">
                                            <iframe width="100%" height="300" src="{{$videos1->url_videos}}" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    @endforeach
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb40 hidden-xs"></div>

                <div class="bg-lightergray pt40 pb20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <center>
                                    <a href="{{$contactanos->twitter_contactenos}}" target="_blank">
                                        <img src="imgUser/twitter.png">
                                    </a>
                                </center>
                            </div>
                            <div class="col-md-4">
                                <center>
                                    <a href="{{$contactanos->instagram_contactenos}}" target="_blank">
                                        <img src="imgUser/instagram.png">
                                    </a>
                                </center>
                            </div>
                            <div class="col-md-4">
                                <center>
                                    <a href="{{$contactanos->youtube_contactenos}}" target="_blank">
                                        <img src="imgUser/youtube.png">
                                    </a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="mb40 hidden-xs"></div>

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

        <!-- Modal PDF -->
        <div id="verPDF" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <iframe src="{{$inicio3->link_banners_inicio}}" width="600" height="780"></iframe>
                </div>
            </div>
        </div>

        <div id="verVideo" class="modal fade" role="dialog" onclick="cerrarVideos()">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class='modal-header' style="background: #009688;">
                    <div style="font-size: 20px;">Nuestra organizacion</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" >&times;</span>
                    </button>
                </div>
                <div class='modal-body'>
                    <div class="embed-container">
                        <iframe id="iframe1" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="{{ asset('jsUser/smoothscroll.js') }}"></script>
        <script src="{{ asset('jsUser/bootstrap.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.hoverIntent.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('jsUser/waypoints.min.js') }}"></script>
        <script src="{{ asset('jsUser/waypoints-sticky.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.debouncedresize.js') }}"></script>
        <script src="{{ asset('jsUser/retina.min.js') }}"></script>
        <script src="{{ asset('jsUser/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('jsUser/jflickrfeed.min.js') }}"></script>
        <script src="{{ asset('jsUser/twitter/jquery.tweet.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('jsUsers/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('jsUser/skrollr.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.countTo.js') }}"></script>
        <script src="{{ asset('jsUser/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('jsUser/contact.js') }}"></script>
        <script src="{{ asset('jsUser/main.js') }}"></script>
        <script src="{{ asset('jsUser/wow.min.js') }}"></script>
        <script>
            (function () {
                "use strict";
                jQuery('#revslider').revolution({
                    delay:8000,
                    startwidth:1170,
                    startheight:600,
                    fullWidth:"on",
                    fullScreen:"off",
                    hideTimerBar: "on",
                    spinner:"spinner3",
                    navigationStyle: "preview3",
                    soloArrowLeftHOffset:20,
                    soloArrowRightHOffset:20
                });
            }());
        </script>

        <script type="text/javascript">
            window.onscroll = scroll;
            function scroll(){
                if(window.pageYOffset >= 350){
                    $( "#logoHeader" ).removeClass( "marginLogo" ).addClass( "marginLogo2" );    
                    $( "#main-navbar-container" ).removeClass( "marginMenu" ).addClass( "marginMenu2" );         
                }else{
                    $( "#logoHeader" ).removeClass( "marginLogo2" ).addClass( "marginLogo" );
                    $( "#main-navbar-container" ).removeClass( "marginMenu2" ).addClass( "marginMenu" ); 
                }
            }
        </script>

        <script type="text/javascript">
            function llamarModal(){
                $('#iframe1').attr('src', '{{$inicio1->link_banners_inicio}}');
                $('#verVideo').modal('show'); 
            }
            function cerrarVideos(){
                $('#iframe1').attr('src', ''); 
                $("#verVideo").modal("hide");
            }
        </script>
    	
    </body>
</html>