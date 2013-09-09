<div class="row">
    <div class="span6 offset3">
        <div class="well">
            <p><?php echo __d('adsum', 'Welcome back, '); ?> <?php echo AuthComponent::user('first_name'); ?>.</p>

            <?php echo $this->Html->link('<i class="icon-calendar">&nbsp;</i> Check-in / Check-out',
                    array('controller' => 'AttendeeStatusLogs', 'action' => 'add'),
                    array('escape' => false,'class' => 'btn btn-large btn-success btn-block')); ?> 

            <hr />
            
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
                <div class="span4">
                    <?php echo $this->Html->link('<i class="icon-user">&nbsp;</i> Users',
                            array('controller' => 'users', 'action' => 'index'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span4 -->
                <div class="span4">
                    <?php echo $this->Html->link('<i class="icon-file-text-alt">&nbsp;</i> Reports',
                            '#',
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span4 -->
                <div class="span4">
                    <?php echo $this->Html->link('<i class="icon-cog">&nbsp;</i> Configuration',
                            array('controller' => 'options'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span4 -->
            </div><!-- /.row-fluid -->
        </div><!-- /.well -->
    </div><!-- /.span6.offset3 -->
</div><!-- /.row -->