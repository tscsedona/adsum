
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
							</ul><!-- .nav nav-list bs-docs-sidenav -->
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="users form">
		
			<?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
				<fieldset>
					<h2><?php echo __('Add User'); ?></h2>
			<div class="control-group">
	<?php echo $this->Form->label('extid', 'extid', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('extid', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('email', 'email', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('email', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('pass', 'pass', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('pass', array('class' => 'span12')); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('display_name', 'display_name', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('display_name', array('class' => 'span12')); ?>
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
	<?php echo $this->Form->label('is_active', 'is_active', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('is_active'); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('last_seen', 'last_seen', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('last_seen'); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

<div class="control-group">
	<?php echo $this->Form->label('is_admin', 'is_admin', array('class' => 'control-label'));?>
	<div class="controls">
		<?php echo $this->Form->input('is_admin'); ?>
	</div><!-- .controls -->
</div><!-- .control-group -->

				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
