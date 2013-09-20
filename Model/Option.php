<?php
App::uses('AppModel', 'Model');
/**
 * Option Model
 *
 * Controls site-wide configuration for the
 * Adsum admin interface
 *
 * PHP ≥5.4
 *
 * Adsum : Attendance Management Software (http://adsum.sedonaconference.org)
 * Copyright (c) 2013 The Sedona Conferencee® (https://thesedonaconference.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE file
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) The Sedona Conference® (https://thesedonaconference.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       CakePHP(tm)
 * @subpackage    Adsum
 * @since         Adsum v 0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Option Model
 *
 * @package		app.Model.Option
 */
class Option extends AppModel {
    
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'key' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
    
# __  __  __  __  __  __  __  __  __  __  __  __  __
# \//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\
#  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""
    
/**
 * Dynamic site option getter method
 * 
 * @param string $key
 * @return mixed[boolean|string]
 */
    public function getOption($key) {
        $result = $this->find('first', array(
            'conditions' => array('Option.key' => $key)
        ));
        if ($result) {
            return $result['Option']['value'];
        } else {
            return false;
        }
    }
    
}
