<?php

// Magic method are some method to perform certain task and all the function names are reserved and
// can't be use for any purpose. Magic methods usually  named with double underscore as prefix

class Connection
{
    protected $link;
    private $dsn, $username, $password;

    public function __construct($dsn, $username, $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->connect();
    }

    private function connect(){
        $this->link = new PDO($this->dsn, $this->username, $this->password);
    }

}