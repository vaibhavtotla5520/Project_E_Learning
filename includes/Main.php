<?php
class Main {
    private function connect_db(){
        $conn = new mysqli("localhost","root","","learn_bullox_tech");
        return !$conn ? die('Could not connect: ' . $conn->connect_error) : $conn;
    }

    public function register($user_details_json){
        $conn = $this->connect_db();
        $data = json_decode($user_details_json,true);
        // echo "<pre>";
        // print_r($data);
        $password_hash = password_hash($data['user_password'], PASSWORD_DEFAULT);
        $result = $conn->query('SELECT * FROM user_students WHERE user_email = "'.$data['user_email'].'";');
        if($result) {
            if($result->num_rows > 0) {
                return "User ".$data["user_email"]." already exists";
            } else {
                $sql = 'INSERT INTO user_students (user_name,user_email,user_password,user_mobile) 
                VALUES("'.$data["user_name"].'","'.$data["user_email"].'","'.$password_hash.'","'.$data["user_mobile"].'");';
                $flag = $conn->query($sql);
                $conn->close(); 
                return $flag;
            }
        }
        
    }

    public function login($user_details_json){
        $conn = $this->connect_db();
        $data = json_decode($user_details_json,true);
        // echo "<pre>";
        // print_r($data);
        $result = $conn->query('SELECT user_password,user_name FROM user_students WHERE user_email = "'.$data['user_email'].'" LIMIT 1;');
        if($result) {
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if (password_verify($data['user_password'], $row['user_password'])) {
                        $_SESSION["user_name"] = $row["user_name"];
                        return true;
                    } else {
                        return -1;
                        // if password is incorrect
                    }
                  }
            } else {
                return false;
            }
        }
        
    }
}