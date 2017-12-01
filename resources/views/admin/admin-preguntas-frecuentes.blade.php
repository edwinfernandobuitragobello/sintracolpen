@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Preguntas Frecuentes</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearPregunta"><u>Crear pregunta</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/preguntas_frecuentes_editar1') }}" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_preguntas" class="form-control" placeholder="Título" value="{{$preguntas_frecuentes->titulo_preguntas}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_preguntas" class="form-control" placeholder="Descripción" value="{{$preguntas_frecuentes->descripcion_preguntas}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input type="file" id="" name="imagen_preguntas" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="block">
                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="25%">Pregunta</th>
                                            <th width="60%">Respuesta</th>
                                            <th width="15%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($preguntas_frecuentes1s as $preguntas_frecuentes1)
                                            <tr>
                                                <td>{{$preguntas_frecuentes1->pregunta_preguntas}}</td>
                                                <td>{{$preguntas_frecuentes1->respuesta_preguntas}}</td>
                                                <td class="text-center">
                                                    <a onclick="preguntas_frecuentes_editar('{{$preguntas_frecuentes1->id}}' , '{{$preguntas_frecuentes1->pregunta_preguntas}}' , '{{$preguntas_frecuentes1->respuesta_preguntas}}')" href="#" data-toggle="modal" data-target="#editarPregunta" title="Editar Pregunta" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('admin/preguntas_frecuentes_eliminar')}}/{{$preguntas_frecuentes1->id}}" title="Eliminar Pregunta" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Pregunta-->
        <div class="modal fade" id="crearPregunta" tabindex="-1" role="dialog" aria-labelledby="crearPregunta" aria-hidden="true">
            <form action="{{ url('/admin/preguntas_frecuentes_crear') }}" method="POST" role="form">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear pregunta</h3>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Pregunta</label>
                                        <input type="text" class="form-control" id="" name="pregunta_preguntas" placeholder="Pregunta..." required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Respuesta</label>
                                        <textarea class="form-control textArea" rows="6" id="" name="respuesta_preguntas" placeholder="Respuesta..." required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Crear</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--Modal Editar Pregunta-->
        <div class="modal fade" id="editarPregunta" tabindex="-1" role="dialog" aria-labelledby="editarPregunta" aria-hidden="true">
            <form action="{{ url('/admin/preguntas_frecuentes_editar') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar pregunta</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Pregunta</label>
                                        <input type="hidden" class="form-control" id="id" name="id" placeholder="Pregunta..." value="">
                                        <input type="text" class="form-control" id="pregunta_preguntas" name="pregunta_preguntas" placeholder="Pregunta..." value="">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Respuesta</label>
                                        <textarea class="form-control textArea" rows="6" id="respuesta_preguntas" name="respuesta_preguntas" placeholder="Respuesta..."></textarea>
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
<script type="text/javascript">
    function preguntas_frecuentes_editar(id,pregunta,respuesta){
        $("#id").val(id);
        $("#pregunta_preguntas").val(pregunta);
        $("#respuesta_preguntas").val(respuesta);
    }
</script>
@include('admin.admin-footer')