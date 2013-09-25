
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">

        <div class="eventTypes form well well-small">

            <?php echo $this->Form->create('EventType', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?> 
            
            <fieldset>
                <h2><?php echo __('Edit Event Type'); ?> </h2>
                
                <hr />
                
                <?php echo $this->Form->input('id'); ?> 

                <div class="control-group">
                    <?php echo $this->Form->label('title', 'Title', array('class' => 'control-label')); ?> 
                    <div class="controls">
                        <?php echo $this->Form->input('title', array('class' => 'span12')); ?> 
                    </div><!-- .controls -->
                </div><!-- .control-group -->

            </fieldset>
            
            <hr />
            
            <div class="text-right">
                <?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-success')); ?> 
            </div>
            
            <?php echo $this->Form->end(); ?> 

        </div>

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
