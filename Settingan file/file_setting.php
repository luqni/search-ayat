<div class="row">
                    <div class="col-lg-6">
                        <div id="accordion_1" data-accordion="1">
                            <div class="card mb-3">
                                <div class="card-header py-4 collapsed" id="cara2" data-toggle="collapse" data-target="#cara1" aria-expanded="false" aria-controls="cara1">
                                    <h5 class="heading h5 font-weight-normal mb-0"><i class="fas fa-question mr-3"></i>Cara Penggunaan?</h5>
                                </div>

                                <div id="cara1" class="collapse" aria-labelledby="cara2" data-parent="#accordion_1">
                                    <div class="card-body">
                                        <p>Ketikkan potongan - potongan ayat atau lafazd dalam Al-Quran (tidak harus benar cara penulisannya).<br><br>contoh: alhamdulillahi, rabbil-'alamin
                                            innalloha ma'a shoobiriin, laa ilaaha illallaah, kun fayakuun
                        
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header py-4 collapsed" id="heading_1_2" data-toggle="collapse" data-target="#collapse_1_2" aria-expanded="false" aria-controls="collapse_1_2">
                                    <h5 class="heading h5 font-weight-normal mb-0"><i class="fas fa-info mr-3"></i>Tentang WERLS Lafadz Al-Qur'an Finder</h5>
                                </div>

                                <div id="collapse_1_2" class="collapse" aria-labelledby="heading_1_2" data-parent="#accordion_1">
                                    <div class="card-body">
                                        <p>WERLS Lafadz Al-Qur'an Finder adalah aplikasi pencari lafaz pada Al-Quran. Aplikasi ini dibuat untuk memudahkan pencarian ayat dengan lafaz tertentu pada Al-Quran hanya dengan aksara Latin biasa berdasarkan pelafalan pembicara bahasa Indonesia, tanpa perlu mengetikkannya dalam aksara Arab</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <div id="accordion_2" data-accordion="1">
                            <div class="card mb-3">
                                <div class="card-header py-4 collapsed" id="heading_2_1" data-toggle="collapse" data-target="#collapse_2_1" aria-expanded="false" aria-controls="collapse_2_1">
                                    <h5 class="heading h5 font-weight-normal mb-0"><i class="fas fa-cog fa-spin mr-3"></i>Pengaturan</h5>
                                </div>

                                <div id="collapse_2_1" class="collapse" aria-labelledby="heading_2_1" data-parent="#accordion_2">
                                    <div class="card-body">
                            <input type="checkbox" id="os" name="order" checked="checked"/>
                            <label for="os">Perhitungkan keterurutan</label> <br>
                            <input type="checkbox" id="vw" name="vowel" checked="checkes"/>
                            <label for="vw">Perhitungkan huruf vokal</label>
                            <!----Batas funsi--->
                            <?php if($num_doc_found > 0) : ?>
                            <div id="hl-switch" title="Tampilkan sorotan pada bagian yang kira-kira cocok">
                            <input type="checkbox" id="cx_tr" checked="checked" onchange="if(this.checked == true) showTrans(); else hideTrans();"/>
                            <label for="cx_tr">Tampilkan terjemahan</label> <br>
                            <input type="checkbox" id="hl1" checked="checked" onchange="if(this.checked == true) showHilight(); else hideHilight();"/>
                            <label for="hl1">Tampilkan sorotan</label>
                            </div>
                            <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header py-4 collapsed" id="heading_2_2" data-toggle="collapse" data-target="#collapse_2_2" aria-expanded="false" aria-controls="collapse_2_2">
                                    <h5 class="heading h5 font-weight-normal mb-0"><i class="fas fa-brain mr-3"></i>Maintenance</h5>
                                </div>

                                <div id="collapse_2_2" class="collapse" aria-labelledby="heading_2_2" data-parent="#accordion_2">
                                    <div class="card-body">
                                <p>Perbaikan pencarian lafadz Al-Qur'an</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>