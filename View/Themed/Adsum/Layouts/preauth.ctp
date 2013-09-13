<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$adsumDescription = __d('adsum', 'Adsum - Event Attendance Tracking Software');
?>
<?php echo $this->Html->docType('html5'); ?> 
<html>
	<head>
		<?php echo $this->Html->charset(); ?> 
        
        <!--
                    .-'''''-.
                  .'         `.
                 :             :
                :               :
                :      _/|      :
                 :   =/_/      :
                  `._/ |     .'
               (   /  ,|...-'
                \_/^\/||__
             _/~  `""~`"` \_
          __/  -'/  `-._ `\_\__
        /jgs  /-'`  `\   \  \-.\ -->
        
		<title>
			<?php echo $adsumDescription ?>
			<?php # echo $title_for_layout; ?> 
		</title>
        <?php
        echo $this->Html->meta(
            'favicon.ico',
            '/theme/Adsum/favicon.ico',
            array('type' => 'icon')
        );
        ?>
        <?php echo $this->fetch('meta'); ?> 
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php echo $this->Html->css('bootstrap.min'); ?> 
		<?php echo $this->Html->css('bootstrap-responsive.min'); ?> 
		<?php echo $this->Html->css('core'); ?> 
        <?php echo $this->Html->css('preauth'); ?> 
 
		<?php echo $this->fetch('css'); ?> 
			 
		<?php echo $this->Html->script('libs/jquery'); ?> 
		<?php echo $this->Html->script('libs/bootstrap.min'); ?> 
        
		<?php echo $this->fetch('script'); ?> 
	</head>

	<body>
        
        <?php echo $this->fetch('content'); ?>
		
        <?php echo $this->Html->image('logo/cakephp_logo_125_trans.png', array('alt' => 'Powered by CakePHP', 'class' => 'cakepower hidden-phone')); ?> 
        
	</body>

</html>