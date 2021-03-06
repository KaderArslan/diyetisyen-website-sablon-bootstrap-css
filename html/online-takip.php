<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/online-takip.css">
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
    <title>Online Takip</title>


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
            <li><a class="nav-link-dropdown dropdown-item" href="hakkimizda.php">hakk??m??zda</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="insan-kaynaklari.php">insan kaynaklar??</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="randevu-al.php">randevu al</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="sertifikalar.php">sertifikalar</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="kvkk.php">kvkk</a></li>
              <li><a class="nav-link-dropdown dropdown-item" href="aydinlatma-metni.php">ayd??nlatma metni</a></li>
              <li><a class="nav-link-dropdown dropdown-item" href="cerez-politikasi.php">??erez politikas??</a></li>
          </ul>
        </li>
         <li class="nav-item me-1">
           <a class="nav-link unlink rounded" href="hizmetlerimiz.php">hizmetlerimiz</a>
         </li>
         <li class="nav-item me-1">
           <a class="nav-link unlink rounded" href="andulasyon-terapi.php">andulasyon terapi</a>
         </li>
         
         <li class="nav-item dropdown me-1">
          <a class="nav-link active unlink dropdown-toggle rounded" aria-current="page" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              online g??r????me
          </a>
          <ul class="dropdown-menu border-0 dropdownshadow" >
            <li><a class="nav-link-dropdown dropdown-item" href="online-danismanlik.php">online dan????manl??k</a></li>
            <li ><a class="nav-link-dropdown active dropdown-item" href="#">
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
            <li><a class="nav-link-dropdown dropdown-item" href="basari-hikayeleri.php">ba??ar?? hikayeleri</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="blog.php">blog</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="video.php">video</a></li>
            <li><a class="nav-link-dropdown dropdown-item" href="galeri.php">galeri</a></li>
          </ul>
        </li>
         <li class="nav-item">
          <a class="nav-link unlink rounded" href="iletisim.php">ileti??im</a>
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
                <li class="breadcrumb-item text-dark"><a href="javascript:void(0);">online g??r????me</a></li>
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    online takip
                  </li>
              </ol>
          </nav>
      </div>
  </div>
</div>
<!-- breadcrumb end -->

