<?php
    class Database {
        private $_connection;
        private static $_instance; //The single instance
        private $_host = "";
        private $_username = "";
        private $_password = "";
        private $_database = "";

        public static function getInstance() {
            if(!self::$_instance) { // If no instance then make one
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        private function getConfig($file) {
            return json_decode(file_get_contents($file), true);
        }

        private function __construct() {
            $cfg = $this->getConfig("app/mysql.cfg");
            $this->_host = $cfg["host"];
            $this->_username = $cfg["user"];
            $this->_password = $cfg["pass"];
            $this->_database = $cfg["db"];

            $this->_connection = new mysqli($this->_host, $this->_username,
                $this->_password, $this->_database);

            if(mysqli_connect_error()) {
                trigger_error("Failed to connect to MySQL: " . mysqli_connect_error(),
                    E_USER_ERROR);
            }
        }

        private function __clone() { }

        public function getConnection() {
            return $this->_connection;
        }

        public function select() {
            $mysqli = $this->getConnection();
            $sql_query = "SELECT * FROM test";
            return $mysqli->query($sql_query);
        }

        public function add($class, $name, $dtn, $date) {
            $mysqli = $this->getConnection();
            $sql_query = "INSERT INTO test SET `Class`='" .$class.
                                             "',`Name`='" .$name.
                                             "',`Dtn`='" .$dtn.
                                             "',`Date`='" .$date.
                                             "'";
            return $mysqli->query($sql_query);
        }

        public function update($id, $class, $name, $dtn, $date) {
            $mysqli = $this->getConnection();
            $sql_query = "UPDATE test SET `Class`='" .$class.
                                       "',`Name`='" .$name.
                                       "',`Dtn`='" .$dtn.
                                       "',`Date`='" .$date.
                                 "' WHERE `id`='" .$id. "'";
            return $mysqli->query($sql_query);
        }


    }
?>