<div class="row text-center">
  <h1><?php echo $siteName; ?> <span id="version">v<?php echo VERSION; ?> </h1>
</div><!-- /.row -->
    
<div class="row-fluid">
    <div class="span4 offset4">
        <div class="form-signin">
            <div id="login">
                    <?php echo $this->Session->flash('auth'); ?>
                    <?php echo $this->Form->create('User', array('action' => 'login', 'class' => 'form-horizontal', 'method' => 'POST')); ?> 

                        <div id="legend">
                            <h2 class="form-signin-heading">Please sign in</h2>
                        </div> 
                        <?php echo $this->Session->flash('auth'); ?> 
                        
                        <div class="control-group">
                            <!-- Username -->
                            <?php echo $this->Form->input('email', array('class' => 'input-block-level', 'placeholder' => 'you@example.com', 'label' => false, 'div' => false)); ?> 
                        </div>

                        <div class="control-group">
                            <!-- Password-->
                            <?php echo $this->Form->input('password', array('class' => 'input-block-level', 'placeholder' => 'Password', 'label' => false, 'div' => false)); ?> 
                        </div>


                        <div class="control-group">
                            <!-- Button -->
                            <?php echo $this->Form->button('Login', array('type' => 'submit', 'class' => 'btn btn-success')); ?> 
                        </div>
                    </fieldset>
                    <?php echo $this->Form->end(); ?> 

                    <p><?php echo $this->Html->link('Can\'t access your account?', '#'); ?> </p>
            </div><!-- /#login -->
        </div><!-- /.well -->
        
        <!-- Hold onto this until pre-release; could be an optional addition.
        <div class="form-signin" style="margin:12px 0 0;">
            <p class="text-center"><a href="#" class="btn btn-large btn-info" style="margin:4px;">Self Check-In</a></p>
        </div> --> <!-- /.well -->
        
            <p class="muted text-right"><small>&copy; 2013 The Sedona Conference<sup>&reg;</sup></small></p>
    </div><!-- /.span4 offset4 -->
</div><!-- /.row-fluid -->