<link type='text/css' href="<?php echo base_url()?>assets/front/css/default.css" rel='Stylesheet' />
<?php if(is_file("desa/css/desa-default.css")): ?>
  <link type='text/css' href="<?php echo base_url()?>desa/css/desa-default.css" rel='Stylesheet' />
<?php endif; ?>

<div id='cssmenu'>
	<ul id="global-nav" class="top">
	<li><a href="<?php echo site_url()."first"?>">Beranda</a></li>
	<?php foreach($menu_atas AS $data){?>
		<?php echo $data['menu']?>
	<?php }?>
	<li><a href="https://www.facebook.com/cidokom/" target="_blank"><span style="color:#083d74"><i class="fa fa-facebook-square fa-2x"></i></span></a></li>
	<li><a href="#"><span style="color:#701b0b"><i class="fa fa-instagram fa-2x"></i></span></a></li>
	<li><a href="#"><span style="color:#0ccdd9"><i class="fa fa-twitter-square fa-2x"></i></span></a></li>
	<li><a href="#"><span style="color:#c2080c"><i class="fa fa-youtube-square fa-2x"></i></span></a></li>
	<li><a href="#"><span style="color:#c2080c"><i class="fa fa-google-plus-square fa-2x"></i></span></a></li>
	<li><a href="#"><span style="color:#e3a206"><i class="fa fa-rss-square fa-2x"></i></span></a></li>
	<li><a href="<?php echo base_url()?>index.php/siteman"><i class="fa fa-lock fa-lg"></i>  Login Admin</a></li>
	</ul>
</div>

