
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package first-wp-theme
 */

get_header();
?>
	<div style="background-image: url(<?php echo wp_get_attachment_image_src( 21, 'full', false )[0]  ?>)" class="header row">
		<div class="header-nav-text container">
			<div class="header-text text-center text-md-left">
				<h1>Otpresci za stolice</h1>
				<hr class="hr mx-auto m-md-0">
				<p>Nudimo kvalitetan i raznovrsan<br> asortiman poluproizvoda za izradu stolica,<br> sedišta, rukonaslone, školjke, itd.</p>
				<button type="button" class="btn btn-outline-dark">Proizvodi</button>
			</div>
		</div>
	</div>
	<div id="primary" class="content-area">
		<div class="aboutUs">
			<div class="aboutUs-content content">
				<h1 class="content-header">About us</h1>
				<hr class="content-hr">
				<div class="aboutUs-info row">
					<div class="col-lg-6 col-xl-3">
						<h1 class="content-text-header text-center text-lg-left">Our Company</h1>
						<br>
						<p class="content-paragraph">Established in 2001, ZVEMIL is a family company, base in western part of Serbia, in a small but beautiful town near border with Bosnia. Since 2002 it has been producing quality plywood seating compnents from bech veneer for the contract seating industry. Numerous schools, cinema and theater halls, hotels and restaurants across Serbia and region are equiped with seatings that include our chair components.</p>
					</div>
					<div class="col-lg-6 col-xl-3">
						<h1 class="content-text-header text-center text-lg-left">Our Mission</h1>
						<br>
						<p class="content-paragraph">Our mission is to stay quality and reliable producer of curved plywood seatings and furniture components, continually raising our technical and technology level of production in order to meet the expectations of out clients.<br><br>"Help you to get best product you require"</p>
					</div>
					<div class="col-lg-6 col-xl-3">
						<h1 class="content-text-header text-center text-lg-left">Our Values</h1>
						<br>
						<p class="content-paragraph">Hard work, dedication, focus and a strong commitment, focus and a strong commitment to respecting deadlines, make ZVEMIL has almost a 20-year history of manufacturing quality molded plywood products, and i trusted partner in the production for our clients in seating industry.</p>
					</div>
					<div class="col-lg-6 col-xl-3">
						<h1 class="content-text-header text-center text-lg-left">Our Goals</h1>
						<br>
						<p class="content-paragraph">As an environmentally conscious company ZVEMIL strives to meet the following goals: <br>
						<br>-Minimize waste by evaluating operations and ensuring they are as efficient as possible,<br>
						-Recycling wood and metal waste,<br>
						-Minimize harmful emissions from our adhesives by using the lowest emission resins available on the market.
						</p>
					</div>
				</div>
				<div class="aboutUs-images row mx-auto">
					<?php echo do_shortcode( '[foogallery id="29"]' ) ?>
					
					<!-- <a href="<?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?>" class="foobox" rel="gallery"><?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?><img src="<?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?>" alt=""></a>
					<a href="<?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?>" class="foobox" rel="gallery"><?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?><img src="<?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?>" alt=""></a>
					<a href="<?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?>" class="foobox" rel="gallery"><?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?><img src="<?php echo wp_get_attachment_image_src( 17, 'full', false )[0]  ?>" alt=""></a> -->
					<!-- <div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
					<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
					<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div> -->
				</div>
			</div>
		</div>
		<div id="production" class="middle-grey row">
			<div class="content content-middle-grey">
				<h1 class="content-header">Production</h1>
				<hr class="content-hr">
				<p class="content-paragraph">We design and build our pressing tools-in house and optimize them to the client's specific requirements.</p>
				<p class="content-paragraph">This allows us to maintain the highest quality of the product.</p>
				<p class="content-paragraph">We also offer our clients several dozens of molds to chose from stock that can help the save time and money</p>
			</div>
		</div>
		<div class="production-info content">
			<div class="production-info-images row mx-auto">
				<?php echo do_shortcode( '[foogallery id="29"]' ) ?>
				<!-- <div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
				<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
				<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div> -->
			</div>
			<div class="production-info-text">
				<h1 class="content-text-header">CNC Woodworking</h1>
				<p class="content-paragraph">Once the molded plywood panels are pressed we machine them on Bacci 5-axis CNC machining-centre. This sophisticated computer controlled router allow us to produce variety of consistenly uniform and concise upholstery and expsosed grade components</p>
			</div>

			<div class="production-info-images row mx-auto">
				<?php echo do_shortcode( '[foogallery id="29"]' ) ?>
				<!-- <div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
				<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
				<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div> -->
			</div>
			<div class="production-info-text">
				<h1 class="content-text-header">Design Services</h1>
				<p class="content-paragraph">Apart from the already available products and designs, we can develop and supply any product with design and specification that the customer is looking for (but with a minimum order guaranteed).
				</p>
				<p class="content-paragraph">We can offer technology and knowledge to help the client design and manufacture prototype. Once the client is satisfied with the prototype, we use a Microscribe arm to create a precise 3D digital model and finally transfer the design to our CNC machine.</p>
			</div>

			<div class="production-info-images row mx-auto">
				<?php echo do_shortcode( '[foogallery id="29"]' ) ?>	
				<!-- <div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
				<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div>
				<div class="col-md-4"><img class="images-three img-fluid" src="images/placeholder.gif" alt="placeholder"></div> -->
			</div>
			<div class="production-info-text production-info-bottom">
				<h1 class="content-text-header">Production capacity & Quality</h1>
				<p class="content-paragraph">&middot; Our production capacity is about 60.000 pieces/year, which includes 50s of models of bent plywood seatings, backrests, armrest and etc.</p>
				<p class="content-paragraph">&middot; Plywood thickness range is 4.5-40mm in form, quality and finishing scale requested by the client.</p>
			</div>
		</div>
		<div id="products" class="middle-grey row">
			<div class="content content-middle-grey">
				<h1 class="content-header">Products</h1>
				<hr class="content-hr">
				<p class="content-paragraph">Our products seat shells, backrests, armrests, differnet kind of seats and left for chairs and other furniture components.</p>
			</div>
		</div>
		<div class="products-info content">
			<div class="products-info-images row mx-auto">
				<!-- <?php echo do_shortcode( '[foogallery id="30"]' ) ?> -->
				<div class="col-md-6 col-lg-3">
					<img class="img-fluid" src="<?php echo wp_get_attachment_image_src( 18, 'full', false )[0]  ?>" alt="">
					<!-- <img class="img-fluid" src="images/stolica.jpg" alt="stolica"> -->
					<h1 class="content-text-header">Nasloni za stolice</h1>

					<p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo excepturi sit nihil, facere molestiae explicabo quis optio in! Tempore architecto hic quas soluta, id saepe odio nemo iusto voluptate.</p>
				</div>
				<div class="col-md-6 col-lg-3">
				<img class="img-fluid" src="<?php echo wp_get_attachment_image_src( 18, 'full', false )[0]  ?>" alt="">
					<!-- <img class="img-fluid" src="images/stolica.jpg" alt="stolica"> -->
					<h1 class="content-text-header">Školjke stolica</h1>
					
					<p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo excepturi sit nihil, facere molestiae explicabo quis optio in! Tempore architecto hic quas soluta, id saepe odio nemo iusto voluptate.</p></div>
				<div class="col-md-6 col-lg-3">
					<img class="img-fluid" src="<?php echo wp_get_attachment_image_src( 18, 'full', false )[0]  ?>" alt="">
					<!-- <img class="img-fluid" src="images/stolica.jpg" alt="stolica"> -->
					<h1 class="content-text-header">Rukonasloni za stolice</h1>
					
					<p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo excepturi sit nihil, facere molestiae explicabo quis optio in! Tempore architecto hic quas soluta, id saepe odio nemo iusto voluptate.</p>
				</div>
				<div class="col-md-6 col-lg-3">
					<img class="img-fluid" src="<?php echo wp_get_attachment_image_src( 18, 'full', false )[0]  ?>" alt="">
					<!-- <img class="img-fluid" src="images/stolica.jpg" alt="stolica"> -->
					<h1 class="content-text-header">Sedišta za stolice</h1>
					
					<p class="content-paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet illo excepturi sit nihil, facere molestiae explicabo quis optio in! Tempore architecto hic quas soluta, id saepe odio nemo iusto voluptate.</p>
				</div>
				<div class="moto mx-auto">
					<h1 class="content-text-header">Moto</h1>
					<p class="content-paragraph">"With our hard work and knowledge we can firmly support the design of your chairs"</p>
				</div>
			</div>
		</div>
		<div id="contact" class="contact-info middle-grey row">
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
	</div><!-- #primary -->

<?php 
get_footer();
