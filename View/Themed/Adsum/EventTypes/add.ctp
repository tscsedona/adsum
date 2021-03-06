
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">

            <ul class="nav nav-list bs-docs-sidenav">
                <li><?php echo $this->Html->link(__('List Event Types'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
            </ul><!-- .nav nav-list bs-docs-sidenav -->

        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="eventTypes form">

            <?php echo $this->Form->create('EventType', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
            
            <fieldset>
                
                <h2><?php echo __('Add Event Type'); ?></h2>
                
                <div class="control-group">
                    <?php echo $this->Form->label('title', 'Type', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $this->Form->input('title', array('class' => 'span12')); ?>
                    </div><!-- .controls -->
                </div><!-- .control-group -->
                
                <div class="control-group">
                    <?php echo $this->Form->label('color', 'Color', array('class' => 'control-label')); ?> 
                    <div class="controls">
                        <?php echo $this->Form->input('color', array('type' => 'text', 'length' => 6)); ?> 
                    </div><!-- .controls -->
                </div><!-- .control-group -->

            </fieldset>
            <?php echo $this->Form->submit('Save', array('class' => 'btn btn-large btn-primary')); ?>
            <?php echo $this->Form->end(); ?>

        </div>

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->

<?php if (CakePlugin::loaded('CakeJqueryColorPicker')) : ?>
<?php $this->Html->script('/CakeJqueryColorPicker/js/colorpicker.min.js', array('block' => 'script')); ?> 
<?php $this->Html->css('/CakeJqueryColorPicker/css/colorpicker.min.css', null, array('block' => 'scriptHead')); ?> 
<?php $this->Html->script('/CakeJqueryColorPicker/js/initColorPicker.js', array('block' => 'scriptBottom')); ?> 
<?php endif; ?> 