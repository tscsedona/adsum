
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span12">

        <div class="attendees index well well-small">

            <h2>
                <?php echo __('Attendees'); ?> 
                <?php echo $this->Html->link('<i class="icon-plus">&nbsp;</i>' . __('Add New'), array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-mini btn-success')); ?>
                <?php echo $this->Html->link('<i class="icon-upload">&nbsp;</i>' . __('Bulk Import'), array('action' => 'bulk_import'), array('escape' => false, 'class' => 'btn btn-mini btn-info')); ?>
            </h2>

            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('first_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('last_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('display_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($attendees as $attendee): ?>
                    <tr>
                        <td><?php echo h($attendee['Attendee']['first_name']); ?>&nbsp;</td>
                        <td><?php echo h($attendee['Attendee']['last_name']); ?>&nbsp;</td>
                        <td><?php echo h($attendee['Attendee']['display_name']); ?>&nbsp;</td>
                        <td><?php echo h($this->Time->format($attendee['Attendee']['created'])); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link('<i class="icon-eye-open">&nbsp;</i> ' . __('View'), array('action' => 'view', $attendee['Attendee']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Html->link('<i class="icon-edit">&nbsp;</i> ' . __('Edit'), array('action' => 'edit', $attendee['Attendee']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Form->postLink('<i class="icon-remove">&nbsp;</i> ' . __('Delete'), array('action' => 'delete', $attendee['Attendee']['id']), array('escape' => false, 'class' => 'btn btn-mini btn-danger'), __('Are you sure you want to delete # %s?', $attendee['Attendee']['id'])); ?>
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
