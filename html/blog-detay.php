<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/blog-detay.css">
    <link rel="stylesheet" href="../headerfootercss/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- galeri start -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://codepen.io/fancyapps/pen/Kxdwjj">
    <!-- galeri end -->

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
    <title>Blog Detay</title>


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
           <a class="nav-link unlink rounded" href="hizmetlerimiz.php">hizmetlerimiz</a>
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
          <a class="nav-link active unlink dropdown-toggle rounded" aria-current="page" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              medya
          </a>
          <ul class="dropdown-menu dropdownshadow border-0" >
            <li><a class="nav-link-dropdown dropdown-item" href="basari-hikayeleri.php">başarı hikayeleri</a></li>
            <li><a class="nav-link-dropdown active dropdown-item" href="blog.php">blog</a></li>
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
                  <li class="breadcrumb-item text-dark"><a href="javascript:void(0);">medya</a></li>
                  <li class="breadcrumb-item text-dark"><a href="blog.php">blog</a></li>
                  <li class="breadcrumb-item active text-dark" aria-current="page">
                      İradeni Güçlendirecek 5 Yol
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- blog detay start -->

<div class="container">
    <div class="row">

      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-9 text-center">
          <img class="mb-3 text-center" src="../images/iletisim.svg" alt="Lorem, ipsum dolor.">
          <h1 class="text-center fw-bold mb-3">İradeni Güçlendirecek 5 Yol</h1>
        </div>
      </div>

        <div class="col-md-3 order-2 order-sm-1">
            <div class="row">
              <div class="col-md">
                <div class=" text-start text-dark">
                  <h5 class="fw-bold">Popüler blog yazıları</h5>
                </div>
              </div>
            </div>

            <div class="card mt-3">
              <div class="imageoverlay">
                <img src="../images/sirkadiyen-ritim-ve-beslenme.jpg" class="card-img-top blog-shadow image" alt="Lorem, ipsum dolor.">
                <div class="middle">
                  <div class="text rounded">
                    <a class="text-white" href="#">incele</a>
                  </div>
                </div>
              </div>
                <div class="text-start mt-2 card-body">
                  <h5 class="fw-bold">Sirkadiyen Ritim ve Beslenme</h5>
                  <p class="">1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri...</p>
                </div>
              </div>

              <div class="card mt-3">
                <div class="imageoverlay">
                  <img src="../images/sirkadiyen-ritim-ve-beslenme.jpg" class="card-img-top blog-shadow image" alt="Lorem, ipsum dolor.">
                  <div class="middle">
                    <div class="text rounded">
                      <a class="text-white" href="#">incele</a>
                    </div>
                  </div>
                </div>
                  <div class="text-start mt-2 card-body">
                    <h5 class="fw-bold">Sirkadiyen Ritim ve Beslenme</h5>
                    <p class="">1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri...</p>
                  </div>
                </div>

                <div class="card mt-3">
                  <div class="imageoverlay">
                    <img src="../images/sirkadiyen-ritim-ve-beslenme.jpg" class="card-img-top blog-shadow image" alt="Lorem, ipsum dolor.">
                    <div class="middle">
                      <div class="text rounded">
                        <a class="text-white" href="#">incele</a>
                      </div>
                    </div>
                  </div>
                    <div class="text-start mt-2 card-body">
                      <h5 class="fw-bold">Sirkadiyen Ritim ve Beslenme</h5>
                      <p class="">1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri...</p>
                    </div>
                  </div>
        </div>

        <div class="col-md-9 order-1 order-sm-2">
            <div class="imagetext mb-3">
                <img class="rounded" src="../images/iradeni-guclendirecek-bes-yol.jpg" alt="Lorem, ipsum dolor." style="width:100%;">
                <div >
                    <h3 class="bottom-left text-white">İradeni Güçlendirecek 5 Yol</h3>
            </div>
            </div>

                <h3 class="text-dark">Nereden Gelir?</h3>
                <p>Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia'daki Hampden-Sydney College'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan 'consectetur' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan "de Finibus Bonorum et Malorum" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan "Lorem ipsum dolor sit amet" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p>
                <p>1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p>

                <h3 class="text-dark">Lorem Ipsum Nedir?</h3>
                <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</p>

                <h3 class="text-dark">Neden Kullanırız?</h3>
                <p>Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli 'buraya metin gelecek, buraya metin gelecek' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında 'lorem ipsum' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.</p>

                <h3 class="text-dark">Nereden Bulabilirim?</h3>
                <p>Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir. İnternet'teki tüm Lorem Ipsum üreteçleri önceden belirlenmiş metin bloklarını yineler. Bu da, bu üreteci İnternet üzerindeki gerçek Lorem Ipsum üreteci yapar. Bu üreteç, 200'den fazla Latince sözcük ve onlara ait cümle yapılarını içeren bir sözlük kullanır. Bu nedenle, üretilen Lorem Ipsum metinleri yinelemelerden, mizahtan ve karakteristik olmayan sözcüklerden uzaktır.</p>

                <div class="row">
                    <div class="col-md mt-3">
                      <a href="../images/blog-detay.jpg" data-fancybox="iradeni-guclendirecek-bes-yol" data-width="500" data-height="500">
                        <img src="../images/blog-detay.jpg" class="card-img-top w-100 rounded" alt="lorem ipsum lorem ipsum"/>
                      </a>
                    </div>
                    <div class="col-md mt-3">
                      <a href="../images/blog-detay-2.jpg" data-fancybox="iradeni-guclendirecek-bes-yol" data-width="500" data-height="500">
                        <img src="../images/blog-detay-2.jpg" class="card-img-top w-100 rounded" alt="lorem ipsum lorem ipsum"/>
                      </a>
                    </div>
                    <div class="col-md mt-3">
                      <a href="../images/blog-detay-3.jpg" data-fancybox="iradeni-guclendirecek-bes-yol" data-width="500" data-height="500">
                        <img src="../images/blog-detay-3.jpg" class="card-img-top w-100 rounded" alt="lorem ipsum lorem ipsum"/>
                      </a>
                    </div>
                    <div class="col-md mt-3">
                      <a href="../images/blog-detay-4.jpg" data-fancybox="iradeni-guclendirecek-bes-yol" data-width="500" data-height="500">
                        <img src="../images/blog-detay-4.jpg" class="card-img-top w-100 rounded" alt="lorem ipsum lorem ipsum"/>
                      </a>
                    </div>
                </div>

                <div class="row mt-3">
                  <div class="col-md">
                    <div class=" text-start text-dark">
                      <h5 class="fw-bold">Benzer blog yazıları</h5>
                    </div>
                  </div>
                </div>
        
                <div class="row justify-content-center mt-3">
                  <div class="col-md-4">
                      <div class="card h-100">
                        <div class="imageoverlay">
                          <img src="../images/sirkadiyen-ritim-ve-beslenme.jpg" class="card-img-top blog-shadow image" alt="Lorem, ipsum dolor.">
                          <div class="middle">
                            <div class="text rounded">
                              <a class="text-white" href="#">incele</a>
                            </div>
                          </div>
                        </div>
                          <div class="text-start mt-2 card-body">
                            <h5 class="fw-bold">Sirkadiyen Ritim ve Beslenme</h5>
                            <p class="">1500'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri...</p>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card h-100">
                      <div class="imageoverlay">
                        <img src="../images/yaslanmadan-yas-almanin-formulleri.jpg" class="card-img-top blog-shadow image" alt="Lorem, ipsum dolor.">
                        <div class="middle">
                          <div class="text rounded">
                            <a class="text-white" href="#">incele</a>
                          </div>
                        </div>
                      </div>
                        <div class="text-start mt-2 card-body">
                          <h5 class="fw-bold">Yaşlanmadan Yaş Almanın Formülleri</h5>
                          <p class="">Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz...</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                  <div class="card h-100">
                    <div class="imageoverlay">
                      <img src="../images/cevresel-toksinlerden-korun.jpg" class="card-img-top blog-shadow image" alt="Lorem, ipsum dolor.">
                      <div class="middle">
                        <div class="text rounded">
                          <a class="text-white" href="#">incele</a>
                        </div>
                      </div>
                    </div>
                      <div class="text-start mt-2 card-body">
                        <h5 class="fw-bold">Çevresel Toksinlerden Korun</h5>
                        <p class="">Lorem Ipsum pasajlarının birçok çeşitlemesi vardır... </p>
                      </div>
                    </div>
              </div>
              </div>

              <div class="row mt-3">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    
                    <li class="page-item">
                      <a class="page-link border-0 rounded-circle" href="#" aria-label="Previous" style="background-color: #006C53;">
                        <img class="" src="../images/onceki.svg" alt="Lorem, ipsum dolor." >
                      </a>
                    </li>
                    
                    <li class="page-item ms-2"><a class="page-link border-0 prevnext rounded" href="#">önceki yazı</a></li>
                    
                    <li class="page-item me-2"><a class="page-link border-0 prevnext rounded" href="#">sonraki yazı</a></li>
                    
                    <li class="page-item">
                      <a class="page-link border-0 rounded-circle" href="#" aria-label="Next" style="background-color: #006C53;">
                        <img class="" src="../images/sonraki.svg" alt="Lorem, ipsum dolor." >
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>

        </div>
    </div>
</div>
<!-- blog detay end -->

<!-- iletişim start -->
<div class="container mt-5 mb-5">
  <div class="row text-center justify-content-center">
    <div class="col-md-3"></div>
      <div class="col-md-9">
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

<!-- galeri -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

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