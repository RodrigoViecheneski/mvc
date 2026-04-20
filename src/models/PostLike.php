<?php

namespace src\models;

use \core\Model;

class PostLike extends Model
{
    public $id;
    public $id_post;
    public $id_user;
    public $created_at;
}