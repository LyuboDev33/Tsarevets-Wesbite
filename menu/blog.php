<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/headerNavbar.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/reviews.css">
  <link rel="stylesheet" href="/css/newsMainPage.css"> <!-- HERE ARE LOCATED THE STYLES FOR THIS PAGE -->
 
  <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EHQBJX452C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EHQBJX452C');
</script>

  <title>Новини</title>
</head>

<body class="newsMainPageBody">


  <header class="header">
  <nav class="navbar navbar-expand-lg navbar-light" id="neubar">
      <div class="container">
        <div style="display: flex;">

          <a class="logo" class="navbar-brand" href="/nachalna-stranica"><img class="oldImage" src="../images/по-нова_снимка-removebg-preview.png"><span class="tsarevets-name">СКП ЦАРЕВЕЦ</span></a>

        </div>
        <button id="navBtn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span id="togglerID" onclick="changeMenuIcon()" class="navbar-toggler-icon"></span>
          <i id="xToggler" onclick="changeXIcon()" class="fa-solid fa-x" style="color: #000000;"></i>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul id="menusTop" class="navbar-nav ms-auto ">

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/menu/za-kluba">ЗА КЛУБА</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/menu/ekip">ЕКИП</a>
            </li>


            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/menu/blog">НОВИНИ</a>
            </li>

            <li class="nav-item">
              <a id="one" class="nav-link mx-2 btnStyle" href="/menu/rezultati">РЕЗУЛТАТИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/menu/otzivi">ОТЗИВИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 btnStyle" href="/menu/partniori">ПАРТНЬОРИ</a>
            </li>


            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main class="mainNewsPage">

    <div class="news">

   
      <?php


      require "../databaseConnection/database.php";



      $sql = "SELECT * FROM `blog_main_page` ORDER BY ID DESC";
      $query = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($query)) {
        $uniqueId = $row['ID'];
        $content = mb_substr($row['partial_content'], 0, 85);

        echo "<a style='text-decoration: none; color: black' href='/Dashboard/vsichki-statii/statiq.php?namelink={$row['link']}'>
        <div class='boxBlog'>
            <div id='resizeNews' class='addNews' style='background: url(/Dashboard/{$row['image']}); 
            background-size: cover; background-repeat: no-repeat; 
            background-position: center;
            margin-bottom: 5%;'></div>
          <h1 class='headerNews'>{$row['title']}</h1>
          <hr class='hrLine'>
          
          <p class='style-Substring'>$content" . '...' . "</p>";


            echo "<div class='btns'>
      <Button onclick='Toggle1(this)' class='btnh1' id='$uniqueId'></Button>
      </div>
      <hr class='hrLine'>

      <div class='flexDate'>
      <div class='change'>
      <i class='fa-solid fa-eye' style='color: #3dc6ff' ></i>
      <p class='numberViews'>$row[number_views]</p>
      </div>

      <div>
      <p>$row[article_date]</p>
      </div>
      
      </div>

      </div>
        </a>";
      }


      ?>

    </div>


  </main>

  <span class="backgroundColor"><?php include "../footer.php"; ?></span>


  


  <script async>


 const menu = document.getElementById('togglerID');
    const xMenu = document.getElementById('xToggler');

    function changeMenuIcon() {
      xMenu.style.display = "block";
      menu.style.display = "none";
    }

    function changeXIcon() {
      xMenu.style.display = "none";
      menu.style.display = "block";
    }
   

  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>