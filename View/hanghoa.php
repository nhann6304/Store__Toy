<?php
$hh = new hanghoa();
$count = $hh->getCountHangHoaAll();
$trang = new page();
$limit = 10;
$page = $trang->findPage($count, $limit);
$start = $trang->findStart($limit);

?>
<?php
$ac = 1;
if (isset($_GET['action'])) {
    if (isset($_GET['act']) && $_GET['act'] == 'productAll' || isset($_GET['page'])) {
        $ac = 2;
    } else if (isset($_GET['act']) && $_GET['act'] == 'productNew' || isset($_GET['page'])) {
        $ac = 3;
    } else if (isset($_GET['act']) && $_GET['act'] == 'productSale' || isset($_GET['page'])) {
        $ac = 4;
    } else if (isset($_GET['act']) && $_GET['act'] == 'timkiem' || isset($_GET['page'])) {
        $ac = 5;
    } else {
        $ac = 1;
    }
}
?>



<div class="app__container">
    <div class="grid">
        <div class="grid__row">
            <div class="grid__column-2">
                <nav class="container__category">
                    <h3 class="category_heading">
                        <i class="category_heading-icon fa-solid fa-list-ul"></i>
                        Danh mục
                    </h3>

                    <ul class="category-list">
                        <?php
                        $hh = new hanghoa();
                        $result = $hh->getloai();
                        while ($set = $result->fetch()):
                            $idLoai = $set['maloai'];
                            ?>
                            <!-- Có mủi tên màu đỏ khi danh mục đó đang được chọn sài class category-item--active -->
                            <li class="category-item " data-tab="<?php echo $set['iploai'] ?> ">
                                <a href="index.php?action=hanghoa&id=<?php echo $idLoai; ?>" class="category-item__link">
                                    <?php echo $set['tenloai'] ?>
                                </a>
                            </li>
                            <?php
                            $id = "1";
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                            }
                        endwhile;
                        ?>
                    </ul>
                </nav>
            </div>
            <div class="grid__column-10">
                <div class="home-filter">
                    <!-- khi bấm tới trang nào trang hướng đên sài class  btn btn--primary để tô màu đỏ lên -->
                    <span class="home-filter__label">Sắp xếp theo</span>
                    <button id="discountBtnAll" class="home-filter__btn btn">Tất cả</button>
                    <button id="filterNewest" class="home-filter__btn btn">Mới nhất</button>
                    <button id="filterDiscount" class="home-filter__btn btn">Giảm giá</button>

                    <div class="select-input">
                        <span class="select-input__label">Giá</span>
                        <i class="select-input__icon fa-solid fa-angle-down"></i>
                        <!-- list option -->
                        <ul class="select-input__list">
                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá cao đến thấp</a>
                            </li>

                            <li class="select-input__item">
                                <a href="" class="select-input__link">Giá thấp đến cao</a>
                            </li>
                        </ul>
                    </div>
                    <div class="home-filter__page">
                        <span class="home-filter__num">
                            <span class="home-filter__current">1</span>/14
                        </span>

                        <div class="home-filter__page-control">
                            <!-- khi bấm tới trang tận cùng muốn disabled sài class home-filter__page-btn-disabled  -->
                            <a href="" class="home-filter__page-btn  home-filter__page-btn-disabled">
                                <i class="home-filter__page-icon fa-solid fa-angle-left"></i>
                            </a>

                            <a href="" class="home-filter__page-btn">
                                <i class="home-filter__page-icon fa-solid fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="home-product">
                    <div class="grid__row">
                        <!-- produc item -->
                        <?php

                        $hh = new hanghoa();
                        if ($ac == 1) {
                            $result = $hh->getHanghoa($id);
                        } else if ($ac == 3) {
                            $result = $hh->getHangHoaNew();
                        } else if ($ac == 4) {
                            $result = $hh->getHangHoaSale();
                        } else if ($ac == 5) {
                            if (isset($_POST['txtsearch'])) {
                                $tk = $_POST['txtsearch'];
                                $result = $hh->selectTimKiem($tk, $start, $limit);
                            }
                        } else {
                            // $result = $hh->getHangHoaAll();
                            $result = $hh->getHangHoaAllPage($start, $limit);
                        }

                        while ($set = $result->fetch()):
                            ?>
                            <div class="grid__column-2-4 tab-content <?php echo $set['iploai'] ?>">
                                <a href="index.php?action=hanghoa&act=sanphamchitiet&id=<?php echo $set['mahh']; ?>"
                                    class="home-product-item">
                                    <div class="text">
                                        <div class="home-product-item__img"
                                            style="background-image: url('./assets/img/<?php echo $set['hinh']; ?>')">
                                        </div>
                                        <h1 class="home-product-item__name">
                                            <?php echo $set['tenhh'] ?>
                                        </h1>

                                        <div class="home-product-item__price">
                                            <?php if ($set['giamgia'] == 0): ?>
                                                <span class="home-product-item__price-current">
                                                    <?php echo number_format($set['dongia']); ?> VNĐ
                                                </span>
                                            <?php else: ?>
                                                <span class="home-product-item__price-old">
                                                    <?php echo number_format($set['dongia']); ?> VNĐ
                                                </span>
                                                <span class="home-product-item__price-current">
                                                    <?php echo number_format($set['dongia'] - $set['giamgia']) ?> VNĐ
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="home-product-item__action">
                                            <!-- khi đã tim thì tô màu trái tim lên sài class home-product-item__like--liked -->
                                            <span class="home-product-item__like home-product-item__like--liked">
                                                <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                                <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                            </span>
                                            <div class="home-product-item__rating">
                                                <i class="home-product-item__gold fa-solid fa-star"></i>
                                                <i class="home-product-item__gold fa-solid fa-star"></i>
                                                <i class="home-product-item__gold fa-solid fa-star"></i>
                                                <i class="home-product-item__gold fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="home-product-item__sold">Còn lại
                                                <?php echo $set['soluongton'] ?>
                                            </span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Sản xuất tại:</span>
                                            <span class="home-product-item__origin-name">
                                                <?php echo $set['tenquocgia'] ?>
                                            </span>
                                        </div>
                                        <div class="home-product-item__favourite">
                                            <i class="fa-solid fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>

                                        <div class="home-product-item__sale-off">
                                            <span class="home-product-item__sale-off-precent">
                                                <?php echo $set['percent'] ?>%
                                            </span>
                                            <span class="home-product-item__sale-off-label">GIẢM</span>
                                        </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <!-- Phân trang pagination -->
            <ul class="pagination home-product__pagination">
                <?php
                $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                ?>

                <?php
                if ($current_page > 1 && $page > 1):
                    ?>
                    <li class="pagination-item ">
                        <a href="index.php?action=hanghoa&page=<?php echo ($current_page - 1) ?> "
                            class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-angle-left"></i>
                        </a>
                    </li>
                <?php endif ?>

                <?php
                for ($i = 1; $i <= $page; $i++) {
                    $activeClass = ($i == $current_page) ? "pagination-item--active" : '';
                    echo '
                        <li href="" class="pagination-item ' . $activeClass . '  ">
                             <a href="index.php?action=hanghoa&page=' . $i . '" class="pagination-item__link">' . $i . '</a>
                        </li>';
                }

                if ($current_page < $page && $page > 1):
                    ?>
                    <li class="pagination-item ">
                        <a href="index.php?action=hanghoa&page=<?php echo ($current_page + 1) ?> "
                            class="pagination-item__link">
                            <i class="pagination-item__icon fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</div>