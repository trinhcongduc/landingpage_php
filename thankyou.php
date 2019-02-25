
<?php include "./actions.php";?>
<?php include('inc/header.php');?>
  <div class="jumbotron text-xs-center">
    <div class="container text-center">
      <h1 class="display-3">Thank You!</h1>
		<h3 id="count_down_time">
			<script type="text/javascript">
				var url = '<?php echo $base_url ?>';
				console.log(url);
				countDownRedirect(url);
			</script>
		</h3>
      <p class="lead"><strong>Bạn đã đăng ký thành công</strong> chúng tôi sẽ liên hệ với bạn sớm</p>
      <p class="lead">
        <a class="btn btn-primary btn-sm" href="<?php echo $base_url?>" role="button">Trở về trang chủ</a>
      </p>
    </div>

  </div>
<?php include('inc/footer.php');?>
