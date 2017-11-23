@include('user.header') 
    
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$galerias->titulo_galerias}}</h1>
                            <p class="page-header-desc">{{$galerias->descripcion_galerias}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <div class="container">

                <div id="portfolio-item-container" class="max-col-3 popup-gallery" data-layoutmode="fitRows">
                    @foreach($galerias1s as $galerias1)
                        <div class="portfolio-item portfolio-meta-slideup design">
                            <figure>
                                <a href="{{url('uploads')}}/{{$galerias1->imagen_galerias}}" class="zoom-item" title="{{$galerias1->nombre_galerias}}"><img src="{{url('uploads')}}/{{$galerias1->imagen_galerias}}" alt="{{$galerias1->nombre_galerias}}" class="img-responsive"></a>
                            </figure>
                            <div class="portfolio-meta backgroungWhite">
                                <h2 class="portfolio-title colorWhite">{{$galerias1->nombre_galerias}}</h2>
                            </div>                         
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="container">
                <nav class="pagination-container text-right">
                    <div style="text-align: center">{{$galerias1s->links()}}</div>
                </nav>
            </div>

@include('user.footer')


