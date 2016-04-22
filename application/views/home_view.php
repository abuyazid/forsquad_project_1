 <!-- start slider -->
        <div class="cn_wrapper">
            <div id="cn_preview" class="cn_preview">
                
				<?php $no=1; foreach($content_terbanyak as $row){?>
				<div class="cn_content bg-<?=$no;?>" style="top:0px;">
					<img src="<?=base_url();?>img_content/<?= $row['FILE'];?>">
                    <div class="caption">
                        <h3><a href="blog-single.html"><?= $no."-".$row['JUDUL'];?></a></h3>
                        <p><?= $row['ISI'];?></p>
                        <div class="date">
                            <P><?= date_format(date_create($row['DATE_CREATED']),"d"); ?><br><span><?= date_format(date_create($row['DATE_CREATED']),"M"); ?></span></P>
                        </div>
                    </div>
                </div>				
				<?php $no++;}?>
				
				<!--
				<div class="cn_content bg-1" style="top:0px;">
                    <div class="caption">
                        <h3><a href="blog-single.html">The Hangover 1: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                        <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                        <div class="date">
                            <P>12<br><span>March</span></P>
                        </div>
                    </div>
                </div>
				
				
				
                <div class="cn_content bg-2">
                    <div class="caption">
                        <h3><a href="blog-single.html">The Hangover 2: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                        <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                        <div class="date">
                            <P>12<br><span>March</span></P>
                        </div>
                    </div>
                </div>
                <div class="cn_content bg-3">
                    <div class="caption">
                        <h3><a href="blog-single.html">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                        <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                        <div class="date">
                            <P>12<br><span>March</span></P>
                        </div>
                    </div>
                </div>
               
                <div class="cn_nav">
                    <a id="cn_prev" class="cn_prev disabled"></a>
                    <a id="cn_next" class="cn_next"></a>
                </div>
				 -->
            </div>
			
            <div id="cn_list" class="cn_list">
                <div class="cn_page" style="display:block;">
                    
					<?php $no=1; foreach($content_terbanyak as $row){?>
					<div class="cn_item">
                        <div class="left-box">
                            <img src="<?=base_url();?>img_content/<?= $row['FILE'];?>">
                        </div>
                        <div class="right-box">
                            <h4><?= $row['JUDUL'];?></h4>
                            <p>15 Comments // <?= $row['DATE_CREATED'];?></p>
                        </div>
                        <div class="clear"></div>
                    </div>
					<?php $no++;}?>
                </div>
                <div class="cn_page" style="display:block;">
                   
                </div>
                <div class="cn_page" style="display:block;">
                   
                </div>
            </div>
        </div>
        <!-- end slider -->
		
		<!-- start div #main -->
	    <div id="main">
            <div class="main-content">
                <div class="left-container">
                	<div class="row-fluid">
                        <div class="span2">
                            <div class="marked-title">
                                <h3>hot news</h3>
                            </div>
                            
							<?php $no=1; foreach($content_terbanyak as $row){?>
							<article class="small">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="<?=base_url();?>img_content/<?= $row['FILE']; ?>" alt=""></a>
                                    <div class="overlay">
                                        <div class="op"></div>
                                        <div class="cat">
                                            <div class="icon"></div>
                                            world
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-post-desc">
                                    <p class="date"><?= $row['DATE_CREATED'];?></p>
                                    <h3><a href="blog-single.html"><?= $row['JUDUL'];?></a></h3>
                                    <ul class="rating calc">
                                        <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                    </ul>
                                </div>
                            </article>
							<?php $no++;}?>
                              
                        </div>
                        <div class="span2">
                            <div class="marked-title">
                                <h3>popular news</h3>
                            </div>
                            							<?php $no=1; foreach($content_terbanyak as $row){?>
							<article class="small">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="<?=base_url();?>img_content/<?= $row['FILE']; ?>" alt=""></a>
                                    <div class="overlay">
                                        <div class="op"></div>
                                        <div class="cat">
                                            <div class="icon"></div>
                                            world
                                        </div>
                                    </div>
                                </div>
                                <div class="cat-post-desc">
                                    <p class="date"><?= $row['DATE_CREATED'];?></p>
                                    <h3><a href="blog-single.html"><?= $row['JUDUL'];?></a></h3>
                                    <ul class="rating calc">
                                        <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                    </ul>
                                </div>
                            </article>
							<?php $no++;}?>

                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span2">
                            <div class="marked-title">
                                <h3>Event</h3>
                            </div>
							<?php $no=1; foreach($content_anime as $row){ if($no==1){$class="border";}elseif($no==2){$class="twoboxes";}else{$class="twoboxes last";}?>
                            <article class="<?=$class?>">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="<?=base_url();?>img_content/<?= $row['FILE']; ?>" alt=""></a>
                                    <div class="overlay">
                                        <div class="op"></div>
                                        <div class="cat">
                                            <div class="icon"></div>
                                            world
                                        </div>
                                    </div>
                                    <ul class="rating calc">
                                        <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                    </ul>
                                </div>
                                <div class="cat-post-desc">
                                    <h3><a href="#"><?= $row['JUDUL']; ?></a></h3>
                                    <p class="date">12 march 2013  // 45 Comments</p>
                                    <p><?= $row['ISI']; ?></p>
                                </div>
                            </article>
							<?php $no++;}?>

                        </div>
                        <div class="span2">
                            <div class="marked-title">
                                <h3>Anime</h3>
                            </div>
							<?php $no=1; foreach($content_anime as $row){ if($no==1){$class="border";}elseif($no==2){$class="twoboxes";}else{$class="twoboxes last";}?>
                            <article class="border">
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="<?=base_url();?>img_content/<?= $row['FILE']; ?>" alt=""></a>
                                    <div class="overlay">
                                        <div class="op"></div>
                                        <div class="cat">
                                            <div class="icon"></div>
                                            world
                                        </div>
                                    </div>
                                    <ul class="rating calc">
                                        <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                    </ul>
                                </div>
                                <div class="cat-post-desc">
                                    <h3><a href="#"><?= $row['JUDUL']; ?></a></h3>
                                    <p class="date">12 march 2013  // 45 Comments</p>
                                    <p><?= $row['ISI']; ?></p>
                                </div>
                            </article>
							<?php $no++;}?>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="marked-title">
                            <h3>Game</h3>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span2">
                            <article>
                                <div class="post-thumb">
                                    <a href="blog-single.html"><img src="<?=base_url();?>assets/img/index-img-1.png" alt=""></a>
                                    <div class="overlay">
                                        <div class="op"></div>
                                        <div class="cat">
                                            <div class="icon"></div>
                                            world
                                        </div>
                                    </div>
                                    <ul class="rating calc">
                                        <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                        <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                        <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                    </ul>
                                </div>
                                <div class="cat-post-desc">
                                    <h3><a href="#">The Hangover 3: The Trilogy Finale Teaser Trailer Leaked Online</a></h3>
                                    <p class="date">12 march 2013  // 45 Comments</p>
                                    <p>Ever since the first ‘The Hangover’ movie (which also had an equally amazing movie trailer), people across the country have been enamored by the magic of black-out drinking...</p>
                                </div>
                            </article>
                        </div>
                        <div class="span2">
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
                            <article class="twoboxes last">
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
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="right-container">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="marked-title">
                                <h3>be social</h3>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <span class="icon fb"></span>
                                        25875<br><span>facebook fans</span>   
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon tw"></span>
                                        25875<br><span>twitter fans</span>   
                                    </a>
                                </li>
                                <li class="third">
                                    <a href="#">
                                        <span class="icon rss"></span>
                                        25875<br><span>subscribers</span>   
                                    </a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="widget">
                            <div class="marked-title">
                                <h3>ads</h3>
                            </div>
                            <img class="ads" src="<?=base_url();?>assets/img/ads.jpg" alt="">
                            <div class="clear"></div>
                        </div>
                        <div class="widget">
                            <div class="marked-title">
                                <h3>Tags</h3>
                            </div>
                            <ul class="tags">
                                <li><a class="photo" href="#">entaertainement</a></li>
                                <li><a class="photo" href="#">business</a></li>
                                <li><a class="photo" href="#">rumors</a></li>
                                <li><a class="photo" href="#">popular news</a></li>
                                <li><a class="photo" href="#">rumors</a></li>
                                <li><a class="photo" href="#">business</a></li>
                                <li><a class="photo" href="#">popular news</a></li>
                                <li><a class="photo" href="#">spotlight</a></li>
                                <li><a class="photo" href="#">entaertainement</a></li>
                                <li><a class="photo" href="#">business</a></li>
                                <li><a class="photo" href="#">rumors</a></li>
                                <li><a class="photo" href="#">popular news</a></li>
                                <li><a class="photo" href="#">rumors</a></li>
                                <li><a class="photo" href="#">business</a></li>
                                <li><a class="photo" href="#">popular news</a></li>
                                <li><a class="photo" href="#">spotlight</a></li>
                                <li><a class="photo" href="#">entaertainement</a></li>
                                <li><a class="photo" href="#">business</a></li>
                                <li><a class="photo" href="#">rumors</a></li>
                                <li><a class="photo" href="#">popular news</a></li>
                                <li><a class="photo" href="#">rumors</a></li>
                                <li><a class="photo" href="#">business</a></li>
                                <li><a class="photo" href="#">popular news</a></li>
                                <li><a class="photo" href="#">spotlight</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="widget">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab">latest</a></li>
                                <li><a href="#tab-2" data-toggle="tab">popular</a></li>
                                <li><a href="#tab-3" data-toggle="tab">commented</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-1">
                                    <div class="news">
                                        <div class="item">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item last">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <div class="news">
                                        <div class="item">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item last">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-3">
                                    <div class="news">
                                        <div class="item">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="item last">
                                            <h3><a href="#">Do Critics Think Jason Statham’s New Action Movie Kicks Ass?</a></h3>
                                            <p>12 march 2013 // entertainment // 47 comments</p>
                                            <ul class="rating calc">
                                                <li class="active nr_1"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_2"><a href="javascript:void(0)"></a></li>
                                                <li class="active nr_3"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_4"><a href="javascript:void(0)"></a></li>
                                                <li class="nr_5"><a href="javascript:void(0)"></a></li>
                                            </ul>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>	
        </div>
	    <!-- end div #main -->