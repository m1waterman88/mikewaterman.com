<?php

declare(strict_types=1);

class Database {

    /**
     * Establish a database connection via PDO.
     *
     * @param string $dsn DBMS, host, port, and database name
     * @param string $username Database username
     * @param string $password Database password
     * @return PDO
     * @throws PDOException
     */
    public static function connect(string $dsn, string $username, string $password): PDO {
        try {
            return new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        } finally {
            unset($dsn, $username, $password);
        }
    }
}
