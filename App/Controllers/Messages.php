<?php

namespace App\Controllers;

use App\Auth;
use Core\Control\AuthenticateControl;
use Core\View;

/**
 * Profile controller
 * 
 * PHP version 7.4
 */
class Messages extends AuthenticateControl
{

    /**
     * Show the profile
     * 
     * @return void
     */
    public function indexAction()
    {

        View::renderTemplate('Messages/index.html', [
            'userModel' => Auth::getUser()
        ]);

    }

}