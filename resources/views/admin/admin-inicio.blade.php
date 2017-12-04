@include('admin.admin-header')

                    <div id="page-content">
                        <!--Banners-->
                        <div class="block">
                            <div class="block-title">
                                <h2>Banners</h2>
                            </div>
                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="15%">Titulo</th>
                                            <th width="30%">Descripción</th>
                                            <th width="25%">Link o Url</th>
                                            <th width="25%">Imagen</th>
                                            <th width="5%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($inicios as $inicio)
                                            <tr>
                                                <td>{{$inicio->titulo_banners_inicio}}</td>
                                                <td>{!!$inicio->descripcion_banners_inicio!!}</td>
                                                <td>{{$inicio->link_banners_inicio}}</td>
                                                <td class="text-center"><img src="{{url('uploads')}}/{{$inicio->imagen_banners_inicio}}" width="80%"></td>
                                                <td class="text-center">
                                                    <a href="#" data-id_banners_inicio="{{$inicio->id}}" data-titulo_banners_inicio="{{$inicio->titulo_banners_inicio}}" data-descripcion_banners_inicio="{{$inicio->descripcion_banners_inicio}}" data-link_banners_inicio="{{$inicio->link_banners_inicio}}" data-toggle="modal" data-target="#editarBanner" title="Editar Banner" class="btn btn-effect-ripple btn-sm btn-success editar"><i class="fa fa-pencil"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <!--Primer Item-->
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Primer Item</h2>
                                    </div>

                                    <form action="{{ url('/admin/inicio_editar_item1') }}" method="POST" role="form" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id" value="{{$inicios_item1->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Icono</label>
                                                    <input type="file" id="" name="imagen_items_inicio" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                                </div>
                                                <div class="form-group">
                                                    <label>Título</label>
                                                    <input type="text" id="" name="titulo_items_inicio" value="{{$inicios_item1->titulo_items_inicio}}" class="form-control" placeholder="Título primer item" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="descripcion_items_inicio" placeholder="Descripción primer item" required>{{$inicios_item1->descripcion_items_inicio}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div> 
                            </div>

                            <!--Segundo Item-->
                            <div class="col-md-4">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Segundo Item</h2>
                                    </div>

                                    <form action="{{ url('/admin/inicio_editar_item1') }}" method="POST" role="form" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id" value="{{$inicios_item2->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Icono</label>
                                                    <input type="file" id="" name="imagen_items_inicio" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                                </div>
                                                <div class="form-group">
                                                    <label>Título</label>
                                                    <input type="text" id="" name="titulo_items_inicio" value="{{$inicios_item2->titulo_items_inicio}}" class="form-control" placeholder="Título segundo item" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="descripcion_items_inicio" placeholder="Descripción segundo item" required>{{$inicios_item2->descripcion_items_inicio}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div> 
                            </div>

                            <div class="col-md-4">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Tercer Item</h2>
                                    </div>

                                    <form action="{{ url('/admin/inicio_editar_item1') }}" method="POST" role="form" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="id" value="{{$inicios_item3->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Icono</label>
                                                    <input type="file" id="" name="imagen_items_inicio" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                                </div>
                                                <div class="form-group">
                                                    <label>Título</label>
                                                    <input type="text" id="" name="titulo_items_inicio" value="{{$inicios_item3->titulo_items_inicio}}" class="form-control" placeholder="Título Tercer item" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="descripcion_items_inicio" placeholder="Descripción Tercer item" required>{{$inicios_item3->descripcion_items_inicio}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div> 
                            </div>
                        </div>

                        <!--Primera sección-->
                        <div class="block">
                            <div class="block-title">
                                <h2>Primera sección</h2>
                            </div>

                            <form action="{{ url('/admin/inicio_primera1') }}" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_primera_inicio" value="{{$inicios_primera->titulo_primera_inicio}}" class="form-control" placeholder="Título de la sección" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input type="file" id="" name="imagen_primera_inicio" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control textArea" rows="4" id="" name="descripcion_primera_inicio" placeholder="Descripción de la sección" required> {{$inicios_primera->descripcion_primera_inicio}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                        </div>
                                    </div>
                                </div><br>
                            </form>
                        </div>

                        <!--Segunda sección-->
                        <div class="block">
                            <div class="block-title">
                                <h2>Segunda sección</h2>
                            </div>

                            <form action="{{ url('/admin/inicio_segunda1') }}" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_segunda_inicio" value="{{$inicios_segunda->titulo_segunda_inicio}}" class="form-control" placeholder="Título de la sección" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control textArea" rows="4" id="" name="descripcion_segunda_inicio" placeholder="Descripción de la sección" required>{{$inicios_segunda->descripcion_segunda_inicio}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                        </div>
                                    </div>
                                </div><br>
                            </form>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Editar Banner-->
        <div class="modal fade" id="editarBanner" tabindex="-1" role="dialog" aria-labelledby="editarBanner" aria-hidden="true">
            <form  action="{{ url('/admin/inicio_editar1') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id_banners_inicio" name="id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar Banner</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="titulo_banners_inicio" name="titulo_banners_inicio" placeholder="Nombre del banner" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Link o url</label>
                                        <input type="link" class="form-control" id="link_banners_inicio" name="link_banners_inicio" placeholder="Link o url del banner" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Imagen</label>
                                        <input type="file" id="" name="imagen_banners_inicio" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="5" id="descripcion_banners_inicio" name="descripcion_banners_inicio" placeholder="Descripción del banner" required></textarea>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                            <button class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

@include('admin.admin-footer')
<script type="text/javascript">
    $(".editar").click(function(){
        $("#id_banners_inicio").val($(this).data("id_banners_inicio"));
        $("#titulo_banners_inicio").val($(this).data("titulo_banners_inicio"));
        $("#descripcion_banners_inicio").val($(this).data("descripcion_banners_inicio"));
        $("#link_banners_inicio").val($(this).data("link_banners_inicio"));
    });
</script>