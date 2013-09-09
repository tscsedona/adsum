
<div id="page-container" class="row-fluid">

    <div id="sidebar" class="span3">

        <div class="actions">

            <ul class="nav nav-list bs-docs-sidenav">			
                <li><?php echo $this->Html->link(__('Edit Event'), array('action' => 'edit', $event['Event']['id']), array('class' => '')); ?> </li>
                <li><?php echo $this->Form->postLink(__('Delete Event'), array('action' => 'delete', $event['Event']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $event['Event']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('List Events'), array('action' => 'index'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('New Event'), array('action' => 'add'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('List Event Types'), array('controller' => 'event_types', 'action' => 'index'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('New Event Type'), array('controller' => 'event_types', 'action' => 'add'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('List Attendee Status Logs'), array('controller' => 'attendee_status_logs', 'action' => 'index'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('New Attendee Status Log'), array('controller' => 'attendee_status_logs', 'action' => 'add'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('List Attendees'), array('controller' => 'attendees', 'action' => 'index'), array('class' => '')); ?> </li>
                <li><?php echo $this->Html->link(__('New Attendee'), array('controller' => 'attendees', 'action' => 'add'), array('class' => '')); ?> </li>

            </ul><!-- .nav nav-list bs-docs-sidenav -->

        </div><!-- .actions -->

    </div><!-- #sidebar .span3 -->

    <div id="page-content" class="span9">

        <div class="events view">

            <h2><?php echo h($event['Event']['title']); ?></h2>

            <table class="table table-striped table-bordered">
                <tr>		<td><strong><?php echo __('Id'); ?></strong></td>
                    <td>
                        <?php echo h($event['Event']['id']); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Event Type'); ?></strong></td>
                    <td>
                        <?php echo $this->Html->link($event['EventType']['title'], array('controller' => 'event_types', 'action' => 'view', $event['EventType']['id']), array('class' => '')); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Uuid'); ?></strong></td>
                    <td>
                        <?php echo h($event['Event']['uuid']); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Extid'); ?></strong></td>
                    <td>
                        <?php echo h($event['Event']['extid']); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Title'); ?></strong></td>
                    <td>
                        <?php echo h($event['Event']['title']); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Is Active'); ?></strong></td>
                    <td>
                        <?php echo h($event['Event']['is_active'] ? __('Yes') : __('No')); ?> 
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Start Time'); ?></strong></td>
                    <td>
                        <?php echo h($this->Time->nice($event['Event']['start_time'])); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('End Time'); ?></strong></td>
                    <td>
                        <?php echo h($this->Time->nice($event['Event']['end_time'])); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Attendee Count'); ?></strong></td>
                    <td>
                        <?php echo h($event['Event']['attendee_count']); ?>
                        &nbsp;
                    </td>
                </tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
                    <td>
                        <?php echo h($event['Event']['created']); ?>
                        &nbsp;
                    </td>
                </tr>			</table><!-- .table table-striped table-bord ered -->

        </div><!-- .view -->


    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
