<!DOCTYPE html>
<html lang="tr">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/detox.css">
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
    <title>Detox</title>


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
          <a class="nav-link unlink dropdown-toggle rounded" aria-current="page" href="#"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
              online g??r????me
          </a>
          <ul class="dropdown-menu border-0 dropdownshadow" >
            <li><a class="nav-link-dropdown dropdown-item" href="online-danismanlik.php">online dan????manl??k</a></li>
            <li ><a class="nav-link-dropdown dropdown-item" href="online-takip.php">
            online takip
            </a></li>
          </ul>
        </li>
         <li class="nav-item me-1">
           <a class="nav-link active unlink rounded" href="#">
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
                <li class="breadcrumb-item active text-dark" aria-current="page">
                    detox
                  </li>
              </ol>
          </nav>
      </div>
  </div>
</div>
<!-- breadcrumb end -->

<!-- detox hakk??nda start -->
<div class="container mt-3">
  <div class="row text-center justify-content-center">
      <div class="col-md-12">
          <img class="mb-3" src="../images/iletisim.svg" alt="Lorem, ipsum dolor.">
          <h1 class="mb-3 fw-bold">Detox</h1>
          <p class="text-start">Lorem Ipsum pasajlar??n??n bir??ok ??e??itlemesi vard??r. Ancak bunlar??n b??y??k bir ??o??unlu??u mizah kat??larak
          veya rastgele s??zc??kler eklenerek de??i??tirilmi??lerdir. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti minima aut sint minus natus eum commodi, unde molestiae a esse quas, doloribus, alias corrupti accusantium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque repellendus animi tenetur vel, magni, modi eum sed laboriosam, dolorum consequuntur molestiae accusamus nobis officiis fugit.</p>
      </div>
  </div>
</div>
<!-- detox hakk??nda end -->

<!-- detox start -->
<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item accordionbackground border-0">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button accordionbackground fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Detoks nedir?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.</p>
                <p>
                Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia'daki Hampden-Sydney College'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan 'consectetur' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan "de Finibus Bonorum et Malorum" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan "Lorem ipsum dolor sit amet" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.</p>
                <p>
                1500'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item accordionbackground mt-1 border-0">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed accordionbackground fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Detox i??ece??i / detox suyu nedir?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.
                <br>
                <br>
                Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia'daki Hampden-Sydney College'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan 'consectetur' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan "de Finibus Bonorum et Malorum" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan "Lorem ipsum dolor sit amet" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.
                <br>
                <br>
                1500'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item accordionbackground mt-1 border-0">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed accordionbackground fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Detox neden yap??l??r?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.
                <br>
                <br>
                Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia'daki Hampden-Sydney College'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan 'consectetur' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan "de Finibus Bonorum et Malorum" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan "Lorem ipsum dolor sit amet" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.
                <br>
                <br>
                1500'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.
              </p>
            </div>
          </div>
        </div>
        <div class="accordion-item accordionbackground mt-1 border-0">
          <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed accordionbackground fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
              Kimler detoks yapmal??d??r?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.
                <br>
                <br>
                Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia'daki Hampden-Sydney College'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan 'consectetur' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan "de Finibus Bonorum et Malorum" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan "Lorem ipsum dolor sit amet" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.
                <br>
                <br>
                1500'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item accordionbackground mt-1 border-0">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed accordionbackground fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Beslenmede detoks nas??l yap??l??r?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.
                <br>
                <br>
                Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia'daki Hampden-Sydney College'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan 'consectetur' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan "de Finibus Bonorum et Malorum" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan "Lorem ipsum dolor sit amet" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.
                <br>
                <br>
                1500'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.
              </p>
            </div>
          </div>
        </div>

        <div class="accordion-item accordionbackground mt-1 border-0">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed accordionbackground fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Bir g??nl??k ??rnek detoks listesi
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <p>Lorem Ipsum, dizgi ve bask?? end??strisinde kullan??lan m??g??r metinlerdir. Lorem Ipsum, ad?? bilinmeyen bir matbaac??n??n bir hurufat numune kitab?? olu??turmak ??zere bir yaz?? galerisini alarak kar????t??rd?????? 1500'lerden beri end??stri standard?? sahte metinler olarak kullan??lm????t??r. Be??y??z y??l boyunca varl??????n?? s??rd??rmekle kalmam????, ayn?? zamanda pek de??i??meden elektronik dizgiye de s????ram????t??r. 1960'larda Lorem Ipsum pasajlar?? da i??eren Letraset yapraklar??n??n yay??nlanmas?? ile ve yak??n zamanda Aldus PageMaker gibi Lorem Ipsum s??r??mleri i??eren masa??st?? yay??nc??l??k yaz??l??mlar?? ile pop??ler olmu??tur.
                <br>
                <br>
                Yayg??n inanc??n tersine, Lorem Ipsum rastgele s??zc??klerden olu??maz. K??kleri M.??. 45 tarihinden bu yana klasik Latin edebiyat??na kadar uzanan 2000 y??ll??k bir ge??mi??i vard??r. Virginia'daki Hampden-Sydney College'dan Latince profes??r?? Richard McClintock, bir Lorem Ipsum pasaj??nda ge??en ve anla????lmas?? en g???? s??zc??klerden biri olan 'consectetur' s??zc??????n??n klasik edebiyattaki ??rneklerini inceledi??inde kesin bir kayna??a ula??m????t??r. Lorm Ipsum, ??i??ero taraf??ndan M.??. 45 tarihinde kaleme al??nan "de Finibus Bonorum et Malorum" (??yi ve K??t??n??n U?? S??n??rlar??) eserinin 1.10.32 ve 1.10.33 say??l?? b??l??mlerinden gelmektedir. Bu kitap, ahlak kuram?? ??zerine bir tezdir ve R??nesans d??neminde ??ok pop??ler olmu??tur. Lorem Ipsum pasaj??n??n ilk sat??r?? olan "Lorem ipsum dolor sit amet" 1.10.32 say??l?? b??l??mdeki bir sat??rdan gelmektedir.
                <br>
                <br>
                1500'lerden beri kullan??lmakta olan standard Lorem Ipsum metinleri ilgilenenler i??in yeniden ??retilmi??tir. ??i??ero taraf??ndan yaz??lan 1.10.32 ve 1.10.33 b??l??mleri de 1914 H. Rackham ??evirisinden al??nan ??ngilizce s??r??mleri e??li??inde ??zg??n bi??iminden yeniden ??retilmi??tir.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- detox end -->


<!-- ileti??im start -->
<div class="container mt-5 mb-5">
  <div class="row text-center justify-content-center">
      <div class="col-md-12">
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