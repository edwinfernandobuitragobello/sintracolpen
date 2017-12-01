@include('user.header') 
    
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$contenidos_sindicales->titulo_contenidos_sindicales}}</h1>
                            <p class="page-header-desc">{{$contenidos_sindicales->descripcion_contenidos_sindicales}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <div class="container">
                <div class="max-col-3" id="blog-item-container">
                    @foreach($contenidos_sindicales1s as $contenidos_sindicales1)
                        <article class="entry entry-box wow fadeInUp">
                            <div class="entry-media">
                                <figure>
                                    <a href="#" data-toggle="modal" data-target="#verPDF">
                                        <img src="{{url('uploads')}}/{{$contenidos_sindicales1->imagen_contenidos_sindicales}}" alt="Nombre del boletin">
                                    </a>
                                </figure>
                            </div>
                            <div class="entry-content-wrapper">
                                <h2 class="entry-title"><a href="#" data-toggle="modal" data-target="#verPDF">{{$contenidos_sindicales1->titulo_contenidos_sindicales}}</a></h2>
                                <div class="entry-content">
                                    <p>{{$contenidos_sindicales1->descripcion_contenidos_sindicales}}</p>
                                </div>
                                <footer class="entry-footer clearfix">
                                    <span class="entry-cats">
                                        <span class="entry-label"></span>Por <b>{{$contenidos_sindicales1->autor_contenidos_sindicales}}</b>
                                    </span>
                                    <a href="#" class="entry-readmore text-right editar" data-pdf="{{$contenidos_sindicales1->pdf_contenidos_sindicales}}" data-toggle="modal" data-target="#verPDF">Ver PDF<i class="fa fa-eye"></i></a>
                                </footer>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="sm-margin"></div>

            <div class="container">
                <nav class="pagination-container text-right">
                    <div style="text-align: center">{{$contenidos_sindicales1s->links()}}</div>
                </nav>
            </div>

            <!-- Modal pdf -->
            <div id="verPDF" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <iframe src=""  id="documento_pdf" width="600" height="780"></iframe>
                    </div>
                </div>
            </div>
@include('user.footer')

<script type="text/javascript">
    $(".editar").click(function(){
        $("#documento_pdf").attr("src", "{{url('uploads')}}/"+$(this).data("pdf"));
    });
</script>


