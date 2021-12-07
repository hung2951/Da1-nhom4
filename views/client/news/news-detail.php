<div class="ps-blog-grid">
    <div class="ps-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-post--detail">

                    <div class="ps-post__header">
                        <h3 class="ps-post__title"><?= $news_detail['name_news'] ?></h3>
                        <div style="text-align:center" class="ps-post__thumbnail"><img src="<?= PUBLIC_ASSETS . $news_detail['image_news'] ?>" alt=""></div>
                        <p><?= $news_detail['especially_news'] ?></p>
                        <p class="ps-post__meta"> <?= $news_detail['date_news'] ?> </p>
                    </div>
                    <div class="ps-post__content">
                        <p><?= $news_detail['details_news'] ?></p>
                    </div>
                    <div class="ps-post__footer">
                        <div class="ps-post__actions"><span><i class="fa fa-heart"></i> likes</span>
                            <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Share</a>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>