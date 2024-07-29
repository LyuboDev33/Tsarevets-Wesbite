<!DOCTYPE html>
<html id="reviews" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/unicons.css">
  
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EHQBJX452C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EHQBJX452C');
</script>

  <link rel="stylesheet" href=".././css/headerNavbar.css">
  <link rel="stylesheet" href=".././css/style.css">
  <link rel="stylesheet" href=".././css/reviews.css">

  <title>Мнения</title>
</head>

<body class='body-reviews'>


  <header class="header">

    <nav class="navbar navbar-expand-lg navbar-light" id="neubar">
      <div class="container" id="containerReviews">
        <div style="display: flex;">
          <a class="logo" class="navbar-brand" href="/nachalna-stranica"><img class="oldImage" src="../images/по-нова_снимка-removebg-preview.png"><span class="tsarevets-name">СКП ЦАРЕВЕЦ</span></a>

        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon" id="menuReviews" onclick="m()"></span>
          <i class="fa-solid fa-x" id="xReviews" onclick="x()" style="color: #000000; border: none;"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul id="menusTop" class="navbar-nav ms-auto ">

            <li class="nav-item">
              <a id="firstLink" class="nav-link mx-2 btnStyle" href="/menu/za-kluba">ЗА КЛУБА</a>
            </li>

            <li class="nav-item">
              <a id="secondLink" class="nav-link mx-2 btnStyle" href="/menu/ekip">ЕКИП</a>
            </li>

            <li class="nav-item">
              <a id="thirdLink" class="nav-link mx-2 btnStyle" href="/menu/blog">НОВИНИ</a>
            </li>

            <li class="nav-item">
              <a id="fourthLink" class="nav-link mx-2 btnStyle" href="/menu/rezultati">РЕЗУЛТАТИ</a>
            </li>

            <li class="nav-item">
              <a id="fifthLink" class="nav-link mx-2 btnStyle" href="/menu/otzivi">ОТЗИВИ</a>
            </li>

            <li class="nav-item">
              <a id="sixthLink" class="nav-link mx-2 btnStyle" href="/menu/partniori">ПАРТНЬОРИ</a>
            </li>

            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>




  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          </button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button onclick="closeModal()" id="closeModal" type="button" class="btn btn-primary close-modal">Затвори</button>
        </div>
      </div>
    </div>
  </div>

  <?php include "./contactUs.php"; ?>

  <div class="cleintsReviews">
    МНЕНИЯ НА КЛИЕНТИ
  </div>

  <div class="wrapper">
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Страхотни професионалисти и винаги насреща за разговор и решаване на проблеми от всякакво естество! За треньорите мога да кажа само  хубави неща-коректни, отговорни и винаги готови да отделят от личното си време.
      </p>
      <div class="content">
        <div class="info">
          <div class="name">Полина Тотева</div>
          <div class="job"></div>
          <div class="stars">
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
          </div>
        </div>

      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p>Запознах се с Дидо покрай футбола. Реших да пробвам плуване при него и горещо препоръчвам на всеки да го направи.
        Чувствам се много добре и сънят ми доста се подобри.
      </p>
      <div class="content">
        <div class="info">
          <div class="name">Любомир Стоянов</div>
          <div class="job">Програмист</div>
          <div class="stars">
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="box">
      <i class="fas fa-quote-left  quote"></i>
      <p>Топ клуб, в който децата ви освен, че ще се научат да плуват ще придобият и други важни за израстването неща, като уважение, упоритост, самочувствие и не на последно място ще са здрави. Препоръчвам!
      </p>
      <div class="content">
        <div class="info">
          <div class="name">Милен Илиев</div>
          <div class="job"></div>
          <div class="stars">
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
          </div>
        </div>
      </div>
    </div>
  </div>







  <?php include "../footer.php" ?>




  <script async>
    function closeModal() {
      let modal = document.getElementById('exampleModal');
      modal.style.display = 'none';
    }



    const menu = document.getElementById('menuReviews');
    const xMenu = document.getElementById('xReviews');


    function m() {
      xMenu.style.display = "block";
      menu.style.display = "none";


    }

    function x() {
      xMenu.style.display = "none";
      menu.style.display = "block";

    }
  </script>



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>