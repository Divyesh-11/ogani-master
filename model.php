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
        $value = implode("', '", $val_arr);

        $sql = "INSERT INTO $table ($col) VALUES ('$value')";

        $run = $this->conn->query($sql);

        if ($run) {
            echo "<script>
                alert('Record inserted...!');
                window.location.href = 'login';
            </script>";
        }
    }

    function slect_login($table, $data)
    {

        $arr_col = array_keys($data);
        $arr_val = array_values($data);

        $login_fetch = "SELECT * FROM ragister_data WHERE 1 = 1 ";

        $i = 0;
        foreach ($data as $colm) {
            $login_fetch .= " and $arr_col[$i] = '$arr_val[$i]'";
            $i++;
        }

        $login_run = $this->conn->query($login_fetch);
        return $login_run;
    }
};
