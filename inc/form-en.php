<form id="form-main" action="<?php echo $base_url?>/thankyou.php" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="name"  placeholder="Name">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Your email">
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="phone_number" placeholder="Your phone number">
    </div>
    <button type="submit"  name="submit" value="submit" id="submit" lang="en" class="frm-button btn-lg btn btn-primary" >Send</button>
</form>
