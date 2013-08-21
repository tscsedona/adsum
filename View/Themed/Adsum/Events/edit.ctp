
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Event.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Event.id'))); ?></li>
										<li><?php echo $this->Html->link(__('List Events'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Event Types'), array('controller' => 'event_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Type'), array('controller' => 'event_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="events form">
		
			<?php echo $this->Form->create('Event', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Edit Event'); ?></h2>
			<div class="control-group">
	<?php echo $this->Form->label('id', 'id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('id', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('event_type_id', 'event_type_id', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('event_type_id', array('class' => 'span12')); ?>
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
	<?php echo $this->Form->label('title', 'title', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('title', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('is_active', 'is_active', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('is_active', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('start_time', 'start_time', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('start_time', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('end_time', 'end_time', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('end_time', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('attendee_count', 'attendee_count', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('attendee_count', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

		<?php echo $this->Form->input('Attendee');?>
				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
