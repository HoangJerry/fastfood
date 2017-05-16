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
		.add-form input, img{
			box-shadow: 5px 5px 16px 5px white;
		}
		.add-form input[type=file]{
			background-color: #fff;
		}
	</style>
		<?php $row = $this->record ; ?>
	    <form class="add-form" method="POST" action="<?php echo html_helpers::url(array('ctl'=>'menu','act'=>'edit','params'=>array('id'=>$row['id']))); ?>" enctype="multipart/form-data">
	      <input type="text" name="name" value="<?php echo $row['name'] ;?>" required placeholder="name"/>
	      <input type="text" name="cost" value="<?php echo $row['cost'] ;?>" required placeholder="cost"/>
	      <img src="media/img/upload/<?php echo $row['photo'];?>" alt="">
	      <input type="file" value="Upload Image" name="photo" placeholder="image"/>
	      <button class="contact submit btn btn-primary btn-xl" name="btn_submit">Edit</button>
	      <button class="contact submit btn btn-primary btn-xl" id="but_reset">Reset</button>
	    </form>
	  </div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="./media/js/reset.js"></script>
<?php include_once 'views/layout/footer.php'; ?>