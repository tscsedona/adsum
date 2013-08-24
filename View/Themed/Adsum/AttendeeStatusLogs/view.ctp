
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">

            <ul class="nav nav-list bs-docs-sidenav">			
                <li><?php echo $this->Html->link(__('Edit Attendee Status Log'), array('action' => 'edit', $attendeeStatusLog['AttendeeStatusLog']['id']), array('class' => '')); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Attendee Status Log'), array('action' => 'delete', $attendeeStatusLog['AttendeeStatusLog']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $attendeeStatusLog['AttendeeStatusLog']['id'])); ?> </li>
            </ul><!-- .nav nav-list bs-docs-sidenav -->

        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="attendeeStatusLogs view well well-small">

            <h2><?php echo __('Attendee Status Log'); ?></h2>

            <table class="table table-striped table-bordered">
                <tr>
                    <td><strong><?php echo __('Attendee'); ?></strong></td>
                    <td>
                        <?php echo $this->Html->link($attendeeStatusLog['Attendee']['display_name'], array('controller' => 'attendees', 'action' => 'view', $attendeeStatusLog['Attendee']['id']), array('class' => '')); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Attendance Status State'); ?></strong></td>
                    <td>
                        <?php echo $this->Html->link($attendeeStatusLog['AttendanceStatusState']['title'], array('controller' => 'attendance_status_states', 'action' => 'view', $attendeeStatusLog['AttendanceStatusState']['id']), array('class' => '')); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Event'); ?></strong></td>
                    <td>
                        <?php echo $this->Html->link($attendeeStatusLog['Event']['title'], array('controller' => 'events', 'action' => 'view', $attendeeStatusLog['Event']['id']), array('class' => '')); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Logged By'); ?></strong></td>
                    <td>
                        <?php echo h($attendeeStatusLog['User']['display_name']); ?>
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td><strong><?php echo __('Recorded'); ?></strong></td>
                    <td>
                        <?php echo h($this->Time->nice($attendeeStatusLog['AttendeeStatusLog']['created'])); ?>
                        &nbsp;
                    </td>
                </tr>
            </table><!-- .table table-striped table-bordered -->
        </div><!-- .view -->
    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
