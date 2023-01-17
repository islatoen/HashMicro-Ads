<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class=" modalcon">
                <div class="modal-header" style="border: 0px;">
                    <div class="modal-title col justify-content-center" id="exampleModalLabel"><img
                            src="Assets/hashmicro-red.svg" class="py-md-4 py-3 d-block mx-auto gambarmodal">
                        <h4 class="text-center"><span style="color:#9c171e;font-weight:bold;font-size: 30px;">Dapatkan
                                Konsultasi dan Demo Gratis Sekarang Juga!</span></h4>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="right: 0
                    ;position: absolute;background: #9c171e;color: #fff;padding: 10px;z-index: 9999;width: 40px;height: 40px; 
                    opacity:1;border-radius:50% ;margin-top: -280px;margin-right: -20px;">
                        <span aria-hidden="true"
                            style="font-size: 1.5rem;font-weight: 700;line-height: 1;text-shadow: 0 1px 0 #fff;">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="webform-popup" method="post" class="hm-contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="fullname" class='req'>Nama Lengkap</label>
                                    <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="companyname" class='req'>Nama Perusahaan</label>
                                    <input type="text" name="companyname" class="form-control"
                                        placeholder="Nama Perusahaan">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="email" class='req'>Email</label>
                                    <input type="email" name="email" class="form-control inputemail" required
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="phonenumber" class='req'>No. Telepon / Whatsapp</label>
                                    <input type="tel" id="phone-number-popup" name="phonenumber"
                                        class="form-control inputtel" required placeholder="Phone/Whatsapp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="industry" class='req'>Industri Anda</label>
                                    <select name="industry" class="form-control" required>
                                        <option value="" disabled="" selected="">Pilih Industri</option>
                                        <option value="32">Retail</option>
                                        <option value="33">Trading, Wholesale, Distribution</option>
                                        <option value="35">Produksi &amp; Manufaktur</option>
                                        <option value="36">Edukasi</option>
                                        <option value="37">Konstruksi &amp; Infrastuktur</option>
                                        <option value="49">Penerbangan</option>
                                        <option value="41">Pemerintahan</option>
                                        <option value="63">Perhotelan</option>
                                        <option value="47">Rumah Sakit</option>63
                                        <option value="51">Pertambangan</option>
                                        <option value="42">Logistik</option>
                                        <option value="54">Perkebunan &amp; Peternakan</option>
                                        <option value="40">F&amp;B (Restaurant, Catering, Fast Food, Etc)</option>
                                        <option value="62">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="solution" class='req'>Solusi</label>
                                    <select required="required" name="solution" class="form-control">
                                        <option value="" disabled="" selected="">Pilih Solusi</option>
                                        <option value="1">Software ERP (Hash Core ERP)</option>
                                        <option value="4">Software Akuntansi Online</option>
                                        <option value="2">Sistem Manajemen Inventaris</option>
                                        <option value="39">IT Inventory DJBC - Kawasan Berikat</option>
                                        <option value="27">Sistem Manajemen Aset</option>
                                        <option value="3">CRM - Prospek &amp; Penjualan</option>
                                        <option value="16">Software Manajemen Manufaktur (MRP)</option>
                                        <option value="45">Sistem Manajemen Pengadaan (Procurement)</option>
                                        <option value="14">Sistem Manajemen Gudang</option>
                                        <option value="42">Point of Sales (POS) untuk Retail &amp; Supermarket
                                        </option>
                                        <option value="53">Point of Sales (POS) untuk F&amp;B</option>
                                        <option value="54">Recruitment System (EVA - Recruite)</option>
                                        <option value="5">HRM - Absensi, Payroll &amp; Pajak</option>
                                        <option value="55">Talent Management System (EVA - Talent)</option>
                                        <option value="34">Transportation Management System</option>
                                        <option value="7">Solusi Management Sekolah</option>
                                        <option value="43">Solusi Manajemen Konstruksi</option>
                                        <option value="56">Sistem Manajemen Perhotelan</option>
                                        <option value="57">Software Manajemen Bisnis Agrikultur</option>
                                        <option value="34">Manajemen Transportasi &amp; Logistik</option>
                                        <option value="17">Sistem Manajemen Fasilitas</option>
                                        <option value="30">Manajemen Bangunan, Properti &amp; Real-Estate</option>
                                        <option value="18">Sistem Manajemen Pengunjung</option>
                                        <option value="52">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="solution" class='req'>Pesan</label>
                                    <textarea class="form-control" name="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="campaigndata" name="campaigndata" value="">
                        <input type="hidden" class="team" name="team" value="6">
                        <input type="hidden" class="sources" name="source" value="19" id="source">
                        <input type="hidden" class="gclid" name="gclid" value="">
                        <input type="hidden" class="medium" name="medium" value="55">
                        <input type="hidden" class='fvis' name="fvis" value="disabled by browser">
                        <input type="hidden" class='lvis' name="lvis" value="disabled by browser">
                        <input type="hidden" class='country' name="country" value="100">

                        <div class="alert-msg"></div>
                        <div class="text-center text-md-right mt-0 submitbutton ">
                            <button type="submit" id='submit-button-popup' class="shiny-btn custom-btn">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="fly" class="position-fixed panel text-center" style="z-index: 999;">
        <div class="fly-panel">
            <div class="panel_button rounded p-3 fly_open" style="background-color: #9c171e;">
                <i class="fa fa-comments" style="color: white;"></i>
                <p class="m-0 text-light fst-italic">Hubungi<br>Kami</p>
            </div>
        </div>
        <div class="fly-content">
            <div class="fly_content-inner">
                <div class="row" style="max-width: 450px;">
                    <div class="col-12 fly-unit">
                        <div class="row">
                            <div class="col-2 ps-0 pl-0">
                                <img class="fly-img" src="https://www.hashmicro.com/assets/images/cta-fly-form.svg"
                                    alt="Form">
                            </div>
                            <div class="col px-0">
                                <p class="text-left">Demo gratis! <br />Daftar Sekarang!</p>
                            </div>
                            <div class="col-4 px-0"><a href="https://www.hashmicro.com/id/tour-produk-gratis/"
                                    class="button-fly">Daftar</a></div>
                        </div>
                    </div>
                    <div class="col-12 fly-unit">
                        <div class="row">
                            <div class="col-2 ps-0 pl-0">
                                <img class="fly-img" src="https://www.hashmicro.com/assets/images/cta-fly-email.svg"
                                    alt="Whatsapp Hashmicro">
                            </div>
                            <div class="col px-0">
                                <p class="text-left">Kirim pesan Anda<br />melalui Email</p>
                            </div>
                            <div class="col-4 px-0">
                                <a class="button-fly"
                                    href="mailto:halo@hashmicro.com">Email</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 fly-unit">
                        <div class="row">
                            <div class="col-2 ps-0 pl-0">
                                <img class="fly-img" src="https://www.hashmicro.com/assets/images/cta-fly-wa.svg"
                                    alt="Whatsapp Hashmicro">
                            </div>
                            <div class="col px-0">
                                <p class="text-left">Kirim pesan Anda<br />melalui Whatsapp</p>
                            </div>
                            <div class="col-4 px-0">
                                <a class="button-fly" href="https://wa.me/+628111171167">Whatsapp</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 fly-unit">
                        <div class="row">
                            <div class="col-2 ps-0 pl-0">
                                <img class="fly-img" src="https://www.hashmicro.com/assets/images/cta-fly-call.svg"
                                    alt="Whatsapp Hashmicro">
                            </div>
                            <div class="col px-0">
                                <p class="text-left">Atau hubungi Kami<br /><strong>021 5086 1560</strong></p>
                            </div>
                            <div class="col-4 px-0"><a class="button-fly" href="tel:+622150861560">Telepon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                AOS.init({
                    once:false
                });
                
            </script>
            <script src="jquery/jquery.min.js"></script>
            <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/script.js?v=1"></script>
            <script src="js/modal.js?v=1"></script>
            
            <?php include "tracking-footer.php"?>
            