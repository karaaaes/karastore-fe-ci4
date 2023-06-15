<?php
echo $navbar;
?>
<style>
</style>
<!-- Login Section Begin -->
<section class="login spad mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Input Your Information</h3>
                    <form action="<?= base_url('BuyDetails/add') ?>" method="post" enctype="multipart/form-data">
                        <div class="">
                            <input type="text" placeholder="Game ID" value="<?= $t['data']['id']; ?>" name="gameId" hidden>
                        </div>
                        <p style="color:white; margin-bottom: 0 !important; ">Transaction ID</p>
                        <div class="input__item">
                            <input type="text" name="trasanctionId" placeholder="Transaction ID" value="<?= $randomString; ?>" style="color:black; font-weight:700;" readonly>
                            <span class="icon_mail"></span>
                            <p style="color:red; margin-bottom: 0 !important;">*Save this code before you checkout</p>
                        </div>
                        <p style="color:white; margin-bottom: 0 !important;">Game Name</p>
                        <div class="input__item">
                            <input type="text" name="gameName" placeholder="Game Name" value="<?= $t['data']['title']; ?>" style="color:black; font-weight:700;" readonly>
                            <span class="icon_mail"></span>
                        </div>
                        <p style="color:white; margin-bottom: 0 !important; ">Price</p>
                        <div class="input__item">
                            <input type="text" name="price" placeholder="Price" value="<?= $t['kurs']['idrAmount']; ?>" style="color:black; font-weight:700;" readonly>
                            <span class="icon_mail"></span>
                            <p style="color:red; margin-bottom: 0 !important;">*Auto convert USD to IDR (based with real kurs)</p>
                        </div>
                        <div class="input__item">
                            <input type="text" name="fullName" placeholder="Full Name" required>
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" name="address" placeholder="Address" required>
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" name="email" placeholder="Email" required>
                            <span class="icon_mail"></span>
                        </div>
                        <div class="input__item">
                            <input type="text" name="phoneNumber" placeholder="Phone Number" required>
                            <span class="icon_mail"></span>
                        </div>
                        <button type="submit" class="site-btn">Check Out</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>The Game You Want to Buy</h3>
                    <img src="<?= base_url($t['data']['squared_cover_game']) ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->
<?php
echo $footer;
?>