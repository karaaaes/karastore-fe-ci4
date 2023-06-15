<?php
echo $navbar;
?>
<!-- Blog Details Section Begin -->
<section class="blog-details spad" style="height: 100%;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__details__content">
                    <div class="blog__details__form">
                        <h4>Check Transactions Code</h4>
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <p style="color:white; margin-bottom: 0 !important; ">Transaction ID</p>
                                <input type="text" name="transaction_id" id="transaction_id"
                                    placeholder="Input your Transaction ID" style="color:black;">
                            </div>
                            <div class="col-lg-12">
                                <button class="site-btn" onclick="checkTransaction()">Check</button>
                                <label id="errorAuthor" style="display: none; color:red;">Transaction ID tidak
                                    ada</label>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="card" id="cardInformation" style="width: 100%; display:none;" >
                                <div class="card-body">
                                    <h4 class="card-title" id="fullName" style="font-weight: 500; color:black;"><b></b></h4>
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Transaction ID</b>
                                        </div>
                                        <div class="col-8">
                                            <div class="gameDetails" id="transactionId"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Game Name</b>
                                        </div>
                                        <div class="col-8">
                                            <div class="gameDetails" id="gameName"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Price</b>
                                        </div>
                                        <div class="col-8">
                                            <div class="gameDetails" id="gamePrice"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Email</b>
                                        </div>
                                        <div class="col-8">
                                            <div class="gameDetails" id="email"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <b>Payment Status</b>
                                        </div>
                                        <div class="col-8">
                                            <div class="gameDetails" id="paymentStatus" style="font-weight: 1000;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function checkTransaction() {
        var transaction_id = $('#transaction_id').val();
        $.ajax({
            url: "<?php echo base_url('check-transactions'); ?>",
            data: {
                transaction_id: transaction_id
            },
            type: 'POST',
            success: function (response) {
                if (response.status == "exist") {
                    $("#errorAuthor").hide();
                    $("#cardInformation").show();
                    console.log("exist");
                    $("#transactionId").text(response.transaction.transaction_id);
                    $("#fullName").text(response.transaction.full_name);
                    $("#gamePrice").text("Rp. " + response.transaction.price);
                    $("#email").text(response.transaction.email);
                    $("#paymentStatus").text(response.transaction.payment_status);
                    $("#gameName").text(response.transaction.game_name);
                    console.log(response);
                } else {
                    $("#errorAuthor").show();
                    $("#cardInformation").hide();
                    console.log("not_exist");
                    console.log(response);
                }
            }
        });
    }
</script>

<!-- Blog Details Section End -->
<?= $footer ?>