<?php include_once 'views/layout/header.php'; ?> 
<div class="login-page col-lg-offset-3 col-lg-6 col-md-6 col-xs-12" style="padding-top: 120px; ">
	  <div class="form">
	  <style type="text/css" media="screen">
		body {
			background-image: url('media/img/menu-background.jpg');

		}
		.add-form{
			padding-bottom: 40px;
		}
		.add-form input[type=file]{
			background-color: #fff;
		}
	</style>

	    <form class="add-form" method="POST" action="<?php echo html_helpers::url(array('ctl'=>'menu','act'=>'add')); ?>" enctype="multipart/form-data">
	      <input type="text" name="name" required placeholder="name"/>
	      <input type="text" name="cost" required placeholder="cost"/>
	      <input type="file" value="Upload Image" name="photo" placeholder="image"/>
	      <button class="contact submit btn btn-primary btn-xl" name="btn_submit">Create</button>
	      <button class="contact submit btn btn-primary btn-xl" id="but_reset">Reset</button>
	    </form>

	  </div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="./media/js/reset.js"></script>
<?php include_once 'views/layout/footer.php'; ?>