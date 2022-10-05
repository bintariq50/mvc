<?php

class Database{
    protected $server ="localhost";
    protected $username ="root";
    protected $password ="";
    protected $database ="test";
    public $conn ="";
    // Connection Database 
    public function __construct(){
        // mysqli_report(MYSQLI_REPORT_STRICTLY);
        $this->conn = new mysqli($this->server,$this->username,$this->password,$this->database);
        if($this->conn->connect_errno) {
            echo 'Connection error: '.$this->connect_error;
        }
}

// Insert Method
public function insert($table,$columns=array()){
    if($this->table_exists($table)==true){
        $field = implode(", ",array_keys($columns));
        $value = implode("','", $columns);
        $value ="'" . $value . "'";
        $sql = "INSERT INTO $table ($field) VALUES($value);";
        $result = $this->conn->query($sql);
        if($result=== true){
            echo "Record successfully";
        }
        else{
            echo "Error ".$sql;
        }
        $result = $this->conn->query($sql);
}
else{
    echo "Table $table does not exist";
}
}
    // select Method

    public function select($table,$columns="*",$join=null,$where=null,$order=null,$limit=null){
       if($this->table_exists($table)==true){
        $sql = "SELECT $columns FROM $table";
        
        if($join!=null){
            $sql.=" JOIN $join";
        }
        if($where!=null){
            $sql.=" WHERE $where";
        }
        if($order!=null){
            $sql.=" ORDER BY $order";
        }
        if($limit!=null){
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }
            else{
                $page =1;
            }
            $start = ($page - 1) *$limit;
            $sql.=" LIMIT $start,$limit";
        }
        $result = $this->conn->query($sql);
    }
    else{
        echo "Table $table does not exist";
    }
}

// Update Method
public function update($table,$condition=array(),$up_field,$up_value){
    if($this->table_exists($table)==true){
        $sql = "UPDATE $table SET ";
        $c = count($condition);
        $i = 1;
        foreach ($condition as $key => $value) {
            if($i == $c){
                $sql.= "$key = '$value'";
            }
            else{
                $sql.= "$key = '$value' and";
            }
            $i++;
            $sql .= " WHERE $up_field = $up_value";

        }
        $result = $this->conn->query($sql);
    }
    else{
        echo "Table $table does not exist";
    }
}

// Delete Method
public function delete($table,$condition=array()){
    if($this->table_exists($table)===true){
        $sql = "DELETE FROM $table where ";
        $c = count($condition);
        $i = 1;
        foreach ($condition as $key => $value) {
            if($i == $c){
                $sql.= "$key = '$value'";
            }
            else{
                $sql.= "$key = '$value' and";
            }
            $i++;
        }
        $result = $this->conn->query($sql);
        
    }
    else{
        echo "Table $table does not exist";
    }
}

// table exists or not 
public function table_exists($table){
    $sql = "SHOW TABLES FROM ".$this->database. " LIKE '$table'";
    $query = $this->conn->query($sql);
    if($query = $query->num_rows ==1){
        return true;
    }
    else{
        return false;
    }
}
}

?>