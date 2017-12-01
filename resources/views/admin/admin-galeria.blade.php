@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Galeria</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearGaleria"><u>Crear imagen</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/galerias_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_galerias" class="form-control" placeholder="Título" value="{{$galerias->titulo_galerias}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_galerias" class="form-control" placeholder="Descripción" value="{{$galerias->descripcion_galerias}}">
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
                                            <th width="10%">Imagen</th>
                                            <th width="70%">Nombre</th>
                                            <th width="20%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($galerias1s as $galerias1)
                                            <tr>
                                                <td class="text-center"><img src="{{url('uploads')}}/{{$galerias1->imagen_galerias}}" width="80%"></td>
                                                <td>{{$galerias1->nombre_galerias}}</td>
                                                <td class="text-center">
                                                    <a onclick="enlaces_interes_editar('{{$galerias1->id}}' , '{{$galerias1->nombre_galerias}}')" href="#" data-toggle="modal" data-target="#editarGaleria" title="Editar Galería" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('admin/galerias_eliminar')}}/{{$galerias1->id}}" data-toggle="tooltip" title="Eliminar Galería" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="container">
                                <nav class="pagination-container text-right">
                                    <div style="text-align: center">{{$galerias1s->links()}}</div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Crear Galeria-->
        <div class="modal fade" id="crearGaleria" tabindex="-1" role="dialog" aria-labelledby="crearGaleria" aria-hidden="true">
            <form action="{{ url('/admin/galerias_crear') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear Galería</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="" name="nombre_galerias" placeholder="Nombre de la imagen" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" id="" name="imagen_galerias" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
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

        <!--Modal Editar Galeria-->
        <div class="modal fade" id="editarGaleria" tabindex="-1" role="dialog" aria-labelledby="editarGaleria" aria-hidden="true">
            <form action="{{ url('/admin/galerias_editar') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar Galería</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="nombre_galerias" name="nombre_galerias" placeholder="Nombre de la imagen" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" id="" name="imagen_galerias" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
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
    function enlaces_interes_editar(id,nombre){
        $("#id").val(id);
        $("#nombre_galerias").val(nombre);
    }
</script>
@include('admin.admin-footer')