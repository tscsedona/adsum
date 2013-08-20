<?php
App::uses('AppModel', 'Model');

/**
 * Attendees Model
 *
 * CakePHP 2.x.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright The Sedona Conference® (https://thesedonaconference.org)
 * @author Chris Vogt <CJV@sedonaconference.org>
 */
class Attendee extends AppModel {
    
    public $displayField = 'display_name';
    
    public $hasMany = array(
        'AttendeeBarNumber',
        'AttendeeStatusLog'
    );
    
    public $hasAndBelongsToMany = 'Event';
    
}