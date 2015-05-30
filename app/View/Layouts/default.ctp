<?php
$cakeDescription = __d('cake_dev', 'Bye Bye Bichitos');
?>
<!DOCTYPE html>
<html lang="es">
    
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
                
                
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap');
                echo $this->Html->css('bootstrap-theme');
                echo $this->Html->css('bichitos');
                echo $this->Html->script('jquery.min');
                echo $this->Html->script('bootstrap');
                echo $this->Html->script('jssor');
                echo $this->Html->script('jssor.slider');
                
                
                echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

                    
	?>
            <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>

<body>
    <script>
    $(document).ready(function() {
        
        var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'spot.mp3');
        
        var tocar_spot = localStorage['flag_spot'];
        //alert(tocar_spot);
        if(tocar_spot == "yes"){
            audioElement.setAttribute('autoplay', 'autoplay');
            $("#btn_pausa").show();
            $("#btn_play").hide();
        }
        else{
            $("#btn_pausa").hide();
            $("#btn_play").show();
        }
        //audioElement.load()
        
        $.get();

        audioElement.addEventListener("load", function() {
            audioElement.play();
        }, true);

        $('.play').click(function() {
            audioElement.play();
             $("#btn_pausa").show();
             $("#btn_play").hide();
            localStorage['flag_spot'] = "yes";
            
        });

        $('.pause').click(function() {
            audioElement.pause();
            $("#btn_pausa").hide();
            $("#btn_play").show();
            localStorage['flag_spot'] = "no";
        });
    });
</script>
    
    <?php echo $this->element('navbar')?>
    
        <?php echo $this->fetch('content'); ?>
		
	
    <?php echo $this->element('footbar'); ?>

</body>

</html>
