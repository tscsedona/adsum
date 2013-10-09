<li><?php echo $this->Html->link(__('Events'), array('controller' => 'events', 'action' => 'index', 'plugin' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('Attendees'), array('controller' => 'attendees', 'action' => 'index', 'plugin' => false)); ?> </li>
                    <li><?php echo $this->Html->link(__('Logbook'), array('controller' => 'AttendeeStatusLogs', 'action' => 'index', 'plugin' => false)); ?> </li>
                    <?php if (AuthComponent::user('is_admin') == true) : ?>
                    <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index', 'plugin' => false)); ?> </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options<b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                          <li><?php echo $this->Html->link(__('Site Settings'), array('controller' => 'options', 'action' => 'index', 'plugin' => false)); ?> </li>
                          <li><?php echo $this->Html->link(__('Event Types'), array('controller' => 'event_types', 'action' => 'index', 'plugin' => false)); ?> </li>
                          <li><?php echo $this->Html->link(__('Status States'), array('controller' => 'attendance_status_states', 'action' => 'index', 'plugin' => false)); ?> </li>
                        </ul>
                    </li>
                    <?php endif; ?>