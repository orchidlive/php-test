<?php

namespace App;
class Users
{
    protected $users;

    /**
     * Simulates the DB
     */
    public function __construct()
    {
        $this->users = json_decode(file_get_contents(__DIR__ . '/data/users.json'))->users;
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->users;
    }

    /**
     * @param int $id   The user id
     * @return mixed|null
     */
    public function get(int $id)
    {
        // modify this function to find the user by id, not by their position in the array. -- TODO
        return $this->users[$id] ?? null;
    }

}