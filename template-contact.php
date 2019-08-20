<?php
/*Template Name: Contact*/
get_header();?>
<?php echo do_shortcode( '[wpforms id="109"]' ) ?>
<div class="contact-info middle-grey row">
  <div class="col-12 col-lg-2"></div>
  <div class="content contact-info-text col-12 col-lg-4">
    <h1 class="content-header text-center text-lg-left">Zvemil d.o.o</h1>
    <hr class="content-hr mx-auto m-lg-0">
    <p class="content-paragraph text-center text-lg-left phone-margin"><i class="fas fa-phone-alt"></i>  031 861551</p>
    <p class="content-paragraph text-center text-lg-left"><i class="fas fa-mobile-alt"></i>  064 8267313</p>
    <p class="content-paragraph text-center text-lg-left"><i class="fas fa-map-marker-alt"></i>  Dragoljuba Bešlića, Bajina Bašta 31250, Srbija</p>
    <p class="content-paragraph text-center text-lg-left"><i class="fas fa-clock"></i>  Pon - Pet: <strong>06:00 - 14:00</strong></p>
    <p class="content-paragraph text-center text-lg-left">Sub - Ned: <strong>Ne radi</strong></p>
  </div>
  <div class="contact-info-image col-12 col-lg-6">
    <img class="img-fluid" src="<?php echo wp_get_attachment_image_src( 20, 'full', false )[0]  ?>" alt="">
    <!-- <img class="img-fluid" src="images/mapa.PNG" alt="mapa">             -->
  </div>
</div>
<?php
get_footer();
?>