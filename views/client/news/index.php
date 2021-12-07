<div class="ps-blog-grid pt-80 pb-80">
    <div class="ps-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <?php foreach ($news as $news) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-post mb-30">
                            <div class="ps-post__thumbnail">
                                <a class="ps-post__overlay" href="<?= CLIENT_URL . 'news_detail?id_news=' . $news['id_news'] ?>"></a>
                                <img src="<?= PUBLIC_ASSETS. $news['image_news'] ?>" alt="">
                            </div>
                            <div class="ps-post__content"><a class="ps-post__title" href="<?= CLIENT_URL . 'news_detail?id_news=' . $news['id_news'] ?>"><?= $news['name_news'] ?></a>
                                <p class="ps-post__meta"><span class="ml-5"><?= $news['date_news'] ?></span></p>
                                <p><?= $news['especially_news'] ?> </p>
                                <a class="ps-morelink" href="<?= CLIENT_URL . 'news_detail?id_news=' . $news['id_news'] ?>">Read more<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="mt-30">
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
</div>