<!-- online takip hakk??nda start -->
<div class="container mt-3">
  <div class="row justify-content-center">

  <div class="row order-2 order-sm-1">

      <div class="col-md-3"></div>
      <div class="col-md-9 text-center mt-3 mt-sm-0">
        <img class="mb-3 text-center" src="../images/iletisim.svg" alt="Lorem, ipsum dolor.">
        <h1 class="text-center fw-bold mb-3">Online Takip</h1>
      </div>
      </div>

      <div class="col-md-3 order-1 order-sm-2">
      <ul class="list-group border">
        <li class="list-group-item">
            <a class="text-dark" href="online-danismanlik.php"><i class="fas fa-angle-right"></i> online danismanlik</a>
        </li>
        <li class="list-group-item active">
            <a class="text-white" href="#"><i class="fas fa-angle-right"></i> online takip</a></li>
      </ul>
      </div>

      <div class="col-md-9 text-center order-3 order-sm-3">
      <p class="text-start">Lorem Ipsum pasajlar??n??n bir??ok ??e??itlemesi vard??r. Ancak bunlar??n b??y??k bir ??o??unlu??u mizah kat??larak veya rastgele s??zc??kler eklenerek de??i??tirilmi??lerdir. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore non ab quae expedita est commodi? Placeat aspernatur corporis sint incidunt illum officia voluptates amet aut voluptatum sit hic cumque eum, distinctio dolor velit ipsam atque. Numquam tempore quod expedita magnam!</p>

      <div class="row">
      <span class="fw-bold text-dark text-start mb-3">Bu Hizmeti Nas??l Alabilirim?</span>

      <div class="col-md-3 col-sm-12 mb-3 mb-sm-3">
    <div class="card h-100 border-0">
      <div class="card-body text-start">
        <h5 class="card-title text-white">1 - Formu Doldurun</h5>
        <p class="card-text text-white">Sizinle ileti??ime ge??ebilmek i??in uygun oldu??unuz tarih ve saati se??erek formu doldurun.</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-12 mb-3 mb-sm-3">
    <div class="card h-100 border-0">
      <div class="card-body text-start">
        <h5 class="card-title text-white">2 - Sizi Arayal??m</h5>
        <p class="card-text text-white">Online G??r????me teyidi ve konut projesi beklentileriniz i??in sizinle bir ??n g??r????me yap??yoruz.</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-12 mb-3 mb-sm-3">
    <div class="card h-100 border-0">
      <div class="card-body text-start">
        <h5 class="card-title text-white">3 - Online G??r????me</h5>
        <p class="card-text text-white">Sunum g??n?? ve saati geldi??inde, sizlere ??zel haz??rlad??????m??z konut projelerimizin sunumlar?? ??zerinde anlat??m yaparak sizlere sat??l??k ev al??m?? karar a??amas??nda zaman kazand??r??yoruz.</p>
      </div>
    </div>
  </div>
  <div class="col-md-3 col-sm-12 mb-0 mb-sm-3">
    <div class="card h-100 border-0">
      <div class="card-body text-start">
        <h5 class="card-title text-white">4 - Sonu??</h5>
        <p class="card-text text-white">Online G??r????me konferans?? esnas??nda veya sonucunda, Kayseri Kocasinan, Erkilet ve Yakut Mahallesi???ndeki konut projelerimizi g??rmek ve sat??l??k konutlar??m??zdan ev sahibi olabilme f??rsat??n?? ka????rmamak i??in randevu</p>
      </div>
    </div>
  </div>


        <!-- randevu al start -->
      <h3 class="text-center mt-3 fw-bold">online g??r????me</h3>
      <form action="" method="post">
      
      <div class="row">
                    <div class="col-md">
                    
                    <input type="date" class="mt-3 form-control textrandevu border-0 validate[required]" name="tarih" id="tarih" required style="border-bottom: 2px solid #828282 !important;">
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md" >
                    <select name="saat" id="saat" class="mt-3 form-select textrandevu border-0 validate[required]"  required style="border-bottom: 2px solid #828282 !important;">
                      <option value="">Saat Se??iniz*</option>
                      <option value="09">09:00</option>
                      <option value="10">10:00</option>
                      <option value="11">11:00</option>
                      <option value="12">12:00</option>
                      <option value="13">13:00</option>
                      <option value="14">14:00</option>
                      <option value="15">15:00</option>
                      <option value="16">16:00</option>
                      <option value="17">17:00</option>
                      <option value="18">18:00</option>
                      <option value="19">19:00</option>
                    </select>
                    </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-md" >
                          
                          <input
                          type="text" name="Ad" class="mt-3 border-0 bg-form form-control form-text validate[required]" id="Ad"
                          placeholder="Ad??n??z*" required style="border-bottom: 2px solid #828282 !important;"/>
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md" >
                        
                          <input
                          type="text" name="Soyad" class="mt-3 border-0 bg-form form-control form-text validate[required]" id="Soyad"  
                          placeholder="Soyad??n??z*" required style="border-bottom: 2px solid #828282 !important;"/>
                    </div>
                          
                  </div>
                  
                  <div class="row">
                      <div class="col-md">
                        
                        <input type="Tel" name="Telefon" placeholder="Telefon*" maxlength="14" value="" class="mt-3 form-control form-text border-0 bg-form  validate[required,onlyNumber]" required autocomplete="off" style="border-bottom: 2px solid #828282 !important;">
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md">
                      
                              <input
                              type="email"
                              name="Email"
                              id="Email"
                              value=""
                              class="mt-3 form-control form-text border-0 bg-form validate[custom[email]]"
                              placeholder="E-mail*" required style="border-bottom: 2px solid #828282 !important;"
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
                              
                                Kampanyalardan haberdar olmak i??in 
                                
                                <a id="myBtn"><span style="color:red;">elektronik ileti </span> </a> 
                                <!-- The Modal -->
                                <div id="myModal" class="modal">
                                <!-- Modal content -->
                                <div class="modal-content">
                                  
                                  <div class="form-text modal-body">
                                  <span class="close">&times;</span>
                                    <p><span style="color:red;">Ticari ??leti??im ??zni hakk??nda bilgilendirme</span> </p>
                                    Bu izin ile birlikte, bizimle payla??m???? oldu??unuz ki??isel bilgilerinizin; taraf??n??za ??e??itli hizmet ve ??r??n gruplar?? hakk??nda bilgi verebilmek ve bunlara ili??in olarak ??e??itli avantajlar??n sa??lan??p sunulabilmesi ve size ??zel tan??t??m, promosyon, reklam, sat????, pazarlama, anket ve benzeri ama??l?? her t??rl?? elektronik ileti??imin k??sa mesaj (SMS), g??r??nt??l?? ve sesli mesaj (MMS), elektronik posta, mektup, telefon, ??a??r?? merkezi, otomatik arama ile whatsapp ve benzeri internet uygulamalar?? ??zerinden elektronik ileti??im arac?? ile sa??lanmas?? amac??yla saklanmas??na, kullan??lmas??na ve ayn?? ama??lara y??nelik hizmet sa??lay??c??lar??m??zla payla????lmas??na izin vermi?? bulunmaktas??n??z. Bu bilgiler sadece size sa??lanacak hizmetlerin kusursuz sunulabilmesi, olas?? g??nderilerinizin sa??l??kl?? ??ekilde teslim edilmesi, telefon, sms ve/veya e-posta yoluyla bildirimlerimizin zaman??nda ula??t??r??labilmesi amac??yla, s??zle??me ili??kisi i??inde oldu??umuz, veri g??venli??i konusundaki hassasiyetimizi payla??an, ilgili mevzuat h??k??mlerine riayet eden 3. ki??ilerle, yaln??zca ihtiya?? durumunda ve gerekli ??l????de payla????lacakt??r.</div>
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
                                 <a href="aydinlatma-metni.php" target="_blank"><span style="color:red;"> Ayd??nlatma Metni</span></a>'ni Okudum ve Kabul Ediyorum.
                              
                            </div>
                          </div>
                        </div>
    
                  <div class="row mt-2">
                    <div class="col-md rounded">
                          <div class="text-center border-0">
                            
                              <input
                              id="submitted"
                                  type="submit"
                                  value="G??nder"
                                  name="submit"
                                  class="form-submit btn btn-light rounded-3 text-light border-0 formrowgonder" style="background-color:#01937C;
                                  color: #fff;
                                  "
                                  >
                              
                              </div>
                            </div>
                            
                      </div>

                      <div class="form-text text-start mt-2" style="font-size: .7rem;">
                        This site is protected by reCAPTCHA and the Google <span style="color:red">Privacy Policy</span> and <span style="color:red">Terms of Service</span> apply.
                      </div>

                    
                </form>
      <!-- randevu al end -->

  </div>
