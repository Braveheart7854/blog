<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>联系</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/public/css/font-awesome.css">
  	<link rel="stylesheet" href="/public/css/style.css">
  	<!--[if lt IE 9]>
  	  <script src="js/html5shiv.min.js"></script>
  	  <script src="js/respond.min.js"></script>
  	<![endif]-->
  </head>
  
  <body>
  	<nav class="navbar navbar-default navbar-blog">
      <div class="container">
      	<div class="navbar-header">
      	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#blogNav">
      	  	<span class="icon-bar"></span>
      	  	<span class="icon-bar"></span>
      	  	<span class="icon-bar"></span>
      	  </button>
      	  <a href="#" class="navbar-brand">Blog</a>
      	</div>
      	
      	<div id="blogNav" class="navbar-collapse collapse">
      	  <ul class="nav navbar-nav">
      	  	<li><a href="/index.php/home/index/index">首页</a></li>
      	  	<li><a href="/index.php/home/index/about">关于</a></li>
      	  	<li class="active"><a href="/index.php/home/index/contact">留言</a></li>
      	  	<li class="dropdown">
      	  	  <a href="#" class="dropdown-toggle" data-toggle="dropdown">博文分类 <span class="caret"></span></a>
      	  	  <ul class="dropdown-menu">
      	  	  	<li><a href="#">碎语</a></li>
      	  	  	<li><a href="#">随笔</a></li>
      	  	  	<li><a href="#">杂谈</a></li>
      	  	  	<li class="divider"></li>
      	  	  	<li><a href="#">名人</a></li>
      	  	  </ul>
      	  	</li>
      	  </ul>
      	  
      	  <form class="navbar-form navbar-right" method="" action="">
      	    <div class="input-group">
              <input type="text" class="form-control" placeholder="请输入关键字" name="kw" id="kw">
              <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </div>
            </div>
      	  </form>
      	</div>
      </div>
  	</nav><!--/.navbar-default-->
  	
  	
  	<header class="header-blog">
  	  <div class="container">
  	    <h1>Blog</h1>
        <p class="lead">农村户口，你值得拥有……</p>
      </div>
  	</header>
  	
  	<div class="container">
  	  <div class="contact-box well blog-well clearfix">
		<h2>留言</h2>
		<hr>
		<p class="lead">你有任何意见，或建议，可以通过下面的方式和我交流。</p>

		<div class="contact-form">
		  <form class="form-horizontal col-sm-8" role="form">
            <div class="form-group">
			  <label for="name" class="col-sm-2">称呼</label>
				<div class="col-sm-10">
			    	<input type="text" class="form-control" id="name" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="email" class="col-sm-2">邮箱</label>
			    <div class="col-sm-10">
			    	<input type="email" class="form-control" id="email" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="subject" class="col-sm-2">主题</label>
			    <div class="col-sm-10">
			    	<input type="subject" class="form-control" id="subject" value="">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="message" class="col-sm-2">留言</label>
			    <div class="col-sm-10">
			    	<textarea class="form-control" id="message"></textarea>
			    </div>
			  </div>

			  <div class="form-group">
			  	<div class="col-sm-12 text-right">
			  		<button type="submit" class="btn btn-lg btn-primary">发送</button>
			  	</div>
			  </div>
			</form>	
		</div>
	  </div>
	</div><!--/.container-->
  	
  	<footer id="footer"> 
      <div class="container">
        <p>
          &copy; 2014 &nbsp;&nbsp; Design And Code By <a href="#">农村户口丶你值得拥有</a> 
      </div> 
    </footer>
  	
  	<script src="../assets/js/jquery.min.js"></script>
  	<script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>