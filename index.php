<!--Content page-->
<?php include('inc/header.php');?>
<?php
echo "<pre>";
print_r($lang_default);
echo "</pre>";
$lang_default == "vi"?include('inc/content-home-vi.php'):include('inc/content-home-en.php')

?>
<?php include('inc/footer.php');?>
