<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"  content="initial-scale=1, width=device-width">

<title><?= $v_title?></title>  

<link href="<?=base_url();?>assets/css/styles.css" rel="stylesheet" type="text/css" />
<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" />

<!--[if  IE]>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/ie.css" />
<![endif]-->

<!--[if lt IE 9]>
<script src="<?=base_url();?>assets/js/html5shiv.js"></script>
<![endif]-->

</head>

<body>
  
    <!-- start div #wrapper -->
    <div id="wrapper">
        
        <!-- start header -->
        <header>
            <div class="border-left"></div>
            <div class="logo">
                <a href="index-2.html"><img src="<?=base_url();?>assets/img/logo.png" alt=""></a>
                <span class="border-bottom"></span>
            </div>
            <div class="search">
                <form action="#" method="post">
                    <input class="field" type="text" name="" value="Search rumors..." onFocus="if (this.value==this.defaultValue) this.value = ''" 
                    onblur="if (this.value=='') this.value = this.defaultValue" >
                    <input class="submit" type="submit" name="" value="" >
                </form>
            </div>
            <nav class="menu">
                <ul>
					<li><span class="border-bottom"></span><a href="category.html">Anime</a>
                        <ul class="dropdown">
                            <li><a href="category.html">Movie</a></li>
                            <li><a href="category.html">Cosplay</a></li>
                            <li><a href="category.html">Manga</a></li>
                        </ul>
                    </li>                    
                    <li><span class="border-bottom"></span><a href="category.html">Food</a></li>
                    <li><span class="border-bottom"></span><a href="category.html">Game</a></li>
					<li><span class="border-bottom"></span><a href="category.html">Culture</a></li>
					<li><span class="border-bottom"></span><a href="category.html">Event</a>
                        <ul class="dropdown">
                            <li><a href="category.html">Nasional</a></li>
                            <li><a href="category.html">Internasional</a></li>
                        </ul>
                    </li>					
                    <li><span class="border-bottom"></span><a href="features.html">Features</a>
                        <ul class="dropdown">
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="blog-single-with-rating.html">News with rating</a></li>
                            <li class="last"><span class="border-bottom"></span><a href="full-width.html">full width</a></li>
                        </ul>
                    </li>
					
                </ul>                                              
            </nav>   
            <select class="mobile-menu" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
                <option value="">Go To...</option> 
                <option value="index-2.html">Home</option>
                <option value="category.html">Category</option>
                <option value="blog-single.html">News single</option>
                <option value="features.html">Features</option>
                <option value="full-width.html">-Full width</option>
                <option value="blog-single-with-rating.html">-News single with rating box</option>
                <option value="contact.html">-Contact</option>
            </select>
            <div class="clear"></div>
        </header>
        <!-- end header -->
		<br>
		<!-- main page -->
			<?php if(!empty($content)) echo $content; ?>
		<!-- main page -->
        
		<br><br><br>
    
    </div>
	<!-- end div #wrapper -->    
    
    <!-- start footer -->
    <footer>
        <div class="footer-top">
            <div class="logo">
                <a href="index-2.html"><img src="<?=base_url();?>assets/img/logo.png" alt=""></a>
                <span class="border-bottom"></span>
            </div>
            <div class="widget first">
                <div class="desc">
                    <p>Too many of us look upon Americans as dollar chasers. This is a cruel libel, even if it is reiterated thoughtlessly by the Americans themselves.</p>
                    <p>This is a cruel libel, even if it is reiterated thoughtlessly by the Americans themselves.</p>
                </div>
                <ul class="info">
                    <li class="address">Salt Lake City, UT 87234</li>
                    <li class="phone">(871) 321-6567</li>
                    <li class="mail"><a href="mailto:awesome@website.com">awesome@website.com</a></li>
                </ul>
            </div>
            <div class="widget">
                <div class="title">
                    <h3>latest news</h3>
                </div>
                <div class="news">
                    <article class="twoboxes">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?=base_url();?>assets/img/footer-img-1.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                            <div class="clear"></div>
                            <p class="date">12 march 2013</p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                    <article class="twoboxes">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?=base_url();?>assets/img/footer-img-2.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                            <div class="clear"></div>
                            <p class="date">12 march 2013</p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                    <article class="twoboxes last">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?=base_url();?>assets/img/footer-img-3.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                            <div class="clear"></div>
                            <p class="date">12 march 2013</p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                </div>
            </div>
            <div class="widget last">
                <div class="title">
                    <h3>most popular</h3>
                </div>
                <div class="news">
                    <article class="twoboxes">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?=base_url();?>assets/img/footer-img-4.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                            <div class="clear"></div>
                            <p class="date">12 march 2013</p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                    <article class="twoboxes">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?=base_url();?>assets/img/footer-img-5.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                            <div class="clear"></div>
                            <p class="date">12 march 2013</p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                    <article class="twoboxes last">
                        <div class="post-thumb">
                            <a href="blog-single.html"><img src="<?=base_url();?>assets/img/footer-img-6.jpg" alt=""></a>
                            <div class="overlay">
                                <div class="op"></div>
                                <div class="cat">
                                    <div class="icon"></div>
                                </div>
                            </div>
                        </div>
                        <div class="right-desc">
                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                            <ul class="rating calc">
                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                            </ul>
                            <div class="clear"></div>
                            <p class="date">12 march 2013</p>    
                        </div>
                        <div class="clear"></div>
                    </article>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="footer-bottom">
            <div class="copyright">
                <p>Copyright 2013 @ <span>RUMORS</span>. // A mega awesome NEWS MAGAZINE theme.</p>
            </div>
            <div class="clear"></div>
        </div>  
    </footer>
    <!-- end footer -->

