<?php

class User{

    public $first_name;
    public $last_name;
    public $number;

    function getRow(int $id)
    {
        $query = "SELECT * FROM `users` WHERE `id`=" . $id;

        // Assuming that this fires a query and
        // returns the record $row

        $this->first_name = $row->first_name;
        $this->last_name = $row->last_name;
        $this->number = $row->number;
    }

    function getFirstName(){
        return $this->first_name;
    }

    function getLastName(){
        return $this->last_name;
    }

    function getNumber(){
        return $this->number;
    }

}

$user = new User();
echo "First Name: " . $user->getFirstName() . '<br />';
echo "Last Name: " . $user->getLastName() . '<br />';
echo "Number: " . $user->getNumber() . '<br />';





}