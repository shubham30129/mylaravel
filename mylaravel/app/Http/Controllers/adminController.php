<?php
/**
 * Created by PhpStorm.
 * User: lcom148-two
 * Date: 2/12/2018
 * Time: 4:29 PM
 */

namespace App\Http\Controllers;

class adminController extends Controller
{
    public  function  index()
    {
        echo  "This is index func from admin Controller....";
    }
    public function login(  $uname )
    {
        echo "User Name is ".$uname;
    }

    public function login2(  $uname,$pass )
    {
        echo "User Name is ".$uname;
        echo "Password  is ".$pass;
    }
    public function numval($number)
    {
        if($number>=0)
        echo "First name is ".$number;
        else
            echo "Plz enter valid Number";
    }

}


?>