
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">

            <ul class="nav nav-list bs-docs-sidenav">			
                <li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => '')); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('Create New User'), array('action' => 'add'), array('class' => '')); ?> </li>
            </ul><!-- .nav nav-list bs-docs-sidenav -->

        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="users view well well-small">

            <h2><?php echo __('User'); ?></h2>

            <table class="table table-striped table-bordered">
                <tr>
                    <td><strong><?php echo __('Display Name'); ?></strong></td>
                    <td>
                        <?php echo h($user['User']['display_name']); ?> 
                        <?php if ($user['User']['is_admin']) echo '<i class="icon-star icon-border"></i>'; ?> 
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('First Name'); ?></strong></td>
                    <td>
                        <?php echo h($user['User']['first_name']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Last Name'); ?></strong></td>
                    <td>
                        <?php echo h($user['User']['last_name']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Email'); ?></strong></td>
                    <td>
                        <?php echo h($user['User']['email']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Extid'); ?></strong></td>
                    <td>
                        <?php echo h($user['User']['extid']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr class="btn-danger">
                    <td><strong><?php echo __('Pass'); ?></strong></td>
                    <td>
                        <?php echo h($user['User']['pass']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Is Active'); ?></strong></td>
                    <td>
                        <?php echo (h($user['User']['is_active'] ? __('Yes') : __('No'))); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr class="muted">
                    <td><strong><?php echo __('Last Seen'); ?></strong></td>
                    <td>
                        <?php echo $this->Time->nice(h($user['User']['last_seen'])); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr class="muted">
                    <td><strong><?php echo __('Created'); ?></strong></td>
                    <td>
                        <?php echo $this->Time->nice(h($user['User']['created'])); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr class="muted">
                    <td><strong><?php echo __('Modified'); ?></strong></td>
                    <td>
                        <?php echo $this->Time->nice(h($user['User']['modified'])); ?>
                        &nbsp;
                    </td>
                </tr>
            </table><!-- .table table-striped table-bordered -->

        </div><!-- .view -->


    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
