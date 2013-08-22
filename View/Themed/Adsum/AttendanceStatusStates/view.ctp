
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">

            <ul class="nav nav-list bs-docs-sidenav">			
                <li><?php echo $this->Html->link(__('Edit Attendance Status State'), array('action' => 'edit', $attendanceStatusState['AttendanceStatusState']['id']), array('class' => '')); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Attendance Status State'), array('action' => 'delete', $attendanceStatusState['AttendanceStatusState']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendanceStatusState['AttendanceStatusState']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('List Attendance Status States'), array('action' => 'index'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('New Attendance Status State'), array('action' => 'add'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('List Attendee Status Logs'), array('controller' => 'attendee_status_logs', 'action' => 'index'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('New Attendee Status Log'), array('controller' => 'attendee_status_logs', 'action' => 'add'), array('class' => '')); ?> </li>

            </ul><!-- .nav nav-list bs-docs-sidenav -->

        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="attendanceStatusStates view">

            <h2><?php echo __('Attendance Status State'); ?></h2>

            <table class="table table-striped table-bordered">
                <tr>		<td><strong><?php echo __('Id'); ?></strong></td>
                    <td>
                        <?php echo h($attendanceStatusState['AttendanceStatusState']['id']); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
                    <td>
                        <?php echo h($attendanceStatusState['AttendanceStatusState']['title']); ?>
                        &nbsp;
                    </td>
                </tr>			</table><!-- .table table-striped table-bordered -->

        </div><!-- .view -->


        <div class="related">

            <h3><?php echo __('Related Attendee Status Logs'); ?></h3>

            <?php if (!empty($attendanceStatusState['AttendeeStatusLog'])): ?>

                <table class="table table-striped table-bordered">
                    <tr>
                        <th><?php echo __('Id'); ?></th>
                        <th><?php echo __('Attendee Id'); ?></th>
                        <th><?php echo __('Attendance Status State Id'); ?></th>
                        <th><?php echo __('Event Id'); ?></th>
                        <th><?php echo __('Logged By'); ?></th>
                        <th><?php echo __('Created'); ?></th>
                        <th class="actions"><?php echo __('Actions'); ?></th>
                    </tr>
                    <?php
                    $i = 0;
                    foreach ($attendanceStatusState['AttendeeStatusLog'] as $attendeeStatusLog):
                        ?>
                        <tr>
                            <td><?php echo $attendeeStatusLog['id']; ?></td>
                            <td><?php echo $attendeeStatusLog['attendee_id']; ?></td>
                            <td><?php echo $attendeeStatusLog['attendance_status_state_id']; ?></td>
                            <td><?php echo $attendeeStatusLog['event_id']; ?></td>
                            <td><?php echo $attendeeStatusLog['user_id']; ?></td>
                            <td><?php echo $attendeeStatusLog['created']; ?></td>
                            <td class="actions">
                                <?php echo $this->Html->link(__('View'), array('controller' => 'attendee_status_logs', 'action' => 'view', $attendeeStatusLog['id']), array('class' => 'btn btn-mini')); ?>
                                <?php echo $this->Html->link(__('Edit'), array('controller' => 'attendee_status_logs', 'action' => 'edit', $attendeeStatusLog['id']), array('class' => 'btn btn-mini')); ?>
        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attendee_status_logs', 'action' => 'delete', $attendeeStatusLog['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $attendeeStatusLog['id'])); ?>
                            </td>
                        </tr>
    <?php endforeach; ?>
                </table><!-- .table table-striped table-bordered -->

<?php endif; ?>


            <div class="actions">
<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> ' . __('New Attendee Status Log'), array('controller' => 'attendee_status_logs', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->

        </div><!-- .related -->


    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
