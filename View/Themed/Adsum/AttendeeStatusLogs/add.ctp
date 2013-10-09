
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">
        <div class="well well-small">

            <div class="attendeeStatusLogs form">

                <?php echo $this->Form->create('AttendeeStatusLog', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
                
                <fieldset>
                    
                    <?php if (empty($isMobile)) { ?>
                    <h2><?php echo __('Record Status'); ?></h2>
                    <hr />
                    <?php } ?>
                    
                    <?php echo $this->Form->label('attendee_id', 'Attendee', array('class' => '')); ?>
                    <?php echo $this->Form->input('attendee_id', $attendeeInputOptions); ?>

                    <?php if (CakePlugin::loaded('StateBars')) : ?>
                    <div class="ajax_loading_image text-center"></div>
                    <div class="ajax_bar_numbers"></div>

                    <?php echo $this->Form->label('attendance_status_state_id', 'Status State', array('style' => 'margin-top:8px;')); ?>
                    <?php echo $this->Form->input('attendance_status_state_id', array(
                        'class' => 'span6',
                        'type' => 'radio',
                        'legend' => false,
                        'between' => '--between---',
                        'separator' => '<br />',
                        )); ?> 
                    <?php endif; ?> 
                    
                    <hr />
                    
                    <?php if (empty($preset['event'])) { ?>
                    <?php echo $this->Form->label('event_id', 'Event', array('class' => '')); ?>
                    <?php echo $this->Form->input('event_id', $eventInputOptions); ?>
                    <?php } ?>

                    <?php if (empty($preset['user_id'])) { ?>
                    <div class="control-group">
                        <?php echo $this->Form->label('user_id', 'Logged by', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('user_id', array('class' => 'span12', 'disabled' => $loggedByState, 'default' => AuthComponent::user('id'))); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->
                    <?php } else { ?>

                    <br />
                    <small>Logged by: <em><?php echo AuthComponent::user('display_name'); ?> </em></small>

                    <?php } ?>

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

<?php $this->Html->script('ajax_bar_numbers.js', array('block' => 'script')); ?> 