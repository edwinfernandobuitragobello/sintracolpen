@include('user.header') 

        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$nosotros->titulo_nosotros}}</h1>
                            <p class="page-header-desc">{{$nosotros->descripcion_nosotros}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb40"></div> 

            <!--¿QUÉ HACEMOS?-->
            <div class="container">
                <div class="row">
                    <!--Que hacemos parte-1-->
                    <div class="col-md-6">
                        <h2 class="title-underblock custom mb30">¿Quiénes somos y qué hacemos?</h2>
                        <p>
                            {{$nosotros1s->descripcion1_nosotros}}
                        </p>
                    </div>

                    <!--Slider-->
                    <div class="col-md-6">
                        <div class="mb70"></div>
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="7000">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="{{url('uploads')}}/{{$nosotros1s->imagen1_nosotros}}" class="img-responsive" alt="Slider post 1">
                                </div>
                                <div class="item">
                                    <img src="{{url('uploads')}}/{{$nosotros1s->imagen2_nosotros}}" class="img-responsive" alt="Slider post 1">
                                </div>
                                <div class="item">
                                    <img src="{{url('uploads')}}/{{$nosotros1s->imagen3_nosotros}}" class="img-responsive" alt="Slider post 1">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!--Que hacemos parte-2-->
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            {{$nosotros1s->descripcion2_nosotros}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <!--MISIÓN - VISIÓN -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-underblock custom mb30">Misión</h2>
                        <p>{{$nosotros2s->mision_nosotros}}</p>
                    </div>

                    <div class="col-md-6">
                        <h2 class="title-underblock custom mb30">Visión</h2>
                        <p>{{$nosotros3s->vision_nosotros}}</p>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <!--PRINCIPIOS ORGANIZACIONALES-->
            <div class="bg-lightgray pt70 pb20">
                <div class="container">
                    <div class="row">
                        <h2 class="title-underblock custom mb30">Principios organizacionales</h2>
                        <p >{{$nosotros4s->principios_nosotros}}</p>
                        <br><br>
                        @foreach($nosotros5s as $nosotros5)
                            <div class="col-sm-4">
                                <div class="service">
                                    <span class="service-icon first-color"><img src="{{url('uploads')}}/{{$nosotros5->icono_principios_nosotros}}" alt="" class="wow zoomIn img-responsive center-block"></span>
                                    <div class="service-content">
                                        <h3 class="service-title text-uppercase first-color">{{$nosotros5->nombre_principios_nosotros}}</h3>
                                        <p>{{$nosotros5->descripcion_principios_nosotros}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!--VALORES ORGANIZACIONALES-->
            <div class="bg-custom pt70 pb15 pt60-xs pb15-xs">
                <div class="container">
                    <div class="row">
                        <h2 class="title-underblock custom mb30 text-gray">Valores organizacionales</h2>
                        <p>{{$nosotros6s->valores_nosotros}}</p>
                        <br><br>
                        @foreach($nosotros7s as $nosotros7)
                            <div class="col-sm-4">
                                <div class="service">
                                    <span class="service-icon"><img src="{{url('uploads')}}/{{$nosotros7->icono_valores_nosotros}}" alt="" class="wow zoomIn img-responsive center-block"></span>
                                    <div class="service-content">
                                        <h3 class="service-title text-uppercase text-gray">{{$nosotros7->nombre_valores_nosotros}}</h3>
                                        <p>{{$nosotros7->descripcion_valores_nosotros}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mb80 mb40-sm"></div>

            <div class="container">
                    <div id="carousel-tabs" class="carousel carousel-tab smaller slide" data-ride="carousel" data-interval="12000">
                        <!-- Indicators -->
                        <ol class="carousel-indicators mb45">
                            <li data-target="#carousel-tabs" data-slide-to="0" class="active">
                                <img src="{{url('uploads')}}/{{$nosotros8s->icono_organismos_nosotros}}" alt="Organismos de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                <span>{{$nosotros8s->titulo_organismos_nosotros}}</span>
                            </li>
                            <li data-target="#carousel-tabs" data-slide-to="1">
                                <img src="{{url('uploads')}}/{{$nosotros9s->icono_junta_nosotros}}" alt="junta de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                <span>{{$nosotros9s->titulo_junta_nosotros}}</span>
                            </li>
                            <li data-target="#carousel-tabs" data-slide-to="2">
                                <img src="{{url('uploads')}}/{{$nosotros10s->icono_comite_nosotros}}" alt="comite de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                <span>{{$nosotros10s->titulo_comite_nosotros}}</span>
                            </li>
                            <li data-target="#carousel-tabs" data-slide-to="3">
                                <img src="{{url('uploads')}}/{{$nosotros11s->icono_bogota_nosotros}}" alt="comite de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                <span>{{$nosotros11s->titulo_bogota_nosotros}}</span>
                            </li>
                        </ol>
                        
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="{{url('uploads')}}/{{$nosotros8s->imagen_organismos_nosotros}}" alt="Organismos de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>{{$nosotros8s->titulo_organismos_nosotros}}</span></h2>
                                        <p>
                                            {!!$nosotros8s->descripcion_organismos_nosotros!!}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="{{url('uploads')}}/{{$nosotros9s->imagen_junta_nosotros}}" alt="Junta Directiva Nacional" width="80%" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>{{$nosotros9s->titulo_junta_nosotros}}</span></h2>
                                        <p>
                                            {!!$nosotros9s->descripcion_junta_nosotros!!}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="{{url('uploads')}}/{{$nosotros10s->imagen_comite_nosotros}}" alt="comite de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>{{$nosotros10s->titulo_comite_nosotros}}</span></h2>
                                        <p>
                                            {!!$nosotros10s->descripcion_comite_nosotros!!}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="{{url('uploads')}}/{{$nosotros11s->imagen_bogota_nosotros}}" alt="comite de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>{{$nosotros11s->titulo_bogota_nosotros}}</span></h2>
                                        <p>
                                            {!!$nosotros11s->descripcion_bogota_nosotros!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@include('user.footer')

