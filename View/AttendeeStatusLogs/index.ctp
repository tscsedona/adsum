
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
				<li><?php echo $this->Html->link(__('New Attendee Status Log'), array('action' => 'add'), array('class' => '')); ?></li>						<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Attendance Status States'), array('controller' => 'attendance_status_states', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Attendance Status State'), array('controller' => 'attendance_status_states', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="attendeeStatusLogs index">
		
			<h2><?php echo __('Attendee Status Logs'); ?></h2>
			
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
											<th><?php echo $this->Paginator->sort('id'); ?></th>
											<th><?php echo $this->Paginator->sort('attendee_id'); ?></th>
											<th><?php echo $this->Paginator->sort('attendance_status_state_id'); ?></th>
											<th><?php echo $this->Paginator->sort('event_id'); ?></th>
											<th><?php echo $this->Paginator->sort('user_id'); ?></th>
											<th><?php echo $this->Paginator->sort('created'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($attendeeStatusLogs as $attendeeStatusLog): ?>
	<tr>
		<td><?php echo h($attendeeStatusLog['AttendeeStatusLog']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['Attendee']['display_name'], array('controller' => 'attendees', 'action' => 'view', $attendeeStatusLog['Attendee']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['AttendanceStatusState']['title'], array('controller' => 'attendance_status_states', 'action' => 'view', $attendeeStatusLog['AttendanceStatusState']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['Event']['title'], array('controller' => 'events', 'action' => 'view', $attendeeStatusLog['Event']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($attendeeStatusLog['User']['display_name'], array('controller' => 'users', 'action' => 'view', $attendeeStatusLog['User']['id'])); ?>
		</td>
		<td><?php echo h($attendeeStatusLog['AttendeeStatusLog']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attendeeStatusLog['AttendeeStatusLog']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendeeStatusLog['AttendeeStatusLog']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attendeeStatusLog['AttendeeStatusLog']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $attendeeStatusLog['AttendeeStatusLog']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
			</table>
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>			</small></p>

			<div class="pagination">
				<ul>
					<?php
		echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
		echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
	?>
				</ul>
			</div><!-- .pagination -->
			
		</div><!-- .index -->
	
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
