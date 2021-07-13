<?php


class User
{
    public function userInfo()
    {
        $userId = 20;
        $userName = 'Habibur Rahman';

        $uData = new UserData($userId, $userName);
    }

}