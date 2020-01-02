<?php
class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "crud";

    protected $connection = "";

    function __construct(){
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            echo "Koneksi Gagal : " . $this->connection->connect_error;
        }
    }

}
