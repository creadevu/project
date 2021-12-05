<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masaüstü Bilgisayar / Dizüstü Bilgisayar</title>
    <link rel="icon" type="image/png" href="https://teknoloji.org/wp-content/uploads/2020/10/favicon_teknoloji.png" sizes="32x32" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-container">
                <div class="left-items-navbar">
                    <img src="<?=base_url('assets/img/xenforo-logo.png')?>" alt="Logo">
                    <a href="../../../../../"><i class="fas fa-home"></i> Anasayfa</a>
                </div>
                <div class="right-items-navbar">
                    <ul>
                        <li>
                            <!-- Giriş Yap Modal Trigger -->
                            <a href="" style="border-right: 1px solid #1d3a87;" data-bs-toggle="modal" data-bs-target="#giris_yapModal">Giriş Yap</a>                                                               
                        </li>
                        <li>
                            <!--Kayıt Ol Modal Trigger -->
                            <a href="#" data-bs-toggle="modal" data-bs-target="#kayit_olModal">Kayıt Ol</a>                        
                        </li>
                    </ul>                    
                </div>
            </div>
        </div>
    </header>
    <br>
    <section>
        <!-- Giriş Yap Modal -->
        <div class="modal fade" id="giris_yapModal" tabindex="-1" aria-labelledby="giris_yapModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="giris_yapModalLabel">Giriş Yap</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="giris_yapInputEmail" class="form-label">E-posta adresiniz:</label>
                                <input type="email" class="form-control" id="giris_yapInputEmail" name="giris_yapInputEmail" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">Kişisel verilerinizi asla başkalarıyla paylaşmayız.</div>
                            </div>
                            <div class="mb-3">
                                <label for="giris_yapInputPassword" class="form-label">Parola:</label>
                                <input type="password" class="form-control" id="giris_yapInputPassword" name="giris_yapInputPassword" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="giris_yapCheck">
                                <label class="form-check-label" for="giris_yapCheck">Beni Hatırla</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button type="submit" class="btn btn-primary">Giriş Yap</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>  
        <!-- Giriş Yap Modal End -->
        <!-- Kayıt Ol Modal -->
        <div class="modal fade" id="kayit_olModal" tabindex="-1" aria-labelledby="kayit_olModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kayit_olModalLabel">Kayıt Ol</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="kayit_olInputNick" class="form-label">Kullanıcı adı:</label>
                                <input type="text" class="form-control" id="kayit_olInputNick" name="kayit_olInputNick" aria-describedby="emailHelp" required>
                                <div id="emailHelp" class="form-text">Forum kullanıcı adınıza özenle karar verin. Kullanıcıları rahatsız edebilecek, küfür, hakaret vb. ifadeler barındıran kullanıcı adları forumdan süresiz uzaklaştırılacaktır.</div>
                            </div>
                            <div class="mb-3">
                                <label for="kayit_olInputEmail" class="form-label">E-posta adresiniz:</label>
                                <input type="email" class="form-control" id="kayit_olInputEmail" name="kayit_olInputEmail" required>
                            </div>
                            <div class="mb-3">
                                <label for="kayit_olInputPassword" class="form-label">Parola:</label>
                                <input type="password" class="form-control" id="kayit_olInputPassword" name="kayit_olInputPassword" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="kayit_olCheck" required>
                                <label class="form-check-label" for="kayit_olCheck">Kullanım Koşulları ve Gizlilik Politikasını okudum, kabul ediyorum.</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button type="button" class="btn btn-primary">Kayıt Ol</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kayıt Ol Modal End -->
        <div class="container">
            <h3>Masaüstü Bilgisayar / Laptop</h3>
            <div class="block-container">
                <div class="block-bar"></div>
                <div class="block-body">
                    <div class="structItemContainer">
                        <div class="structItem">
                            <div class="structItem-cell structItem-cell--icon">
                                <div class="structItem-iconContainer">
                                    <a href="#" class="avatar avatar--s avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e">
                                        <span class="avatar-u134-s" role="img" aria-label="Teknonely (APK Meydanı)">T</span> 
                                    </a>
                                </div>
                            </div>
                            <div class="structItem-cell structItem-cell--main">
                                <div class="structItem-title">
                                    <a href="#">14 Bilgisayar Hızlandırma ve FPS Arttırma Yöntemi</a>
                                </div>
                                <div class="structItem-minor">
                                    <ul class="structItem-parts">
                                        <li>
                                            <a href="#" class="username">Teknonely (APK Meydanı)<i class="fas fa-circle" style="font-size: 3px;position: relative;bottom: 3px;left: 3px;margin-right: 3px;"></i></a>
                                        </li>
                                        <li class="structItem-startDate">
                                            <a href="#" rel="nofollow"><time class="u-dt" dir="auto" datetime="2020-12-06T15:24:40+0000" data-time="1607268280" data-date-string="6 Ara 2020" data-time-string="15:24" title="6 Ara 2020, Saat: 15:24">6 Ara 2020</time></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="structItem-cell structItem-cell--meta">
                                <dl class="pairs pairs--justified">
                                    <dt>
                                        Cevaplar:
                                    </dt>
                                    <dd>
                                        0
                                    </dd>
                                </dl>
                                <dl class="pairs pairs--justified structItem-minor">
                                    <dt>
                                        Görüntüleme:
                                    </dt>
                                    <dd>
                                        333
                                    </dd>
                                </dl>
                            </div>
                            <div class="structItem-cell structItem-cell--latest">
                                <a href="#" rel="nofollow"><time class="structItem-latestDate u-dt" dir="auto" datetime="2020-12-06T15:24:40+0000" data-time="1607268280" data-date-string="6 Ara 2020" data-time-string="15:24" title="6 Ara 2020, Saat: 15:24">6 Ara 2020</time></a>
                                <div class="structItem-minor">
                                    <a href="#" class="username" dir="auto" itemprop="name" data-user-id="134" data-xf-init="member-tooltip" id="js-XFUniqueId4">Teknonely (APK Meydanı)</a>
                                </div>
                            </div>
                            <div class="structItem-cell structItem-cell--icon structItem-cell--iconEnd">
                                <div class="structItem-iconContainer">
                                    <a href="#" class="avatar avatar--xxs avatar--default avatar--default--dynamic" style="background-color: #ebebad; color: #b8b82e">
                                        <span class="avatar-u134-s" role="img" aria-label="Teknonely (APK Meydanı)">T</span> 
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <footer>
        <div class="container">
            <div class="footer-inner">
                <div class="footer-row">
                    <div class="footer-row-main">
                        <i class="fas fa-globe"></i> Türkçe</a>
                    </div>
                    <div class="footer-row-opposite"> 
                        <a href="#">İletişim</a>
                        <a href="#">Terms and rules</a>
                        <a href="#">Privacy policy</a>
                        <a href="#">Help</a>
                        <a href="#">Home</a>
                    </div>
                </div>
                <div class="footer-copyright">
                    <a href="#">Community platform by XenForo
                        <sup>®</sup>
                        <span class="copyright">© 2010-2021 XenForo Ltd.</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>