
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">
        <div class="well">

            <div class="attendeeStatusLogs form">

                <?php echo $this->Form->create('AttendeeStatusLog', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
                
                <fieldset>
                    <h2><?php echo __('Record Attendee Status'); ?></h2>
                    
                    <hr />
                    
                    <div class="control-group">
                        <?php echo $this->Form->label('attendee_id', 'Attendee', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('attendee_id', array('class' => 'span12', 'default' => $defaultAttendee)); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('attendance_status_state_id', 'Status State', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('attendance_status_state_id', array(
                                'class' => 'span6',
                                'type' => 'radio',
                                'legend' => false,
                                'between' => '--between---',
                                'separator' => '&nbsp;',
                                )); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('event_id', 'Event', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('event_id', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('user_id', 'Logged by', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('user_id', array('class' => 'span12', 'disabled' => $loggedByState, 'default' => AuthComponent::user('id'))); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                </fieldset>
                
                <hr />
                
                <div class="text-right">
                    <p>
                        <?php echo $this->Form->submit('Save & Add Another', array('class' => 'btn', 'name' => 'submit', 'div' => false)); ?> 
                        <?php echo $this->Form->submit('Save', array('class' => 'btn btn-success', 'name' => 'submit', 'div' => false)); ?> 
                    </p>
                </div><!-- /.text-right -->
                <?php echo $this->Form->end(); ?>

            </div><!-- /.attendeeStatusLogs.form -->
        </div><!-- /.well -->
    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
