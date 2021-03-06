@include('user.header') 
    
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$comunicados_oficiales->titulo_comunicados_oficiales}}</h1>
                            <p class="page-header-desc">{{$comunicados_oficiales->descripcion_comunicados_oficiales}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <div class="container">
                <div class="max-col-3" id="blog-item-container">
                    @foreach($comunicados_oficiales1s as $comunicados_oficiales1)
                        <article class="entry entry-box wow fadeInUp">
                            <div class="entry-media">
                                <figure>
                                    <a href="#" data-toggle="modal" data-target="#verPDF">
                                        <img src="{{url('uploads')}}/{{$comunicados_oficiales1->imagen_comunicados_oficiales}}" alt="Nombre del boletin">
                                    </a>
                                </figure>
                            </div>
                            <div class="entry-content-wrapper">
                                <h2 class="entry-title"><a href="#" data-toggle="modal" data-target="#verPDF">{{$comunicados_oficiales1->titulo_comunicados_oficiales}}</a></h2>
                                <div class="entry-content">
                                    <p>{{$comunicados_oficiales1->descripcion_comunicados_oficiales}}</p>
                                </div>
                                <footer class="entry-footer clearfix">
                                    <span class="entry-cats">
                                        <span class="entry-label"></span>Por <b>{{$comunicados_oficiales1->autor_comunicados_oficiales}}</b>
                                    </span>
                                    <a href="#" class="entry-readmore text-right editar" data-pdf="{{$comunicados_oficiales1->pdf_comunicados_oficiales}}" data-toggle="modal" data-target="#verPDF">Ver PDF<i class="fa fa-eye"></i></a>
                                </footer>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="sm-margin"></div>

            <div class="container">
                <nav class="pagination-container text-right">
                    <div style="text-align: center">{{$comunicados_oficiales1s->links()}}</div>
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


