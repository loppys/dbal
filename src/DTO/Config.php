<?php

namespace Vengine\Libraries\DBAL\DTO;

class Config
{
    protected static array $databaseParams = [
        'dbType' => '',
        'dbHost' => '',
        'dbName' => '',
        'dbLogin' => '',
        'dbPassword' => ''
    ];

    public static function getDatabaseParams(): array
    {
        return self::$databaseParams;
    }

    public static function setDatabaseParams(array $databaseParams): void
    {
        self::$databaseParams = $databaseParams;
    }
}
