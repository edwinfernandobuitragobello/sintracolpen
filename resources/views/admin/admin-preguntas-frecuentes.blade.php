@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Preguntas Frecuentes</h2>
                                <h2 class="pull-right"><a href="#" data-toggle="modal" data-target="#crearPregunta"><u>Crear pregunta</u></a></h2>
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
                                        <div class="form-group">
                                            <label>Imagen</label>
                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-effect-ripple btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="block">
                            <div class="table-responsive">
                                <table id="general-table" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th width="25%">Pregunta</th>
                                            <th width="60%">Respuesta</th>
                                            <th width="15%" class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>¿Para qué es un sindicato?</td>
                                            <td>Para representar a los trabajadores ante los empleadores, con miras a mejorar sus condiciones de trabajo, al interior de la empresa e instituciones y como actor social deben contribuir a la construcción y fortalecimiento de la democracia y a la creación de condiciones que desarrollen y defiendan los derechos humanos.</td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#editarPregunta" title="Editar Pregunta" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" title="Eliminar Pregunta" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

        <!--Modal Crear Pregunta-->
        <div class="modal fade" id="crearPregunta" tabindex="-1" role="dialog" aria-labelledby="crearPregunta" aria-hidden="true">
            <form action="" method="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Crear pregunta</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Pregunta</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Pregunta..." required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Respuesta</label>
                                        <textarea class="form-control textArea" rows="6" id="" name="" placeholder="Respuesta..." required></textarea>
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

        <!--Modal Editar Pregunta-->
        <div class="modal fade" id="editarPregunta" tabindex="-1" role="dialog" aria-labelledby="editarPregunta" aria-hidden="true">
            <form action="" method="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </button>
                            <h3 class="modal-title">Editar pregunta</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Pregunta</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Pregunta...">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Respuesta</label>
                                        <textarea class="form-control textArea" rows="6" id="" name="" placeholder="Respuesta..."></textarea>
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