<?php

class User {
    public $name;
    public $last;
    public $user;
    public $pass;
    public $sex;
    public $image;

    public function __construct($data){
        parse_str($data);
        $this->name = $nombre;
        $this->last = $apellido;
        $this->user = $usuario;
        $this->pass = $contra;
        $this->sex = $sexo[0];
        $this->image = $imagen;
    }

    public function createConnection(){
        $con = mysqli_connect("localhost", "root", "", "users");

        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $con;
    }
    
    public function insertUser(){
        $_SESSION['user'] = $this->user;
        
        $connection = $this->createConnection();
        $query = "insert into users(name, last, user, pass, sex, image) values('". $this->name ."', '". $this->last ."', '". $this->user ."', '". sha1($this->pass) ."', '". $this->sex ."', '". $this->image ."');";
        mysqli_query($connection, $query);
        
        echo "OK";
        $this->closeConnection($connection);
    }
    
    public function getUserInfo(){
        $connection = $this->createConnection();
        $query = "select * from users where user='" . $this->user . "' limit 1";
        $result = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_array($result)) {
            
        }
        
        $this->closeConnection($connection);
    }
    
    public function closeConnection($con){
        mysqli_close($con);
    }

}