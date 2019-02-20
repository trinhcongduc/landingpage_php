<!doctype html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

	<title>Langding Page</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div id="header">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <img src="./assets/images/test-logo-png-1.png" id="logo" alt="">
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8">
                        somethings
                    </div>
                </div>
            </div>
            <div id="content">
                <div id="slide-show">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="./assets/images/nau.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./assets/images/nau.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./assets/images/nau.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="offset-sm-3 col-sm-6 offset-md-3 col-md-6 offset-lg-3 col-lg-6 ">
                        <div class="card">
                            <div class="card-header">
                                Thông tin
                            </div>
                            <div class="card-body">
                                <form action="actions.php" method="post">
                                    <div class="form-group">
                                        <label >Họ tên</label>
                                        <input class="form-control" type="text" name="name"  placeholder="Họ tên">
                                    </div>
                                    <div class="form-group">
                                        <label >Email</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Nhập email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
									<div class="form-group">
                                        <label >Số điện thoại</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone_number" placeholder="Nhập số điện thoại">

                                    </div>

                                    <div class="form-group">
                                        <label >Quê quán</label>
                                        <input class="form-control" type="text" name="city"  placeholder="Quê quán">
                                    </div>
                                    <button type="submit"  name="submit" value="submit" id="submit" class="btn btn-primary">Gửi</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div id="footer">
                <h3>Liên hệ với chúng tôi</h3>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function () {

        function jnotice(msg,timeout){
            timeout = timeout ===undefined?3000:timeout;
            if(jQuery('#jbnotice').length){
                jQuery('#jbnotice').remove();
            }
            var html =
				'<div id="jbnotice" ' +
                	'style="text-align:center;font-size:20px;border: 1px solid #ccc;background: rgb(18, 100, 232);color:white;position:fixed;width:300px;top:50%;left:50%;margin-left:-150px;magrin-top:-20px;line-height:40px;padding:10px;">'
					+msg+
				'</div>';
            jQuery('body').append(html);
            jQuery('#jbnotice').fadeOut(timeout);

        }

		$("#submit").on("click",function (event) {
            event.preventDefault();
            var name = $("form").find("input[name='name']").val();
            var email = $("form").find("input[name='email']").val();
            var city = $("form").find("input[name='city']").val();
            var phone_number = $("form").find("input[name='phone_number']").val();

			$.ajax({
				url:"actions.php",
                type: 'post',
                dataType:'text',
                data: {
				    name:name,
                    email:email,
                    city:city,
                    phone_number:phone_number,
					submit:"submit"
				},
                success: function(res){
                    jnotice(' Thành công',5000);
                    $("form")[0].reset();
                }
			})
        })
    })
</script>
