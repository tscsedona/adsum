
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span12">

        <div class="users index well well-small">

            <h2><?php echo __('Users'); ?> <?php echo $this->Html->link('<i class="icon-plus">&nbsp;</i>' . __('Add New'), array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-mini btn-success')); ?></h2>

            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('display_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('email'); ?></th>
                    <th><?php echo $this->Paginator->sort('is_active', 'Active'); ?></th>
                    <th><?php echo $this->Paginator->sort('last_seen'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <?php echo h($user['User']['display_name']); ?> 
                            <?php if ($user['User']['is_admin']) echo '<i class="icon-star icon-border"></i>'; ?> 
                        </td>
                        <td><?php echo $this->Html->link(h($user['User']['email']), 'mailto:' . h($user['User']['email'])); ?>&nbsp;</td>
                        <td><?php echo (h($user['User']['is_active']) ? __('Yes') : __('No')); ?>&nbsp;
                        <td><?php echo h($this->Time->nice($user['User']['last_seen'])); ?>&nbsp;</td>
                        
                        </td>
                        <td class="actions">
                            <?php echo $this->Html->link('<i class="icon-eye-open">&nbsp;</i> ' . __('View'), array('action' => 'view', $user['User']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Html->link('<i class="icon-edit">&nbsp;</i> ' . __('Edit'), array('action' => 'edit', $user['User']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Form->postLink('<i class="icon-remove">&nbsp;</i> ' . __('Delete'), array('action' => 'delete', $user['User']['id']), array('escape' => false, 'class' => 'btn btn-mini btn-danger'), __('Are you sure you want to delete %s?', $user['User']['display_name'])); ?>
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
