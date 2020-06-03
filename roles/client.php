<?php
class Client extends  User
{
    public function clientGreeting()
    {
        echo parent::greeting() . "клиент " . $this->name . " " . $this->surname . ". Вы можете на сайте просматривать информацию доступную пользователям.";
    }
}