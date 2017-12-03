@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Nosotros</h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/nosotros_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_nosotros" class="form-control" value="{{$nosotros->titulo_nosotros}}" placeholder="Título">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_nosotros" class="form-control" placeholder="Descripción" value="{{$nosotros->descripcion_nosotros}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary" style="margin-top: 25px">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Qué somos y qué hacemos-->
                        <div class="block">
                            <div class="block-title">
                                <h2>¿Qué somos y qué hacemos?</h2>
                            </div>

                            <form action="{{ url('/admin/nosotros_editar2') }}" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Descripción 1</label>
                                            <textarea class="form-control textArea" rows="4" id="" name="descripcion1_nosotros" placeholder="Descripción 1" required>{{$nosotros1s->descripcion1_nosotros}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Descripción 2</label>
                                            <textarea class="form-control textArea" rows="4" id="" name="descripcion2_nosotros" placeholder="Descripción 2" required>{{$nosotros1s->descripcion2_nosotros}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Imagen 1</label>
                                            <input type="file" id="" name="imagen1_nosotros" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Imagen 2</label>
                                            <input type="file" id="" name="imagen2_nosotros" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Imagen 3</label>
                                            <input type="file" id="" name="imagen3_nosotros" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen" >
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                        </div>
                                    </div>
                                </div><br>
                            </form>
                        </div>

                        <div class="row">
                            <!--Misión-->
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Misión</h2>
                                    </div>

                                    <form action="{{ url('/admin/nosotros_editar3') }}" method="POST" role="form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="mision_nosotros" placeholder="Descripción" required>{{$nosotros2s->mision_nosotros}}</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div> 
                            </div>

                            <!--Visión-->
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Visión</h2>
                                    </div>

                                    <form action="{{ url('/admin/nosotros_editar4') }}" method="POST" role="form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="vision_nosotros" placeholder="Descripción" required>{{$nosotros3s->vision_nosotros}}</textarea>
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

                        <!--Principios Organizacionales-->
                        <div class="block">
                            <div class="block-title">
                                <h2>Principios Organizacionales</h2>
                            </div>
                            
                            <div class="row">
                                <form action="{{ url('/admin/nosotros_editar5') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="principios_nosotros" class="form-control" placeholder="Descripción" value="{{$nosotros4s->principios_nosotros}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary" style="margin-top: 25px">Guardar</button>
                                    </div>
                                </form>
                            </div><br>

                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                   <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Icono</th>
                                            <th width="10%" class="text-center">Nombre</th>
                                            <th width="75%">Descripción</th>
                                            <th width="10%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nosotros5s as $nosotros5)
                                            <tr>
                                                <td class="text-center"><img src="{{url('uploads')}}/{{$nosotros5->icono_principios_nosotros}}" alt="" class="wow zoomIn img-responsive center-block"></i></td>
                                                <td class="text-center">{{$nosotros5->nombre_principios_nosotros}}</td>
                                                <td>{{$nosotros5->descripcion_principios_nosotros}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id_principios="{{$nosotros5->id}}" data-nombre_principios_nosotros="{{$nosotros5->nombre_principios_nosotros}}" data-descripcion_principios_nosotros="{{$nosotros5->descripcion_principios_nosotros}}" data-toggle="modal" data-target="#editarPrincipio" title="Editar Principio" class="btn btn-effect-ripple btn-sm btn-success editar"><i class="fa fa-pencil"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!--Valores Organizacionales-->
                        <div class="block">
                            <div class="block-title">
                                <h2>Valores Organizacionales</h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/nosotros_editar7') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="valores_nosotros" class="form-control" placeholder="Descripción" value="{{$nosotros6s->valores_nosotros}}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary" style="margin-top: 25px">Guardar</button>
                                    </div>
                                </form>
                            </div><br>

                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                   <thead>
                                        <tr>
                                            <th width="5%" class="text-center">Icono</th>
                                            <th width="10%" class="text-center">Nombre</th>
                                            <th width="75%">Descripción</th>
                                            <th width="10%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($nosotros7s as $nosotros7)
                                            <tr>
                                                <td class="text-center"><img src="{{url('uploads')}}/{{$nosotros7->icono_valores_nosotros}}" alt="" class="wow zoomIn img-responsive center-block"></td>
                                                <td class="text-center">{{$nosotros7->nombre_valores_nosotros}}</td>
                                                <td>{{$nosotros7->descripcion_valores_nosotros}}</td>
                                                <td class="text-center">
                                                    <a href="#" data-id_valores="{{$nosotros7->id}}" data-nombre_valores_nosotros="{{$nosotros7->nombre_valores_nosotros}}" data-descripcion_valores_nosotros="{{$nosotros7->descripcion_valores_nosotros}}" data-toggle="modal" data-target="#editarPrincipio" title="Editar Principio" class="btn btn-effect-ripple btn-sm btn-success editar1"><i class="fa fa-pencil"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <!--Organismos de dirección-->
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Organismos de dirección</h2>
                                    </div>

                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Título</label>
                                                <input type="text" id="" name="" class="form-control" placeholder="Título" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción" required></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                                        </div>
                                                    </div>
                                                </div>     
                                                
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div> 
                            </div>

                            <!--Junta Directiva Nacional-->
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Junta Directiva Nacional</h2>
                                    </div>

                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Título</label>
                                                    <input type="text" id="" name="" class="form-control" placeholder="Título" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción" required></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                                        </div>
                                                    </div>
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

                        <div class="row">
                            <!--Cómite Seccional Bucaramanga-->
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Cómite Seccional Bucaramanga</h2>
                                    </div>

                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Título</label>
                                                    <input type="text" id="" name="" class="form-control" placeholder="Título" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción" required></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div> 
                            </div>

                            <!--Junta Directiva Seccional Bogotá-->
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Junta Directiva Seccional Bogotá</h2>
                                    </div>

                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Título</label>
                                                    <input type="text" id="" name="" class="form-control" placeholder="Título" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción" required></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar imagen">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-effect-ripple btn-primary floatRight">Guardar</button>
                                                </div>
                                            </div>
                                        </div><br>
                                    </form>
                                </div> 
                            </div>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>

        <!--Modal Editar Principio Organizacional-->
        <div class="modal fade" id="editarPrincipio" tabindex="-1" role="dialog" aria-labelledby="editarPrincipio" aria-hidden="true">
            <form action="{{ url('/admin/nosotros_editar6') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id_principios" name="id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Principio organizacional</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="nombre_principios_nosotros" name="nombre_principios_nosotros" placeholder="Nombre del principio organizacional" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Icono</label>
                                        <input type="file" id="" name="icono_principios_nosotros" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="5" id="descripcion_principios_nosotros" name="descripcion_principios_nosotros" placeholder="Descripción del principio organizacional" required></textarea>
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

        <!--Modal Editar Valor Organizacional-->
        <div class="modal fade" id="editarValor" tabindex="-1" role="dialog" aria-labelledby="editarValor" aria-hidden="true">
            <form action="{{ url('/admin/nosotros_editar8') }}" method="POST" role="form" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id_valores" name="id">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Valor organizacional</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="nombre_valores_nosotros" name="nombre_valores_nosotros" placeholder="Nombre del valor organizacional" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Icono</label>
                                        <input type="file" id="icono_valores_nosotros" name="icono_valores_nosotros" class="filestyle" data-buttonName="btn-primary" data-buttonText="Seleccionar icono">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="5" id="descripcion_valores_nosotros" name="descripcion_valores_nosotros" placeholder="Descripción del valor organizacional" required></textarea>
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
        $("#id_principios").val($(this).data("id_principios"));
        $("#nombre_principios_nosotros").val($(this).data("nombre_principios_nosotros"));
        $("#descripcion_principios_nosotros").val($(this).data("descripcion_principios_nosotros"));
    });
</script>
<script type="text/javascript">
    $(".editar1").click(function(){
        $("#id_valores").val($(this).data("id_valores"));
        $("#nombre_valores_nosotros").val($(this).data("nombre_valores_nosotros"));
        $("#descripcion_valores_nosotros").val($(this).data("descripcion_valores_nosotros"));
    });
</script>