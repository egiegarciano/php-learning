<?php

class Connection
{
    public static function make($db)
    {
        try {
            // Fourth argument may include "options":
            return new PDO(
                "{$db['connection']};dbname={$db['name']}",
                $db['username'],
                $db['password'],
                $db['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}