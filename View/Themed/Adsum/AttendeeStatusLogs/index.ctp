
<div id="page-container" class="row-fluid">
    
    <div id="page-content" class="span12">

        <div class="attendeeStatusLogs index">

            <h2><?php echo __('Attendee Status Logs'); ?> <?php echo $this->Html->link('<i class="icon-plus">&nbsp;</i>' . __('Add New'), array('action' => 'add'), array('escape' => false, 'class' => 'btn btn-mini btn-success')); ?></h2>

            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('attendee_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('attendance_status_state_id', 'Status'); ?></th>
                    <th><?php echo $this->Paginator->sort('event_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('created', 'Recorded'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($attendeeStatusLogs as $attendeeStatusLog): ?>
                    <tr>
                        <td>
                            <?php echo $this->Html->link($attendeeStatusLog['Attendee']['display_name'], array('controller' => 'attendees', 'action' => 'view', $attendeeStatusLog['Attendee']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($attendeeStatusLog['AttendanceStatusState']['title'], array('controller' => 'attendance_status_states', 'action' => 'view', $attendeeStatusLog['AttendanceStatusState']['id'])); ?>
                        </td>
                        <td>
                            <?php echo $this->Html->link($attendeeStatusLog['Event']['title'], array('controller' => 'events', 'action' => 'view', $attendeeStatusLog['Event']['id'])); ?>
                        </td>
                        <td><?php echo h($this->Time->niceShort($attendeeStatusLog['AttendeeStatusLog']['created'])); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link('<i class="icon-eye-open">&nbsp;</i> ' . __('View'), array('action' => 'view', $attendeeStatusLog['AttendeeStatusLog']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Html->link('<i class="icon-edit">&nbsp;</i> ' . __('Edit'), array('action' => 'edit', $attendeeStatusLog['AttendeeStatusLog']['id']), array('escape' => false, 'class' => 'btn btn-mini')); ?>
                            <?php echo $this->Form->postLink('<i class="icon-remove">&nbsp;</i> ' . __('Delete'), array('action' => 'delete', $attendeeStatusLog['AttendeeStatusLog']['id']), array('escape' => false, 'class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $attendeeStatusLog['AttendeeStatusLog']['id'])); ?>
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
