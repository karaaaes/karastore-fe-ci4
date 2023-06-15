<?php
echo $navbar;
?>
    <!-- Anime Section Begin -->
    <section class="anime-details spad mt-5">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?= base_url($t['data']['squared_cover_game']) ?>">
                            <div class="comment"><i class="fa fa-comments"></i><?= $t['data']['total_comment']?></div>
                            <div class="view"><i class="fa fa-eye"></i><?= $t['data']['total_view']?></div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?= $t['data']['title']?></h3>
                                <span><?= $t['data']['years']?></span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span><b>Price : $<?= $t['data']['price']?></b></span>
                            </div>
                            <p><?= $t['data']['description']?></p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Type:</span> Games</li>
                                            <li><span>Date aired:</span> Oct 02, 2019</li>
                                            <li><span>Status:</span> Full Launch</li>
                                            <li><span>Genre:</span> <?= $t['data']['genre']?></li>
                                            <li><span>Duration:</span> <?= $t['data']['play_to_complete'] . " minutes to complete";?></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Quality:</span> HD</li>
                                            <li><span>Views:</span> <?= $t['data']['total_view']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="<?= base_url("BuyDetails/".$t['data']['id']) ?>" class="follow-btn"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="anime__details__review">
                            <div class="section-title">
                                <h5>Reviews</h5>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url('assets/img/anime/review-1.jpg') ?>" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                    <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url('assets/img/anime/review-2.jpg') ?>" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url('assets/img/anime/review-3.jpg') ?>" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url('assets/img/anime/review-4.jpg') ?>" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                    <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url('assets/img/anime/review-5.jpg') ?>" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                    <p>Finally it came out ages ago</p>
                                </div>
                            </div>
                            <div class="anime__review__item">
                                <div class="anime__review__item__pic">
                                    <img src="<?= base_url('assets/img/anime/review-6.jpg') ?>" alt="">
                                </div>
                                <div class="anime__review__item__text">
                                    <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                    <p>Where is the episode 15 ? Slow update! Tch</p>
                                </div>
                            </div>
                        </div>
                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>Your Comment</h5>
                            </div>
                            <form action="#">
                                <textarea placeholder="Your Comment"></textarea>
                                <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
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
                                data-setbg="<?= base_url('assets/img/sidebar/cod-sidebar.png') ?>">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Call of Duty: Warzone (Modern Warfare)</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                                data-setbg="<?= base_url('assets/img/sidebar/spiderman-sidebar.png') ?>">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Spider-Man</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix week years"
                                data-setbg="<?= base_url('assets/img/sidebar/minecraft-sidebar.png') ?>">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Minecraft</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix years month"
                                data-setbg="<?= base_url('assets/img/sidebar/rdr2-sidebar.png') ?>">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="#" style="background-color: black;">Red Dead Redemption II</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix day" 
                                data-setbg="<?= base_url('assets/img/sidebar/mario-sidebar.png') ?>">
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
        <!-- Anime Section End -->
        <!-- Tampilkan footer -->
<?= $footer ?>