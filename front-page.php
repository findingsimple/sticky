<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}

get_header(); // Loads the header.php template. ?>

		<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

		<?php get_template_part( 'breadcrumbs' ); // Loads the loop-meta.php template. ?>

		<div class="container">

			<div class="front-three">

				<div class="row">

					<div class="col-sm-4">

						<div class="panel panel-default">

							<div class="panel-heading">

								<h2 class="panel-title">Design Thinking Workshops</h2>

							</div>

							<div class="panel-body">

								<p>Public and custom design thinking courses to unleash creativity and uncover innovation.</p>

							</div>

						</div>

					</div>

					<div class="col-sm-4">

						<div class="panel panel-default">

							<div class="panel-heading">

								<h2 class="panel-title">Facilitation</h2>

							</div>

							<div class="panel-body">

								<p>Professional, engaging, outcome-focused facilitation for your next meeting or workshop.</p>

							</div>

						</div>

					</div>
				
					<div class="col-sm-4">

						<div class="panel panel-default">

							<div class="panel-heading">

								<h2 class="panel-title">Coaching & Consultancy</h2>

							</div>

							<div class="panel-body">
								
								<p>Run better conferences, events and meetings with our advice and support.</p>
								
							</div>

						</div>

					</div>

				</div><!--.row -->
				
			</div><!-- .front-three -->

		</div><!-- .container -->

<?php get_footer(); // Loads the footer.php template. ?>