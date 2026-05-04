<?php

class Connection {
    protected $conn;
    private $configFile = "conf.json";
    private static $instance = null;

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct() {
        $this->makeConnection();
    }

    private function makeConnection() {
        try {
            if (!file_exists($this->configFile)) {
                throw new Exception("Archivo de configuración no encontrado.");
            }

            $configData = file_get_contents($this->configFile);
            $c = json_decode($configData, true);

            $dsn = "mysql:host=" . $c['host'] . ";dbname=" . $c['db'] . ";charset=utf8mb4";

            $this->conn = new PDO($dsn, $c['userName'], $c['password']);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo $e->getMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getConn() {
        return $this->conn;
    }

    private function __clone(){}

    public function __wakeup(){
        throw new Exception ("No se puede");
    }
}