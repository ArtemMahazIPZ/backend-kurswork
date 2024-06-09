<?php

namespace controllers;

use core\Controller;
use core\Core;
use models\Users;

class UsersController extends \core\Controller
{

    public function actionLogin()
    {
        if(Users::IsUserLogged())
            return $this->redirect('/');
        if ($this->isPost) {
            $user = Users::FindByLoginAndPassword($this->post->login, $this->post->password);
            if(!empty($user)){
                Users::LoginUser($user);
                return $this->redirect('/');
            } else {
                $this->setErrorMessage('Неправильний логін та/або пароль');
            }
        }
        return $this->render();
    }

    public function actionLogout()
    {
        Users::LogoutUser();
        return $this->redirect('/users/login');
    }

}
