@include('user.header') 
    
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$videos->titulo_videos}}</h1>
                            <p class="page-header-desc">{{$videos->descripcion_videos}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <div class="container">
                <div class="row">
                    @foreach($videos1s as $videos1)
                        <div class="col-md-6 mb20">
                            <iframe width="560" height="315" src="{{$videos1->url_videos}}" frameborder="0" allowfullscreen></iframe>
                        </div>
                    @endforeach
                </div>
            </div>
         
            <div class="container">
                <nav class="pagination-container text-right">
                    <div style="text-align: center">{{$videos1s->links()}}</div>
                </nav>
            </div>
@include('user.footer')