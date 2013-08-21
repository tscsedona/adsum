
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Attendee Metum'), array('action' => 'edit', $attendeeMetum['AttendeeMetum']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendee Metum'), array('action' => 'delete', $attendeeMetum['AttendeeMetum']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendeeMetum['AttendeeMetum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendee Meta'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee Metum'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="attendeeMeta view">

			<h2><?php  echo __('Attendee Metum'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($attendeeMetum['AttendeeMetum']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Attendee'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($attendeeMetum['Attendee']['id'], array('controller' => 'attendees', 'action' => 'view', $attendeeMetum['Attendee']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Key'); ?></strong></td>
		<td>
			<?php echo h($attendeeMetum['AttendeeMetum']['key']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Value'); ?></strong></td>
		<td>
			<?php echo h($attendeeMetum['AttendeeMetum']['value']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
