
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Attendance Status State'), array('action' => 'edit', $attendanceStatusState['AttendanceStatusState']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Attendance Status State'), array('action' => 'delete', $attendanceStatusState['AttendanceStatusState']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendanceStatusState['AttendanceStatusState']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendance Status States'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendance Status State'), array('action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="attendanceStatusStates view">

			<h2><?php  echo __('Attendance Status State'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($attendanceStatusState['AttendanceStatusState']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
		<td>
			<?php echo h($attendanceStatusState['AttendanceStatusState']['title']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
