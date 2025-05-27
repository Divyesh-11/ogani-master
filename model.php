<?php

class model
{
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'ogani_master');
    }

    function insert($table, $data)
    {
        $col_arr = array_keys($data);
        $col = implode(',', $col_arr);
        $val_arr = array_values($data);
        $value = implode(",", $val_arr);
        // echo $value;
        // exit();

        $sql = "INSERT INTO $table ($col) VALUES ('$value')";
        // echo $sql;
        // exit(); 
        $run = $this->conn->query($sql);
        echo $run;
        exit();
        if ($run) {
            echo "<script>
                alert('Record inserted...!')
            </script>";
        }
    }
};
