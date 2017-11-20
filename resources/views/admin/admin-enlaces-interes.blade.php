@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Enlaces de interés</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearEnlace"><u>Crear enlace</u></a></h2>
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
                                        <tr>
                                            <td><center><img src="img/logoCUT-Bogota.jpg" width="80%"></center></td>
                                            <td>Para representar a los trabajadores ante los empleadores, con miras a mejorar sus condiciones de trabajo, al interior de la empresa e instituciones y como actor social deben contribuir a la construcción y fortalecimiento de la democracia y a la creación de condiciones que desarrollen y defiendan los derechos humanos.</td>
                                            <td><a href="" target="_blank">https://www.colpensiones.gov.co/</a></td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#editarEnlace" title="Editar Enlace" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" title="Eliminar Enlace" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Enlace-->
        <div class="modal fade" id="crearEnlace" tabindex="-1" role="dialog" aria-labelledby="crearEnlace" aria-hidden="true">
            <form id="contact-form-advanced" method="get" action="#">
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
                                        <input type="text" class="form-control" id="" name="" placeholder="Nombre del enlace" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Dirección URL</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Dirección url del enlace" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Logo</label>
                                        <input type="file" id="" name="" class="form-control" placeholder="Imagen" required>
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
            <form id="contact-form-advanced" method="get" action="#">
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
                                        <input type="text" class="form-control" id="" name="" placeholder="Nombre del enlace">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Dirección URL</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Dirección url del enlace">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Logo</label>
                                        <input type="file" id="" name="" class="form-control" placeholder="Imagen">
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