<!DOCTYPE html>
<html>
	<head>
		<title>404 Page Not Found</title>
			<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css')?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-animation.css') ?>">							
			<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-animation.min.css') ?>">
			<style>	
				body{
					background-image: url("<?=base_url('assets/img/pikabu.gif')?>");
					background-repeat: no-repeat;
			    background-attachment: fixed;
			    background-position: center;
			    background-size: contain; 

				}
				.button:hover {
				  border-radius: 4px;
				  /*background-color: #f4511e;*/
				  border: none;
				  color: #FFFFFF;
				  text-align: center;
				  /*font-size: 28px;*/
				  padding: 20px;
				  width: 200px;
				  transition: all 0.5s;
				  cursor: pointer;
				  margin: 5px;
				  background-color: #f4511e;
				}

				.button span {
				  cursor: pointer;
				  display: inline-block;
				  position: relative;
				  transition: 0.5s;
				}

				.button span:after {
				  content: '\00bb';
				  position: absolute;
				  opacity: 0;
				  top: 0;
				  right: -20px;
				  transition: 0.5s;
				}

				.button:hover span {
				  padding-right: 25px;
				}

				.button:hover span:after {
				  opacity: 1;
				  right: 0;
				}
				
			</style>

	</head>

	<body>
		<a href = "<?=base_url('home');?>" class = "button btn btn-success" style = "margin-top: 30px; margin-left: 350px;"><h3><i class = "fa fa-home   faa-bounce animated"></i></h3> <span>Go Back Home</span></a>
	</body>
</html>