<li><?php echo $this->Html->link(__('Events'), array('controller' => 'events')); ?> </li>
<li><?php echo $this->Html->link(__('Attendees'), array('controller' => 'attendees')); ?> </li>
<li><?php echo $this->Html->link(__('Status Logs'), array('controller' => 'AttendeeStatusLogs')); ?> </li>
<li><?php echo $this->Html->link(__('Users'), array('controller' => 'users')); ?> </li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options<b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      <li><?php echo $this->Html->link(__('Site Settings'), array('controller' => 'options')); ?> </li>
      <li><?php echo $this->Html->link(__('Event Types'), array('controller' => 'event_types')); ?> </li>
      <li><?php echo $this->Html->link(__('Status States'), array('controller' => 'attendance_status_states')); ?> </li>
    </ul>
</li>
