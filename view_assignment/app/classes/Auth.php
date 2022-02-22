<?php


namespace App\classes;


class Auth
{
    protected $userName;
    protected $password;
    protected $authName;
    protected $authPassword;

    public function __construct($post=null)
    {
        if($post)
        {
            $this->userName=$post['userName'];
            $this->password =$post['password'];
        }
    }

    public function login ()
    {
        $this->authName ='admin';
        $this->authPassword= '200200';

        if ($this->userName == $this->authName && $this->password==$this->authPassword)
        {
            session_start();
            $_SESSION["id"]=uniqid("login",false);
            $_SESSION["user"]=$this->authName;
            header('location:action.php?pages=add_product');
        } else{
            return'sorry./... try again ';
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
       header('location:action.php?pages=login');
    }

}