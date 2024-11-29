<?php include_once ROOT_DIR . "views/clients/header.php" ?>

<div class="container">

    <div class="mb-3 mt-3">
    <a href="<?= ROOT_URL ?>" style="color: black; text-decoration: none;">Trang chủ</a> ->
        <b><?= $title ?? '' ?></b>
    </div>
    <div class="row">
        <?php foreach ($products as $pro) : ?>
            <!-- Box Sản Phẩm -->
            <div class="col-md-3 mb-4">
                <div class="product card shadow-sm">
                <a href="<?= ROOT_URL . '?ctl=detail&id=' . $pro['id'] ?>">              
                    <img src="images/<?= $pro['image'] ?>" alt="Product Image" class="card-img-top">
                    </a>
                    <div class="card-body text-center">
                        
                        <h5 class="card-title"><?= $pro['name'] ?></h5>
                        <p class="card-text text-success fw-bold"><?= number_format($pro['price'], 0, ',', '.') ?> VNĐ</p>
                        <button class="btn btn-primary">Thêm vào giỏ hàng</button>

                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php include_once ROOT_DIR . "views/clients/footer.php" ?>