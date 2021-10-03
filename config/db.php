<?php
$url = parse_url(getenv("DATABASE_URL"));

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=' . $url["host"] . ';
    port=' . $url["port"] . ';dbname=' . ltrim($url["path"], "/"),
    'username' => $url["user"],
    'password' => $url["pass"],
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
