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
                                <h2>Contáctanos</h2>
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
                                <h2></h2>
                            </div>

                            <form action="" method="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Texto descriptivo</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Texto descriptivo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Domicilio Principal</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Dirección domicilio principal">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Oficina</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Número de oficina">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Notificaciones</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Dirección oficina de notificaciones">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Oficina</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Número de oficina">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Correo</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Correo electrónico">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Teléfono</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="Teléfono">
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="URL Twitter">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Instagram</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="URL Instagram">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Youtube</label>
                                            <input type="text" id="" name="" class="form-control" placeholder="URL Youtube">
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