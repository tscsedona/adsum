<div id="page-container" class="row-fluid">
    <div class="span6 offset3">
        <div class="well">
            <?php echo $this->Form->create('Attendee', array('type' => 'file', 'url' => array('controller' => 'attendees', 'action' => 'bulk_import'), 'inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>

                <fieldset>
                    <h2><?php echo __('Bulk Import'); ?></h2>
                    <hr />
                    <?php
                    echo $this->Form->input('Document.submittedfile', array(
                        'between' => '<br />',
                        'type' => 'file'
                    )); ?>
                </fieldset>
            
                <hr />
                
                <div class="text-right">
                    <?php echo $this->Form->button('<i class="icon-upload">&nbsp;</i> Upload', array('escape' => false, 'type' => 'submit', 'class' => 'btn btn-large btn-success')); ?>
                </div>
                
                <?php echo $this->Form->end(); ?>
            
        </div><!-- /.well -->
    </div><!-- /.span6.offset3 -->
</div><!-- /#page-container -->