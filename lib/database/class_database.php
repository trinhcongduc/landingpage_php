<?php
class database{
    private $hostname ="localhost";
    private $userhost = "root";
    private $passhost = "";
    private $dbname = "test";
    private $sql = "";
    private $conn = NULL;
    private $error = NULL;
    private $result =null;
    
    function database($hostname,$userhost,$passhost,$dbname){
        $this->hostname = $hostname;
        $this->userhost = $userhost;
        $this->passhost = $passhost;
        $this->dbname = $dbname;
    }
    public function connect(){
        $this->conn=mysqli_connect( $this->hostname,$this->userhost,$this->passhost);
        mysqli_select_db($this->conn,$this->dbname);
    }

    public function disconnect(){
        if($this->conn){
            mysqli_close($this->conn);
        }
    }

    public function query($sql){
        $this->sql = $sql;
        $this->result =  mysqli_query($this->conn,$sql);
    }

    public function num_rows(){
        if($this->result){
            $row = mysqli_num_rows($this->result);
        }else{
            $row =0 ;
        }
        return $row;
    }
    public function getResult(){
        return $this->result;
    }
    public function getConn(){
        return $this->conn;
    }

    public function getError(){
        if (mysqli_connect_errno()){
            $this->error[] = mysqli_connect_error();
        }
        if (!mysqli_query($this->conn,$this->sql))
        {
            $this->error[] = mysqli_error($this->conn);
        }
        return $this->error;
    }

}
?>