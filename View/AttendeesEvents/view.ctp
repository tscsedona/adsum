
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Attendees Event'), array('action' => 'edit', $attendeesEvent['AttendeesEvent']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendees Event'), array('action' => 'delete', $attendeesEvent['AttendeesEvent']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendeesEvent['AttendeesEvent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees Events'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendees Event'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="attendeesEvents view">

			<h2><?php  echo __('Attendees Event'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($attendeesEvent['AttendeesEvent']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Attendee'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeesEvent['Attendee']['display_name'], array('controller' => 'attendees', 'action' => 'view', $attendeesEvent['Attendee']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Event'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeesEvent['Event']['title'], array('controller' => 'events', 'action' => 'view', $attendeesEvent['Event']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
