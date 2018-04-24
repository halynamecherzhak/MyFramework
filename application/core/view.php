<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/18/2018
 * Time: 7:57 PM
 */
namespace App;

class View
{
    //public $template_view; // тут можно вказати загальний вид за замовчуванням

    function generate($content_view, $template_view, $data = null)
    {
        /*
        if(is_array($data)) {

        //перетворимо елементи масиву в змінні
            extract($data);
        }
        */

        include 'application/views/'.$template_view;
    }
}