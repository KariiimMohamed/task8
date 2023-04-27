<?php   

    class Database {
        private $serverName = 'localhost';
        private $userName = 'root';
        private $password = '';
        private $dbName = 'company';
        private $conn ;


        public function __construct()
        {
            $this->conn = mysqli_connect( $this-> serverName , $this-> userName , $this-> password , $this-> dbName);


        }


        public function insert($sql) {
            if (mysqli_query($this->conn,$sql)) {
                return 'Success';
            } else {
                die("ERR".mysqli_error($this->conn));
            }
        }


        public function encPassword($password) {
            return sha1($password);
        }


        public function read($table)
        {
            
            $sql = "SELECT * FROM $table";
            $result = mysqli_query($this->conn,$sql);
            $data = [];


            if($result) {
                if (mysqli_num_rows($result)) {
                    while ($row = mysqli_fetch_assoc($result)) {
                       $data[] = $row ;
                    }
                } else {
                    die("ERR".mysqli_error($this->conn));
                }
                return $data;
            }
        }


        public function find($table , $id)
        {
            
            $sql = "SELECT * FROM $table WHERE `id` = '$id' ";
            $result = mysqli_query($this->conn,$sql);


            if($result)
            {
                if (mysqli_num_rows($result)) 
                {
                    return $row = mysqli_fetch_assoc($result);
                }
                return false; 
                 
            } 
            else 
            {
                die('ERR'.mysqli_error($this->conn));
            }
            
        }

        public function update($sql) {
            if (mysqli_query( $this->conn ,$sql)) {
                return 'Update Success';
            } else {
                die("ERR".mysqli_error($this->conn));
            }
        }

        public function delete($table , $id) {
           $sql = "DELETE FROM $table WHERE id = '$id'";
            if (mysqli_query( $this->conn ,$sql)) {
                return 'Delete Success';
            } else {
                die("ERR".mysqli_error($this->conn));
            }die('ERR'.mysqli_error($this->conn));
            
        }


        
        

        










    }
?>