@include('user.header') 
        <div id="content" role="main">
            <div class="page-header dark larger larger-desc no-margin" style="background: #009688; border: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$preguntas_frecuentes->titulo_preguntas}}</h1>
                            <p class="page-header-desc">{{$preguntas_frecuentes->descripcion_preguntas}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb40"></div>

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                            <div class="panel-group" id="about-id" role="tablist" aria-multiselectable="true">
                                <?php $i = 0; ?>
                                @foreach($preguntas_frecuentes1s as $preguntas_frecuentes1)
                                    <?php $i++; ?>
                                    <div class="panel panel-border-tb">
                                        <div class="panel-heading" role="tab" id="heading-<?php echo $i; ?>">
                                            <h4 class="panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#about-id" href="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $i; ?>">
                                                    {{$preguntas_frecuentes1->pregunta_preguntas}}
                                                    <span class="panel-icon"></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse-<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?php echo $i; ?>">
                                            <div class="panel-body">
                                            <p>{{$preguntas_frecuentes1->respuesta_preguntas}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                    </div>
                    <div class="mb30 visible-xs visible-sm"></div>
                    <div class="col-md-5">
                        <img src="uploads/{{$preguntas_frecuentes->imagen_preguntas}}" alt="" style="width: 300px; height: 320px;" class="wow zoomIn img-responsive center-block">
                    </div>
                </div>
            </div>

            <div class="container">
                <nav class="pagination-container text-right">
                    <div style="text-align: center">{{$preguntas_frecuentes1s->links()}}</div>
                </nav>
            </div>
@include('user.footer')