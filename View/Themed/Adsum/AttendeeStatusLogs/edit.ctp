
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span8 offset2">
        <div class="well">

            <div class="attendeeStatusLogs form">

                <?php echo $this->Form->create('AttendeeStatusLog', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
                <fieldset>
                    <h2><?php echo __('Edit Attendee Status Log'); ?></h2>
                    
                    <hr />
                    
                    <?php echo $this->Form->input('id'); ?>

                    <div class="control-group">
                        <?php echo $this->Form->label('attendee_id', 'Attendee', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('attendee_id', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('Status State', 'Status State', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('attendance_status_state_id', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('event_id', 'Event', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('event_id', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('user_id', 'Logged By', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('user_id', array('class' => 'span12', 'disabled' => $loggedByState)); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->
                    
                    <?php if (AuthComponent::user('is_admin') == true) : ?>
                    <div class="control-group">
                        <?php echo $this->Form->label('created', 'Timestamp', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('created', array('disabled' => $loggedByState)); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->
                    <?php endif; ?> 

                </fieldset>
                
                <hr />
                <div class="text-right">
                    <?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-success')); ?>
                </div><!-- /.text-right -->
                <?php echo $this->Form->end(); ?>

            </div><!-- /.attendeeStatusLogs.form -->
        </div><!-- /.well -->

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
