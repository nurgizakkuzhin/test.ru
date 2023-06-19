<?php

namespace App;

abstract class Model
{
    public const TABLE = '';

    public $id;
    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE, [], static::class);
    }
}