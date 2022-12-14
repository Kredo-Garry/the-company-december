<?php

    # Define the class name
    class Database{
        # Define the properties and set its values
        private $server_name = "localhost"; //127.0.0.1 
        private $username = "root";
        private $password = ""; //MAMP - password = root
        private $db_name = "the_company_december";
        protected $conn;

        # Define the constructor
        public function __construct(){
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
            
            # Validate the database connection
            if ($this->conn->connect_error) {
                die("Unable to connect to database. " . $this->conn->connect_error);
            }
        }
    }