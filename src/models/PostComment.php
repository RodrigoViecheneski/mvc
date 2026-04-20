<?php

namespace src\models;

use \core\Model;

class PostComment extends Model
{
    public $id;
    public $id_post;
    public $id_user;
    public $created_at;
    public $body;
    public $user;
}