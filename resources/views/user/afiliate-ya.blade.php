@include('user.header') 
    
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$afiliate_yas->titulo_afiliate_ya}}</h1>
                            <p class="page-header-desc">{{$afiliate_yas->descripcion_afiliate_ya}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb40"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery-container">
                            <div class="product-top">
                                <img src="{{url('uploads')}}/{{$afiliate_yas1s->imagen1_afiliate_ya}}" class="img-responsive"/>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{url('uploads')}}/{{$afiliate_yas1s->pfd_afiliate_ya}}" class="btn btn-success btn-block" download="Formulario de afiliación">Descargar formulario <i class="fa fa-download"></i></a>
                            </div>
                            <div class="col-md-6">
                                <a href="mailto:{{url('uploads')}}/{{$afiliate_yas1s->correo_afiliate_ya}}" class="btn btn-primary btn-block">Enviar formulario <i class="fa fa-send"></i></a>
                            </div>
                        </div>
                        <div class="mb20"></div>
                        <div class="product-gallery-container">
                            <div class="product-top">
                                <a href="{{url('uploads')}}/{{$afiliate_yas1s->pfd_afiliate_ya}}" title="Descargar formulario" download="Formulario de afiliación">
                                    <img src="{{url('uploads')}}/{{$afiliate_yas1s->imagen2_afiliate_ya}}" class="img-responsive"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('user.footer')


