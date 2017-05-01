<?php include_once 'views/layout/header.php'; ?>   
	<style type="text/css" media="screen">
		body {
			background-color: black;
		}
		.form .register-form {
		  display: none;
		}
	</style>
	<div class="login-page col-lg-offset-3 col-lg-6 col-md-6 col-xs-12" style="padding-top: 120px; ">
	  <div class="form">

	    <form class="register-form" method="POST" action="<?php echo html_helpers::url(array('ctl'=>'login','act'=>'register')); ?>">
	      <input type="text" name="user" required placeholder="name"/>
	      <input type="password" name="pass" required placeholder="password"/>
	      <input type="text" name="email" placeholder="email address"/>
	      <button class="contact submit btn btn-primary btn-xl">create</button>
	      <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form>
	    <form class="login-form" method="POST" action="<?php echo html_helpers::url(array('ctl'=>'login','act'=>'login')); ?>">
	      <input type="text" name="user" required placeholder="username"/>
	      <input type="password" name="pass" required placeholder="password"/>
	      <button class="contact submit btn btn-primary btn-xl">login</button>
	      <p class="message">Not registered? <a href="#">Create an account</a></p>
	    </form>
	  </div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="./media/js/login.js"></script>
<?php include_once 'views/layout/footer.php'; ?>