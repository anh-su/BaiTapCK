<?php
session_start();
define('BASE_URL', 'http://doan.local');
error_reporting(E_ALL);
ini_set('display_errors', 1);

class LoginController extends controller {
    private $loginModel;

    public function __construct() {
        $this->loginModel = $this->model('LoginModel');
    }

    public function Get_data() {
        $this->view('TracNghiem');
    }

    public function login() {
        $error_message = "";

        if (isset($_POST['dangnhap'])) {
            $Tendangnhap = $_POST['Tendangnhap'];
            $Matkhau = $_POST['Matkhau'];

            if (empty($Tendangnhap) || empty($Matkhau)) {
                $error_message = "Tên người dùng và mật khẩu không được rỗng!";
            } else {
                $userData = $this->loginModel->checkUser($Tendangnhap, $Matkhau);

                if ($userData && isset($userData['Vaitro'])) {
                    $_SESSION['Tendangnhap'] = $Tendangnhap;
                    $_SESSION['Vaitro'] = $userData['Vaitro'];
                    $_SESSION['Hoten'] = $userData['Hoten'] ?? '';
                    $_SESSION['ID'] = $userData['ID'] ?? '';
                    $_SESSION['Ngaysinh'] = $userData['Ngaysinh'] ?? '';
                    $_SESSION['Diachi'] = $userData['Diachi'] ?? '';
                    $_SESSION['Email'] = $userData['Email'] ?? '';
                    $_SESSION['Sdt'] = $userData['Sdt'] ?? '';
                    $_SESSION['Gioitinh'] = $userData['Gioitinh'] ?? '';

                    if ($_SESSION['Vaitro'] == 1) {
                        header("Location: " . BASE_URL . "/Home/admin");
                        exit();
                    } else if ($_SESSION['Vaitro'] == 0) {
                        header("Location: " . BASE_URL . "/Home/student");
                        exit();
                    } else if ($_SESSION['Vaitro'] == 2) {
                        header("Location: " . BASE_URL . "/Home/teacher");
                        exit();
                    }
                } else {
                    $error_message = "Tài khoản hoặc mật khẩu không đúng";
                }
            }
        }

        if (!empty($error_message)) {
            echo '<script>alert("' . $error_message . '");</script>';
        }

        echo '<script>window.location.href = "' . BASE_URL . '/LoginController";</script>';
    }
}
