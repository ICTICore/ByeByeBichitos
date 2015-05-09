<script>
        localStorage['flag_spot']="yes";
        
        jQuery(document).ready(function ($) {
            
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Swing Outside in Stairs
            {$Duration: 1200, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 1.3, $Top: 2.5} }

            //Dodge Dance Outside out Stairs
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.1, 0.9], $Top: [0.1, 0.9] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Pet Outside in Stairs
            , { $Duration: 1500, x: 0.2, y: -0.1, $Delay: 20, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseInWave, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Dodge Dance Outside in Random
            , { $Duration: 1500, x: 0.3, y: -0.3, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $Outside: true, $Round: { $Left: 0.8, $Top: 2.5} }

            //Flutter out Wind
            , { $Duration: 1800, x: 1, y: 0.2, $Delay: 30, $Cols: 10, $Rows: 5, $Clip: 15, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $Reverse: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2050, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseOutWave, $Clip: $JssorEasing$.$EaseInOutQuad }, $Outside: true, $Round: { $Top: 1.3} }

            //Collapse Stairs
            , { $Duration: 1200, $Delay: 30, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraightStairs, $Assembly: 2049, $Easing: $JssorEasing$.$EaseOutQuad }

            //Collapse Random
            , { $Duration: 1000, $Delay: 80, $Cols: 8, $Rows: 4, $Clip: 15, $SlideOut: true, $Easing: $JssorEasing$.$EaseOutQuad }

            //Vertical Chess Stripe
            , { $Duration: 1000, y: -1, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $ChessMode: { $Column: 12} }

            //Extrude out Stripe
            , { $Duration: 1000, x: -0.2, $Delay: 40, $Cols: 12, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5} }

            //Dominoes Stripe
            , { $Duration: 2000, y: -1, $Delay: 60, $Cols: 15, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: $JssorEasing$.$EaseOutJump, $Round: { $Top: 1.5} }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssor_slider2 = new $JssorSlider$("slider2_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider2.$ScaleWidth(Math.min(parentWidth, 1200));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);

            //responsive code end
        });
    </script>
