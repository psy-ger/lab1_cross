<?php

    session_start();
    include "db.php";
    include "roles/includes.php";

    $login = $_POST['login'];
    $password = $_POST['password'];
    $isAuth = false;

    if (!empty($login) && !empty($password))
    {
        foreach ($users as $user)
        {
           if ($login == $user['login'] && $password == $user['password'])
           {
                   $isAuth = true;
               switch ($user['role'])
               {
                   case 'admin':
                       {
                            $admin = new Admin($user['name'], $user['surname']);
                            $admin->adminGreeting();
                            break;
                       }
                   case 'manager':
                       {
                           $manager = new Manager($user['name'], $user['surname']);
                           $manager->managerGreeting();
                           break;
                        }
                  case 'client':
                  {
                      $client = new Client($user['name'], $user['surname']);
                      $client->clientGreeting();
                      break;
                  }
              }
           }
        }
        if (!$isAuth)
        {
            $_SESSION['msg'] = 'Вы ввели неверный логин или пароль';
            include "index.php";
        }
    }
    else
        {
            $_SESSION['msg'] = 'Вы ввели неверный логин или пароль';
            include "index.php";
        }

