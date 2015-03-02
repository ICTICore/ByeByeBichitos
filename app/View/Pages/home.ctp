<div class="container">
    <div class="row">
        <img class="img-responsive" src="http://placehold.it/1200x376&text=ByeByeBichitos" alt="">
    </div>
    <table border='0' height='322px' width='100%'>
        <tr>
            <td style="vertical-align: top; width: 30%; text-align: center; padding: 10px;">
                <p style="color:#00AAFF; font-size: 23px;">
                    Clínicas Especializadas en el tratamiento de la Pediculosis
                </p>
                <br/>
                <?php echo $this->Html->image('img_nina.png',array('class'=>"img-responsive"));?>
            </td> 
            <td style="vertical-align: top; padding-top: 10px; padding-right: 10px; padding-bottom: 10px; padding-left: 40px;">
                <div class="panel-bicho-azul panel-default">
                    <div class="panel-heading-bicho-azul">
                        ¿Qué es?
                    </div>
                    <div class="panel-body-bicho-azul">
                        
                        Las pediculosis son <b>infecciones por</b> parásitos ácaros llamados <b>piojos</b>
                        que son benignas y muy contagiosas y se deben a tres especies
                        específicas que solo parasitan al humano: el piojo de la cabeza, el piojo
                        del cuerpo y el piojo del pubis. La transmisión entre los humanos puede
                        ser por contacto directo cabeza con cabeza (más frecuente) y por
                        contacto indirecto artículos personales y de higiene (menos frecuente).
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
                                <td style="text-align: center; width: 33%;">
                                    
                                    <?php echo $this->Html->image('btn_queson1.png',array('alt'=>'Nino','id'=>'img_oculto_1','class'=>"img-responsive"));?>
                                    <p style="font-size: 23px; padding-top: 10px; color: #807580;">
                                        ¿Qué son?
                                    </p>
                                </td>
                                <td style="text-align: center; width: 33%;">
                                    <?php echo $this->Html->image('btn_quecolor1.png',array('alt'=>'Bichos','id'=>'img_oculto_2','class'=>"img-responsive"));?>
                                    <p style="font-size: 23px; padding-top: 10px; color: #807580;">
                                        ¿De que color son?
                                    </p>
                                </td>
                                <td style="text-align: center; width: 33%;">
                                    
                                    <?php echo $this->Html->image('btn_quecurioso1.png',array('alt'=>'Bicho','id'=>'img_oculto_3','class'=>"img-responsive"));?>
                                    <p style="font-size: 23px; padding-top: 10px; color: #807580;">
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
                                            Anteriormente los piojos y liendres podían ser color café o gris oscuro
                                            brillante casi negro, actualmente existen diversos colores de piojos y
                                            liendres, que pueden ser: grises, negros, cafés, rojos o color ladrillo,
                                            color piel y traslucidos; por lo que su detección y observación se
                                            dificulta, ya que los colores actúan como un disfraz para ellos.
                                            Tanto las liendres como los piojos ingieren aproximadamente 1 mililitro
                                            de sangre al día, cada uno en un mes pueden succionar hasta 20
                                            mililitros que equivale a 4 tubos de ensayo, como los que utilizan para
                                            hacer exámenes de sangre. Eso es mucho dependiendo del número de
                                            piojos y liendres que tenga cada persona!!!
                                            </p>
                                        </td>
                                        <td style="padding: 15px; width: 50%;">
                                            <p>
                                            Existen 3 fases en el ciclo de vida de los piojos: liendre (huevo), pupa o
                                            ninfa (fase intermedia) y Adulto (fase madura y reproductiva)
                                            </p>
                                            <?php echo $this->Html->image('temporal.png',array('class'=>"img-responsive"));?>

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
</div>
<script type="text/javascript">
    $(document).ready(function(){
        //Inicialmente todo oculto
        $("#div_oculto_1").hide();
        
        $("#img_oculto_1").click(function(){
            
             
            if($("#div_oculto_1").is(":visible")){
                $("#div_oculto_1").hide();
                $("#img_oculto_1").attr("src","/ByeByeBichitos/img/btn_queson1.png");
            }
            else{
                $("#div_oculto_1").show();
                $("#img_oculto_1").attr("src","/ByeByeBichitos/img/btn_queson2.png");
            }
            
        });
    });
</script>
