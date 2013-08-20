
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Attendee Status Log'), array('action' => 'edit', $attendeeStatusLog['AttendeeStatusLog']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendee Status Log'), array('action' => 'delete', $attendeeStatusLog['AttendeeStatusLog']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendeeStatusLog['AttendeeStatusLog']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendee Status Logs'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee Status Log'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendance Status States'), array('controller' => 'attendance_status_states', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance Status State'), array('controller' => 'attendance_status_states', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="attendeeStatusLogs view">

			<h2><?php  echo __('Attendee Status Log'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($attendeeStatusLog['AttendeeStatusLog']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Attendee'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['Attendee']['id'], array('controller' => 'attendees', 'action' => 'view', $attendeeStatusLog['Attendee']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Attendance Status State'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['AttendanceStatusState']['title'], array('controller' => 'attendance_status_states', 'action' => 'view', $attendeeStatusLog['AttendanceStatusState']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Event'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['Event']['title'], array('controller' => 'events', 'action' => 'view', $attendeeStatusLog['Event']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['User']['id'], array('controller' => 'users', 'action' => 'view', $attendeeStatusLog['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($attendeeStatusLog['AttendeeStatusLog']['created']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
