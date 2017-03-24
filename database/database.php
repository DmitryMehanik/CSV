<?php

class DBclass {

    public $link_db, $query, $row_db;
//***********************************************************
    public function dataBaseConnect() {

        $db_host='localhost';
        $db_user='root';
        $db_password='0307892017';
        $db_name='csv';


        $link=mysqli_connect($db_host, $db_user, $db_password, $db_name);
        if (mysqli_connect_errno()) {
            echo "Ошибка подключения к БД: ".mysqli_connect_error();
            exit();
        }
        mysqli_query($link, "set names utf8");
        return $this->link_db=$link;
    }
//----------------------------------------------------------
   public function dataBaseQuery($query) {
        $res=mysqli_query($this->link_db, $query);
        while($row=mysqli_fetch_assoc($res)) {
            $row_oll[]=$row;
        }
        $this->row_db=$row_oll;
    }
//----------------------------------------------------------
    public function dataBaseClose() {
        mysqli_close($this->link_db);
    }
//***********************************************************
}