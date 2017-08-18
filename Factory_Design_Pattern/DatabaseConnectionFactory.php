<?php
class DatabaseConnectionFactory
{
    public static function establishConnection($type)
    {
        $connection = ucwords($type) . "Connection";
        if (!class_exists($connection)) {
            throw new Exception("Class {$connection} does not exist");
        }
        return new $connection;
    }
}