<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.8.3.min.js" ></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/html5shiv.js" ></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/fancydropdown.js" ></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery.easing-1.3.js" ></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/functions.js" ></script>
<script type="text/javascript">
    /* <![CDATA[ */
    /*global $:false */
    $(function() {
        "use strict";
        //caching
        //next and prev buttons
        var $cn_next = $('#cn_next');
        var $cn_prev    = $('#cn_prev');
        //wrapper of the left items
        var $cn_list    = $('#cn_list');
        var $pages      = $cn_list.find('.cn_page');
        //how many pages
        var cnt_pages   = $pages.length;
        //the default page is the first one
        var page        = 1;
        //list of news (left items)
        var $items      = $cn_list.find('.cn_item');
        //the current item being viewed (right side)
        var $cn_preview = $('#cn_preview');
        //index of the item being viewed. 
        //the default is the first one
        var current     = 1;
        /*
        for each item we store its index relative to all the document.
        we bind a click event that slides up or down the current item
        and slides up or down the clicked one. 
        Moving up or down will depend if the clicked item is after or
        before the current one
        */
        $items.each(function(i){
            var $item = $(this);
            $item.data('idx',i+1);
            
            $item.bind('click',function(){
                var $this       = $(this);
                $cn_list.find('.selected').removeClass('selected');
                $this.addClass('selected');
                var idx         = $(this).data('idx');
                var $current    = $cn_preview.find('.cn_content:nth-child('+current+')');
                var $next       = $cn_preview.find('.cn_content:nth-child('+idx+')');
                
                if(idx > current){
                    $current.stop().animate({'top':'-357px'},600,'easeOutBack',function(){
                        $(this).css({'top':'357px'});
                    });
                    $next.css({'top':'357px'}).stop().animate({'top':'0px'},600,'easeOutBack');
                }
                else if(idx < current){
                    $current.stop().animate({'top':'357px'},600,'easeOutBack',function(){
                        $(this).css({'top':'357px'});
                    });
                    $next.css({'top':'-357px'}).stop().animate({'top':'0px'},600,'easeOutBack');
                }
                current = idx;
            });
        });
        /*
        shows next page if exists:
        the next page fades in
        also checks if the button should get disabled
        */
        $cn_next.bind('click',function(e){
            var $this = $(this);
            $cn_prev.removeClass('disabled');
            ++page;
            if(page === cnt_pages)
                { $this.addClass('disabled'); }
            if(page > cnt_pages){ 
                page = cnt_pages;
                return;
            }   
            $pages.hide();
            $cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
            e.preventDefault();
        });
        /*
        shows previous page if exists:
        the previous page fades in
        also checks if the button should get disabled
        */
        $cn_prev.bind('click',function(e){
            var $this = $(this);
            $cn_next.removeClass('disabled');
            --page;
            if(page === 1)
                { $this.addClass('disabled'); }
            if(page < 1){ 
                page = 1;
                return;
            }
            $pages.hide();
            $cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
            e.preventDefault();
        });
    });
    /* ]]> */
</script> 

</body>

</html>