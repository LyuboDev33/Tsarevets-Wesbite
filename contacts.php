<link rel="stylesheet" href="/css/CONTACTS.css">

<script async src="https://www.googletagmanager.com/gtag/js?id=G-EHQBJX452C"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-EHQBJX452C');
</script>


<section id="sectionAddress" class="section-bg" data-scroll-index="7">
  <div id="backgroundSetup" class="background">
    <div class="container">
      <div class="row">
        <div id="itemTransform" class="col-lg-6 d-flex align-items-center">
          <div class="contact-info">

            <div id="logoAndHeader" class="flexImgLocation">
              <img class="oldImg" src="../images/най-стара_снимка-removebg-preview.png" alt="older-image">
              <h2 id="anchorID" class="contact-title">Контакти</h2>
            </div>

            <ul class="contact-info">

              <li id="firstNumber">
                <div class="info-left">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="info-right">
                  <h4>Даниел Стоянов - 0878 687 555</h4>
                </div>
              </li>

              <li id="secondNumber">
                <div class="info-left">
                  <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="info-right">
                  <h4> Панайот Паздерков - 0898 579 010</h4>
                </div>
              </li>

              <li id="thirdNumber">
                <div class="info-left">
                  <i class="fas fa-at"></i>
                </div>
                <div class="info-right">
                  <h4>&nbsp skmp_carevec@abv.bg</h4>
                </div>
              </li>

              <li id="fourthNumber">
                <div class="info-left">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="info-right">
                  <h4>ул. Бяла Бона 10, гр. Велико Търново</h4>
                </div>
              </li>
            </ul>


            <p id="alignText" class="pAlign">Не успяхте да се свържете с нас по телефона? <br> <br>

              Нашият чат е на един клик разстояние от вас! <br> <br>

              Натиснете върху Messenger иконката и ни пишете. <br> <br>

              Ще се свържем с вас при първа възможност!</p>

          </div>

        </div>

        <div id="mapDiv" class="map">
          <iframe id="iframeLocation" class="locationFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.9976632541934!2d25.6005263!3d43.062516699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a9267ef2908953%3A0xf479f4e02c57e384!2sul.%20%22Byala%20Bona%22%2010%2C%205000%20g.k.%20Cholakovtsi%2C%20Veliko%20Tarnovo!5e0!3m2!1sen!2sbg!4v1696226521080!5m2!1sen!2sbg" width="600" height="450" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div id="twoImg" class="twoImages">
            <a href="http://m.me/100057188630835">
              <img alt="heartbeat" class="logoMess heartbeat" src="/images/mess-removebg-preview.png">
            </a>
            <img alt="swim-swim" class="swimmingClass" src="/images/swimmingPNGFormat-removebg-preview.png">
          </div>
          
        </div>

      </div>

    </div>

  </div>
</section>

<script async>
  if (window.innerWidth < 500) {

    let firstNumber = document.getElementById('firstNumber');
    let secondNumber = document.getElementById('secondNumber');
    let thirdNumber = document.getElementById('thirdNumber');
    let fourthNumber = document.getElementById('fourthNumber');
    let alignText = document.getElementById('alignText');



    function addAnimationOnScroll() {
      let scrollOffset = window.innerHeight - 100;
      let boundingBox = firstNumber.getBoundingClientRect();

      if (boundingBox.top - scrollOffset <= 0) {


        setTimeout(function() {
          firstNumber.style.opacity = "1";
          firstNumber.classList.add('animate__animated', 'animate__bounceInRight');
        }, 200);

        setTimeout(function() {
          secondNumber.style.opacity = "1";
          secondNumber.classList.add('animate__animated', 'animate__bounceInLeft');
        }, 400)

        setTimeout(function() {
          thirdNumber.style.opacity = "1";
          thirdNumber.classList.add('animate__animated', 'animate__bounceInRight');

        }, 600);

        setTimeout(function() {
          fourthNumber.style.opacity = "1";
          fourthNumber.classList.add('animate__animated', 'animate__bounceInLeft');
        }, 800);


        setTimeout(function() {
          alignText.style.opacity = "1";
          alignText.classList.add('animate__animated', 'animate__fadeInUp')
        }, 1000);





      }

    }


    window.addEventListener('scroll', addAnimationOnScroll);


  } else if (window.innerWidth > 500) {

    window.addEventListener('scroll', function() {
      let alignItems = document.getElementById('itemTransform');


      let rect = alignItems.getBoundingClientRect();

      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        alignItems.style.opacity = "1";
        alignItems.style.transform = "translateX(0)";

        mapDiv.style.opacity = "1";
        mapDiv.style.transform = "translateX(1%)";

      }
    });



  }




  let iframeLocation = document.getElementById('iframeLocation');
  let mapDiv = document.getElementById('mapDiv');
  let backgroundSetup = document.getElementById('backgroundSetup');

  function resizeIframe() {

    if (window.innerWidth < 768) {
      iframeLocation.style.display = "block";
      mapDiv.style.display = "flex";
      mapDiv.style.height = "240px";
      mapDiv.style.flexDirection = "column-reverse";
      mapDiv.style.alignItems = "center";
      backgroundSetup.style.height = "900px";

    } else if (window.innerWidth > 768 && window.innerWidth < 850) {
      mapDiv.style.display = "flex";
      mapDiv.style.height = "460px";
      mapDiv.style.flexDirection = "column-reverse";
      mapDiv.style.flexWrap =  "wrap";
      backgroundSetup.style.height = "1150px";
    } else if (window.innerWidth > 851 && window.innerWidth < 990) {
      backgroundSetup.style.height = "1150px";

    } else if (window.innerWidth > 991) {
      backgroundSetup.style.height = "600px";

    }
  }




  window.addEventListener("resize", resizeIframe);


  resizeIframe();
</script>