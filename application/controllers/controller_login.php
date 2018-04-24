<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/18/2018
 * Time: 8:11 PM
 */
use App\Controller;

class Controller_Login extends Controller
{

    function action_index()
    {
        //$data["login_status"] = "";

        if(isset($_POST['login']) && isset($_POST['password']))
        {
            $login = $_POST['login'];
            $password =$_POST['password'];


            //робимо аутентифікацію, порівнюючи отримані значення зі значеннями прописаними в коді.

            if($login=="admin" && $password=="12345")
            {
                $data["login_status"] = "access_granted";

                session_start(); echo $_SESSION['admin'];
                $_SESSION['admin'] = $password;
                header('Location:/admin/');
            }
            else
            {
                $data["login_status"] = "access_denied";
            }
        }
        else
        {
            $data["login_status"] = "";
        }

        $this->view->generate('login_view.php', 'template_view.php', $data);
    }

}