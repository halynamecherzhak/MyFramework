<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/18/2018
 * Time: 8:09 PM
 */
use App\Controller;
use App\Route;
class Controller_Admin extends Controller
{

    function action_index()
    {
        session_start();

        //перевіряється рівність сесійної змінни admin прописаному в коді значенню - паролю.

        if ( $_SESSION['admin'] == "12345" )
        {
            $this->view->generate('admin_view.php', 'template_view.php');
        }
        else
        {
            session_destroy();
            Route::ErrorPage404();
        }

    }

    // Дія для розлогування адміністратора
    function action_logout()
    {
        session_start();
        session_destroy();
        header('Location:/');
    }

}
