<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/19/2018
 * Time: 9:26 AM
 */

use App\Controller;

class Controller_Contacts extends Controller
{

    function action_index()
    {
        $this->view->generate('contacts_view.php', 'template_view.php');
    }
}