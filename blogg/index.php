<?php require_once( 'includes/registration_login.php') ?>
<?php
require_once("config.php");
require_once('includes/public_functions.php');
$PageTitle = "Blogg";

include_once("../header.php");
?>
<?php $posts = getPublishedPosts(); ?>

    <div class="blogg">
    <!-- Page content -->
    	<h1 class="content-title">Nýlegar Færslur</h1>
		<?php include("includes/banner.php") ?>

		<div class="content">
				<?php foreach ($posts as $post): ?>
					<div>
						<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
							<div class="post">
								<h2><?php echo $post['title'] ?></h2>

								<div class="img-holder">
									<img src="<?php echo 'static/images/' . $post['image']; ?>" class="post_image" alt="">
								</div>

								<?php if (isset($post["topic"]["name"])): ?>
									<a href="<?php echo BASE_URL . 'blogg/filtered_posts.php?topic=' . $post['topic']['id'] ?>"class="category">
										<?php echo $post['topic']['name'] ?>
									</a>
								<?php endif ?>

								<div class="info">
									<span><?php echo date("j/n/Y ", strtotime($post["created_at"])); ?></span>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach ?>		
		</div>
    </div>		

<?php include_once("../footer.php") ?>