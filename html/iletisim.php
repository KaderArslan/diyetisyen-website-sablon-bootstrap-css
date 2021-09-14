<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/iletisim.css">
    <link rel="stylesheet" href="../headerfootercss/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- cookie -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.4/cookieconsent.min.css" />
    
    <!--Font Family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/solid.css" integrity="sha384-yo370P8tRI3EbMVcDU+ziwsS/s62yNv3tgdMqDSsRSILohhnOrDNl142Df8wuHA+" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" sizes="48x48" href="../favicon.ico" />
    <title>İletişim</title>


</head>
<body>
    
<!-- navbar start -->
<div class="container-fluid fixed-top" id="navbarscrolly">
  <nav class="navbar navbar-expand-lg navbar-light text-align-center">
   <div class="container navbarbg rounded">
     <a class="navbar-brand " href="../index.php"><img src="../images/mehtap-erciyes-diyetisyen-logo.svg" alt="Lorem, ipsum dolor." /></a>
     <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars py-2 px-1 text-white"></i>
     </button>
     <div class="nav-body bd-highlight collapse navbar-collapse " id="navbarNav">
       <ul class="navbar-nav text-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item me-1 dropdown">
          <a class="nav-link unlink dropdown-toggle rounded" aria-current="page" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              kurumsal
          </a>
          <ul class="dropdown-menu dropdownshadow border-0" >
            <li><a class="nav-link-dropdown dropdown-item" href="hakkimizda.php">hakkımızda</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="insan-kaynaklari.php">insan kaynakları</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="randevu-al.php">randevu al</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="sertifikalar.php">sertifikalar</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="kvkk.php">kvkk</a></li>
              <li><a class="nav-link-dropdown dropdown-item" href="aydinlatma-metni.php">aydınlatma metni</a></li>
              <li><a class="nav-link-dropdown dropdown-item" href="cerez-politikasi.php">çerez politikası</a></li>
          </ul>
        </li>
         <li class="nav-item me-1">
           <a class="nav-link unlink" href="hizmetlerimiz.php">hizmetlerimiz</a>
         </li>
         <li class="nav-item me-1">
           <a class="nav-link unlink rounded" href="andulasyon-terapi.php">andulasyon terapi</a>
         </li>
         
         <li class="nav-item dropdown me-1">
          <a class="nav-link unlink dropdown-toggle rounded" aria-current="page" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              online görüşme
          </a>
          <ul class="dropdown-menu border-0 dropdownshadow" >
            <li><a class="nav-link-dropdown dropdown-item" href="online-danismanlik.php">online danışmanlık</a></li>
            <li ><a class="nav-link-dropdown dropdown-item" href="online-takip.php">
            online takip
            </a></li>
          </ul>
        </li>
         <li class="nav-item me-1">
           <a class="nav-link unlink rounded" href="detox.php">
              detox
          </a>
         </li>
         <li class="nav-item me-1 dropdown">
          <a class="nav-link unlink dropdown-toggle rounded" aria-current="page" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              medya
          </a>
          <ul class="dropdown-menu dropdownshadow border-0" >
            <li><a class="nav-link-dropdown dropdown-item" href="basari-hikayeleri.php">başarı hikayeleri</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="blog.php">blog</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="video.php">video</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="galeri.php">galeri</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link active unlink rounded" href="#">iletişim</a>
        </li>
       </ul>
       <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link unlink pe-5 mb-2 mb-sm-0 button-nav randevuhover border-0 rounded" href="randevu-al.php">randevu al</a>
        </li>
      </ul>
      
     </div>
   </div>
 </nav>
 </div>
<!-- navbar end -->

<!-- header start -->
<? require_once "../headerfooterhtml/headerhtml.php"; ?>
<!-- header end -->

<!-- breadcrumb start -->
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item text-dark"><a href="../index.php">anasayfa</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    iletişim
                  </li>
              </ol>
          </nav>
      </div>
  </div>
</div>
<!-- breadcrumb end -->

<!-- iletişim hakkında start -->
<div class="container">
  <div class="row text-center justify-content-center">

      <div class="col-md-12">
          <img class="mb-3" src="../images/iletisim.svg" alt="Lorem, ipsum dolor.">
          <h1 class="mb-3 fw-bold">İletişim Bilgileri</h1>
          <p class="text-start">Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak
          veya rastgele sözcükler eklenerek değiştirilmişlerdir. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti minima aut sint minus natus eum commodi, unde molestiae a esse quas, doloribus, alias corrupti accusantium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque repellendus animi tenetur vel, magni, modi eum sed laboriosam, dolorum consequuntur molestiae accusamus nobis officiis fugit.</p>
      </div>

  </div>
