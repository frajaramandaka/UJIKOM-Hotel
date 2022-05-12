<?php if (empty($_SESSION['user']->level)):?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5 id="judul"><i class="fa fa-road"></i> Hotel Hebat</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('Auth/Login'); ?>">Login</a></li>
                            <li><a href="<?= base_url('Tamu/CaraPesan'); ?>">Cara Pesan</a></li>
                            <li><a href="<?= base_url('Tamu/DataPesanan'); ?>">Pesanan Saya</a></li>
                            <li><a href="<?= base_url('Tamu/Kamar'); ?>">Daftar Kamar</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('Tamu/FasilitasKamar'); ?>">Fasilitas Kamar</a></li>
                            <li><a href="<?= base_url('Tamu/FasilitasHotel'); ?>">Fasilitas Hotel</a></li>
                            <li><a href="<?= base_url('Tamu/PesanKamar'); ?>">Pesan Kamar</a></li>
                        </ul>
                    </div>
                <h5><i class="fa fa-road"></i> Tentang Kami</h5>
                <p id="Tentang-Kami">Hotel Hebat adalah Hotel yang memiliki konsep keindahan dengan kenyamanan yang natural.</p>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Hubungi Kami</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form action="" method="post">
                    <fieldset class="form-group">
                        <textarea class="form-control bg-light" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-success btn-sm mt-2">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
<?php else :?>
    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h5 id="judul"><i class="fa fa-road"></i> Hotel Hebat</h5>
                <div class="row">
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('Auth/Logout'); ?>">Logout</a></li>
                            <li><a href="<?= base_url('Tamu/CaraPesan'); ?>">Cara Pesan</a></li>
                            <li><a href="<?= base_url('Tamu/DataPesanan'); ?>">Pesanan Saya</a></li>
                            <li><a href="<?= base_url('Tamu/Kamar'); ?>">Daftar Kamar</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="list-unstyled">
                            <li><a href="<?= base_url('Tamu/FasilitasKamar'); ?>">Fasilitas Kamar</a></li>
                            <li><a href="<?= base_url('Tamu/FasilitasHotel'); ?>">Fasilitas Hotel</a></li>
                            <li><a href="<?= base_url('Tamu/PesanKamar'); ?>">Pesan Kamar</a></li>
                        </ul>
                    </div>
                <h5><i class="fa fa-road"></i> Tentang Kami</h5>
                <p id="Tentang-Kami">Hotel Hebat adalah Hotel yang memiliki konsep keindahan dengan kenyamanan yang natural.</p>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a href="" class="nav-link pl-0"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-github fa-lg"></i></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                <br>
            </div>
            <div class="col-md-2">
                <h5 class="text-md-right">Hubungi Kami</h5>
                <hr>
            </div>
            <div class="col-md-5">
                <form action="" method="post">
                    <fieldset class="form-group">
                        <textarea class="form-control bg-light" id="exampleMessage" placeholder="Message"></textarea>
                    </fieldset>
                    <fieldset class="form-group text-xs-right">
                        <button type="button" class="btn btn-success btn-sm mt-2">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</footer>
<?php endif ;?>