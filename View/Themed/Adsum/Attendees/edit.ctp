
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">

        <div class="well">
            <div class="attendees form">

                <?php echo $this->Form->create('Attendee', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
                <fieldset>
                    <h2><?php echo __('Edit Attendee'); ?></h2>
                    
                    <hr />
                    
                    <?php echo $this->Form->input('id'); ?> 

                    <div class="control-group">
                        <?php echo $this->Form->label('display_name', 'Display Name', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('display_name', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('first_name', 'First Name', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('first_name', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('last_name', 'Last Name', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('last_name', array('class' => 'span12')); ?>
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
                        <?php echo $this->Form->label('Event', 'Registered For', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('Event', array('class' => 'input-block-level')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                </fieldset>

                <hr />
                
                <div class="text-right">
                    <?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-success')); ?>
                </div>
                
                <?php echo $this->Form->end(); ?>

            </div><!-- /.attendees.form -->
        </div><!-- /.well -->

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
