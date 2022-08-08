<?php


    namespace App\Core;


    use App\Helpers\Debugger;
    use PDO;

    class DB
    {
        private static $connection = null;

        public static function getDBConnection(){
            if (!self::$connection){
                try {
                    $host = getenv('DB_HOST');
                    $dbname = getenv('DB_NAME');
                    $connectionString = "mysql:host={$host};dbname={$dbname}";
                    self::$connection = new PDO($connectionString,
                        getenv('DB_USER'),
                        getenv('DB_PASSWORD')
                    );
                }catch (\Exception $exception){
                    Debugger::debug($exception->getMessage());
                }
            }
            return self::$connection;
        }


    }