</div>
<!-- iletişim hakkında end -->

<!-- harita start -->

<div class="container">
  <div class="row justify-content-center rounded bg-white feature-content-area m-auto px-3 py-3 mt-3 mb-3">

        <div class="col-md">
          <img class="mb-3 mt-3" src="../images/footer-mehtap-erciyes.svg" style="width:100% !important;" alt="Lorem, ipsum dolor.">
          <p class=" mb-3 mt-3 text-dark"> <i class="fas fa-map-marker-alt"></i> Köşk Mahallesi Kuruyaka Sokak Mahmuz Sit.5 Kat1/1 Melikgazi/KAYSERİ
          </p>
          <p class="mb-3 text-dark"> <i class="fas fa-phone"></i><a class="" href="tel:05000000000"> +90 500 000 00 00</a></p>
          <p class="text-dark"> <i class="fas fa-envelope"></i> kaderarslandev@gmail.com</p>
        </div>
        <div class="col-md">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203936.69601352556!2d35.14797987041446!3d36.99760691233663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f38a79c7193%3A0xd61674d8580bea06!2sAdana%2C%20Re%C5%9Fatbey%2C%20Seyhan%2FAdana!5e0!3m2!1str!2str!4v1631568118716!5m2!1str!2str" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

</div>
</div>
<!-- harita end -->

<!-- iletişim hakkında start -->
<div class="container">
  <div class="row text-center justify-content-start">
      <div class="col-md-12 mb-3 mt-3">
          <h3 class="mb-3 text-start fw-bold">İletişim Formu</h3>
          <p class="text-start">Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak
          veya rastgele sözcükler eklenerek değiştirilmişlerdir. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti minima aut sint minus natus eum commodi, unde molestiae a esse quas, doloribus, alias corrupti accusantium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque repellendus animi tenetur vel, magni, modi eum sed laboriosam, dolorum consequuntur molestiae accusamus nobis officiis fugit.</p>
      </div>
  </div>
</div>
<!-- iletişim hakkında end -->

