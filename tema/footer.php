  <?php
    $hit = new HitCounter();
    $hit->Hitung();
  ?>
  <footer class="footer footer-dark " style="background:linear-gradient(135deg,#138008 0,#11ad02 60%);!important">
        <div class="container">
            <div class="row pt-md">
                <!-- <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="index.php">
                        <img class="mb-3" src="assets/img/new/werls-edition.png" alt="Footer logo" style="height: 80px; margin-top:-35px">
                    </a>
                    <p class="text-sm">werls.id adalah sebuah komunitas dalam bidang IT, Semua untuk kepentingan Dakwah gratis
                    silahkan hubungi kami di instagram ok.</p>
                </div> -->
                <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">About</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">Hubungi Kami</a>
                        </li>
                        <li><a href="#">Tentang Kami</a>
                        </li>
                        <li><a href="#">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-lg-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Visitor</h6>
                    <ul class="list-unstyled">
                        <li>Assalamu'alaikum Kamu Pengunjung ke : <?php echo $hit->tampil(); 
                        $h = $hit->waktu();
                        if (!empty($h)) {
                            echo '<br>Anda telah mengunjungi halaman ini pada : ' . $h;
                        }
                        ?>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Privacy Policy</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Loerem ipsum</a>
                        </li>
                        <li><a href="#">Loerem ipsum</a>
                        </li>
                        <li><a href="#">Loerem ipsum</a>
                        </li>
                    </ul>
                </div> -->
            </div>
            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top text-white">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2019 <a href="index.php" class="font-weight-bold" target="_blank">lafzicolaboration with Muhammad Luqni Baehaqi</a>. All rights reserved.
                    </div>
                </div>
                <!-- <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://instagram.com/imam_a5ri" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="https://facebook.com/imam.a5ri" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>
    <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/in-view/dist/in-view.min.js"></script>
    <script src="assets/vendor/highlight.js/lib/highlight.js"></script>
    <script src="assets/js/pages/demo.datatable-init.js"></script>
    <script src="assets/js/theme.min.js"></script>
</body>
</html>