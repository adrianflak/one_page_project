<?php 
    /* Template Name: One page szablon */

?>
<?php get_header(); ?>

<div class="carousel">
		<img class="carousel-slide" onmouseover="pierwsza(this)" onmouseout="druga(this)"  src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/slide1.webp" alt="" height="600px" width="600px">
		<div class="carousel-description">
			<h2>
                <?php the_title(); ?>
            </h2>
            <p>
                <?php the_content(); ?>
            </p>
			 <button class="cta" onclick="mojaFunkcja();">Shop Now</button>
             <div id="mojeid"></div>

            <div id="mojeid1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias inventore voluptatum libero ipsam est eos magni in quod. Cumque, ipsa corrupti? Recusandae reprehenderit totam sed rem vel. Excepturi, a aperiam?
                Accusamus omnis asperiores nam, ad recusandae itaque! Molestias harum modi odio illum dolorum alias, quia quasi perspiciatis distinctio? Illum laudantium facilis libero aperiam ut labore, repudiandae tempora quae fugit dolorum!
                Fugiat id illo cum! Minus cumque error ratione molestiae laboriosam doloremque quibusdam numquam cum, animi eius! Hic earum distinctio architecto, saepe neque dolorum quas repellat consectetur blanditiis nihil nam ex.
                Minima dignissimos error voluptates maiores, fugit quae pariatur, placeat repellat fugiat deleniti optio sapiente eligendi quaerat itaque culpa aspernatur iusto, veritatis alias quo repellendus animi recusandae modi esse. Quae, nisi!
            </div>
            <div id="mojeid2"></div>
            <button onclick="obiekty();">Sprawdź wartość w polu</button>
            <div id="info"></div>
<!-- 
            <label for="">Wpisz liczbę pomiędzy 100 a 500</label>
            <input type="number" id="pole1" min="100" max="500" required> -->
            <!-- <button onclick="walidacja();">Sprawdź wartość w polu</button> -->
            <div id="info"></div>
            <!-- <button onclick="alamakota();">Wypisz koty</button> -->
            <div id="kot"></div>
		</div>
	</div>

	<div id="content" class="site-content">
		
	<div class="introduction">
		<h2>Featured Collection</h2>
		<p>A powerful headline about your product’s features to give focus to your chosen product collection</p>
	</div>
<!-- ul.block-grid>li*3>a>div>img+p+span+button.add-to-cart -->

<ul class="block-grid">
	<li class="block-grid__product-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/img1.webp" alt="">
				<p>Eternal Sunset Collection Lip and Cheek</p>
				<span class="price">$12.00</span>
				<button class="add-to-cart">Add to Cart</button>
			</div>
		</a>
	</li>
	<li class="block-grid__product-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/img2.webp" alt="">
				<p>Vinopure Pore Purifying Gel Cleanser</p>
				<span class="price">$14.00</span>
				<button class="add-to-cart">Add to Cart</button>
			</div>
		</a>
	</li>
	<li class="block-grid__product-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/img3.webp" alt="">
				<p>Deep Sweep 2% BHA Pore Cleaning Toner</p>
				<span class="price">$21.00</span>
				<button class="add-to-cart">Add to Cart</button>
			</div>
		</a>
	</li>
</ul>

<!-- ul.featured-categories>li.category-item*4>a>div>img.category-img+p.category-title -->

<ul class="featured-categories">
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/category1.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div> 
		</a>
	</li>
	
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/category2.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div>
		</a>
	</li>
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/category3.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div>
		</a>
	</li>
	<li class="category-item">
		<a href="">
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/dist/img/category4.webp" alt="" class="category-img">
				<p class="category-title">Tytuł</p>
			</div>
		</a>
	</li>
</ul>





<?php get_footer(); ?>
