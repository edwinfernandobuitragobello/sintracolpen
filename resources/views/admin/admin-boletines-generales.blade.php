@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Boletines Generales</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearBoletin"><u>Crear boletin</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/boletines_generales_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_boletines_generales" class="form-control" value="{{$boletines_generales->titulo_boletines_generales}}" placeholder="Título">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_boletines_generales" class="form-control" placeholder="Descripción" value="{{$boletines_generales->descripcion_boletines_generales}}">
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
                                            <th width="15%" class="text-center">Pdf</th>
                                            <th width="15%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($boletines_generales1s as $boletines_generales1)
                                            <tr>
                                                <td class="text-center"><img src="{{url('uploads')}}/{{$boletines_generales1->imagen_boletines_generales}}" width="80%"></td>
                                                <td>{{$boletines_generales1->titulo_boletines_generales}}</td>
                                                <td>{{$boletines_generales1->descripcion_boletines_generales}}</td>
                                                <td class="text-center">{{$boletines_generales1->autor_boletines_generales}}</td>
                                                <td class="text-center">{{$boletines_generales1->ano_boletines_generales}}</td>
                                                <td class="text-center">{{$boletines_generales1->pdf_boletines_generales}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$boletines_generales1->id!!}" data-titulo_boletines_generales="{!!$boletines_generales1->titulo_boletines_generales!!}" data-descripcion_boletines_generales="{!!$boletines_generales1->descripcion_boletines_generales!!}" data-autor_boletines_generales="{!!$boletines_generales1->autor_boletines_generales!!}" data-ano_boletines_generales="{!!$boletines_generales1->ano_boletines_generales!!}"  data-toggle="modal" data-target="#editarBoletin" title="Editar Boletin" class="btn btn-effect-ripple btn-sm btn-success editar"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('/admin/boletines_generales_eliminar')}}/{{$boletines_generales1->id}}" title="Eliminar Documento" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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
        <div class="modal fade" id="crearBoletin" tabindex="-1" role="dialog" aria-labelledby="crearBoletin" aria-hidden="true">
            <form action="{{ url('/admin/boletines_generales_crear') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear Boletin</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Título</label>
                                        <input type="text" class="form-control" id="" name="titulo_boletines_generales" placeholder="Título del documento" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="" name="descripcion_boletines_generales" placeholder="Descripción del documento" maxlength="200" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="" name="autor_boletines_generales" placeholder="Autor del documento" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="" name="ano_boletines_generales" placeholder="Año de publicación" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" id="" name="imagen_boletines_generales" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" id="" name="pdf_boletines_generales" class="filestyle" data-buttonName="btn-primary" data-buttonText="Archivo PDF" required>
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
        <div class="modal fade" id="editarBoletin" tabindex="-1" role="dialog" aria-labelledby="editarBoletin" aria-hidden="true">
            <form action="{{ url('/admin/boletines_generales_editar2') }}" method="POST" role="form" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" id="titulo_boletines_generales" name="titulo_boletines_generales" placeholder="Título del documento" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="descripcion_boletines_generales" name="descripcion_boletines_generales" placeholder="Descripción del documento" maxlength="200" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="autor_boletines_generales" name="autor_boletines_generales" placeholder="Autor del documento" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="ano_boletines_generales" name="ano_boletines_generales" placeholder="Año de publicación" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" id="" name="imagen_boletines_generales" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" id="" name="pdf_boletines_generales" class="filestyle" data-buttonName="btn-primary" data-buttonText="Archivo PDF">
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
        $("#titulo_boletines_generales").val($(this).data("titulo_boletines_generales"));
        $("#descripcion_boletines_generales").val($(this).data("descripcion_boletines_generales"));
        $("#autor_boletines_generales").val($(this).data("autor_boletines_generales"));
        $("#ano_boletines_generales").val($(this).data("ano_boletines_generales"));
    });
</script>