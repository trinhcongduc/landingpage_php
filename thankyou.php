<?php include "./actions.php"; ?>
<?php include('inc/header.php'); ?>
<div class="jumbotron text-xs-center">
	<div class="container text-center">
		<h1 class="display-3">
            <?php echo L::thankyou ?>
		</h1>
		<h3 id="count_down_time">
			<script type="text/javascript">
                var url = '<?php echo $base_url ?>';
                console.log(url);
                countDownRedirect(url);
			</script>
		</h3>
		<p class="lead">
			<strong>
                <?php echo L::register_success ?>
			</strong>
            <?php echo L::contact_soon ?>

		</p>
		<p class="lead">
			<a class="btn btn-primary btn-sm" href="<?php echo $base_url ?>" role="button">
                <?php echo L::back_home ?>
			</a>
		</p>
	</div>

</div>
<?php include('inc/footer.php'); ?>
