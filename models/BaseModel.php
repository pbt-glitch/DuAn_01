<?php
class BaseModel
{
    public $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost; dbname=DuAn_01; charset=utf8", "root", "");
        } catch (PDOException $e) {
            echo "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
        }
    }
}
