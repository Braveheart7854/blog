<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
  	<title>Post</title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="/Public/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/Public/css/font-awesome.css">
  	<link rel="stylesheet" href="/Public/css/style.css">
  	<!--[if lt IE 9]>
  	  <script src="/Public/js/html5shiv.min.js"></script>
  	  <script src="/Public/js/respond.min.js"></script>
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
      	  	<li><a href="index.html">首页</a></li>
      	  	<li><a href="../about/about.html">关于</a></li>
      	  	<li><a href="../contact/contact.html">留言</a></li>
      	  	<li class="dropdown active">
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
  	  <div class="row">
  	    <div class="col-sm-8">
  	      <div class="well blog-well">
          <?php if(is_array($artList1)): foreach($artList1 as $key=>$art): ?><article class="entry">
            <h3>
              <a href="post.html">背影</a>
            </h3>

            <div class="row">
              <div class="col-sm-12">
                <span class="column">
                  <span class="glyphicon glyphicon-pencil icon"></span><a href="#">朱自清</a>
                </span>
                <span class="column">
              	  <span class="glyphicon glyphicon-time icon"></span>1925年7月
              	</span>
              	<span class="column">
              	  <span class="glyphicon glyphicon-folder-open icon"></span><a href="#">散文</a>
              	</span>
              	<span class="column">
              	  <span class="glyphicon glyphicon-eye-open icon"></span><?php echo ($art['click']); ?>
              	</span>
              	<span class="column">
              	  <span class="glyphicon glyphicon-comment icon"></span><a href="post.html#comment">5</a>
              	</span>
              </div>
            </div>
          
            <hr class="clearfix"> 
          
            <div class="entry-content"> 
              <p>我与父亲不相见已二年余了，我最不能忘记的是他的背影。</p> 
              <p>那年冬天，祖母死了，父亲的差使也交卸了，正是祸不单行的日子。我从北京到徐州，打算跟着父亲奔丧回家。到徐州见着父亲，看见满院狼藉的东西，又想起祖母，不禁簌簌地流下眼泪。父亲说：“事已如此，不必难过，好在天无绝人之路！”</p> 
              <p>回家变卖典质，父亲还了亏空；又借钱办了丧事。这些日子，家中光景很是惨淡，一半为了丧事，一半为了父亲赋闲。丧事完毕，父亲要到南京谋事，我也要回北京念书，我们便同行。</p> 
              <p>到南京时，有朋友约去游逛，勾留了一日；第二日上午便须渡江到浦口，下午上车北去。父亲因为事忙，本已说定不送我，叫旅馆里一个熟识的茶房陪我同去。他再三嘱咐茶房，甚是仔细。但他终于不放心，怕茶房不妥帖；颇踌躇了一会。其实我那年已二十岁，北京已来往过两三次，是没有什么要紧的了。他踌躇了一会，终于决定还是自己送我去。我两三劝他不必去；他只说，“不要紧，他们去不好！” </p>
              <p>我们过了江，进了车站。我买票，他忙着照看行李。行李太多了，得向脚夫行些小费才可过去。他便又忙着和他们讲价钱。我那时真是聪明过分，总觉他说话不大漂亮，非自己插嘴不可，但他终于讲定了价钱；就送我上车。他给我拣定了靠车门的一张椅子；我将他给我做的紫毛大衣铺好坐位。他嘱我路上小心，夜里警醒些，不要受凉。又嘱托茶房好好照应我。我心里暗笑他的迂；他们只认得钱，托他们只是白托！而且我这样大年纪的人，难道还不能料理自己么？唉，我现在想想，那时真是太聪明了！</p> 
              <p>我说道，“爸爸，你走吧。”他望车外看了看说：“我买几个橘子去。你就在此地，不要走动。”我看那边月台的栅栏外有几个卖东西的等着顾客。走到那边月台，须穿过铁道，须跳下去又爬上去。父亲是一个胖子，走过去自然要费事些。我本来要去的，他不肯，只好让他去。我看见他戴着黑布小帽，穿着黑布大马褂，深青布棉袍，蹒跚地走到铁道边，慢慢探身下去，尚不大难。可是他穿过铁道，要爬上那边月台，就不容易了。他用两手攀着上面，两脚再向上缩；他肥胖的身子向左微倾，显出努力的样子。这时我看见他的背影，我的泪很快地流下来了。我赶紧拭干了泪。怕他看见，也怕别人看见。我再向外看时，他已抱了朱红的橘子往回走了。过铁道时，他先将橘子散放在地上，自己慢慢爬下，再抱起橘子走。到这边时，我赶紧去搀他。他和我走到车上，将橘子一股脑儿放在我的皮大衣上。于是扑扑衣上的泥土，心里很轻松似的。过一会说：“我走了，到那边来信！”我望着他走出去。他走了几步，回过头看见我，说：“进去吧，里边没人。”等他的背影混入来来往往的人里，再找不着了，我便进来坐下，我的眼泪又来了。</p> 
              <p>近几年来，父亲和我都是东奔西走，家中光景是一日不如一日。他少年出外谋生，独力支持，做了许多大事。哪知老境却如此颓唐！他触目伤怀，自然情不能自已。情郁于中，自然要发之于外；家庭琐屑便往往触他之怒。他待我渐渐不同往日。但最近两年的不见，他终于忘却我的不好，只是惦记着我，惦记着我的儿子。我北来后，他写了一信给我，信中说道：“我身体平安，惟膀子疼痛厉害，举箸提笔，诸多不便，大约大去之期不远矣。”我读到此处，在晶莹的泪光中，又看见那肥胖的、青布棉袍黑布马褂的背影。唉！我不知何时再能与他相见！</p> 
            </div>
            
            <div class="row entry-footer">
              <div class="col-sm-8">
                <span class="glyphicon glyphicon-tags icon"></span><a href="#">文学</a>, <a href="#">散文</a>, <a href="#">现代作家</a>, <a href="#">文章</a>, <a href="#">朱自清</a>
              </div>
              <div class="col-sm-4">
                <div class="paginate text-right">
                  <div class="pag2">
                  	<span class="disabled"> < </span>
                    <span class="current">1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#"> > </a>
                  </div>
                </div>
              </div>
            </div>
          </article><?php endforeach; endif; ?>
            <div class="row">
              <div class="bd-share col-col-sm-12 text-center">
              	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"24"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
              </div>
            </div>
          
            <ul class="list-unstyled entry-near">
          	  <li>上一篇: <span>没有了</span></li>
          	  <li>下一篇: <a href="">鲁迅<small>（无产阶级文学家、思想家、革命家）</small></a></li>
            </ul>         
            
            <div id="comments" class="comments">
              <h3 id="comment-title"><a name="comment">评论</a></h3>
              
              <div id="respond" class="respond">
			    <div class="text-right clearfix">
	              <span id="cancel-comment-reply">取消</span>
	            </div>
	        
	            <form class="form-horizontal">
	        	  <div class="form-group">
	        		<div class="m5 col-sm-4">
	        		  <input type="text" name="nickname" id="nickname" class="form-control" placeholder="昵称*" value="">
	        		</div>
	        		
	        		<div class="m5 col-sm-4">
	        		  <input type="email" name="email" id="email" class="form-control" placeholder="邮箱*" value="">
	        		</div>
	        		
	        		<div class="m5 col-sm-4">
	        		  <input type="url" name="url" id="url" class="form-control" placeholder="网址" value="">
	        		</div>
	        	  </div>
	        	
	        	  <div class="form-group">
	        		<div class="col-sm-12">
	        		  <textarea name="msg" id="msg"  class="form-control" rows="6" placeholder="评论*"></textarea>
	        		</div>
	        	  </div>
	        	
	        	  <div class="form-group">
                    <div class="col-sm-12 text-right">
                      <button type="submit" class="btn btn-primary">提交</button>
                    </div>
                  </div>
	            </form>
		      </div><!--/.respond-->
      
              <ul class="comment-list">
              	<li class="comment-item" id="comment-1">
                  <div class="comment-content">
                    <div class="avatar">
                      <a href="">
                        <img src="img/avatar.jpg">
                      </a>
                    </div>

                    <div class="comment-body">
                      <div class="byline">
                          <a href="#">LoSer_KMHT</a> 
                          <span>2014-05-21 09:47</span>
                      </div>

                      <div class="comment-message">
                        <p>《背影》本是我国著名学者朱自清的作品，一直以来是中学课本中的经典科目，而被某教授误传因违法交规，被逐出了教材，岂不非常搞笑。<p>
                        </p>《背影》作为我国传统文学中精品，应当以传统文学的角度和美学的尺度来评判他们的价值，而非用交规来评判他的文学价值和现实意义，是通过背影来体现父子之间深厚的感情，殊不知教授依然用俗世的语言来判断文学的意义，让孩子们和孩子的父母们无不担心。 这样的文学作品删了多可惜啊！</p>
                      </div>
                          
                      <div class="reply">
                        <span id="respond-1-315" class="reply-btn">评论</span>
                      </div>
                    </div>
                  </div>

                  <ul class="children">
                    <li class="comment-item" id="comment-2">
                      <div class="comment-content">
                        <div class="avatar">
                          <a href="">
                            <img src="img/avatar.jpg">
                          </a>
                        </div>
                        
                        <div class="comment-body">
                          <div class="byline">
                            <a href="#">My祸害0</a> 
                            <span>2014-5-21 10:34</span>
                          </div>

                          <div class="comment-message">
                            <p>说是违反交通法规，却忽略人性，难道人死在车下的还少吗</p>
                          </div>

                          <div class="reply">
                            <span id="respond-2-315" class="reply-btn">评论</span>
                          </div>
                        </div>
                      </div>

                      <ul class="children">
                        <li class="comment-item" id="comment-3">
                          <div class="comment-content">
                            <div class="avatar">
                              <a href="">
                                <img src="img/avatar.jpg">
                              </a>
                            </div>
                            
                            <div class="comment-body">
                              <div class="byline">
                                <a href="#">tartrap</a>
                                <a class="time-ago" href="">2014-5-21 11:01</a>
                              </div>

                              <div class="comment-message">
                                <p>只注重规则、法规，而忽略了人性，老人为什么翻栏杆？人性不作考虑，正因如此，社会上碰瓷，扶不起路人现象横行，没有人性，要法规何用？</p>
                              </div>

                              <div class="reply">
                                <span id="respond-3-315" class="reply-btn">评论</span>
                              </div>
                            </div>
                          </div>
                        </li><!--/.comment-item-->
                      </ul>
                    </li><!--/.comment-item-->

                    <li class="comment-item" id="comment-4">
                      <div class="comment-content">
                        <div class="avatar">
                          <a href="">
                            <img src="img/avatar.jpg">
                          </a>
                        </div>
                        
                        <div class="comment-body">
                          <div class="byline">
                            <a href="#">aaron</a>
                            <a class="time-ago" href="">2014-5-21 13:22</a>
                          </div>

                          <div class="comment-message">
                            <p>靠，现在的专家真他妈恶心！</p>
                          </div>
                          <div class="reply">
                            <span id="respond-4-315" class="reply-btn">评论</span> 
                          </div>
                        </div>
                      </div>
                    </li><!--/.comment-item-->
                  </ul>
                </li>
                
                <li class="comment-item" id="comment-5">
                      <div class="comment-content">
                        <div class="avatar">
                          <a href="">
                            <img src="img/avatar.jpg">
                          </a>
                        </div>
                        
                        <div class="comment-body">
                          <div class="byline">
                            <a href="#">heruiqi3221</a> 
                            <span>2014-10-18 22:55</span>
                          </div>

                          <div class="comment-message">
                            <p>我醉了233。这是真的么？我们老师刚跟我们说背影是初中教材不可缺少的文章之一哎hhh</p>
                          </div>
                          <div class="reply">
                            <span id="respond-5-315" class="reply-btn">评论</span> 
                          </div>
                        </div>
                      </div>
                    </li><!--/.comment-item-->
              </ul><!--/.comment-list-->
              <div class="paginate text-center">
                <div class="pag2">
                  <span class="disabled"> < </span>
                  <span class="current">1</span>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">4</a>
                  <a href="#">5</a>
                  <a href="#"> > </a>
                </div>
              </div>
            </div><!--/#comment-->
          </div><!--/.blog-well-->
  	    </div><!--/.col-sm-8-->
  	    
  	    <div class="col-sm-4">
  	      <div class="panel panel-default panel-blog">
		    <div class="panel-heading">
			  <h4><strong>关注</strong></h4>
			</div>
			
			<div class="panel-body">
			  <div class="row follow-me">
			  	<div class="col-xs-3 col-sm-3 fa-hover">
			  	  <a href="#"><i class="fa fa-weibo"></i></a>
			  	</div>
			  	<div class="col-xs-3 col-sm-3 fa-hover">
			  	  <a href="#"><i class="fa fa-weixin"></i></a>
			  	</div>
			  	<div class="col-xs-3 col-sm-3 fa-hover">
			  	  <a href="#"><i class="fa fa-tencent-weibo"></i></a>
			  	</div>
			  	<div class="col-xs-3 col-sm-3 fa-hover">
			  	  <a href="#"><i class="fa fa-rss-square"></i></a>
			  	</div>
			  </div>
			</div>
		  </div><!--/.panel-->
		  
		  <div class="panel panel-default panel-blog">
		    <div class="panel-heading">
			  <h4><strong>分类</strong></h4>
			</div>
			
			<div class="panel-body">
		      <ul class="nav nav-pills">
                <li><a href="#">碎语 <span class="badge">3</span></a></li>
                <li><a href="#">随笔 <span class="badge">13</span></a></li>
                <li><a href="#">杂谈 <span class="badge">300</span></a></li>
                <li><a href="#">名人 <span class="badge">50</span></a></li>
              </ul>
			</div>
		  </div><!--/.panel-->
		  
		  <div class="panel panel-default panel-blog">
		    <div class="panel-heading">
			  <h4><strong>最新文章</strong></h4>
			</div>
			
			<div class="panel-body">
			  <ul class="list-group article-list"> 
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">背影</a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">鲁迅<small>（无产阶级文学家、思想家、革命家）</small></a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">背影</a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">鲁迅<small>（无产阶级文学家、思想家、革命家）</small></a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">背影</a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">鲁迅<small>（无产阶级文学家、思想家、革命家）</small></a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">背影</a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">鲁迅<small>（无产阶级文学家、思想家、革命家）</small></a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">背影</a>
                </li>
                <li class="list-group-item">
                  <i class="fa fa-pencil-square-o"></i>
                  <a href="">鲁迅<small>（无产阶级文学家、思想家、革命家）</small></a>
                </li>
			  </ul>
			</div>
		  </div><!--/.panel-->
		  
		  <div class="panel panel-default panel-blog">
		    <div class="panel-heading">
			  <h4><strong>标签</strong></h4>
			</div>
			
			<div class="panel-body blog-label clearfix">
		      <a href="#" class="label label-primary">文学</a>
		      <a href="#" class="label label-primary">中国现代文学奠基人</a>
		      <a href="#" class="label label-primary">思想家</a>
		      <a href="#" class="label label-primary">文章</a>
		      <a href="#" class="label label-primary">中国现代作家</a>
		      <a href="#" class="label label-primary">朱自清</a>
		      <a href="#" class="label label-primary">革命家</a>
		      <a href="#" class="label label-primary">鲁迅</a>
		      <a href="#" class="label label-primary">现代作家</a>
			</div>
		  </div><!--/.panel-->
		  
		  <div class="panel panel-default panel-blog">
		    <div class="panel-heading">
			  <h4><strong>归档</strong></h4>
			</div>
			
			<div class="panel-body">
		      <select id="archive" class="form-control">
                <option value="February 2014">February 2014</option>
                <option value="February 2013">February 2013</option>
                <option value="February 2012">February 2012</option>
              </select>
			</div>
		  </div><!--/.panel-->
  	    </div><!--/.col-sm-4-->
  	  </div><!--/.row-->
  	</div><!--/.container-->
  	
  	<footer id="footer"> 
      <div class="container">
        <p>
          &copy; 2014 &nbsp;&nbsp; Design And Code By <a href="#">农村户口丶你值得拥有</a> 
      </div> 
    </footer>
  	
  	<script src="../assets/js/jquery.min.js"></script>
  	<script src="../assets/js/bootstrap.min.js"></script>
  	<script>
  		$(function(){
  			$('.reply-btn').click(function(){
  				var cancel = $('#cancel-comment-reply'), commentTitle = $('#comment-title');
  				cancel.css('display', 'block');
  				var idArr = [];
  				idStr = $(this).attr('id');
  				idArr = idStr.split('-');
  				
  				var respond = '#' + idArr[0], commentId = idArr[1], postId = idArr[2];
  				var comment = '#comment-' + commentId;
  				var commentContent = $(comment + ' > .comment-content');
  				$(respond).insertAfter(commentContent);
  				
  				cancel.click(function(){
  					$(respond).insertAfter(commentTitle);
  					$(this).css('display', 'none');
  				});
  			});
  		});
  	</script>
  </body>
</html>