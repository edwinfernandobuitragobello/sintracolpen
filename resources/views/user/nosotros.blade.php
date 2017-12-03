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
                                <i class="icon-inicio"></i>
                                <span>Organismos<br> de Dirección</span>
                            </li>
                            <li data-target="#carousel-tabs" data-slide-to="1">
                                <i class="icon-bubbles"></i>
                                <span>Junta Directiva<br> Nacional</span>
                            </li>
                            <li data-target="#carousel-tabs" data-slide-to="2">
                                <i class="icon-badge"></i>
                                <span>Cómite Seccional<br> Bucaramanga</span>
                            </li>
                            <li data-target="#carousel-tabs" data-slide-to="3">
                                <i class="icon-action-redo"></i>
                                <span>Junta Directiva<br> Seccional Bogotá</span>
                            </li>
                        </ol>
                        
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="img/juntadirectiva.jpg" alt="Organismos de Dirección" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>Organismos de Dirección</span></h2>
                                        <p>
                                            Los organismos de dirección de nuestra organización sindical, en su orden jerárquico son:<br><br>
                                            1.  Asamblea General de Afiliados <br>
                                            2.  Junta Directiva Nacional <br>
                                            3.  Asambleas Subdirectivas Seccionales <br>
                                            4.  Juntas Directivas Seccionales <br>
                                            5.  Asambleas Comités Seccionales <br>
                                            6.  Juntas Directivas Comités Seccionales <br>
                                            7.  Comisión Nacional de Reclamos
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="img/juntadirectiva.jpg" alt="Junta Directiva Nacional" width="80%" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>Junta Directiva Nacional</span></h2>
                                        <p>
                                           Según los Estatutos del Sindicato de Trabajadores de la Administradora de Pensiones COLPENSIONES – SINTRACOLPEN – la Junta Directiva se encuentra organizada de acuerdo a lo establecido en el ARTÍCULO 14º, integrada por diez (10) miembros (1) Presidente, (1) Vicepresidente, (1) Secretaria General, (1) Tesorero General, (1) Fiscal Nacional, (1) Coordinador(a) de Asuntos Jurídicos y Bienestar Laboral, (1) Coordinación(a) de Gestión Administrativa y Bienestar, (1) Coordinador(a) de Comunicaciones, (1) Coordinador(a) de Capacitación Sindical y  Derechos Humanos, (1) Coordinador(a) Nacional de afiliaciones y la Comisión de Reclamos integrada por dos (2) miembros.<br><br>

                                           <b>Propósito:</b> Establecer los criterios y procesos para el manejo de las relaciones con los afiliados, trabajadores, empleador, las diferentes instancias del sindicato y con otras organizaciones sindicales y sociales.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="img/juntadirectiva.jpg" alt="Junta Directiva Nacional" width="80%" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>Junta Directiva Nacional</span></h2>
                                         <p>
                                            La Junta Directiva Seccional Bogotá, integrada por diez (10) miembros un (1) Presidente, un (1) Vicepresidente, un (1) Secretario General, un (1) Tesorero, uno (1) fiscal, y cinco (5) miembros suplentes quienes serán organizados internamente conforme sus necesidades a través de coordinaciones.<br><br>
                                            <b>Propósito:</b> Promover espacios de acompañamiento, seguimiento y apoyo en las relaciones con el empleador, encaminadas a lograr el bienestar general de los trabajadores y sus familias.

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="visible-md visible-lg"></div>
                                        <img src="img/juntadirectiva.jpg" alt="Cómite Seccional Bucaramanga" class="img-responsive center-block wow fadeInUp mb30">
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="title-border title-bg-line gray"><span>Cómite Seccional Bucaramanga</span></h2>
                                        <p>
                                            El comité Seccional de Bucaramanga integrado por cinco (5) miembros:<br><br>
                                            1. Un Presidente <br>
                                            2. Un Vicepresidente <br>
                                            3. Un Tesorero <br>
                                            4. Un Secretario General <br>
                                            5. Un Fiscal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@include('user.footer')

