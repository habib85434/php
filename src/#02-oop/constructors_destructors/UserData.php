<?php


class UserData
{
    private $userId;
    private $userName;

    public function __construct($userId, $userName)
    {
        $this->userId = $userId;
        $this->userName = $userName;
    }

    public function __destruct()
    {
        unset($this->userId);
        unset($this->userName);
    }
}
