@include('admin.admin-header')
                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Capacitaciones</h2>
                            </div>

                            <form action="{{ url('/admin/capacitaciones_editar1') }}" method="POST" role="form">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label>Url capacitaciones</label>
                                    <input type="text" id="url_capacitaciones" name="url_capacitaciones" class="form-control" placeholder="Url capacitaciones" value="{{$capacitaciones->url_capacitaciones}}">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-effect-ripple btn-success">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('admin.admin-footer')