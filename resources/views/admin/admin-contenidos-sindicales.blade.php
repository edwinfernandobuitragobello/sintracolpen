@include('admin.admin-header')
                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Contenido Sindical</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearContenidoS"><u>Crear contenido</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/contenidos_sindicales_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_contenidos_sindicales" class="form-control" placeholder="Título" value="{{$contenidos_sindicales->titulo_contenidos_sindicales}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_contenidos_sindicales" class="form-control" placeholder="Descripción" value="{{$contenidos_sindicales->descripcion_contenidos_sindicales}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary" style="margin-top: 25px">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="block">
                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="10%" class="text-center">Imagen</th>
                                            <th width="15%">Título</th>
                                            <th width="30%">Descripción</th>
                                            <th width="10%" class="text-center">Autor</th>
                                            <th width="5%" class="text-center">Año</th>
                                            <th width="15%" class="text-center">PDF</th>
                                            <th width="15%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contenidos_sindicales1s as $contenidos_sindicales1)
                                            <tr>
                                                <td class="text-center"><img src="{{url('uploads')}}/{{$contenidos_sindicales1->imagen_contenidos_sindicales}}" width="80%"></td>
                                                <td>{{$contenidos_sindicales1->titulo_contenidos_sindicales}}</td>
                                                <td>{{$contenidos_sindicales1->descripcion_contenidos_sindicales}}</td>
                                                <td class="text-center">{{$contenidos_sindicales1->autor_contenidos_sindicales}}</td>
                                                <td class="text-center">{{$contenidos_sindicales1->ano_contenidos_sindicales}}</td>
                                                <td class="text-center">{{$contenidos_sindicales1->pdf_contenidos_sindicales}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$contenidos_sindicales1->id!!}" data-titulo_contenidos_sindicales="{!!$contenidos_sindicales1->titulo_contenidos_sindicales!!}" data-descripcion_contenidos_sindicales="{!!$contenidos_sindicales1->descripcion_contenidos_sindicales!!}" data-autor_contenidos_sindicales="{!!$contenidos_sindicales1->autor_contenidos_sindicales!!}" data-ano_contenidos_sindicales="{!!$contenidos_sindicales1->ano_contenidos_sindicales!!}"  data-toggle="modal" data-target="#editarContenidoS" title="Editar Documento" class="btn btn-effect-ripple btn-sm btn-success editar"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('/admin/contenidos_sindicales_eliminar')}}/{{$contenidos_sindicales1->id}}" title="Eliminar Documento" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Crear Contenido Sindical-->
        <div class="modal fade" id="crearContenidoS" tabindex="-1" role="dialog" aria-labelledby="crearContenidoS" aria-hidden="true">
            <form action="{{ url('/admin/contenidos_sindicales_crear') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear Contenido</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Título</label>
                                        <input type="text" class="form-control" id="" name="titulo_contenidos_sindicales" placeholder="Título del contenido" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="" name="descripcion_contenidos_sindicales" placeholder="Descripción del contenido" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="" name="autor_contenidos_sindicales" placeholder="Autor del contenido" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="" name="ano_contenidos_sindicales" placeholder="Año de publicación" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" class="form-control" id="" name="imagen_contenidos_sindicales" placeholder="Imagen" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" class="form-control" id="" name="pdf_contenidos_sindicales" placeholder="Archivo PDF" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-success">Crear</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Modal Editar Boletin-->
        <div class="modal fade" id="editarContenidoS" tabindex="-1" role="dialog" aria-labelledby="editarContenidoS" aria-hidden="true">
            <form action="{{ url('/admin/contenidos_sindicales_editar2') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar Contenido</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Título</label>
                                        <input type="text" class="form-control" id="titulo_contenidos_sindicales" name="titulo_contenidos_sindicales" placeholder="Título del contenido">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="descripcion_contenidos_sindicales" name="descripcion_contenidos_sindicales" placeholder="Descripción del contenido"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="autor_contenidos_sindicales" name="autor_contenidos_sindicales" placeholder="Autor del contenido">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="ano_contenidos_sindicales" name="ano_contenidos_sindicales" placeholder="Año de publicación">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" class="form-control" id="" name="imagen_contenidos_sindicales" placeholder="Imagen">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" class="form-control" id="" name="pdf_contenidos_sindicales" placeholder="Archivo PDF">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-success">Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

@include('admin.admin-footer')
<script type="text/javascript">
    $(".editar").click(function(){
        $("#id").val($(this).data("id"));
        $("#titulo_contenidos_sindicales").val($(this).data("titulo_contenidos_sindicales"));
        $("#descripcion_contenidos_sindicales").val($(this).data("descripcion_contenidos_sindicales"));
        $("#autor_contenidos_sindicales").val($(this).data("autor_contenidos_sindicales"));
        $("#ano_contenidos_sindicales").val($(this).data("ano_contenidos_sindicales"));
    });
</script>