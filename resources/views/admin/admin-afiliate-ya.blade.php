@include('admin.admin-header')
                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Afiliate ya!</h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/afiliate_ya_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_afiliate_ya" class="form-control" value="{{$afiliate_yas->titulo_afiliate_ya}}" placeholder="Título">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_afiliate_ya" class="form-control" placeholder="Descripción" value="{{$afiliate_yas->descripcion_afiliate_ya}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary" style="margin-top: 25px">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block-title">
                                <h2></h2>
                            </div>

                            <form action="{{ url('/admin/afiliate_ya_editar2') }}" method="POST" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Imagen (Pasos)</label>
                                            <input type="file" id="" name="imagen1_afiliate_ya" class="filestyle" data-buttonName="btn-primary" data-buttonText="Imagen (Pasos)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Imagen (Formulario)</label>
                                            <input type="file" id="" name="imagen2_afiliate_ya" class="filestyle" data-buttonName="btn-primary" data-buttonText="Imagen (Formulario)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pdf (Formulario)</label>
                                            <input type="file" id="" name="pfd_afiliate_ya" class="filestyle" data-buttonName="btn-primary" data-buttonText="Pdf (Formulario)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Correo de envío</label>
                                            <input type="email" id="" name="correo_afiliate_ya" value="{{$afiliate_yas1s->correo_afiliate_ya}}" class="form-control" placeholder="Correo de envío">
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
            </div>
        </div>
        
@include('admin.admin-footer')