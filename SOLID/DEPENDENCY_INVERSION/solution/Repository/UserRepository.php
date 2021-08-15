<?php

require_once 'DatabaseInterface.php';
require_once 'RepositoryInterface.php';
require_once 'User.php';

class UserRepository implements RepositoryInterface
{
    private ?DatabaseInterface $databaseClient;

    public function __construct(DatabaseInterface $databaseClient)
    {
        $this->databaseClient = $databaseClient;
    }

    public function getUser(string $userEmail) : User
    {
        $usersArray = $this->databaseClient->fetchAll();

        foreach ($usersArray as $user) {
            if ($user['email'] === $userEmail) {
                return new User($user['full_name'], $user['email']);
            }
        }
    }

    public function getUsers() : array
    {
        $usersArray = $this->databaseClient->fetchAll();
        $users = [];

        foreach ($usersArray as $user) {
            $users[] = new User($user['full_name'], $user['email']);
        }

        return $users;
    }
}