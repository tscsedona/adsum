<div id="page-container" class="row-fluid">
    <div id="page-content" class="span6 offset3">
        <div class="well">
            <div class="assignment form">

                <?php echo $this->Form->create('Event', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>

                <fieldset>
                    <h2><?php echo __('Assign Attendees'); ?></h2>

                    <hr />

                    <div class="control-group">
                        <?php echo $this->Form->input('id', array('type' => 'select', 'class' => 'input-block-level', 'options' => $events)); ?>
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('Attendee', 'Assign the following users:'); ?>

                        <?php
                        echo $this->Form->input('Attendee', array(
                            'class' => 'input-block-level',
                            'multiple' => 'multiple',
                            'type' => 'select'
                        ));
                        ?>
                    </div><!-- .control-group -->
                </fieldset>

                <hr />

                <div class="text-right">
                <?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-success')); ?>
                </div>

<?php echo $this->Form->end(); ?>

            </div><!-- /.assignment.form -->
        </div><!-- /.well -->
    </div><!-- /.page-content -->
</div><!-- /.page-container -->