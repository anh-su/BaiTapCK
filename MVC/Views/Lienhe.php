<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* CSS cho header */
        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            gap: 50px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
            gap: 50px;
            font-weight: bold;
            font-family: 'Playfair Display', serif;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 500;
        }

        .nav-menu a:hover {
            color: #007bff;
        }

        .logo {
            position: relative;
            width: 100px;
            height: 100px;
            clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .logo img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        /* CSS cho phần nội dung chính */
        .main-content {
            position: relative;
            text-align: center;
            margin-top: 30px;
        }

        .main-content .text-overlay {
            position: absolute;
            top: 20%;
            left: 5%;
            text-align: left;
            color: white;
            font-size: 30px; /* Giảm kích thước chữ */
            font-weight: bold;
            font-family: 'Playfair Display', serif;
            z-index: 2;
            opacity: 0;
            animation: slideInFromTop 1s forwards; /* Thêm hiệu ứng slide-in từ trên xuống */
        }

        @keyframes slideInFromTop {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .main-content .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: calc(100% + 60vw); /* Chiều rộng bằng chiều rộng của toàn bộ phần tử cộng thêm */
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Overlay màu đen với độ mờ 70% */
            z-index: 1;
            margin-left: calc(-30vw); /* Kéo overlay rộng ra hai phía */
        }

        .main-content img {
            width: 100vw; /* Chiếm hết chiều rộng màn hình (viewport) */
            height: auto;
            margin-left: calc(-50vw + 50%); /* Kéo hình ảnh rộng ra hai phía */
            border-radius: 0; /* Loại bỏ bo góc để ảnh chiếm hết chiều rộng */
            box-shadow: none; /* Tùy chỉnh nếu không muốn ảnh có bóng đổ */
        }

        .info-boxes {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
            gap: 20px;
        }

        .info-box {
            flex: 1;
            background-color: #e0f7fa; /* Màu xanh nước biển nhạt */
            border: 1px solid #0a1f94;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .info-box h3 {
            font-size: 20px; /* Cỡ chữ nhỏ đi */
            font-family: 'Playfair Display', serif;
            color: black; /* Tiêu đề màu đen */
            margin-bottom: 10px;
        }

        .info-box p {
            font-size: 14px; /* Cỡ chữ nhỏ đi */
            font-family: 'Montserrat', sans-serif;
            color: gray; /* Màu xám */
        }
        .info-boxes-row {
    display: flex;
    justify-content: space-around;
    margin-top: 50px;
    gap: 20px;
}

.info-boxes-row:first-child {
    margin-bottom: 20px; /* Khoảng cách giữa hai hàng */
}
    </style>
</head>
<?php
define('BASE_URL', 'http://doan.local');
?>
<body>

    <div class="header">
        <ul class="nav-menu">
            <li><a href="<?=BASE_URL?>/Home/Get_data">Trang chủ</a></li>
            <li><a href="<?=BASE_URL?>/Home/Gioithieu">Giới thiệu</a></li>
            <li><a href="<?=BASE_URL?>/Home/Tintuc">Tin tức</a></li>
        </ul>

        <div class="logo">
            <img src="<?=BASE_URL?>/Public/Pictures/tải xuống.png" alt="Logo">
        </div>

        <ul class="nav-menu">
        <li><a href="<?=BASE_URL?>/Home/Thongbao">Thông báo</a></li>
            <li><a href="<?=BASE_URL?>/Home/Lienhe">Liên hệ</a></li>
            <li><a href="<?=BASE_URL?>/LoginController/login">Đăng Nhập</a></li>
        </ul>
    </div>

    <div class="container mt-4">
        <div class="main-content">
            <!-- Chữ nằm chồng trên ảnh -->
            <div class="overlay"></div>
            <div class="text-overlay">
                <span>Liên hệ</span>
            </div>
            <img src="<?=BASE_URL?>/Public/Pictures/BOTT0572(1)1.jpg" alt="Campus Image">
        
    </div>
    <div class="container mt-5">
    <h2 class="text-center" style="font-family: 'Playfair Display', serif; color: #0a1f94; margin-bottom: 30px;">Thông Tin Thành Viên</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="info-box">
                <img src="<?=BASE_URL?>/Public/Pictures/130manstudent2_100617.png" alt="Nguyễn Tiến Hưng" style="width: 50%; border-radius: 50%; margin-bottom: 15px;">
                <h3>Nguyễn Tiến Hưng</h3>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-box">
                <img src="<?=BASE_URL?>/Public/Pictures/130manstudent2_100617.png" alt="Quang Hồng Ánh Sứ" style="width: 50%; border-radius: 50%; margin-bottom: 15px;">
                <h3>Quang Hồng Ánh Sứ</h3>

            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box">
                <img src="<?=BASE_URL?>/Public/Pictures/132womanstudent2_100407.png" alt="Ngô Thị Thanh Vân" style="width: 50%; border-radius: 50%; margin-bottom: 15px;">
                <h3>Ngô Thị Thanh Vân</h3>

            </div>
        </div>

        <div class="col-md-3">
            <div class="info-box">
                <img src="<?=BASE_URL?>/Public/Pictures/130manstudent2_100617.png" alt="Lê Xuân Đạt" style="width: 50%; border-radius: 50%; margin-bottom: 15px;">
                <h3>Nguyễn The Anh</h3>

            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</body>
</html>