<div class="container">
    <div class="row" style="padding-bottom: 25px;">
    <div id="slider2_container" style="position: relative; width: 1200px;  height: 376px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 376px;
            overflow: hidden;">
            <div>
                <a u=image href="#"><?php echo $this->Html->image('banner/1.jpg'); ?></a>
            </div>
            <div>
                <a u=image href="#"><?php echo $this->Html->image('banner/2.jpg'); ?></a>
            </div>
            <div>
                <a u=image href="#"><?php echo $this->Html->image('banner/3.jpg'); ?></a>
            </div>
            <div>
                <a u=image href="#"><?php echo $this->Html->image('banner/4.jpg'); ?></a>
            </div>
        </div>
        
        <!-- Bullet Navigator Skin Begin -->
        <!-- jssor slider bullet navigator skin 01 -->
        <style>
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av
            {
                filter: alpha(opacity=70);
                opacity: .7;
                overflow:hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../img/a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">jQuery Carousel</a>
    </div>
    
    
        
    </div>
    <table border='0' height='322px' width='100%'>
        <tr>
            <td style="vertical-align: top; width: 30%; text-align: center; padding-bottom: 25px;">
                <p style="color:#00AAFF; font-size: 23px; font-family: 'Muli', sans-serif;">
                    Clínicas Especializadas en el tratamiento de la Pediculosis
                </p>
                
                <?php echo $this->Html->image('img_nina.png',array('alt'=>'img','class'=>"img-responsive"));?>  
  
  
  
                
            </td> 
            <td style="vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 40px;">
                <div class="panel-bicho-azul panel-default">
                    <div class="panel-heading-bicho-azul">
                        ¿Qué es?
                    </div>
                    <div class="panel-body-bicho-azul">
                        <p>
                        Las pediculosis son <b>infecciones por</b> parásitos ácaros llamados <b>piojos</b>
                        que son benignas y muy contagiosas y se deben a tres especies
                        específicas que solo parasitan al humano: el piojo de la cabeza, el piojo
                        del cuerpo y el piojo del pubis. La transmisión entre los humanos puede
                        ser por contacto directo cabeza con cabeza (más frecuente) y por
                        contacto indirecto artículos personales y de higiene (menos frecuente).
                        </p>
                    </div>
                </div>
            </td>
        </tr>
    </table>
    
    <table border='0'  width='100%'>
        <tr style="background-color: #F8C081">
            <td style="height: 10px;">
                
            </td>
        </tr>
        <tr>
            <td>
                <div class="panel-bicho-cafe panel-default">
                    <div class="panel-heading-bicho-cafe">
                        Hablando de piojos
                    </div>
                    <div class="panel-body-bicho-cafe">
                        <table border="0" width="100%">
                            <tr>
                                <td style="text-align: center; width: 33%; vertical-align: top;">
                                    
                                    <?php echo $this->Html->image('btn_queson1.png',array('alt'=>'Nino','id'=>'img_oculto_1','class'=>"img-responsive"));?>
                                    <p id="lbl_oculto_1" style="font-size: 25px; padding-top: 10px; color: #807580;">
                                        ¿Qué son?
                                    </p>
                                </td>
                                <td style="text-align: center; width: 33%; vertical-align: top;">
                                    <?php echo $this->Html->image('btn_quecolor1.png',array('alt'=>'Bichos','id'=>'img_oculto_2','class'=>"img-responsive"));?>
                                    <p id="lbl_oculto_2" style="font-size: 25px; padding-top: 10px; color: #807580;">
                                        ¿De que color son?
                                    </p>
                                </td>
                                <td style="text-align: center; width: 33%;">
                                    
                                    <?php echo $this->Html->image('btn_quecurioso1.png',array('alt'=>'Bicho','id'=>'img_oculto_3','class'=>"img-responsive"));?>
                                    <p id="lbl_oculto_3" style="font-size: 25px; padding-top: 10px; color: #807580;">
                                        ¿Datos curiosos?
                                    </p>
                                </td>
                            </tr>
                            
                        </table>
                        <div id="div_oculto_1">
                            <div class="panel panel-bicho-cafeclaro">
                                <div class="panel-body-bicho-cafeclaro">
                                <table boder="0">
                                    <tr style="vertical-align: top;">
                                        <td style="padding: 15px; width: 50%;"> 
                                            <p>
                                            Es un insecto muy pequeño que mide de 0.5 a 0.8 mm WOW!!! Como el ojo de una aguja o menos, su nombre científico es <b>Pediculus humanus capitis</b> que es la especie de piojo que vive en la cabeza del ser humano y que se transfiere por contacto directo, de persona a persona.
                                            </p>
                                            <p>
                                            Los piojos tienen un cuerpo dividido en 3 partes:
                                            La cabeza, que tiene 2 ojos, un par de antenas y una boca que succiona sangre del cuero cabelludo, Sí, comen sangre!!!! 
                                            </p>
                                            <p>
                                            El Tórax, tiene 6 patas cortas, que tienen un gancho cada una para moverse entre los cabellos, pero <b>NO SALTAN!!!</b> Ni tienen alas, <b>por lo tanto NO VUELAN!!!</b> Pero en el cabello son súper veloces.
                                            </p>
                                            <div style="text-align: center;">
                                            <?php echo $this->Html->image('img_no_vuela.png',array('alt'=>'img','class'=>"img-responsive"));?>
                                            </div>
                                        </td>
                                        <td style="padding: 15px; width: 50%;">
                                            
                                            <p>
                                            El abdomen tiene 6 orificios por los cuales respiran, y pueden cerrarlos y abrirlos a voluntad por lo que sobreviven en el agua por 36 horas, aunque el agua tenga cloro!!!  Y estos orificios actúan como barrera para que no les afecten muchas sustancias que pudieran eliminarlos como el vinagre por ejemplo.
                                            </p>
                                            <p>
                                            Las hembras de los piojos son un poco más grandes que los machos y ellas son las que depositan los huevos o liendres que darán lugar a nuevos bichitos, las hembras también producen un pegamento que mantiene a las liendres adheridas al pelo.
                                            </p>
                                            <p>
                                            Las hembras depositan de 3 a 10 liendres al día durante toda su vida que es de 4 a 5 semanas, por lo que pueden llegar a poner hasta 100 huevos o liendres!!! Que si crecen pueden convertirse en PIOJOS!!!
                                            </p>
                                            <p>
                                            En climas fríos las liendres se encuentran cerca del cuero cabelludo, en climas cálidos se encuentran un poco más lejos y puede haber más de una liendre por cabello. Las liendres respiran aire y comen sangre y también producen comezón al igual que los piojos y ésta comezón es causada por una saliva irritante que evita que la sangre se coagule y esta acción les permite tanto a liendres como a piojos seguir alimentándose de ella.
                                            </p>
                                            

                                        </td>
                                    </tr>
                                </table>
                                    </div>
                            </div>
                        </div>
                        
                        <div id="div_oculto_2">
                            <div class="panel panel-bicho-cafeclaro">
                                <div class="panel-body-bicho-cafeclaro">
                                <table boder="0">
                                    <tr style="vertical-align: top;">
                                        <td style="padding: 15px; width: 50%;"> 
                                            <p>
                                            Anteriormente los piojos y liendres podían ser color café o gris oscuro brillante casi negro, actualmente existen diversos colores de piojos y liendres, que pueden ser: grises, negros, cafés, rojos o color ladrillo, color piel y traslucidos; por lo que su detección y observación se dificulta, ya que los colores actúan como un disfraz para ellos.
                                            </p>
                                            <p>
                                                Tanto las liendres como los piojos ingieren aproximadamente un mililitro de sangre al día, cada uno <b>en un mes pueden succionar hasta 20 mililitros que equivale a 4 tubos de ensayo</b>, como los que utilizan para hacer exámenes de sangre. Eso es mucho dependiendo del número de piojos y liendres que tenga cada persona!!!                                            
                                            </p>
                                            <p>
                                            Existen 3 fases en el ciclo de vida de los piojos: liendre (huevo), pupa o ninfa (fase intermedia) y Adulto (fase madura y reproductiva)
                                            </p>
                                        </td>
                                        <td style="padding: 15px; width: 50%;">
                                            
                                            <p>
                                            Como puedes ver los piojos son animalitos muy difíciles de eliminar y con características muy peculiares!!!
                                            </p>
                                            <div style="text-align: center;">
                                            <?php echo $this->Html->image('img_estado.png',array('alt'=>'img','class'=>"img-responsive"));?>
                                            </div>

                                        </td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                        </div>
                        <div id="div_oculto_3">
                            <div class="panel panel-bicho-cafeclaro">
                                <div class="panel-body-bicho-cafeclaro">
                                <table boder="0">
                                    <tr style="vertical-align: top;">
                                        <td style="padding: 15px; width: 50%;"> 
                                            <ul class="ul-bichos">
                                                <li>La pediculosis o piojos, es una infección, por lo tanto es una enfermedad</li>
                                                <li>Los piojos no saltan</li>
                                                <li>Los piojos no vuelan</li>
                                                <li>Los piojos sobreviven a muchas sustancias toxicas, incluyendo el cloro, el vinagre, el alcohol etc</li>
                                                <li>Los piojos no se eliminan con agua y jabón</li>
                                                <li><b>Los piojos pueden hacer que no aprendas adecuadamente, debido a la comezón nocturna, ya que no te dejan dormir bien y en la escuela tendrás sueño</b></li>
                                                <li><b>Los piojos pueden producir anemia crónica, debido a la sangre que succionan</b></li>
                                                <li>Los piojos infectan a todos por igual, a niños y adultos</li>
                                                
                                                

                                            </ul>
                                        </td>
                                        <td style="padding: 15px; width: 50%;">
                                            <ul class="ul-bichos">
                                                <li>Los piojos prefieren las cabezas limpias y saludables, no es cierto que prefieran la suciedad</li>
                                                <li><b>Los piojos pueden causar ansiedad y miedo en los niños, (según un estudio hecho en 2010)</b></li>
                                                <li>Los animales no transmiten los piojos, ya que el piojo es exclusivo del humano</li>
                                                <li><b>Existen evidencias de que en el transporte público con mucha concurrencia también se da la transmisión</b></li>
                                            </ul>
                                            <?php echo $this->Html->image('img_datos.png',array('class'=>"img-responsive"));?>

                                        </td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        
    </table>
    
    <table border='0' height='322px' width='100%'>
        <tr>
            <td style="vertical-align: top; width: 30%; text-align: center; padding-bottom: 25px;">
                <?php echo $this->Html->image('img_logobichitos.png',array('alt'=>'img','class'=>'img-responsive '));?>
                
                <p style="color:#00AAFF; font-size: 23px; font-family: 'Muli', sans-serif;">
                    Para nosotros usted es nuestro paciente y nos preocupa su salud.
                </p>
                
                
            </td> 
            <td style="vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 40px;">
                <div class="panel-bicho-azul panel-default " >
                    <div class="panel-heading-bicho-azul">
                        ¿Por qué nosotros?
                    </div>
                    <div class="panel-body-bicho-azul">
                        <p>Contamos con excelentes instalaciones en la ubicación que tú necesitas y si no quieres salir de casa contamos con servicio a domicilio.</p>
                        <p>Somos profesionales de la salud a su servicio.</p>
                        <p>Nuestra experiencia en Instituciones públicas nos avala.</p>
                        <p>Ofrecemos Costos con precios insuperables, que no merman la calidad en nuestra atención y resultados.</p>
                        <p>Tenemos el mejor servicio, con calidad, calidez, respeto y discreción.</p> 
                        <p>Contamos con productos 100% naturales de inmejorable calidad.</p>
                        <p>Si usted lo solicita le extendemos un certificado de atención y eliminación de la pediculosis.</p>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>

<script type="text/javascript" src="../js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            ..
        };
            
        $("#slider1_container").css("display", "block");
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
        ...
    });
