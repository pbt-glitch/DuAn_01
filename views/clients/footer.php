<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer-clean {
  padding: 50px 0; /* Khoảng cách trên và dưới */
  background-color:dimgrey; /* Màu nền đen */
  color: #f8f9fa; /* Màu chữ sáng */
  font-size: 14px; /* Kích thước chữ */
  line-height: 1.6; /* Dòng cách đều */
}

.footer-clean h3 {
  margin-top: 0;
  margin-bottom: 12px; /* Khoảng cách dưới tiêu đề */
  font-weight: bold;
  font-size: 18px; /* Kích thước tiêu đề */
  color: #ffc107; /* Màu vàng nổi bật */
}

.footer-clean ul {
  padding: 0;
  list-style: none; /* Bỏ dấu chấm đầu dòng */
}

.footer-clean ul li {
  margin-bottom: 10px; /* Khoảng cách giữa các mục */
}

.footer-clean ul li a {
  color: #f8f9fa; /* Màu liên kết */
  text-decoration: none; /* Bỏ gạch chân */
  transition: color 0.3s; /* Hiệu ứng màu */
}

.footer-clean ul li a:hover {
  color: #ffc107; /* Màu vàng khi hover */
}

/* Mạng xã hội */
.footer-clean .item.social {
  text-align: center; /* Căn giữa các biểu tượng */
}

.footer-clean .item.social a {
  font-size: 20px; /* Kích thước biểu tượng */
  color: #f8f9fa; /* Màu mặc định */
  margin: 0 8px; /* Khoảng cách giữa các biểu tượng */
  display: inline-block;
  transition: color 0.3s, transform 0.3s; /* Hiệu ứng hover */
}

.footer-clean .item.social a:hover {
  color: #ffc107; /* Màu vàng khi hover */
  transform: scale(1.2); /* Phóng to nhẹ khi hover */
}

/* Bản quyền */
.footer-clean .copyright {
  margin-top: 15px; /* Khoảng cách phía trên */
  font-size: 13px; /* Chữ nhỏ hơn */
  color: #ced4da; /* Màu chữ nhẹ hơn */
}

/* Responsive cho màn hình nhỏ */
@media (max-width: 768px) {
  .footer-clean .item {
    text-align: center; /* Căn giữa các cột */
    margin-bottom: 20px; /* Khoảng cách giữa các cột */
  }
  .footer-clean .item.social {
    margin-top: 20px; /* Tách riêng mạng xã hội */
  }
}

    </style>
</head>
<body>
<div class="footer-clean">
    <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social">
                    <a href="#"><i class="icon ion-social-facebook"></i></a>
                    <a href="#"><i class="icon ion-social-twitter"></i></a>
                    <a href="#"><i class="icon ion-social-snapchat"></i></a>
                    <a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright"> © 2024</p>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>