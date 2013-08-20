
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Attendee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Attendee.id'))); ?></li>
										<li><?php echo $this->Html->link(__('List Attendees'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Attendee Bar Numbers'), array('controller' => 'attendee_bar_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee Bar Number'), array('controller' => 'attendee_bar_numbers', 'action' => 'add')); ?> </li>
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
					<h2><?php echo __('Edit Attendee'); ?></h2>
			<div class="control-group">
	<?php echo $this->Form->label('id', 'id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('uuid', 'uuid', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('uuid', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('extid', 'extid', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('extid', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('first_name', 'first_name', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('first_name', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('last_name', 'last_name', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('last_name', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('display_name', 'display_name', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('display_name', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

		<?php echo $this->Form->input('Event');?>
				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
