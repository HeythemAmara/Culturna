<?php
  class config 
  {
    private static $pdo = NULL;

    public static function getConnexion() 
    {
      if (!isset(self::$pdo)) 
      {
        try
        {
          self::$pdo = new PDO
          (
            'mysql:host=mysql-culturna.alwaysdata.net;dbname=culturna_culturna',
            'culturna',
            'Skapere1234',
            [
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
          );
        }
        catch(Exception $e)
        {
          die('Connection failed: '.$e->getMessage());
        }
      }
      return self::$pdo;
    }
  }
