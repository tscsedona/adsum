<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    
    // Adsum theme to use
    public $theme = "Adsum";
    
    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array('username' => 'email')
                )
            ),
            'loginAction' => array('controller' => 'users','action' => 'login'),
            'loginRedirect'     => array('controller' => 'users', 'action' => 'dashboard'),
            'logoutRedirect'    => '/',
            'authError' => 'You must be logged in to access this location.'
        )
    );
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('authUser', $this->Auth->user());
        $this->set('siteName', )
        $this->renderHomeLink();
    }
    
    /**
     * Toggle the home page link based on the
     * current user's logged in status
     * 
     * @return var $homeLink
     */
    public function renderHomeLink() {
        if (!$this->Auth->loggedIn()) {
            $this->set('homeLink', '/');
        } else {
            $this->set('homeLink', array('controller' => 'users', 'action' => 'dashboard'));
        }
    }
    
#    __  __  __  __  __  __  __  __  __  __  __  __  __
#    \//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\
#      ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""  ""
    

    /**
     * determine the site name
     * 
     * @return string
     */
    protected function determineSiteName() {
       if (Configure::read('Site.settings.name')) {
           $siteName = Configure::read('Site.settings.name'); 
       } elseif ($this->isOptionNameSet) {
           $siteName = $this->isOptionNameSet;
       } else {
           $siteName = 'Adsum';
       }
    }
    
    /**
     * action to determine if site name
     * is a specified option value
     * 
     * @return mixed[string|boolean]
     */
    protected function isOptionNameSet() {
        $this->loadModel('Options');
        if ($this->Option->getSiteName()) {
            return $this->Option->getSiteName();
        } else {
            return false;
        }
    }
    
}