<!-- iletişim formu start -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 ">
			<div class="rounded bg-white feature-content-area m-auto px-4 py-3">

        <div class="row">
          <img class="frontsvg" src="../images/iletisim.svg" height="40" alt="Lorem, ipsum dolor.">
          <h3 class="text-center text-dark">İletişim Formu</h3>
        </div>

				<div class="row text-center">

          <form action="" method="post">
          
                <div class="row">
                    <div class="col-md">
                        
                        <input
                        type="text" name="Ad" class="mt-3 border-0 bg-form form-control form-text validate[required]" id="Ad" 
                        placeholder="Adınız*" required  style="border-bottom: 2px solid #828282 !important;"/>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md">
                      
                        <input
                        type="text" name="Soyad" class="mt-3 border-0 bg-form form-control form-text validate[required]" id="Soyad" 
                        placeholder="Soyadınız*" required  style="border-bottom: 2px solid #828282 !important;"/>
                  </div>
                        
                </div>
                
                <div class="row">
                    <div class="col-md">
                      
                      <input type="Tel" name="Telefon" placeholder="Telefon*" maxlength="14" value="" class="mt-3 form-control form-text border-0 bg-form  validate[required,onlyNumber]" required autocomplete="off"  style="border-bottom: 2px solid #828282 !important;">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md">
                      
                        <input
                        type="email"
                        name="Email"
                        id="Email"
                        value=""
                        class="mt-3 form-control form-text border-0 bg-form validate[custom[email]]"
                        placeholder="E-mail"  style="border-bottom: 2px solid #828282 !important;"
                        />
                  </div>
                </div>
          

                <div class="row formrowmesaj ms-1" >
                    <div class="col-md-12" >
                      <div class="row">
                    
                    <textarea name="Mesaj" id="Mesaj" class="form-control form-text border-0 bg-form form-textarea" rows="3" placeholder="Mesaj*" required  style="border-bottom: 2px solid #828282 !important;"></textarea>
                    </div>
                    </div>
                </div>

                <div class="row mt-2">
                          <div class="col-md text-start">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                              
                                Kampanyalardan haberdar olmak için 
                                
                                <a id="myBtn"><span style="color:red;">elektronik ileti </span> </a> 
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                  
                                  <div class="form-text modal-body">
                                  <span class="close">&times;</span>
                                    <p><span style="color:red;">Ticari İletişim İzni hakkında bilgilendirme</span> </p>
                                    Bu izin ile birlikte, bizimle paylaşmış olduğunuz kişisel bilgilerinizin; tarafınıza çeşitli hizmet ve ürün grupları hakkında bilgi verebilmek ve bunlara ilişin olarak çeşitli avantajların sağlanıp sunulabilmesi ve size özel tanıtım, promosyon, reklam, satış, pazarlama, anket ve benzeri amaçlı her türlü elektronik iletişimin kısa mesaj (SMS), görüntülü ve sesli mesaj (MMS), elektronik posta, mektup, telefon, çağrı merkezi, otomatik arama ile whatsapp ve benzeri internet uygulamaları üzerinden elektronik iletişim aracı ile sağlanması amacıyla saklanmasına, kullanılmasına ve aynı amaçlara yönelik hizmet sağlayıcılarımızla paylaşılmasına izin vermiş bulunmaktasınız. Bu bilgiler sadece size sağlanacak hizmetlerin kusursuz sunulabilmesi, olası gönderilerinizin sağlıklı şekilde teslim edilmesi, telefon, sms ve/veya e-posta yoluyla bildirimlerimizin zamanında ulaştırılabilmesi amacıyla, sözleşme ilişkisi içinde olduğumuz, veri güvenliği konusundaki hassasiyetimizi paylaşan, ilgili mevzuat hükümlerine riayet eden 3. kişilerle, yalnızca ihtiyaç durumunda ve gerekli ölçüde paylaşılacaktır.</div>
                                </div>
                                </div>
                                
                               almak istiyorum.
                              
                            </div>
                          </div>
                          <div class="col-md-1"></div>
                          <div class="col-md text-start">
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                              
                                <a href="kvkk.php" target="_blank"><span style="color:red;">Bilgilendirme</span></a>
                                 ve 
                                 <a href="aydinlatma-metni.php" target="_blank"><span style="color:red;"> Aydınlatma Metni</span></a>'ni Okudum ve Kabul Ediyorum.
                              
                            </div>
                          </div>
                        </div>
          
                <div class="row">
                        <div class="text-center border-0 rounded">
                          
                            <input
                            id="submitted"
                                type="submit"
                                value="Gönder"
                                name="submit"
                                class="form-submit btn btn-light rounded-3 text-light border-0 formrowgonder" style="background-color:#01937C;
                                color: #fff;"
                                >
                            
                            </div>
                </div>

                <div class="form-text text-start mt-2" style="font-size: .7rem;">
                  This site is protected by reCAPTCHA and the Google <span style="color:red">Privacy Policy</span> and <span style="color:red">Terms of Service</span> apply.
                </div>

              </form>
          
				</div>
        
			</div>
    </div>
</div>
</div>
<!-- iletişim formu end -->


<!-- iletişim start -->
<div class="container mt-5 mb-5">
  <div class="row text-center justify-content-center">
      <div class="col-md-12">
          <img class="mb-3" src="../images/iletisim.svg" width="101" height="45" alt="Lorem, ipsum dolor.">
          <h3 class="mb-3 text-dark">bizimle iletişime geç</h3>
          <p class="text-start">Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak
          veya rastgele sözcükler eklenerek değiştirilmişlerdir.</p>

          <div class="row justify-content-center">
          <div class="col-md-4">
            <button class="button-whatsapp rounded mb-3"><img class="mt-1 mb-1 me-1" src="../images/whatsapp.png" height="38" width="38" alt="Lorem, ipsum dolor."><a class="text-white" href="https://wa.me/905000000000?text=Bilgi%20almakk%20istiyorum" target="_blank"> whatsapp </a></button>
          </div>
          <div class="col-md-4">
            <button class="button-whatsapp text-align-center rounded"><img class="mt-1 mb-1" src="../images/calendar.svg" height="38" width="38" alt="Lorem, ipsum dolor."><a class="text-white" href="randevu-al.php"> randevu al </a></button>
          </div>
        </div>
          
      </div>
      
  </div>

    

</div>
<!-- iletişim end -->

