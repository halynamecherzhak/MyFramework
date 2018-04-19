<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/18/2018
 * Time: 8:00 PM
 */
use App\Controller;

class Controller_Services extends Controller
{

    function action_index()
    {
        $this->view->generate('services_view.php', 'template_view.php');
    }
}