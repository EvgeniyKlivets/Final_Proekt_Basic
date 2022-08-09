<?php
class DB
{
    private static PDO $instance;

    public static function connect(): PDO
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO(
                    DB_DSN,
                    DB_USER,
                    DB_PASSWORD,
                    [
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                    ]
                );
            } catch(PDOException $e) {
                echo $e->getMessage();
                
            }
        }

        return self::$instance;
    }
}