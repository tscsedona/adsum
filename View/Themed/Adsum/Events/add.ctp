
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">
        <div class="well">
            <div class="events form">
                <?php echo $this->Form->create('Event', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
                <fieldset>
                    <h2><?php echo __('Add New Event'); ?></h2>
                    <hr />
                    <div class="control-group">
                        <?php echo $this->Form->label('event_type_id', 'Event Type', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('event_type_id', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('title', 'Title', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('title', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->
                    
                    <div class="control-group">
                        <?php echo $this->Form->label('uuid', 'UUID', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('uuid', array('class' => 'span12', 'disabled' => true)); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('extid', 'ExtID', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('extid', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('is_active', 'Is Active', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('is_active'); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('start_time', 'Start Date', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('start_time', array(
                                'class' => 'datepicker', 'type' => 'text'
                            )); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('end_time', 'End Date', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('end_time', array(
                                'class' => 'datepicker', 'type' => 'text'
                            )); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <?php # echo $this->Form->input('Attendee'); ?>
                </fieldset>
                <hr />
                <div class="text-right">
                    <?php echo $this->Form->submit('Create Event', array('class' => 'btn btn-large btn-success')); ?>
                </div><!-- /.text-right -->
                <?php echo $this->Form->end(); ?>
            </div><!-- /.well -->
        </div><!-- /.events.form -->
    </div><!-- #page-content .span9 -->
</div><!-- #page-container .row-fluid -->

<?php $this->Html->script('libs/bootstrap-datepicker', array('block' => 'script')); ?> 
<?php $this->Html->css('datepicker', null, array('block' => 'scriptHead')); ?> 