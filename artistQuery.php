<?php

require_once __DIR__ . '/Database.php';

class artistQuery extends Database {
    
    public function __construct()
    {
            session_start();
            parent::__construct();
    }

    public function getAll() {

        $sql = "
            SELECT artist_name, id
            FROM artists ORDER BY artist_name ASC

        ";

        $statement = static::$pdo->prepare($sql);
        $statement->execute();
        $artists = $statement->fetchAll(PDO::FETCH_OBJ);
        return $artists;

    }
}