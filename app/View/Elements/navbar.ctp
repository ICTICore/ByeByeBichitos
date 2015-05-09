
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a  href="Pages/display">
              <?php echo $this->Html->image('img_logobichitos.png',array('width'=>'146px','height'=>'50px')); 
              //echo $this->Html->image('img_logobichitos.png',array('alt'=>'logo','class'=>'img-responsive'));
              ?>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li style="font-weight: bold; padding-right: 20px;">
                    &nbsp;
                </li>
                <li <?php if($this->params['controller'] == "CursoYPlacticas"){ echo 'class="active"';} ?> style="font-weight: bold;">
                    <?php echo $this->Html->link('Cursos y Placticas', array('controller'=>'CursoYPlacticas', 'action'=>'index')); ?>
                </li>
                <li <?php if($this->params['controller'] == "Productos"){ echo 'class="active"';} ?> style="font-weight: bold;">
                    <?php echo $this->Html->link('Productos', array('controller'=>'Productos', 'action'=>'index')); ?>
                </li>
                <li <?php if($this->params['controller'] == "Metodos"){ echo 'class="active"';} ?> style="font-weight: bold;">
                    <?php echo $this->Html->link('Método', array('controller'=>'Metodos', 'action'=>'index')); ?>
                </li>
                <li <?php if($this->params['controller'] == "Sucursales"){ echo 'class="active"';} ?> style="font-weight: bold;">
                    <?php echo $this->Html->link('Sucursales', array('controller'=>'Sucursales', 'action'=>'index')); ?>
                </li>
                <li <?php if($this->params['controller'] == "Contactos"){ echo 'class="active"';} ?> style="font-weight: bold;" >
                    <?php echo $this->Html->link('Contactos', array('controller'=>'Contactos', 'action'=>'index')); ?>
                </li>            
            </ul>
            <ul class="nav navbar-nav navbar-right nav-pills">
                <li>
                    <a >
                        <b>¡Contactanos!</b> Tel: 5513898855
                    </a>
                </li>
                <li style="padding: 0px; height: 50px; width: 30px;">
                    
                    <?php echo $this->Html->link($this->Html->image("btn_fb.png",array('alt'=>'facebook')),'http://www.facebook.com', array('target'=>'_blank','escape'=>false)); ?>
                </li>
                <li  style="padding: 0px; height: 50px; width: 30px;">
                    <?php echo $this->Html->link($this->Html->image("btn_g+.png",array('alt'=>'Google+')),'http://plus.google.com', array('target'=>'_blank','escape'=>false)); ?>
            
                </li>

                <li id='btn_play'  style="padding: 0px; height: 50px; width: 30px;">
                    
                        <?php 
                        echo $this->Html->image("btn_play.png", array(
                            "alt" => "Facebook",
                            'url' => '#',
                            'class' => 'play',
                            
                        ));
                        ?>
                </li>
                <li id='btn_pausa'  style="padding: 0px; height: 50px; width: 30px;">
                        <?php 
                        echo $this->Html->image("btn_pausa.png", array(
                            "alt" => "Facebook",
                            'url' => '#',
                            'class' => 'pause',

                            
                        ));
                        ?>
                    
                </li>
                


      
            </ul>  
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>


