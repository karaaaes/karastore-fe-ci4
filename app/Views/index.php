<!-- Tampilkan navbar -->
<?php
echo $navbar;
?>
<!-- Hero Section Begin -->
<section class="hero mt-5">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <?php for($i=0; $i<3; $i++): ?>
            <div class="hero__items set-bg" data-setbg="<?= $t['data'][$i]['cover_game'];?>">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero__text">
                            <div class="label"><?= $t['data'][$i]['genre'];?></div>
                            <h2><?= $t['data'][$i]['title'];?></h2>
                            <p><?= $t['data'][$i]['description'];?></p>
                            <a href="<?= base_url("GameDetails/".$t['data'][$i]['id']) ?>"><span>Buy Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="<?= base_url('all-games') ?>" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php for($k=0; $k<6; $k++): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= $t['trending_data'][$k]['squared_cover_game']?>">
                                    <div class="ep"><?= $t['trending_data'][$k]['years']?></div>
                                    <div class="comment"><i class="fa fa-comments"></i> <?= $t['trending_data'][$k]['total_comment']?></div>
                                    <div class="view"><i class="fa fa-eye"></i><?= $t['trending_data'][$k]['total_view']?></div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li><?= $t['trending_data'][$k]['genre']?></li>
                                    </ul>
                                    <h5><a href="<?= base_url("GameDetails/".$t['trending_data'][$k]['id']) ?>"><?= $t['trending_data'][$k]['title']?></a></h5>
                                </div>
                            </div>
                        </div>
                        <?php endfor ?>
                    </div>
                </div>
                <div class="popular__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Popular Games by Discussion</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php for($j=0; $j<6; $j++): ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="<?= $t['popular_data'][$j]['squared_cover_game']?>">
                                    <div class="ep"><?= $t['popular_data'][$j]['years']?></div>
                                    <div class="comment"><i class="fa fa-comments"></i><?= $t['popular_data'][$j]['total_comment']?></div>
                                    <div class="view"><i class="fa fa-eye"></i><?= $t['popular_data'][$j]['total_view']?></div>
                                </div>
                                <div class="product__item__text">
                                    <ul>
                                        <li><?= $t['popular_data'][$j]['genre']?></li>
                                    </ul>
                                    <h5><a href="<?= base_url("GameDetails/".$t['popular_data'][$j]['id']) ?>"><?= $t['popular_data'][$j]['title']?></a></h5>
                                </div>
                            </div>
                        </div>
                        <?php endfor ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top Views</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="active" data-filter="*">Day</li>
                            <li data-filter=".week">Week</li>
                            <li data-filter=".month">Month</li>
                            <li data-filter=".years">Years</li>
                        </ul>
                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="assets/img/sidebar/cod-sidebar.png">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Call of Duty: Warzone (Modern Warfare)</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                                data-setbg="assets/img/sidebar/spiderman-sidebar.png">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Spider-Man</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix week years"
                                data-setbg="assets/img/sidebar/minecraft-sidebar.png">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Minecraft</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix years month"
                                data-setbg="assets/img/sidebar/rdr2-sidebar.png">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Red Dead Redemption II</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix day" 
                                data-setbg="assets/img/sidebar/mario-sidebar.png">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Mario Kart 8 Deluxe</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
<!-- Tampilkan footer -->
<?= $footer ?>