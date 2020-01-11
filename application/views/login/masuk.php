
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="post" action="<?= base_url('Login');?>">
                    <div class="login-form-head">
                        <h4>Masuk</h4>
                        <p>Halo,Mohon Login Untuk Melanjutkan</p>
                    </div>
                    <?= $this->session->flashdata('pesan'); ?>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label>Id Petugas</label>
                            <input type="text" name="id_petugas" value="<?= set_value('id_petugas');?>">
                            <i class="ti-user"></i>
                            <?= form_error('id_petugas','<div class="text-danger">','</div>'); ?>
                        </div>
                        <div class="form-gp">
                            <label>Password</label>
                            <input type="password" name="password" value="<?= set_value('password');?>">
                            <i class="ti-lock"></i>
                            <?= form_error('password','<div class="text-danger">','</div>'); ?>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->
