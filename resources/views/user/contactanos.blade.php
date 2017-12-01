@include('user.header')    
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$contactanos->titulo_contactenos}}</h1>
                            <p class="page-header-desc">{{$contactanos->descripcion_contactenos}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mapContactanos"></div>

            <div class="mb50"></div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 class="title-underblock dark mb30">Contáctanos</h2>
                        <form action="php/mail.php" method="post" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactname" class="input-desc">Nombre</label>
                                        <input type="text" class="form-control" id="contactname" name="contactname" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contactemail" class="input-desc">Correo</label>
                                        <input type="email" class="form-control" id="contactemail" name="contactemail" placeholder="Correo" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="contactsubject" class="input-desc">Asunto</label>
                                        <input type="text" class="form-control" id="contactsubject" name="contactsubject" placeholder="Asunto" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="contactmessage" class="input-desc">Mensaje</label>
                                        <textarea class="form-control" rows="6" id="contactmessage" name="contactmessage" placeholder="Mensaje" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-dark min-width" data-loading-text="Enviando..." value="Enviar Mensaje">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="mb40 visible-xs"></div>

                    <div class="col-sm-4">
                        <ul class="contact-list">
                        	<li><i>{{$contactanos->texto_descriptivo_contactenos}}</i></li>
                        	<br>
                            <li><strong>Domicilio Principal: </strong>{{$contactanos->domicilio_principal_contactenos}}</li>
                            <li><strong>Oficina: </strong> {{$contactanos->oficina1_contactenos}}</li>
                            <br>
                            <li><strong>Oficina Notificaciones: </strong>{{$contactanos->Notificaciones_contactenos}} </li>
                            <li><strong>Oficina: </strong>{{$contactanos->oficina2_contactenos}}</li>
                            <br>
                            <li><strong>Correo: </strong> <a href="mailto:{{$contactanos->correo_contactenos}}">{{$contactanos->correo_contactenos}}</a></li>
                            <li><strong>Teléfono: </strong>{{$contactanos->telefono_contactenos}}</li>
                        </ul>

                        <h4 class="mb20">Síguenos en...</h4>
                        <div class="social-icons">
                            <a href="{{$contactanos->twitter_contactenos}}" target="_blank" class="social-icon icon-twitter" title="Twitter">
                                <i class="fa fa-twitter sizeIcons-footer" ></i>
                            </a>
                            <a href="{{$contactanos->instagram_contactenos}}" target="_blank" class="social-icon icon-instagram" title="Instagram">
                                <i class="fa fa-instagram sizeIcons-footer"></i>
                            </a>
                            <a href="{{$contactanos->youtube_contactenos}}" target="_blank" class="social-icon icon-youtube" title="Youtube">
                                <i class="fa fa-youtube-play sizeIcons-footer"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
@include('user.footer')
            

