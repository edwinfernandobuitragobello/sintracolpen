@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Enlaces de interés</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearEnlace"><u>Crear enlace</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/enlaces_interes_editar') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_enlaces_interes" class="form-control" placeholder="Título" value="{{$enlaces_interes->titulo_enlaces_interes}}">
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
                                            <th width="10%" class="text-center">Logo</th>
                                            <th width="50%">Nombre</th>
                                            <th width="25%">Enlace</th>
                                            <th width="15%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($enlaces_interes1s as $enlaces_interes1)
                                            <tr>
                                                <td><center><img src="{{url('uploads')}}/{{$enlaces_interes1->imagen_enlaces_interes}}" width="80%"></center></td>
                                                <td>{{$enlaces_interes1->nombre_enlaces_interes}}</td>
                                                <td><a href="" target="_blank">{{$enlaces_interes1->enlace_enlaces_interes}}</a></td>
                                                <td class="text-center">
                                                    <a onclick="enlaces_interes_editar('{{$enlaces_interes1->id}}' , '{{$enlaces_interes1->nombre_enlaces_interes}}' , '{{$enlaces_interes1->enlace_enlaces_interes}}')" href="#" data-toggle="modal" data-target="#editarEnlace" title="Editar Enlace" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('admin/enlaces_interes_eliminar')}}/{{$enlaces_interes1->id}}" title="Eliminar Enlace" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Enlace-->
        <div class="modal fade" id="crearEnlace" tabindex="-1" role="dialog" aria-labelledby="crearEnlace" aria-hidden="true">
            <form id="contact-form-advanced" action="{{ url('/admin/enlaces_interes_crear') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear enlace</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="" name="nombre_enlaces_interes" placeholder="Nombre del enlace" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Dirección URL</label>
                                        <input type="text" class="form-control" id="" name="enlace_enlaces_interes" placeholder="Dirección url del enlace" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Logo</label>
                                        <input type="file" id="" name="imagen_enlaces_interes" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
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

        <!--Modal Editar Enlace-->
        <div class="modal fade" id="editarEnlace" tabindex="-1" role="dialog" aria-labelledby="editarEnlace" aria-hidden="true">
            <form id="contact-form-advanced" action="{{ url('/admin/enlaces_interes_editar1') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar enlace</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="nombre_enlaces_interes" name="nombre_enlaces_interes" placeholder="Nombre del enlace">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Dirección URL</label>
                                        <input type="text" class="form-control" id="enlace_enlaces_interes" name="enlace_enlaces_interes" placeholder="Dirección url del enlace">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Logo</label>
                                        <input type="file" id="" name="imagen_enlaces_interes" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success">Editar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
<script type="text/javascript">
    function enlaces_interes_editar(id,nombre,enlace){
        $("#id").val(id);
        $("#nombre_enlaces_interes").val(nombre);
        $("#enlace_enlaces_interes").val(enlace);
    }
</script>
@include('admin.admin-footer')