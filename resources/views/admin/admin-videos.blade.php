@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Multimedia - Vídeos</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearVideo"><u>Crear video</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/videos_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_videos" class="form-control" placeholder="Título" value="{{$videos->titulo_videos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_videos" class="form-control" placeholder="Descripción" value="{{$videos->descripcion_videos}}">
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
                                            <th width="15%" class="text-center">Video</th>
                                            <th width="30%">Nombre</th>
                                            <th width="35%">Url embebida</th>
                                            <th width="20%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($videos1s as $videos1)
                                            <tr>
                                                <td class="text-center"><iframe width="120" height="100" src="{{$videos1->url_videos}}" frameborder="0" allowfullscreen></iframe></td>
                                                <td>{{$videos1->nombre_videos}}</td>
                                                <td>{{$videos1->url_videos}}</td>
                                                <td class="text-center">
                                                    <a onclick="videos_editar('{{$videos1->id}}' , '{{$videos1->nombre_videos}}' , '{{$videos1->url_videos}}')" href="#" data-toggle="modal" data-target="#editarVideo" title="Editar Vídeo" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                    <a href="{{url('admin/videos_eliminar')}}/{{$videos1->id}}" data-toggle="tooltip" title="Eliminar Vídeo" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Vídeo-->
        <div class="modal fade" id="crearVideo" tabindex="-1" role="dialog" aria-labelledby="crearVideo" aria-hidden="true">
            <form id="contact-form-advanced" action="{{ url('/admin/videos_crear') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear Vídeo</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="" name="nombre_videos" placeholder="Nombre del video" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Url embebida</label>
                                        <input type="text" class="form-control" id="" name="url_videos" placeholder="Url embebida del video" required>
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

        <!--Modal Editar Vídeo-->
        <div class="modal fade" id="editarVideo" tabindex="-1" role="dialog" aria-labelledby="editarVideo" aria-hidden="true">
            <form id="contact-form-advanced" action="{{ url('/admin/videos_editar') }}" method="POST" role="form">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="id" name="id" value="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar Vídeo</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="nombre_videos" name="nombre_videos" placeholder="Nombre del video" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Url embebida</label>
                                        <input type="text" class="form-control" id="url_videos" name="url_videos" placeholder="Url embebida del video" required>
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
    function videos_editar(id,nombre,url){
        $("#id").val(id);
        $("#nombre_videos").val(nombre);
        $("#url_videos").val(url);
    }
</script>
@include('admin.admin-footer')