<?php 

if (!isset($_SESSION["validarIngreso"])) {
   echo '<script>window.location="index.php?pagina=ingreso";</script>';  
   return;
 } else {
     if ($_SESSION["validarIngreso"] != "ok") {
         echo '<script>window.location="index.php?pagina=ingreso";</script>';  
         return;
     }
 }

?>
<!--=========== About Section Here ========= -->
<section class="about__section style__two pt-120 pb-120">
   <div class="right__shape wow fadeInUp" data-wow-duration="4s">
      <img src="assets/img/testi/shape-right.png" alt="left__shape">
   </div>
   <div class="container">
      <div class="row g-4 align-items-center">
         <div class="col-lg-6 wow fadeInDown" data-wow-duration="3s">
            <div class="left__thumb">
               <img src="assets/img/about/about.png" alt="about-image">
            </div>
         </div>
         <div class="col-lg-6 wow fadeInUp" data-wow-duration="4s">
            <div class="right__content">
               <h3 class="about__tittle mb-2">
                  We will organize your wedding anytime
               </h3>
               <p>
                  The purpose of invitation should be clear. The name of the honoree must be mentioned. The event date and time must be written in letters, do not use abbreviations. Venue Name and Venue's Full Address are important.Write the date of your party, including the date and day of the week. Your invitation also needs to tell your guests what time to arrive and approximate or definite.
               </p>
               <p class="p__cont mt-3">
                  Few classic color options remain a top choice for brides across the decades as blue. In addition to this color being what some call a good luck charm for the day, it's also a color that symbolized royalty. In addition to this color being what some call a good luck charm for the day, it's also a color that symbolized royalty.
               </p>
               <a href="#0" class="cmn--btn mt-4">
                  read more
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========== About Section End ========= -->

