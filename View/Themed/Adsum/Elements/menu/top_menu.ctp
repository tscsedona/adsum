        <!-- Navbar
        ================================================== -->
        <div class="navbar navbar-inverse navbar-static-top">
          <div class="navbar-inner">
            <div class="container">
              <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php echo $this->Html->link('<i class="icon-time">&nbsp;</i>' . Configure::read('Site.settings.name'), '/', array('escape' => false, 'class' => 'brand')); ?> 
              <div class="nav-collapse collapse">
                <ul class="nav">
                    <?php echo $this->element('menu/items'); ?> 
                </ul>
              </div><!--/.nav-collapse -->
            </div><!-- /.container -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar.navbar-inverse -->
        