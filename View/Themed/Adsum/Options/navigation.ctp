<div class="row">
    <div class="span6 offset3">
        <div class="well">
            <h2><?php echo __d('adsum', 'Site Configuration'); ?> </h2>

            <hr />
            
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $this->Html->link('<i class="icon-cogs">&nbsp;</i> Site Settings',
                            array('controller' => 'Options', 'action' => 'index'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span12 -->
            </div><!-- /.row-fluid -->
            
            <br />
            
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $this->Html->link('<i class="icon-list-ul">&nbsp;</i> Event Types',
                            array('controller' => 'EventTypes', 'action' => 'index'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span12 -->
            </div><!-- /.row-fluid -->
            
            <br />
            
            <div class="row-fluid">
                <div class="span12">
                    <?php echo $this->Html->link('<i class="icon-bookmark">&nbsp;</i> Status States',
                            array('controller' => 'AttendanceStatusStates', 'action' => 'index'),
                            array('escape' => false,'class' => 'btn btn-large btn-block')); ?> 
                </div><!-- /.span12 -->
            </div><!-- /.row-fluid -->
            
        </div><!-- /.well -->
    </div><!-- /.span6.offset3 -->
</div><!-- /.row -->