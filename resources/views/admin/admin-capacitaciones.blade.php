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
                                <h2>Capacitaciones</h2>
                            </div>

                            <form action="" method="">
                                <div class="form-group">
                                    <label>Url capacitaciones</label>
                                    <input type="text" id="" name="" class="form-control" placeholder="Url capacitaciones">
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