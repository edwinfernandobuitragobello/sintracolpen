@include('admin.admin-header')

                <div id="main-container">
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <ul class="nav navbar-nav-custom">
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav-custom pull-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="padding-right: 20px">
                                    Cerrar Sesión
                                </a>
                            </li>
                        </ul>
                    </header>

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Comunicados Oficiales</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearComunicado"><u>Crear comunicado</u></a></h2>
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
                                            <th width="10%" class="text-center">Imagen</th>
                                            <th width="15%">Título</th>
                                            <th width="30%">Descripción</th>
                                            <th width="10%" class="text-center">Autor</th>
                                            <th width="5%" class="text-center">Año</th>
                                            <th width="15%" class="text-center">PDF</th>
                                            <th width="15%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><img src="img/logoCUT-Bogota.jpg" width="80%"></td>
                                            <td>Ipsa quasi praesentium eos officiis nam molestiae facere.</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum condimentum erat, quis imperdiet dolor maximus nec. Etiam felis erat, suscipit in ante ut, tincidunt tempor justo...</td>
                                            <td class="text-center">Jonathan Velandia</td>
                                            <td class="text-center">2017</td>
                                            <td class="text-center">nombre.pdf</td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#editarComunicado" title="Editar Comunicado" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" title="Eliminar Comunicado" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Boletin-->
        <div class="modal fade" id="crearComunicado" tabindex="-1" role="dialog" aria-labelledby="crearComunicado" aria-hidden="true">
            <form action="" method="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear Comunicado</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Título</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Título del comunicado" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción del comunicado" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Autor del comunicado" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Año de publicación" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" class="form-control" id="" name="" placeholder="Archivo PDF" required>
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

        <!--Modal Editar Boletin-->
        <div class="modal fade" id="editarComunicado" tabindex="-1" role="dialog" aria-labelledby="editarComunicado" aria-hidden="true">
            <form action="" method="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar Comunicado</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Título</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Título del comunicado">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción del comunicado"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Autor</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Autor del comunicado">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="input-desc">Año</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Año de publicación">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Archivo PDF</label>
                                        <input type="file" class="form-control" id="" name="" placeholder="Archivo PDF">
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