<!-- footer start -->
<div id="footerbg" >
  <footer class="container-fluid border-0" >
      <div class="container">
      <div class="row">
        <div class="col-md mb-3">
          <div class="row">
  
          <div class="col-md footermt">
              <div class="row mt-0 mt-sm-3">
                  <img class="" src="../images/footer-mehtap-erciyes.svg"  width="157" height="44" alt="Lorem, ipsum dolor.">
              </div>
              <div class="row text-white">
                  <p class="mt-3 text-white">Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı
                  </p>
              </div>
                  
            </div>
    
            <div class="col-md-1"></div>
            <div class="col-md footermt">
              <form action="" method="post">
                  <div class="row mt-0 mt-sm-3">
                      <h4 class="text-white">Formu doldurun sizi arayalım.</h4>
                    </div>
                      <div class="row mb-2">
  
                              <input
                              type="text" name="AdSoyad" class="border inputcolor form-control " id="AdSoyad" 
                              placeholder="Ad Soyad" required/>  
                      </div>
                      <div class="row">

                              <input type="Tel" name="Telefon" placeholder="Telefon" id="Telefon" value="" class="form-control border inputcolor  validate[required,onlyNumber]" required autocomplete="off">
                          
                      </div>
                      <div class="row mt-3">
                          <button
                              type="submit"
                              class="btn btn-light rounded text-light col-md-12 border-0 button-gonder mb-0 mb-sm-5"
                          >
                              <span>Gönder</span>
                          </button>
                      </div>
                  </form>
              </div>
  
        <div class="col-md-1"></div>
        <div class="col-md footermt">
          <p class=" mb-3 text-white mt-0 mt-sm-3"> <img src="../images/navigation.svg" alt="Lorem, ipsum dolor."> Köşk Mahallesi Kuruyaka Sokak Mahmuz Sit.5 Kat1/1 Melikgazi/KAYSERİ
          </p>
          <p class="mb-3 text-white"> <img src="../images/telephone.svg" alt="Lorem, ipsum dolor."><a class=" text-white" href="tel:05000000000"> +90 500 000 00 00</a></p>
          <p class="text-white"> <img  src="../images/mail.svg" alt="Lorem, ipsum dolor."> erciyesmehtap@gmail.com</p>
          <div class="row justify-content-start mb-5 mb-sm-0">
          <div class="sosyalbutonlarfooter">

              <a href="" target="_blank" class="facebook" ><i class="fab fa-facebook" aria-hidden="true"></i></a>
              <a href="" target="_blank" class="twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
              <a href="" target="_blank" class="instagram" ><i class="fab fa-instagram" aria-hidden="true"></i></a>
              <a href="" target="_blank" class="youtube"><i class="fab fa-youtube" aria-hidden="true"></i></a>

          </div>
          </div> 
        </div>
      </div>
       </div>
      </div>
  
  </div>
  </footer>
  </div>
  <!-- footer end -->

<!-- uyarı, copyright, mobil iletişim, script start -->
<? require_once "../headerfooterhtml/footerhtml.php"; ?>
<!-- uyarı, copyright, mobil iletişim, script end -->

<!-- copyright start -->
<div class="container mb-5 mb-sm-0">
      <div class="row justify-content-start mt-3 mt-sm-3">

        <div class="col-md-10 text-start text-dark">Copyright © 2021
          <span> KADER ARSLAN. </span>Tüm Hakları Saklıdır.
          <a href="kvkk.php"><span> • </span>KVKK</a>
          <a href="cerez-politikasi.php"><span> • </span>Çerez Politikamız</a>
          <a href="aydinlatma-metni.php"><span> • </span>Aydınlatma Metni</a>
        </div>
        <div class="col-md-2 text-center mb-4">
        <a href="https://kaderarslan.netlify.app/" target="_blank">&lt;KaderArslan&frasl;&gt;</a>
        </div>

      </div>
</div>
<!-- copyright end -->

<!-- Optional JavaScript; choose one of the two! -->
<script src="../main.js"></script>

<!-- cookie start -->
<script>
window.addEventListener("load", function() {
	window.cookieconsent.initialise({
	"palette": {
	"popup": {
	"background": "#666666"
	},
	"button": {
	"background": "#fff",
	"text": "#000000"
	}
	},
	"theme": "classic",
	"content": {
	"message": "Bu internet sitesinde, kullanıcı deneyimini geliştirmek ve internet sitesinin verimli çalışmasını sağlamak amacıyla çerezler kullanılmaktadır.",
	"dismiss": "Kabul Et",
	"link": "Ayrıntıları inceleyin",
	"href": "cerez-politikasi.php"
	}
	})
	}); 
</script>
<!-- cookie end -->
    
</body>
</html>