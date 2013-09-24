<div id="page-container" class="row-fluid">

    <div id="page-content" class="span6 offset3">
            
            <div class="forgetpwd form form-signin">
                <fieldset>
                    <h2><?php echo __('Recover Password'); ?> </h2>

                    <?php echo $this->Session->flash(); ?> 
                    
                    <?php echo $this->Form->create('User', array('action' => 'recover_password')); ?> 
                    <?php echo $this->Form->input('email');?> 

                    <?php echo $this->Form->submit('Recover', array('class' => 'btn')); ?> 
                    
                    <?php echo $this->Form->end();?> 
                </fieldset>

        </div>
    </div>
</div>