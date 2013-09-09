
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">

        <div class="well">

            <div class="users form">

                <?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
                <fieldset>
                    <h2><?php echo __('Edit User'); ?></h2>
                    
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
                        <?php echo $this->Form->label('email', 'Email', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('email', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->
                    
                    <div class="control-group">
                        <?php echo $this->Form->label('extid', 'ExtID', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('extid', array('class' => 'span12')); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('pass', 'Password', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <!-- <a href="#" class="btn btn-small"><i class="icon-lock">&nbsp;</i> Reset password</a> -->
                            <?php echo $this->Form->input('pass'); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('is_active', 'Is Active', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('is_active'); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                    <div class="control-group">
                        <?php echo $this->Form->label('is_admin', 'Is Admin', array('class' => 'control-label')); ?>
                        <div class="controls">
                            <?php echo $this->Form->input('is_admin'); ?>
                        </div><!-- .controls -->
                    </div><!-- .control-group -->

                </fieldset>
                
                <hr />
                
                <div class="text-right">
                    <?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-success')); ?>
                </div><!-- /.text-right -->
                
                <?php echo $this->Form->end(); ?>

            </div><!-- /.users.form -->
            
        </div><!-- /.well -->

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
