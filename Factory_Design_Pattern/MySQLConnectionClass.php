<?php
class MySQLConnection
{
    protected $host;
    protected $useranme;
    protected $password;
    protected $database;
    protected $port;

    public function __construct($host = "localhost", $useranme = "root", $password = "", $database = "demo", $port = 80)
    {
        $this->host     = $host;
        $this->useranme = $useranme;
        $this->password = $password;
        $this->database = $database;
        $this->port     = $port;
    }

    public function connect()
    {
        $conn = mysqli_connect($this->host, $this->$useranme, $this->password, $this->database, $this->port);

        if (!$conn) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        echo "Connected successfully";
        mysqli_close($conn);
    }
}
