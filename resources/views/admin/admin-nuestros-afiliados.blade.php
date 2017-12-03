@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Nuestros afiliados</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearAfiliado"><u>Crear afiliado</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/nuestros_afiliados_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_nuestros_afiliados" class="form-control" value="{{$nuestros_afiliados->titulo_nuestros_afiliados}}" placeholder="Título">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_nuestros_afiliados" class="form-control" placeholder="Descripción" value="{{$nuestros_afiliados->descripcion_nuestros_afiliados}}">
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
                                            <th width="20%" class="text-center">Afiliado</th>
                                            <th width="20%" class="text-center">Cantidad</th>
                                            <th width="20%" class="text-center">Latitud</th>
                                            <th width="20%" class="text-center">Longitud</th>
                                            <th width="20%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nuestros_afiliados1s as $nuestros_afiliados)
                                            <tr>
                                                <td class="text-center">{{$nuestros_afiliados->afiliado_nuestros_afiliados}}</td>
                                                <td class="text-center">{{$nuestros_afiliados->cantidad_nuestros_afiliados}}</td>
                                                <td class="text-center">{{$nuestros_afiliados->latitud_nuestros_afiliados}}</td>
                                                <td class="text-center">{{$nuestros_afiliados->longitud_nuestros_afiliados}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id="{!!$nuestros_afiliados->id!!}" data-afiliado_nuestros_afiliados="{!!$nuestros_afiliados->afiliado_nuestros_afiliados!!}" data-cantidad_nuestros_afiliados="{!!$nuestros_afiliados->cantidad_nuestros_afiliados!!}" data-latitud_nuestros_afiliados="{!!$nuestros_afiliados->latitud_nuestros_afiliados!!}" data-longitud_nuestros_afiliados="{!!$nuestros_afiliados->longitud_nuestros_afiliados!!}" data-toggle="modal" data-target="#editarAfiliado" title="Editar Afiliado" class="btn btn-effect-ripple btn-sm btn-success editar"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('/admin/nuestros_afiliados_eliminar')}}/{{$nuestros_afiliados->id}}" title="Eliminar Afiliado" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Afiliado-->
        <div class="modal fade" id="crearAfiliado" tabindex="-1" role="dialog" aria-labelledby="crearAfiliado" aria-hidden="true">
            <form action="{{ url('/admin/nuestros_afiliados_crear') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear afiliado</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Afiliado</label>
                                        <input type="text" class="form-control" id="" name="afiliado_nuestros_afiliados" placeholder="Nombre del afiliado" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Cantidad</label>
                                        <input type="text" class="form-control" id="" name="cantidad_nuestros_afiliados" placeholder="Cantidad de afiliados" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Latitud</label>
                                        <input type="text" class="form-control" id="" name="latitud_nuestros_afiliados" placeholder="Latitud..." required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Longitud</label>
                                        <input type="text" class="form-control" id="" name="longitud_nuestros_afiliados" placeholder="Longitud..." required>
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

        <!--Modal Editar Afiliado-->
        <div class="modal fade" id="editarAfiliado" tabindex="-1" role="dialog" aria-labelledby="editarAfiliado" aria-hidden="true">
            <form action="{{ url('/admin/nuestros_afiliados_editar2') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar afiliado</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Afiliado</label>
                                        <input type="text" class="form-control" id="afiliado_nuestros_afiliados" name="afiliado_nuestros_afiliados" placeholder="Nombre del afiliado" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Cantidad</label>
                                        <input type="text" class="form-control" id="cantidad_nuestros_afiliados" name="cantidad_nuestros_afiliados" placeholder="Cantidad de afiliados" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Latitud</label>
                                        <input type="text" class="form-control" id="latitud_nuestros_afiliados" name="latitud_nuestros_afiliados" placeholder="Latitud..." required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Longitud</label>
                                        <input type="text" class="form-control" id="longitud_nuestros_afiliados" name="longitud_nuestros_afiliados" placeholder="Longitud..." required>
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
        $("#afiliado_nuestros_afiliados").val($(this).data("afiliado_nuestros_afiliados"));
        $("#cantidad_nuestros_afiliados").val($(this).data("cantidad_nuestros_afiliados"));
        $("#latitud_nuestros_afiliados").val($(this).data("latitud_nuestros_afiliados"));
        $("#longitud_nuestros_afiliados").val($(this).data("longitud_nuestros_afiliados"));
    });
</script>