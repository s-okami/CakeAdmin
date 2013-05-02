<?php
/**
 * Copyright 2009-2010, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2009-2010, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * ActiveAdmin Plugin AppController
 *
 * @package active_admin
 */

class ActiveAdminAppController extends AppController {
    
    public $components = array(
        'ActiveAdmin.Filter',
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => '', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );
    
    public $helpers = array('Form','Html','Session','Js'=> array('Jquery'), 'Text', 'Time');
    
    public function beforeFilter() {
        parent::beforeFilter();
        
        /*
            管理画面用のスタイルを当てます
        */
        $this->layout = "admin";
    }
}

