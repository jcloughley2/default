<?php /* Template Name: Home Page */ ?>
<?php get_header(); ?>
<section id="content" role="main">
	<div class="mission">
		<div class="mission-statement">
			<p>Utilizing advanced technologies, our team provides the highest quality Software and Systems engineering solutions to the Intelligence Community.</p>
		</div>
		<div class="call-to-action">
			<a class="button" href="#">Our Services</a>
		</div>
	</div>
	<div class="recruit">
		<div class="recruit-1">
			<h3>Join Our Team</h3>
			<p>FiveTwelve is dedicated to growing our team with talented professionals for a variety of technical positions. In addition to competitive salaries, we offer a variety of unique benefits including: Quarterly bonuses; Up to 6 weeks of PTO; 401k matching; A personal technology refresh budget.</p>
			<a class="button" href="#">Learn More</a>
			<a class="button" href="#">Apply</a>
		</div>
		<div class="recruit-2">
			<div class="circle">
				<div class="m-intro">
					<h3>4M's</h3>
					<p>Since our founding, we’ve commited to these four principles</p>
				</div>

				<div class="quadrant marketing">
					<h3>Marketing</h3>
					<p>We ensure that each member of FiveTwelve stays competitive within their industry</p>
				</div>

				<div class="quadrant meaning">
					<h3>Meaning</h3>
					<p>We ensure that each member of FiveTwelve stays competitive within their industry</p>
				</div>

				<div class="quadrant mental-health">
					<h3>Mental Health</h3>
					<p>We ensure that each member of FiveTwelve stays competitive within their industry</p>
				</div>

				<div class="quadrant money">
					<h3>Money</h3>
					<p>We ensure that each member of FiveTwelve stays competitive within their industry</p>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-container">
		<div class="slider">
			<div class="slide">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</div>
			<div class="slide">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla non metus auctor fringilla.</div>
			<div class="slide">Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit.</div>
		</div>
	</div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>