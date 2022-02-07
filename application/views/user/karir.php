<?php
$meta['title']          = 'Pusat Karir - S-Plus Indonesia';
$meta['description']    = 'S-Plus membuka lowongan pekerjaan untuk dapat meningkatkan kualitas pelayanan perusahaan, jika tertarik bisa langsung masuk proses seleksi penerimaan pegawai.';
$meta['keywords']       = 'loker cirebon, lowongan kerja cirebon, lowongan kerja pabrik cirebon, lowongan buruh cirebon';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
  <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
    <div class="ps-container">
      <div class="row pb-50 pt-50">
        <?php if (!$this->agent->is_mobile()) : ?>
          <!-- desktop view sidebar -->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
            <!-- <aside class="ps-widget--sidebar ">
                            <div class="ps-widget__header">
                                <h3>
                                    <a href="<?= base_url('v_kategori') ?>"> <b>PRODUK</b></a>
                                </h3>
                            </div>
                            <div class="ps-widget__content ">
                                <ul class="ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b>
                                        </a>
                                        <ul id="test">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp1"><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>"><b>PINTU ABS</b></a>
                                                <ul id="testsp1" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                                                    <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                                                    <ul>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">General</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Deco</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                                                    </ul>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Art Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">Exterior Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li>
                                                </ul>

                                            </li>

                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp2"><a href="<?= base_url('kategori/s-plus-pintu/upvc') ?>"><b>PINTU UPVC</b></a>
                                                <ul id="testsp2" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#felice') ?>">Felice</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#sash') ?>">Sash Door</a></li>
                                                </ul>


                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp3"><a href="<?= base_url('kategori/s-plus-pintu/namo') ?>"><b>PINTU NAMO</b></a>
                                                <ul id="testsp3" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#laminate-door') ?>">Laminate Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#eco-door') ?>">ECO Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#veneer-solid-door') ?>">Veneer Solid Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#timber-joint-door') ?>">Timber Joint Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#art-door') ?>">ART Door</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/iroom_door') ?>"><b>PINTU IROOM</b></a></li>
                                        </ul>

                                    </li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test2">
                                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>JENDELA</b></a>
                                        <ul id="test2">
                                            
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_upvc') ?>"><b>JENDELA UPVC</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_IROOM') ?>"><b>JENDELA IROOM</b></a></li>

                                        </ul>
                                    </li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test3">
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>INSIDE BUILDING</b></a>
                                        <ul id="test3">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp5"><a href="<?= base_url('kategori/s-plus-interior-material_upvc') ?>"><b>PLAFON UPVC</b></a>
                                                <ul id="testsp5" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material#polos') ?>">Plafon Polos</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material#laminate') ?>">Plafon Laminate</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material#deco') ?>">Plafon Deco</a></li>
                                                </ul>

                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp6"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-shead') ?>"><b>SUN SHADE</b></a>
                                                <ul id="testsp6" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">Combi Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">Sun Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">Blackout Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">Vertical Blind</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">Horizontal Wood</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">Horizontal Aluminium</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">Honeycomb</a></li>
                                                </ul>

                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp7"><a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>"><b>SOLID SURFACE</b></a>
                                                <ul id="testsp7" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#chip') ?>">CHIP</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#deco') ?>">DECO</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>KITCHEN SET</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>PVC FOAM BOARD</b></a></li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp8"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl_kategori') ?>"><b>VINYL FLOORING</b></a>
                                                <ul id="testsp8" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test4">
                                        <a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>"><b>OUTSIDE BUILDING</b></a>
                                        <ul id="test4">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp9"><a href="<?= base_url('kategori/s-plus-wpc/wpc_kategori') ?>"><b>WPC</b></a>
                                                <ul id="testsp9" class="panel-collapse collapse">
                                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href='https://sinargarden.com/parasol'><b>PARASOL</b></a></li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test5">
                                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><b>MASKER</b></a>
                                        <ul id="test5">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/dewasa') ?>"><b>MASKER DEWASA</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/anak') ?>"><b>MASKER ANAK-ANAK</b></a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </aside> -->
          </div>
        <?php endif; ?>
        <!-- desktop view cotent -->

        <div class="col-lg-12">
          <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
            <div class="">
              <img src="<?= base_url('assets/user/images/background/karir2.jpg') ?>" class="pb-20">
              <span class="h-body h-m-body">
                PT Smart Techtex (splusindonesia.com), merupakan perusahaaan berskala internasional. Kami adalah produsen pertama dan terbesar di Indonesia yang memproduksi bahan material bangunan seperti kusen pintu dan jendela, daun pintu dan jendela, Genteng, Flooring dan Wall panel
                serta Plafon yang semuanya terbuat dari bahan PVC, ABS yang berkualitas tinggi dan Produk Roll Blind. Kami mengundang Anda untuk bergabung dengan kami :
              </span>
            </div>

            <div class="page-section">
              <div class="container">
                <div class="text-center">
                  <h2 class="title-section">FUNGSI</h2>
                  <p class="title-section">Kami Memiliki Berbagai Bidang Untuk Memulai langkah Pertamamuh Untuk bergabung bersama kami.</p>
                </div>

                <div class="row my-5 card-blog-row">
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="body">
                        <img src="../assets/img/person/person_1.jpg" alt="">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="header">
                        <img src="../assets/img/person/person_1.jpg" alt="">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="header">
                        <img src="../assets/img/person/person_1.jpg" alt="">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="header">
                        <img src="../assets/img/person/person_1.jpg" alt="">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>

                </div>
                <br>
                <div class="row my-5 card-blog-row">
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="body">
                        <img src="<?= base_url('assets/user/images/karir/IT.jpg') ?>" style="border-radius: 20px;">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="">
                        <img src="<?= base_url('assets/user/images/karir/hrd.jpg') ?>" style="border-radius: 20px;" class="work-img">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="">
                        <img src="<?= base_url('assets/user/images/karir/purcase.jpg') ?>" style="border-radius: 20px;">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 py-3">
                    <div class="card-blog">
                      <div class="header">
                        <img src="../assets/img/person/person_1.jpg" alt="">
                      </div>
                      <div class="footer">
                        <a href="blog-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <!-- <div class="page-section">
              <div class="container">
                <div class="text-center">
                  <h2 class="title-section mb-3">Daftarkan</h2>
                  <p>hello let's join in PT.Smart Techtex. You can manualy send us email on <a href="mailto:example@mail.com">example@mail.com</a></p>
                </div>
                <div class="row justify-content-center mt-5">
                  <div class="col-lg-12">
                    <form action="#" class="form-contact">
                      <div class="row">
                        <div class="col-sm-6 py-2">
                          <img src="<?= base_url('assets/user/images/background/Untitled-1.jpg') ?>" style="margin-left: 250px;">
                        </div>
                        <div class="col-sm-6 py-2">
                          <label for="nama" class="fg-black">Nama</label>
                          <input type="text" class="form-control" id="nama" placeholder="Nama..">
                        </div>
                        <div class="col-sm-6 py-2">
                          <label for="email" class="fg-black">Email</label>
                          <input type="text" class="form-control" id="email" placeholder="Email..">
                        </div>
                        <div class="col-sm-6 py-2">
                          <label for="subject" class="fg-black">Bidang yang di daftar</label>
                          <input type="text" class="form-control" id="subject" placeholder="Subject..">
                        </div>
                        <br>
                        <div class="col-sm-6 py-2">
                          <label for="subject" class="fg-black">Upload CV anda disini</label>
                          <form action="/action_page.php">
                            <input type="file" id="myFile" name="upload">
                          </form>
                        </div>
                        <div class="col-sm-6 py-2">
                          <button type="submit" class="btn btn-primary px-5" style="margin-left: 450px;">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <?php $this->load->view('user/footer') ?>