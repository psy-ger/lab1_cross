<?php
class Admin  extends User
{
    public function adminGreeting()
    {
        echo parent::greeting() . "админ " . $this->name . " " . $this->surname . ". Вы можете на сайте делать всё.";
    }
}
