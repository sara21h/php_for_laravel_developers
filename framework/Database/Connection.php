<?php

namespace Framework\Database;
use PDO;

class Connection
{
    private static $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public static function make($config)
    {
        try {
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['password']);
        } catch (\Exception $exception) {
            echo 'Error de connexió a la base de dades: ' . $exception->getMessage();
        }
    }
}