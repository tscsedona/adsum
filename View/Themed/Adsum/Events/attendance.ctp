
<div id="page-container" class="row-fluid">
    <div id="page-content" class="span12">
        <div class="attendees index well well-small">

            <?php # Debugger::dump($event); ?> 
            
            <h2>
                <?php echo __('Registered Attendees'); ?>
            </h2>
            
            <h4><?php echo $event['Event']['title']; ?> </h4>
            
            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('first_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('last_name'); ?></th>
                    <th><?php echo __('Display Name'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($attendees as $attendee): ?>
                    <tr>
                        <td><?php echo h($attendee['Attendee']['first_name']); ?>&nbsp;</td>
                        <td><?php echo h($attendee['Attendee']['last_name']); ?>&nbsp;</td>
                        <td><?php echo h($attendee['Attendee']['display_name']); ?>&nbsp;</td>
                        <td class="actions" style="width:84px;">
                            <?php echo $this->Form->postLink('<i class="icon-remove">&nbsp;</i> ' . __('Unassign'), array('action' => 'unassign', $attendee['Attendee']['id'], $event['Event']['id']), array('escape' => false, 'class' => 'btn btn-mini btn-warning'), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?>
                            <?php # echo $this->Html->link('<i class="icon-remove">&nbsp;</i> ' . __('Unregister'), array('action' => 'view', $event['Event']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
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

        </div><!-- /.attendees -->
    </div><!-- /#page-content -->
</div><!-- /#page-container -->