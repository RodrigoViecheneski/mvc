<?php

namespace src\models;

use \core\Model;

class User extends Model
{
    public $id;
    public $email;
    public $password;
    public $name;
    public $birthdate;
    public $city;
    public $work;
    public $avatar;
    public $cover;
    public $token;
    public $followers;
    public $following;
    public $photos;
}