</script>

<script type="text/javascript">
    var bandera_click_1=1;
    var bandera_click_2=1;
    var bandera_click_3=1;
    var folder_raiz = "<?php echo $this->webroot;?>";
    $(document).ready(function(){
        //Inicialmente todo oculto
        $("#div_oculto_1").hide();
        $("#div_oculto_2").hide();
        $("#div_oculto_3").hide();
        
        $('#img_oculto_1').hover(
            function() {
                $(this).css('cursor','pointer');
                $("#img_oculto_1").attr("src", folder_raiz + "img/btn_queson2.png")
                
            },function() {
                if(bandera_click_1)
                    $("#img_oculto_1").attr("src",folder_raiz + "img/btn_queson1.png")
            }
        );

        $('#img_oculto_2').hover(
            function() {
                $(this).css('cursor','pointer');
                $("#img_oculto_2").attr("src",folder_raiz + "img/btn_quecolor2.png")
            },function() {
                if(bandera_click_2)
                    $("#img_oculto_2").attr("src",folder_raiz + "img/btn_quecolor1.png")
            }
        );
        
        $('#img_oculto_3').hover(
            function() {
                $(this).css('cursor','pointer');
                $("#img_oculto_3").attr("src",folder_raiz + "img/btn_quecurioso2.png")
            },function() {
                if(bandera_click_3)
                    $("#img_oculto_3").attr("src",folder_raiz + "img/btn_quecurioso1.png")
            }
        );

        
        $("#img_oculto_1").click(function(){
            bandera_click_2=1;
            bandera_click_3=1;
            if($("#div_oculto_1").is(":visible")){
                bandera_click_1=1;
                $("#div_oculto_1").hide();
                $("#img_oculto_1").attr("src",folder_raiz + "img/btn_queson1.png");
                $("#lbl_oculto_1").css("color","#807580");
                $("#lbl_oculto_1").css("font-weight","normal");
            }
            else{
                bandera_click_1=0;
                $("#div_oculto_2").hide();
                $("#div_oculto_3").hide();
                $("#lbl_oculto_2").css("color","#807580");
                $("#lbl_oculto_3").css("color","#807580");
                $("#img_oculto_2").attr("src",folder_raiz + "img/btn_quecolor1.png");
                $("#img_oculto_3").attr("src",folder_raiz + "img/btn_quecurioso1.png");
                $("#lbl_oculto_2").css("font-weight","normal");
                $("#lbl_oculto_3").css("font-weight","normal");
                
                $("#div_oculto_1").show();
                $("#img_oculto_1").attr("src",folder_raiz + "img/btn_queson2.png");
                $("#lbl_oculto_1").css("color","#FFFFFF");
                $("#lbl_oculto_1").css("font-weight","Bold");
            }    
        });
        
        $("#img_oculto_2").click(function(){
            bandera_click_1=1;
            bandera_click_3=1;
            if($("#div_oculto_2").is(":visible")){
                bandera_click_2=1;
                $("#div_oculto_2").hide();
                $("#img_oculto_2").attr("src",folder_raiz + "img/btn_quecolor1.png");
                $("#lbl_oculto_2").css("color","#807580");
                $("#lbl_oculto_2").css("font-weight","normal");
            }
            else{
                //bandera_click_1=1;
                bandera_click_2=0;
                //bandera_click_3=1;
                $("#div_oculto_1").hide();
                $("#div_oculto_3").hide();
                $("#lbl_oculto_1").css("color","#807580");
                $("#lbl_oculto_3").css("color","#807580");
                $("#img_oculto_1").attr("src",folder_raiz + "img/btn_queson1.png");
                $("#img_oculto_3").attr("src",folder_raiz + "img/btn_quecurioso1.png");
                $("#lbl_oculto_1").css("font-weight","normal");
                $("#lbl_oculto_3").css("font-weight","normal");
                
                $("#div_oculto_2").show();
                $("#img_oculto_2").attr("src",folder_raiz + "img/btn_quecolor2.png");
                $("#lbl_oculto_2").css("color","#FFFFFF");
                $("#lbl_oculto_2").css("font-weight","Bold");
            }    
        });
        
        $("#img_oculto_3").click(function(){
            bandera_click_1=1;
            bandera_click_2=1;
            if($("#div_oculto_3").is(":visible")){

                bandera_click_3=1;
                $("#div_oculto_3").hide();
                $("#img_oculto_3").attr("src",folder_raiz + "img/btn_quecurioso1.png");
                $("#lbl_oculto_3").css("color","#807580");
                $("#lbl_oculto_3").css("font-weight","normal");
            }
            else{
                //Oculto todo lo demas por si estaba mostrado
                bandera_click_3=0;
                $("#div_oculto_1").hide();
                $("#div_oculto_2").hide();
                $("#lbl_oculto_1").css("color","#807580");
                $("#lbl_oculto_2").css("color","#807580");
                $("#img_oculto_1").attr("src",folder_raiz + "img/btn_queson1.png");
                $("#img_oculto_2").attr("src",folder_raiz + "img/btn_quecolor1.png");
                $("#lbl_oculto_1").css("font-weight","normal");
                $("#lbl_oculto_2").css("font-weight","normal");
                
                //Mando solo mostrar sobre el que dio click
                $("#div_oculto_3").show();
                $("#img_oculto_3").attr("src",folder_raiz + "img/btn_quecurioso2.png");
                $("#lbl_oculto_3").css("color","#FFFFFF");
                $("#lbl_oculto_3").css("font-weight","Bold");
            }    
        });
    });
</script>
