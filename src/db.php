<?php

namespace saadany\Packeg;

class db
{
    private $table;
    private $sql;
    private $connection;

    public function __construct($host, $user, $password, $dd,$table)
    {
        $this->connection = mysqli_connect($host, $user, $password, $dd);
        $this->table=$table;
    }
    public function insert($data)
    {
        $columns="";
        $values="";
        foreach ($data as $column => $value) {
            $columns.="`$column`,";
            $values.="'$value',";
        }
        $columns=trim($columns,",");
        $values=trim($values,",");
        $this->sql="INSERT INTO `$this->table` ($columns) VALUES ($values)";
        return $this;
    }

    public function select($column="*")
    {
        $this->sql="SELECT * FROM `$this->table`";
        return $this;
    }

    public function update($data)
    {
        $set="";
        foreach ($data as $column => $value) {
            $set.="`$column`='$value',";
        }
        $set=trim($set,",");
        $this->sql="UPDATE $this->table SET $set";
        return $this;
    }

    public function delete()
    {
        $this->sql="DELETE FROM `$this->table`";
        return $this;
    }

    public function excute()
    {
        mysqli_query($this->connection,$this->sql);
    }

    public function all()
    {
        echo "<pre>";
        $result=mysqli_query($this->connection,$this->sql);
        print_r(mysqli_fetch_all($result,MYSQLI_ASSOC));
    }
    public function show()
    {
        $result=mysqli_query($this->connection,$this->sql);
        echo "<pre>";
        print_r (mysqli_fetch_assoc($result));

    }

    public function where($column,$operator,$value)
    {
        $this->sql.=" WHERE `$column` $operator '$value'";
        return $this ;
    }


    public function Andwhere($column,$operator,$value)
    {
        $this->sql.=" AND `$column` $operator '$value'";
        return $this ;
    }

    public function Orwhere($column,$operator,$value)
    {
        $this->sql.=" OR `$column` $operator '$value'";
        return $this ;
    }


}