<?php 
class connectDB {
    public $con;
    protected $server = 'localhost';
    protected $user = 'root';
    protected $pass = '123456'; // << Đảm bảo KHÔNG bị thiếu hoặc trống
    protected $db = 'doan';

    function __construct() {
        $this->con = mysqli_connect($this->server, $this->user, $this->pass, $this->db);

        if (!$this->con) {
            die("Kết nối database thất bại: " . mysqli_connect_error());
        }

        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
}
