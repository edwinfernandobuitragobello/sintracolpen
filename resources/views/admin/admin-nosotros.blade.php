@include('admin.admin-header')

                    <div id="page-content">
                        <div class="block full">
                            <div class="block-title">
                                <h2>Nosotros</h2>
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

                        <!--Qué somos y qué hacemos-->
                        <div class="block">
                            <div class="block-title">
                                <h2>¿Qué somos y qué hacemos?</h2>
                            </div>

                            <form action="" method="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Descripción 1</label>
                                            <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción 1"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Descripción 2</label>
                                            <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción 2"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Imagen 1</label>
                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen 1">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Imagen 2</label>
                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen 2">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Imagen 3</label>
                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen 3">
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

                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción"></textarea>
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

                                    <form action="" method="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción"></textarea>
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
                                <form action="" method="">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Descripción">
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
                                        <tr>
                                            <td class="text-center"><i class="fa fa-plus"></i></td>
                                            <td class="text-center">Empatía</td>
                                            <td>Es la capacidad de ponernos en la situación del otro y actuar de conformidad con el interés general y no con el interés personal.</td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#editarPrincipio" title="Editar Principio" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Eliminar Principio" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
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
                                <form action="" method="">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Descripción">
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
                                        <tr>
                                            <td class="text-center"><i class="fa fa-plus"></i></td>
                                            <td class="text-center">Empatía</td>
                                            <td>Es la capacidad de ponernos en la situación del otro y actuar de conformidad con el interés general y no con el interés personal.</td>
                                            <td class="text-center">
                                                <a href="#" data-toggle="modal" data-target="#editarValor" title="Editar Valor" class="btn btn-effect-ripple btn-sm btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Eliminar Valor" class="btn btn-effect-ripple btn-sm btn-danger"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
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
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="text" id="" name="" class="form-control" placeholder="Sintaxis icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen">
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
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="text" id="" name="" class="form-control" placeholder="Sintaxis icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen">
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
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="text" id="" name="" class="form-control" placeholder="Sintaxis icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen">
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
                                                    <label>Descripción</label>
                                                    <textarea class="form-control textArea" rows="4" id="" name="" placeholder="Descripción"></textarea>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Icono</label>
                                                            <input type="text" id="" name="" class="form-control" placeholder="Sintaxis icono">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Imagen</label>
                                                            <input type="file" id="" name="" class="form-control" placeholder="Imagen">
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
            <form action="" method="">
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
                                        <input type="text" class="form-control" id="" name="" placeholder="Nombre del principio organizacional" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Icono</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Sintaxis del icono" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="5" id="" name="" placeholder="Descripción del principio organizacional" required></textarea>
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
            <form action="" method="">
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
                                        <input type="text" class="form-control" id="" name="" placeholder="Nombre del valor organizacional" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Icono</label>
                                        <input type="text" class="form-control" id="" name="" placeholder="Sintaxis del icono" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="input-desc">Descripción</label>
                                        <textarea class="form-control textArea" rows="5" id="" name="" placeholder="Descripción del valor organizacional" required></textarea>
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