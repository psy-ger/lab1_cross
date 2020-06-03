<?php
class Manager  extends User
{
    public function managerGreeting()
    {
        echo parent::greeting() . "менеджер " . $this->name . " " . $this->surname . ". Вы можете на сайте изменять, удалять и создавать клиентов.";
    }
}