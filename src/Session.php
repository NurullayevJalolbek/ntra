<?php

declare(strict_types=1);

namespace App;

class Session
{
    public function getUser()
    {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        return null;
    }

    public function getName()
    {
        if (isset($this->getUser()['username'])) {
            return $this->getUser()['username'];
        }

        return '';
    }

    public function getId()
    {
        if (isset($this->getUser()['id'])) {
            return $this->getUser()['id'];
        }

        return '';
    }

    public function getRoleId()
    {
        if (isset($this->getUser()['role_id'])) {
            return $this->getUser()['role_id'];
        }

        return '';
    }
}