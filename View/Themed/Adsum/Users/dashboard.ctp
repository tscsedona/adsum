<div class="row">
    <div class="span6 offset3">
        <div class="well">
            <h2><?php echo __d('adsum', 'Welcome back, '); ?> <?php echo AuthComponent::user('first_name'); ?>.</h2>

            <hr />
            
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $this->Html->link('<i class="icon-calendar">&nbsp;</i> Check-in / Check-out',
                            array('controller' => 'AttendeeStatusLogs', 'action' => 'add'),
                            array('escape' => false,'class' => 'btn btn-large btn-success btn-block')); ?> 
                </div><!-- /.span12 -->
            </div><!-- /.row-fluid -->
            
            <br />
                
            <div class="row-fluid">
                <div class="span6">
                    <?php echo $this->Html->link('<i class="icon-calendar">&nbsp;</i> Events',
                            array('controller' => 'events'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span6 -->
                <div class="span6">
                    <?php echo $this->Html->link('<i class="icon-group">&nbsp;</i> Attendees',
                            array('controller' => 'attendees'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span6 -->
            </div><!-- /.row-fluid -->  
            
            <br />
            
            <div class="row-fluid">
                    <?php echo $this->Html->link('<i class="icon-external-link">&nbsp;</i> Assign Attendees to Event',
                            array('controller' => 'events', 'action' => 'assign'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 

                    <?php if (AuthComponent::user('is_admin') == true) : ?>  
                        <?php echo $this->Html->link('<i class="icon-user">&nbsp;</i> Users',
                                array('controller' => 'users', 'action' => 'index'),
                                array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                        <?php /* echo $this->Html->link('<i class="icon-file-text-alt">&nbsp;</i> Reports',
                                '#',
                                array('escape' => false,'class' => 'btn btn-large btn-block')); */ ?> 
                        <?php echo $this->Html->link('<i class="icon-cog">&nbsp;</i> Configuration',
                                '/config',
                                array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                    <?php endif; ?> 
            </div><!-- /.row-fluid -->
        </div><!-- /.well -->
    </div><!-- /.span6.offset3 -->
</div><!-- /.row -->