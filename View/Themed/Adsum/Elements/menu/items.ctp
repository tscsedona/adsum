<li><?php echo $this->Html->link(__('Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Attendees'), array('controller' => 'attendees', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Status Logs'), array('controller' => 'AttendeeStatusLogs', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options<b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                          <li><?php echo $this->Html->link(__('Site Settings'), array('controller' => 'options', 'action' => 'index')); ?> </li>
                          <li><?php echo $this->Html->link(__('Event Types'), array('controller' => 'event_types', 'action' => 'index')); ?> </li>
                          <li><?php echo $this->Html->link(__('Status States'), array('controller' => 'attendance_status_states', 'action' => 'index')); ?> </li>
                        </ul>
                    </li>
