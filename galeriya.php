<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&ampdisplay=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="icon" type="image/x-icon" href="/images/по-нова_снимка-removebg-preview.png">
  
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-EHQBJX452C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EHQBJX452C');
</script>
  <link rel="stylesheet" href="/css/galerry.css">
  <title>Галерия</title>
</head>

<body class="bodyGalerry">


  <?php require "./headerInclude.php"; ?>
  
  
  <div class="flexGal">





    <?php require "./databaseConnection/database.php";

  $arrayFiles = ["purvi-period", "vtori-period", "treti-period", "chetvurti-period"];

  $i = 0;

    $sql = "SELECT * FROM galerry";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {

    

      echo "<a style='text-decoration: none; ' href='./galeriya/$arrayFiles[$i]'>

            <div id='containG' class='containerGallery'>
                <p class='header-year'>$row[year_gallery]</p>
              <div style='background: url(/images/$row[main_image]); background-size: cover;' id='tog' class='toggleButton'></div>
              
              <div>

              <div id='myDiv' class='divImg animate__animated animate__fadeIn'>
              <input type='hidden' name='valueHidden' value='$row[ID]'>
            </div>
            </div>
          </div>
          </a>";

          $i++;
          
        }

     
    
   
    ?>


  </div>

  <?php require "./footer.php"; ?>



  <script async>

    let containG = document.querySelectorAll('.containerGallery');
    
    let numb = 0;
    
    for(let i = 0; i < containG.length; i++){

      numb += 150;

  setTimeout (function () {

      containG[i].classList.add('animate__animated', 'animate__fadeIn');

  }, 200 + numb);

}





  </script>

</body>

</html>