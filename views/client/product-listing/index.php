<div class="ps-products" style="padding: 20px 50px;">
    <div class="ps-products" data-mh="product-listing">
        <div class="ps-section--offer mb-40">
            <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="<?= CLIENT_ASSETS ?>images/banner/banner-1.jpg" alt=""></a></div>
            <div class="ps-column"><a class="ps-offer" href="product-listing.html"><img src="<?= CLIENT_ASSETS ?>images/banner/banner-2.jpg" alt=""></a></div>
        </div>

        <div class="ps-product__columns">
            <?php foreach ($product_listing as $ps) : ?>
                <div class="ps-product__column">
                    <div class="ps-shoe mb-30">
                        <div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                            <img src="<?= PUBLIC_ASSETS  . $ps['product_image'] ?>" alt=""><a class="ps-shoe__overlay" href="<?= CLIENT_URL . 'chi-tiet-san-pham?id=' . $ps['id_product'] . '&id_brand=' . $ps['id_brand'] ?>"></a>
                        </div>
                        <div class="ps-shoe__content">
                            <div class="ps-shoe__variants">
                                <div class="ps-shoe__variant normal">
                                    <img src="<?= PUBLIC_ASSETS  . $ps['product_image'] ?>" alt="">
                                    <img src="<?= PUBLIC_ASSETS  . $ps['product_image'] ?>" alt="">
                                    <img src="<?= PUBLIC_ASSETS  . $ps['product_image'] ?>" alt="">
                                    <img src="<?= PUBLIC_ASSETS  . $ps['product_image'] ?>" alt="">
                                </div>
                            </div>
                            <div class="ps-shoe__detail"><a class="ps-shoe__name" href="<?= CLIENT_URL . 'chi-tiet-san-pham?id=' . $ps['id_product'] . '&id_brand=' . $ps['id_brand'] ?>"><?= $ps['product_name'] ?></a>
                                <span class="ps-shoe__price"><?= $ps['price'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>



        <div class="ps-product-action">
            <div class="ps-pagination">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>