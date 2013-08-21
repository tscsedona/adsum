
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Attendee Bar Number'), array('action' => 'edit', $attendeeBarNumber['AttendeeBarNumber']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendee Bar Number'), array('action' => 'delete', $attendeeBarNumber['AttendeeBarNumber']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendeeBarNumber['AttendeeBarNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendee Bar Numbers'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee Bar Number'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="attendeeBarNumbers view">

			<h2><?php  echo __('Attendee Bar Number'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($attendeeBarNumber['AttendeeBarNumber']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Attendee'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeeBarNumber['Attendee']['id'], array('controller' => 'attendees', 'action' => 'view', $attendeeBarNumber['Attendee']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Bar Number'); ?></strong></td>
		<td>
			<?php echo h($attendeeBarNumber['AttendeeBarNumber']['bar_number']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('State'); ?></strong></td>
		<td>
			<?php echo h($attendeeBarNumber['AttendeeBarNumber']['state']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($attendeeBarNumber['AttendeeBarNumber']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($attendeeBarNumber['AttendeeBarNumber']['modified']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
