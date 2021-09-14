<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/hizmetlerimiz.css">
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
    <title>Hizmetlerimiz</title>


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
             <a class="nav-link active unlink rounded" href="#">hizmetlerimiz</a>
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
            <a class="nav-link unlink rounded" href="iletisim.php">iletişim</a>
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
                    hizmetlerimiz
                  </li>
              </ol>
          </nav>
      </div>
  </div>
</div>
<!-- breadcrumb end -->

<!-- hizmetler start -->
<div class="container">
  <div class="row text-center justify-content-center">

      <div class="col-md-12">
          <img class="mb-3" src="../images/iletisim.svg" alt="Lorem, ipsum dolor.">
          <h1 class=" mb-3 fw-bold">Hizmetlerimiz</h1>
          <p class="text-start">Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak
            veya rastgele sözcükler eklenerek değiştirilmişlerdir. Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus repellat ipsum ex dolores deserunt. Laborum, vero asperiores libero neque quis necessitatibus nihil quam porro numquam.</p>
      </div>
  </div>
</div>
<!-- hizmetler end -->

<!-- hizmetlerimiz start -->
<div class="container mt-3">
  <div class="row">
    <div class="col-md-12">

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/kurumsal-danismanlik.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Kurumsal Danışmanlık</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A incidunt dolores natus sequi eos culpa.</p>
          <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/saglikli-yasam-danismanligi.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Sağlıklı Yaşam Danışmanlığı</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam distinctio expedita ex mollitia repudiandae necessitatibus!</p>
          <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/yasam-koclugu.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Yaşam Koçluğu</h5>
          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad rerum, adipisci consequatur dolor quae nisi!</p>
          <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/kilo-verme-kilo-alma-diyeti.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Kilo Verme & Kilo Alma Diyeti</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repellat consectetur voluptatibus similique rerum saepe!</p>
          <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/metabolizma-hızı-olcumu.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Kişiye Özel Diyet
          Programı</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi ipsa quibusdam autem ducimus nostrum.</p>
        <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/kurumsal-danismanlik.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Metabolizma
          Hızı Ölçümü</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam autem unde, incidunt consectetur obcaecati atque.</p>
        <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/saglikli-yasam-danismanligi.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Diyabet ve Diyet Takibi</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repellat consectetur voluptatibus similique rerum saepe!</p>
          <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/yasam-koclugu.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Çocuk ve Ergenlerde
          Kilo Kontrolü</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi ipsa quibusdam</p>
        <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/kilo-verme-kilo-alma-diyeti.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Troid Hastalarında
          Beslenme</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam autem unde, incidunt consectetur obcaecati atque.</p>
        <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/metabolizma-hızı-olcumu.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Kilo Alma Diyetleri</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repellat consectetur voluptatibus similique rerum saepe!</p>
          <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/kurumsal-danismanlik.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Çölyak Hastalığında
          Beslenme
          </h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos animi ipsa quibusdam autem ducimus nostrum.</p>
        <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/saglikli-yasam-danismanligi.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Gebelik Ve Emziklilikte
          Beslenme</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam autem unde</p>
        <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 border-0 card-shadow">
      <img src="../images/yasam-koclugu.png" class="card-img-top" alt="Lorem, ipsum dolor.">
      <div class="card-body text-center">
        <h5 class="card-title">Hastalıklarda Tıbbi
          Beslenme</h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt repellat consectetur voluptatibus similique rerum saepe!</p>
        <a href="kurumsal-danismanlik.php" class="detaycolor">detay...</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<!-- hizmetlerimiz end -->

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