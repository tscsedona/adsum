
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Html->link(__('List Attendee Status Logs'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendance Status States'), array('controller' => 'attendance_status_states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance Status State'), array('controller' => 'attendance_status_states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="attendeeStatusLogs form">
		
			<?php echo $this->Form->create('AttendeeStatusLog', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Add Attendee Status Log'); ?></h2>
			<div class="control-group">
	<?php echo $this->Form->label('attendee_id', 'attendee_id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('attendee_id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('attendance_status_state_id', 'attendance_status_state_id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('attendance_status_state_id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('event_id', 'event_id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('event_id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('logged_by', 'logged_by', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('logged_by', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
