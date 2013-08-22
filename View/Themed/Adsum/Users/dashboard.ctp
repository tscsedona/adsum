<div class="row">
    <div class="span6 offset3">
        <div class="well">
            <p><?php echo __d('adsum', 'Welcome back, USERNAME.'); ?></p>

            <?php echo $this->Html->link('<i class="icon-calendar">&nbsp;</i> Check-in / Check-out',
                    array('controller' => 'events'),
                    array('escape' => false,'class' => 'btn btn-large btn-success btn-block')); ?> 
            
            <?php echo $this->Html->link('<i class="icon-calendar">&nbsp;</i> Events',
                    array('controller' => 'events'),
                    array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 

            <?php echo $this->Html->link('<i class="icon-group">&nbsp;</i> Attendees',
                    array('controller' => 'attendees'),
                    array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
            
            <hr />
            
            <?php echo $this->Html->link('<i class="icon-user">&nbsp;</i> Users',
                    array('controller' => 'users'),
                    array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 

            <?php echo $this->Html->link('<i class="icon-file-text-alt">&nbsp;</i> Reports',
                    '#',
                    array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
            
            <?php echo $this->Html->link('<i class="icon-cog">&nbsp;</i> Configuration',
                    array('controller' => 'options'),
                    array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
            
        </div><!-- /.well -->
    </div><!-- /.span6.offset3 -->
</div><!-- /.row -->