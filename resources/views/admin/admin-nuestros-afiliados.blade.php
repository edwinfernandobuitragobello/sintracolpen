@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Nuestros afiliados</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearAfiliado"><u>Crear afiliado</u></a></h2>
                            </div>

                            <div class="row">
                                <form action="" method="">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Título">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Descripción">
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
                                        <tr>
                                            <td class="text-center">Bogotá</td>
                                            <td class="text-center">11</td>
                                            <td class="text-center">74.4555</td>
                                            <td class="text-center">-4.2541</td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#editarAfiliado" title="Editar Afiliado" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" title="Eliminar Afiliado" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
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
            <form action="" method="">
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
                                        <input type="text" class="form-control" id="" name="" placeholder="Nombre del afiliado" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Cantidad</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Cantidad de afiliados" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Latitud</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Latitud..." required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Longitud</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Longitud..." required>
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
            <form action="" method="">
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
                                        <input type="text" class="form-control" id="" name="" placeholder="Nombre del afiliado" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Cantidad</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Cantidad de afiliados" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Latitud</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Latitud..." required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Longitud</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Longitud..." required>
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