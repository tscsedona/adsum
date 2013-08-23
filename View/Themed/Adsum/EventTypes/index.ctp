
<div id="page-container" class="row-fluid">

    <div id="page-content" class="span12">

        <div class="eventTypes index">

            <h2><?php echo __('Event Types'); ?> <?php echo $this->Html->link('<i class="icon-plus">&nbsp;</i>' . __('Add New'), array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-mini')); ?></h2>

            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('title'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($eventTypes as $eventType): ?>
                    <tr>
                        <td><?php echo h($eventType['EventType']['title']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link('<i class="icon-eye-open">&nbsp;</i> ' . __('View'), array('action' => 'view', $eventType['EventType']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Html->link('<i class="icon-edit">&nbsp;</i> ' . __('Edit'), array('action' => 'edit', $eventType['EventType']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Form->postLink('<i class="icon-remove">&nbsp;</i> ' . __('Delete'), array('action' => 'delete', $eventType['EventType']['id']), array('escape' => false, 'class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $eventType['EventType']['id'])); ?>
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
