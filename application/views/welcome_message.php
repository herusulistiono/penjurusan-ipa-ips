<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css');?>"/>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	/* html,
	body {
	  height: 100%;
	  font: 13px/20px normal Helvetica, Arial, sans-serif;
	  font-family: Consolas, Monaco, Courier New, Courier, monospace;
	  font-size: 12px;
	  background-color: #f9f9f9;
	  border: 1px solid #D0D0D0;
	  display: -ms-flexbox;
	  display: -webkit-box;
	  display: flex;
	  -ms-flex-align: center;
	  -ms-flex-pack: center;
	  -webkit-box-align: center;
	  align-items: center;
	  -webkit-box-pack: center;
	  justify-content: center;
	  padding-top: 40px;
	  padding-bottom: 40px;
	  background-color: #f5f5f5;
	} */
	html,
	body {
	  height: 100%;
	}

	body {
	  font-family: Consolas, Monaco, Courier New, Courier, monospace;
	  display: -ms-flexbox;
	  display: -webkit-box;
	  display: flex;
	  -ms-flex-align: center;
	  -ms-flex-pack: center;
	  -webkit-box-align: center;
	  align-items: center;
	  -webkit-box-pack: center;
	  justify-content: center;
	  padding-top: 40px;
	  padding-bottom: 40px;
	  background-color: #f5f5f5;
	}
	.notify-alert {
	-webkit-box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
	      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.23), 0 3px 10px rgba(0, 0, 0, 0.16);
	border: 0 !important;
	max-width: 400px;
	color: #FFF;
	}

	.notify-alert.alert-success {
	background-color: #28a745;
	}

	.notify-alert.alert-info {
	background-color: #17a2b8;
	}

	.notify-alert.alert-warning {
	background-color: #ffce3a;
	}

	.notify-alert.alert-danger {
	background-color: #e04b59;
	}

	.notify-alert button[data-notify="dismiss"] {
	margin-left: 5px;
	outline: none !important;
	}
	.form-signin {
	  width: 100%;
	  max-width: 420px;
	  padding: 15px;
	  margin: 0 auto;
	}

	.form-label-group {
	  position: relative;
	  margin-bottom: 1rem;
	}

	.form-label-group > input,
	.form-label-group > label {
	  padding: var(--input-padding-y) var(--input-padding-x);
	}

	.form-label-group > label {
	  position: absolute;
	  top: 0;
	  left: 0;
	  display: block;
	  width: 100%;
	  margin-bottom: 0; Override default `<label>` margin
	  line-height: 1.5;
	  color: #495057;
	  border: 1px solid transparent;
	  border-radius: .25rem;
	  transition: all .1s ease-in-out;
	}

	.form-label-group input::-webkit-input-placeholder {
	  color: transparent;
	}

	.form-label-group input:-ms-input-placeholder {
	  color: transparent;
	}

	.form-label-group input::-ms-input-placeholder {
	  color: transparent;
	}

	.form-label-group input::-moz-placeholder {
	  color: transparent;
	}

	.form-label-group input::placeholder {
	  color: transparent;
	}

	.form-label-group input:not(:placeholder-shown) {
	  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
	  padding-bottom: calc(var(--input-padding-y) / 3);
	}

	.form-label-group input:not(:placeholder-shown) ~ label {
	  padding-top: calc(var(--input-padding-y) / 3);
	  padding-bottom: calc(var(--input-padding-y) / 3);
	  font-size: 12px;
	  color: #777;
	} 
	.errorMessages{font: 13px/20px normal Helvetica, Arial, sans-serif;color: red;}

	.box .social {
	    float: none;
	    margin: 0 auto 30px;
	    text-align: center;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}
	</style>
</head>
<body>
  <div class="container">
    <div class="text-center mb-4">
      <h1 class="h3 mb-3 font-weight-normal"></h1>
      <div class="social">
      	<img src="<?php echo base_url('images/logo.png') ?>" width="175px" height="175px" class="circle"/>
      </div>
    </div>
    <?php //echo form_open('#',array('class'=>'form-signin','name'=>'login',"onSubmit"=>"return validate(this)",)); ?>
    <?php echo form_open('#',array('class'=>'form-signin')); ?>
      <div class="form-group">
        <label>Nama Akun:</label>
        <input type="text" name="user" id="user" class="form-control" placeholder="Nama Akun"/>
      </div>
      <div class="form-group">
        <label>Sandi:</label>
        <input type="password" name="password" id="pass" class="form-control" placeholder="Sandi"/>
      </div>
      <div class="form-group btn-container">
        <button type="button" class="btn btn-primary btn-block" onclick="validate()"><i class="fa fa-sign-in fa-lg fa-fw"></i>Masuk</button>
      </div>
      <div class="form-group mt-3">
        <p class="semibold-text mb-0"></p>
      </div>
    <?php echo form_close(); ?>
  </div>
  <script src="<?php echo base_url('assets/jquery.js');?>"></script> 
  <script src="<?php echo base_url('assets/popper/popper.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap-notify.min.js');?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/sweetalert.min.js');?>"></script>
  <script type="text/javascript">
  	$("[data-toggle='tooltip']").tooltip();
    $('#user').focus();
    function validate(){
    	$.ajax({
    		url: '<?php echo site_url('login/login') ?>',
    		type: 'POST',
    		dataType: 'json',
    		data: $('.form-signin').serialize(),
    		encode:true,
            success:function (data) {
            	console.log(data);
                if (!data.success){
                	if(data.errors.user){
                		$.notify({
				          message: data.errors.user,
				          icon: 'fa fa-warning' 
				        },{
				          type: "danger"
				        });
				        $('#user').focus();
				        return false;
                	}
                	if(data.errors.password){
                		$.notify({
				          message: data.errors.password,
				          icon: 'fa fa-warning' 
				        },{
				          type: "danger"
				        });
				        $('#pass').focus();
				        return false;	
                	}
                	if(data.errors){
                        $.notify({
				          message: data.errors,
				          icon: 'fa fa-warning' 
				        },{
				          type: "danger"
				        });
                        return false;
                    }
                }else{
                	setTimeout(function() {
                		window.location.reload();
                	}, 1000);
                }
            }
    	});
    }
  </script>
</body>
</html>