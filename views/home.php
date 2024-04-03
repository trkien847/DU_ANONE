<!-- ======= Hero Slider Section ======= -->
<main id="main">
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/banner01.jpg');">
                                    <div class="img-bg-inner">

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/banner02.jpg');">
                                    <div class="img-bg-inner">

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/banner03.jpg');">
                                    <div class="img-bg-inner">

                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="single-post.html" class="img-bg d-flex align-items-end" style="background-image: url('<?= BASE_URL ?>assets/client/assets/img/banner04.jpg');">
                                    <div class="img-bg-inner">

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->
    <!-- End Hero Slider Section -->



    
    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">

                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        <a href="#"><img src="<?= BASE_URL . $postTopView['p_img_thumnail'] ?>" alt="" class="img-fluid"></a>
                        <div class="post-meta"><span class="date">
                                <?= $postTopView['c_name'] ?>
                            </span> <span class="mx-1">&bullet;</span>
                            <span>
                                <?= $postTopView['p_updated_at'] ?>
                            </span>
                        </div>
                        <h2><a href="#">
                                <?= $postTopView['p_title'] ?>
                            </a></h2>
                        <p class="mb-4 d-block">
                            <?= $postTopView['p_excerpt'] ?>
                        </p>

                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="<?= BASE_URL . $postTopView['au_avatar'] ?>" alt="" class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">
                                    <?= $postTopView['au_name'] ?>
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        <?php foreach ($postTop6Latest as $item) : ?>

                            <div class="col-lg-4 border-start custom-border">
                                <?php foreach ($item as $post) : ?>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="<?= BASE_URL . $post['p_img_thumnail'] ?>" alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">
                                                <?= $post['c_name'] ?>
                                            </span> <span class="mx-1">&bullet;</span>
                                            <span>
                                                <?= $post['p_updated_at'] ?>
                                            </span>
                                        </div>
                                        <h2><a href="single-post.html">
                                                <?= $post['p_title'] ?>
                                            </a></h2>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>

                        


                        <!-- Trending Section -->
                        <div class="col-lg-4">

                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                    <?php foreach ($postTop5TrendingLatest as $key => $post) : ?>
                                        <li>
                                            <a href="#">
                                                <span class="number"><?= ++$key ?></span>
                                                <h3><?= $post['p_title'] ?></h3>
                                                <span class="author"><?= $post['au_name'] ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->
                    </div>
                </div>

            </div> <!-- End .row -->

            
        </div>
    </section> <!-- End Post Grid Section -->