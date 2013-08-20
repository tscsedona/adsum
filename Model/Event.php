<?php
App::uses('AppModel', 'Model');

/**
 * Event Model
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
class Event extends AppModel {
    
    public $belongsTo = 'EventType';
    
    public $hasAndBelongsToMany = 'Attendee';
    
}