</div>

</div>

</div>
<!-- online takip hakk??nda end -->

<!-- ileti??im start -->
<div class="container mt-5 mb-5">
  <div class="row text-center justify-content-center">
    <div class="col-md-3"></div>
      <div class="col-md-9">
          <img class="mb-3" src="../images/iletisim.svg" width="101" height="45" alt="Lorem, ipsum dolor.">
          <h3 class="mb-3 text-dark">bizimle ileti??ime ge??</h3>
          <p class="text-start">Lorem Ipsum pasajlar??n??n bir??ok ??e??itlemesi vard??r. Ancak bunlar??n b??y??k bir ??o??unlu??u mizah kat??larak
          veya rastgele s??zc??kler eklenerek de??i??tirilmi??lerdir.</p>

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
<!-- ileti??im end -->

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
                  <p class="mt-3 text-white">Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz??
                  </p>
              </div>
                  
            </div>
    
            <div class="col-md-1"></div>
            <div class="col-md footermt">
              <form action="" method="post">
                  <div class="row mt-0 mt-sm-3">
                      <h4 class="text-white">Formu doldurun sizi arayal??m.</h4>
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
                              <span>G??nder</span>
                          </button>
                      </div>
                  </form>
              </div>
  
        <div class="col-md-1"></div>
        <div class="col-md footermt">
          <p class=" mb-3 text-white mt-0 mt-sm-3"> <img src="../images/navigation.svg" alt="Lorem, ipsum dolor."> K????k Mahallesi Kuruyaka Sokak Mahmuz Sit.5 Kat1/1 Melikgazi/KAYSER??
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

<!-- uyar??, copyright, mobil ileti??im, script start -->
<? require_once "../headerfooterhtml/footerhtml.php"; ?>
<!-- uyar??, copyright, mobil ileti??im, script end -->

<!-- copyright start -->
<div class="container mb-5 mb-sm-0">
      <div class="row justify-content-start mt-3 mt-sm-3">

        <div class="col-md-10 text-start text-dark">Copyright ?? 2021
          <span> KADER ARSLAN. </span>T??m Haklar?? Sakl??d??r.
          <a href="kvkk.php"><span> ??? </span>KVKK</a>
          <a href="cerez-politikasi.php"><span> ??? </span>??erez Politikam??z</a>
          <a href="aydinlatma-metni.php"><span> ??? </span>Ayd??nlatma Metni</a>
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
	"message": "Bu internet sitesinde, kullan??c?? deneyimini geli??tirmek ve internet sitesinin verimli ??al????mas??n?? sa??lamak amac??yla ??erezler kullan??lmaktad??r.",
	"dismiss": "Kabul Et",
	"link": "Ayr??nt??lar?? inceleyin",
	"href": "cerez-politikasi.php"
	}
	})
	}); 
</script>
<!-- cookie end -->

</body>
</html>