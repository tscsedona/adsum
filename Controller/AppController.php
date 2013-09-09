<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
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
    
}
