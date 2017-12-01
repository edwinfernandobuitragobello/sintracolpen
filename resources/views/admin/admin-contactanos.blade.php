@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Contáctanos</h2>
                            </div>

                            <div class="row">
                                <form action="{{ url('/admin/contactanos_editar1') }}" method="POST" role="form">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="titulo_contactenos" class="form-control" placeholder="Título" value="{{$contactanos->titulo_contactenos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="descripcion_contactenos" class="form-control" placeholder="Descripción" value="{{$contactanos->descripcion_contactenos}}">
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
                                <h2></h2>
                            </div>

                            <form action="{{ url('/admin/contactanos_editar2') }}" method="POST" role="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Texto descriptivo</label>
                                            <input type="text" id="" name="texto_descriptivo_contactenos" class="form-control" placeholder="Texto descriptivo" value="{{$contactanos->texto_descriptivo_contactenos}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Domicilio Principal</label>
                                            <input type="text" id="" name="domicilio_principal_contactenos" class="form-control" placeholder="Dirección domicilio principal" value="{{$contactanos->domicilio_principal_contactenos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Oficina</label>
                                            <input type="text" id="" name="oficina1_contactenos" class="form-control" placeholder="Número de oficina" value="{{$contactanos->oficina1_contactenos}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Notificaciones</label>
                                            <input type="text" id="" name="Notificaciones_contactenos" class="form-control" placeholder="Dirección oficina de notificaciones" value="{{$contactanos->Notificaciones_contactenos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Oficina</label>
                                            <input type="text" id="" name="oficina2_contactenos" class="form-control" placeholder="Número de oficina" value="{{$contactanos->oficina2_contactenos}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input type="text" id="" name="correo_contactenos" class="form-control" placeholder="Correo electrónico" value="{{$contactanos->correo_contactenos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input type="text" id="" name="telefono_contactenos" class="form-control" placeholder="Teléfono" value="{{$contactanos->telefono_contactenos}}">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="link" id="" name="twitter_contactenos" class="form-control" placeholder="URL Twitter" value="{{$contactanos->twitter_contactenos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="link" id="" name="instagram_contactenos" class="form-control" placeholder="URL Instagram" value="{{$contactanos->instagram_contactenos}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input type="link" id="" name="youtube_contactenos" class="form-control" placeholder="URL Youtube" value="{{$contactanos->youtube_contactenos}}">
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