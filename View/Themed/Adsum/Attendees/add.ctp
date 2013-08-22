
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">

            <ul class="nav nav-list bs-docs-sidenav">
                <li><?php echo $this->Html->link(__('List Attendees'), array('action' => 'index')); ?></li>
                <li><?php echo $this->Html->link(__('List Attendee Meta'), array('controller' => 'attendee_meta', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Attendee Metum'), array('controller' => 'attendee_meta', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Attendee Status Logs'), array('controller' => 'attendee_status_logs', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Attendee Status Log'), array('controller' => 'attendee_status_logs', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
                <li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
            </ul><!-- .nav nav-list bs-docs-sidenav -->

        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="attendees form">

            <?php echo $this->Form->create('Attendee', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
            <fieldset>
                <h2><?php echo __('Add Attendee'); ?></h2>
                <div class="control-group">
                    <?php echo $this->Form->label('uuid', 'UUID', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $this->Form->input('uuid', array('class' => 'span12')); ?>
                    </div><!-- .controls -->
                </div><!-- .control-group -->

                <div class="control-group">
                    <?php echo $this->Form->label('extid', 'ExtID', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $this->Form->input('extid', array('class' => 'span12')); ?>
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
                    <?php echo $this->Form->label('display_name', 'Display Name', array('class' => 'control-label')); ?>
                    <div class="controls">
                        <?php echo $this->Form->input('display_name', array('class' => 'span12')); ?>
                    </div><!-- .controls -->
                </div><!-- .control-group -->

                <?php # echo $this->Form->input('Event'); ?>
                
            </fieldset>
            
            <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary pull-right')); ?>
            <?php echo $this->Form->end(); ?>

        </div>

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
