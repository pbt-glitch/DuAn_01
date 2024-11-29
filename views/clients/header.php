<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GLOW</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/css.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</head>
<body class="bg-light font-sans">
  <!-- Header -->
  <header class="bg-secondary py-3">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="fs-4 fw-bold text-white">GLOW</div>
      <div class="d-flex gap-3">
        <a href="login.html" class="text-white text-decoration-none">Đăng nhập</a>
        <a href="register.html" class="text-white text-decoration-none">Đăng ký</a>
        <a href="cart.html" class="text-white text-decoration-none">Giỏ hàng</a>
      </div>
    </div>
  </header>

  <!-- Navigation -->
  <div class="container py-3">
    <div class="d-flex justify-content-between align-items-center">
    <nav>
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active text-dark fw-bold" href="<?= ROOT_URL ?>">Trang chủ</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Danh mục sản phẩm
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <?php foreach ($categories as $cate): ?>
          <li>
            <a class="dropdown-item" href="<?= ROOT_URL . '?ctl=category&id=' . $cate['id'] ?>">
              <?= $cate['cate_name'] ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Liên hệ</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" href="#">Giới thiệu</a>
    </li>
  </ul>
</nav>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>

  <div class="container banner-container">
  <div class="banner-wrapper position-relative overflow-hidden rounded shadow">
    <img src="images/mau-banner-cong-nghe-12.jpg" alt="Banner" class="w-100 h-100 object-fit-cover">
  </div>
</div>

</div>

</div>

</div>

</body>
</html>