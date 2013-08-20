
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Attendee'), array('action' => 'edit', $attendee['Attendee']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendee'), array('action' => 'delete', $attendee['Attendee']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendee['Attendee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendee Bar Numbers'), array('controller' => 'attendee_bar_numbers', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee Bar Number'), array('controller' => 'attendee_bar_numbers', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendee Status Logs'), array('controller' => 'attendee_status_logs', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee Status Log'), array('controller' => 'attendee_status_logs', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="attendees view">

			<h2><?php  echo __('Attendee'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($attendee['Attendee']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Uuid'); ?></strong></td>
		<td>
			<?php echo h($attendee['Attendee']['uuid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Extid'); ?></strong></td>
		<td>
			<?php echo h($attendee['Attendee']['extid']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('First Name'); ?></strong></td>
		<td>
			<?php echo h($attendee['Attendee']['first_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Name'); ?></strong></td>
		<td>
			<?php echo h($attendee['Attendee']['last_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Display Name'); ?></strong></td>
		<td>
			<?php echo h($attendee['Attendee']['display_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($attendee['Attendee']['created']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

					
			<div class="related">

				<h3><?php echo __('Related Attendee Bar Numbers'); ?></h3>
				
				<?php if (!empty($attendee['AttendeeBarNumber'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Attendee Id'); ?></th>
		<th><?php echo __('Bar Number'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($attendee['AttendeeBarNumber'] as $attendeeBarNumber): ?>
		<tr>
			<td><?php echo $attendeeBarNumber['id']; ?></td>
			<td><?php echo $attendeeBarNumber['attendee_id']; ?></td>
			<td><?php echo $attendeeBarNumber['bar_number']; ?></td>
			<td><?php echo $attendeeBarNumber['state']; ?></td>
			<td><?php echo $attendeeBarNumber['created']; ?></td>
			<td><?php echo $attendeeBarNumber['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendee_bar_numbers', 'action' => 'view', $attendeeBarNumber['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendee_bar_numbers', 'action' => 'edit', $attendeeBarNumber['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendee_bar_numbers', 'action' => 'delete', $attendeeBarNumber['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $attendeeBarNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Attendee Bar Number'), array('controller' => 'attendee_bar_numbers', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Attendee Status Logs'); ?></h3>
				
				<?php if (!empty($attendee['AttendeeStatusLog'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Attendee Id'); ?></th>
		<th><?php echo __('Attendance Status State Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Logged By'); ?></th>
		<th><?php echo __('Created'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($attendee['AttendeeStatusLog'] as $attendeeStatusLog): ?>
		<tr>
			<td><?php echo $attendeeStatusLog['id']; ?></td>
			<td><?php echo $attendeeStatusLog['attendee_id']; ?></td>
			<td><?php echo $attendeeStatusLog['attendance_status_state_id']; ?></td>
			<td><?php echo $attendeeStatusLog['event_id']; ?></td>
			<td><?php echo $attendeeStatusLog['logged_by']; ?></td>
			<td><?php echo $attendeeStatusLog['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attendee_status_logs', 'action' => 'view', $attendeeStatusLog['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attendee_status_logs', 'action' => 'edit', $attendeeStatusLog['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendee_status_logs', 'action' => 'delete', $attendeeStatusLog['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $attendeeStatusLog['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Attendee Status Log'), array('controller' => 'attendee_status_logs', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Events'); ?></h3>
				
				<?php if (!empty($attendee['Event'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Event Type Id'); ?></th>
		<th><?php echo __('Uuid'); ?></th>
		<th><?php echo __('Extid'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Attendee Count'); ?></th>
		<th><?php echo __('Created'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($attendee['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['event_type_id']; ?></td>
			<td><?php echo $event['uuid']; ?></td>
			<td><?php echo $event['extid']; ?></td>
			<td><?php echo $event['title']; ?></td>
			<td><?php echo $event['is_active']; ?></td>
			<td><?php echo $event['start_time']; ?></td>
			<td><?php echo $event['end_time']; ?></td>
			<td><?php echo $event['attendee_count']; ?></td>
			<td><?php echo $event['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
