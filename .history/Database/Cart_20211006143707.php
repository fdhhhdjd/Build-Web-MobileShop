<?php

// php cart class
class Cart
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(user_id) values (0)"
                // get table columns
                //!array_keys:lấy ra toàn bộ KEY trong mảng, hoặc lấy ra các KEY có giá trị được truyền vào
                 //!implode:dùng để nối các phần tử mảng thành một chuỗi kết quả. 
                $columns = implode(',', array_keys($params));   
                print_r($params);

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

 

}