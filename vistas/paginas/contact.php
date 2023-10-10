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
<!--=========== Contact Info Section Here ========= -->
<section class="contact__info pt-120 pb-120">
   <div class="container">
      <div class="row g-4">
         <div class="col-lg-4">
            <div class="info__items center">
              <div class="info__icon">
               <i class="fas fa-map-marker-alt"></i>
              </div>
               <h4>Office address</h4>
               <p>Inner Circular Rose Valley Park.</p>
           </div>
         </div>
         <div class="col-lg-4">
            <div class="info__items center">
              <div class="info__icon">
               <i class="fa-solid fa-envelope"></i>
              </div>
               <h4>Email Address</h4>
               <p>example@example.com</p>
           </div>
         </div>
         <div class="col-lg-4">
            <div class="info__items center">
              <div class="info__icon">
               <i class="fas fa-phone"></i>
              </div>
               <h4>Phone Number</h4>
               <p>+123 456 789 888</p>
           </div>
         </div>
      </div>
   </div>
</section>
<!--=========== Contact Info Section End ========= -->

<!--=========== Contact Info Section ========= -->
<section class="contact__section pt-120 pb-120">
   <div class="container">
      <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
         <h2 class="section__title">
            have any question?
         </h2>
         <img src="assets/img/tittle/flower.png" alt="flower__tittle">
      </div>
       <div class="row justify-content-center">
           <div class="col-lg-9">
              <div class="contact__right">
                 <form action="contact.php" id="contact-form" method="POST">
                    <div class="row g-4">
                       <div class="col-lg-6">
                          <div class="form__clt">
                             <input type="text" name="name" id="name" placeholder="Your Name...">
                          </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="form__clt">
                             <input type="text" name="email" id="email" placeholder=" Your Email...">
                          </div>
                       </div>
                       <div class="col-lg-12">
                          <div class="form__clt">
                             <input type="text" name="number" id="number" placeholder="Phone Number...">
                          </div>
                       </div>
                       <div class="col-lg-12">
                          <div class="form__clt__big">
                             <textarea name="message" id="message" placeholder="Message..."></textarea> 
                          </div>
                       </div>
                       <div class="col-lg-12">
                           <button type="submit" class="cmn--btn">
                               send message
                            </button>
                       </div>
                    </div>
                    <p class="form-message"></p>
                 </form>
              </div>
           </div>
        </div>
   </div>
</section>
<!--=========== Contact Info End ========= -->