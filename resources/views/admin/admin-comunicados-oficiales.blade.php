@include('admin.admin-header')
                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Comunicados Oficiales</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearComunicado"><u>Crear comunicado</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/comunicados_oficiales_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_comunicados_oficiales" class="form-control" value="{{$comunicados_oficiales->titulo_comunicados_oficiales}}" placeholder="Título">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_comunicados_oficiales" class="form-control" placeholder="Descripción" value="{{$comunicados_oficiales->descripcion_comunicados_oficiales}}">
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
                                        @foreach($comunicados_oficiales1s as $comunicados_oficiales1)
                                            <tr>
                                                <td class="text-center"><img src="{{url('uploads')}}/{{$comunicados_oficiales1->imagen_comunicados_oficiales}}" width="80%"></td>
                                                <td>{{$comunicados_oficiales1->titulo_comunicados_oficiales}}</td>
                                                <td>{{$comunicados_oficiales1->descripcion_comunicados_oficiales}}</td>
                                                <td class="text-center">{{$comunicados_oficiales1->autor_comunicados_oficiales}}</td>
                                                <td class="text-center">{{$comunicados_oficiales1->ano_comunicados_oficiales}}</td>
                                                <td class="text-center">{{$comunicados_oficiales1->pdf_comunicados_oficiales}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$comunicados_oficiales1->id!!}" data-titulo_comunicados_oficiales="{!!$comunicados_oficiales1->titulo_comunicados_oficiales!!}" data-descripcion_comunicados_oficiales="{!!$comunicados_oficiales1->descripcion_comunicados_oficiales!!}" data-autor_comunicados_oficiales="{!!$comunicados_oficiales1->autor_comunicados_oficiales!!}" data-ano_comunicados_oficiales="{!!$comunicados_oficiales1->ano_comunicados_oficiales!!}"  data-toggle="modal" data-target="#editarComunicado" title="Editar Comunicado" class="btn btn-effect-ripple btn-sm btn-success editar"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('/admin/comunicados_oficiales_eliminar')}}/{{$comunicados_oficiales1->id}}" title="Eliminar Documento" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Boletin-->
        <div class="modal fade" id="crearComunicado" tabindex="-1" role="dialog" aria-labelledby="crearDocumentos" aria-hidden="true">
            <form action="{{ url('/admin/comunicados_oficiales_crear') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear Comunicado</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Título</label>
                                        <input type="text" class="form-control" id="" name="titulo_comunicados_oficiales" placeholder="Título del documento" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="" name="descripcion_comunicados_oficiales" placeholder="Descripción del documento" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="" name="autor_comunicados_oficiales" placeholder="Autor del documento" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="" name="ano_comunicados_oficiales" placeholder="Año de publicación" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" class="form-control" id="" name="imagen_comunicados_oficiales" placeholder="Imagen" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" class="form-control" id="" name="pdf_comunicados_oficiales" placeholder="Archivo PDF" required>
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
        <div class="modal fade" id="editarComunicado" tabindex="-1" role="dialog" aria-labelledby="editarComunicado" aria-hidden="true">
            <form action="{{ url('/admin/comunicados_oficiales_editar2') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar Documento</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Título</label>
                                        <input type="text" class="form-control" id="titulo_comunicados_oficiales" name="titulo_comunicados_oficiales" placeholder="Título del documento">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="descripcion_comunicados_oficiales" name="descripcion_comunicados_oficiales" placeholder="Descripción del documento"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="autor_comunicados_oficiales" name="autor_comunicados_oficiales" placeholder="Autor del documento">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="ano_comunicados_oficiales" name="ano_comunicados_oficiales" placeholder="Año de publicación">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" class="form-control" id="" name="imagen_comunicados_oficiales" placeholder="Imagen" >
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" class="form-control" id="" name="pdf_comunicados_oficiales" placeholder="Archivo PDF" >
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
        $("#titulo_comunicados_oficiales").val($(this).data("titulo_comunicados_oficiales"));
        $("#descripcion_comunicados_oficiales").val($(this).data("descripcion_comunicados_oficiales"));
        $("#autor_comunicados_oficiales").val($(this).data("autor_comunicados_oficiales"));
        $("#ano_comunicados_oficiales").val($(this).data("ano_comunicados_oficiales"));
    });
</script>