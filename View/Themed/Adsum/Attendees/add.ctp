
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">

        <div class="well">
            <div class="attendees form">

                <?php echo $this->Form->create('Attendee', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
                <fieldset>
                    <h2><?php echo __('Create Attendee'); ?></h2>
                    
                    <hr />
                    
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
                        <?php echo $this->Form->label('display_name', 'Display Name', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('display_name', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('extid', 'ExtID', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('extid', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <?php # echo $this->Form->input('Event'); ?>

                </fieldset>
                
                <hr />

                <div class="text-right">
                    <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-success')); ?>
                </div><!-- /.text-right -->
                <?php echo $this->Form->end(); ?>

            </div><!-- /.attendees.form -->
        </div><!-- /.well -->

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
