
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
				<li><?php echo $this->Html->link(__('New Attendee Bar Number'), array('action' => 'add'), array('class' => '')); ?></li>						<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="attendeeBarNumbers index">
		
			<h2><?php echo __('Attendee Bar Numbers'); ?></h2>
			
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
											<th><?php echo $this->Paginator->sort('id'); ?></th>
											<th><?php echo $this->Paginator->sort('attendee_id'); ?></th>
											<th><?php echo $this->Paginator->sort('bar_number'); ?></th>
											<th><?php echo $this->Paginator->sort('state'); ?></th>
											<th><?php echo $this->Paginator->sort('created'); ?></th>
											<th><?php echo $this->Paginator->sort('modified'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($attendeeBarNumbers as $attendeeBarNumber): ?>
	<tr>
		<td><?php echo h($attendeeBarNumber['AttendeeBarNumber']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attendeeBarNumber['Attendee']['id'], array('controller' => 'attendees', 'action' => 'view', $attendeeBarNumber['Attendee']['id'])); ?>
		</td>
		<td><?php echo h($attendeeBarNumber['AttendeeBarNumber']['bar_number']); ?>&nbsp;</td>
		<td><?php echo h($attendeeBarNumber['AttendeeBarNumber']['state']); ?>&nbsp;</td>
		<td><?php echo h($attendeeBarNumber['AttendeeBarNumber']['created']); ?>&nbsp;</td>
		<td><?php echo h($attendeeBarNumber['AttendeeBarNumber']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $attendeeBarNumber['AttendeeBarNumber']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attendeeBarNumber['AttendeeBarNumber']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attendeeBarNumber['AttendeeBarNumber']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $attendeeBarNumber['AttendeeBarNumber']['id'])); ?>
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
