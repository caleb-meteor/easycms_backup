<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>
<!-- 面包屑导航开始 -->
<?php echo template('position.html'); ?>
<!-- 面包屑导航结束 -->

<style>
 #timeline .timeline-item:after,#timeline .timeline-item:before {
    content: '';
    display: block;
    width: 100%;
    clear: both;
}
*, *:before, *:after {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

#timeline {
    width: 90%;
    margin: 30px auto;
    position: relative;
    -webkit-transition: all 0.4s ease;
    -moz-transition: all 0.4s ease;
    -ms-transition: all 0.4s ease;
    transition: all 0.4s ease;
}
#timeline:before {
    content: "";
    width: 3px;
    height: 100%;
    background: #ccc;
    left: 50%;
    top: 0;
    position: absolute;
}
#timeline:after {
    content: "";
    clear: both;
    display: table;
    width: 100%}
#timeline .timeline-item {
    margin-bottom: 50px;
    position: relative;
}
#timeline .timeline-item .timeline-icon {
    background: #ccc;
    width: 50px;
    height: 50px;
    position: absolute;
    top: 0;
    left: 50%;
    overflow: hidden;
    margin-left: -23px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%}
#timeline .timeline-item .timeline-icon img {
    position: relative;
    top: 14px;
    left: 14px;
}
#timeline .timeline-item .timeline-content {
    width: 45%;
    background: #fff;
    padding: 20px;
border:1px solid #ccc;
    -webkit-box-shadow: 0 3px 0 #ccc;
    -moz-box-shadow: 0 3px 0 #ccc;
    -ms-box-shadow: 0 3px 0 #ccc;
    box-shadow: 0 3px 0 #ccc;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#timeline .timeline-item .timeline-content h2 {
    padding: 15px;
    background: #ccc;
    color: #fff;
    margin: -20px -20px 20px -20px;
    font-size: 1.2em;
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    -ms-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
}
#timeline .timeline-item .timeline-content:before {
    content: '';
    position: absolute;
    left: 45%;
    top: 20px;
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-left: 7px solid #ccc;
}
#timeline .timeline-item .timeline-content.right {
    float: right;
}
#timeline .timeline-item .timeline-content.right:before {
    content: '';
    right: 45%;
    left: inherit;
    border-left: 0;
    border-right: 7px solid #ccc;
}
.btn {
    padding: 5px 15px;
    text-decoration: none;
    background: transparent;
    border: 2px solid #ccc;
    color: #ccc;
    display: inline-block;
    position: relative;
    text-transform: uppercase;
    font-size: 12px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    -webkit-transition: background 0.3s ease;
    -moz-transition: background 0.3s ease;
    -ms-transition: background 0.3s ease;
    transition: background 0.3s ease;
    -webkit-box-shadow: 2px 2px 0 #ccc;
    -moz-box-shadow: 2px 2px 0 #ccc;
    -ms-box-shadow: 2px 2px 0 #ccc;
    box-shadow: 2px 2px 0 #ccc;
}
.btn:hover {
    box-shadow: none;
    top: 2px;
    left: 2px;
    -webkit-box-shadow: 2px 2px 0 transparent;
    -moz-box-shadow: 2px 2px 0 transparent;
    -ms-box-shadow: 2px 2px 0 transparent;
    box-shadow: 2px 2px 0 transparent;
}
@media screen and (max-width: 768px) {
    #timeline {
    margin: 30px;
    padding: 0;
}
#timeline:before {
    left: 0;
}
#timeline .timeline-item .timeline-content {
    width: 90%;
    float: right;
}
#timeline .timeline-item .timeline-content:before, #timeline .timeline-item .timeline-content.right:before {
    left: 10%;
    margin-left: -6px;
    border-left: 0;
    border-right: 7px solid #ccc;
}
#timeline .timeline-item .timeline-icon {
    left: 0;
}

.timeline-content p {font-size:12px;}
}

.timeline-icon span.glyphicon {margin:13px 0px 0px 15px;font-size:20px;color:white;}

</style>

<!-- 页面标题开始 -->
<div class="title">
<h3 class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo $cat['url'];?>"><?php echo $category[$catid]['catname'];?><small><?php echo $category[$catid]['subtitle'];?></small></a></h3>
<p class="wow fadeIn" data-wow-delay="0.5s"><?php echo $category[$catid]['description'];?></p>
<span>——</span>
</div>
<!-- 页面标题结束 -->

<!-- 中部开始 -->

<div class="htmleaf-container">
<div class="container">
<div id="timeline">

<?php if(is_array($archives))
foreach($archives as $i => $archive) { ?>

<div class="timeline-item">
<div class="timeline-icon">
<span class="glyphicon glyphicon-time"></span>
</div>
<div class="timeline-content row<?php if($i%2==1) { ?> right<?php } ?>">
<h2><?php echo $archive['title'];?></h2>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<img class="img-responsive" alt="<?php echo $archive['stitle'];?>" src="<?php echo $archive['thumb'];?>" onerror='this.src="<?php echo config::get('onerror_pic');?>"' />
</div>
<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">	
<p><?php echo cut(strip_tags($archive['introduce']),50);?></p>
<a href="<?php echo $archive['url'];?>" class="btn"><?php echo lang('more');?></a>
</div>
</div>
</div>
<?php } ?>


</div>
<div class="blank30"></div>
<!-- 内容列表分页开始 -->
<?php if(isset($pages)) { ?>
<div class="blank30"></div>
<?php echo category_pagination($catid);?>
<div class="blank30"></div>
<?php } ?>
<!-- 内容列表分页结束 -->
</div>
<div class="blank60"></div>
</div><!-- /container -->


<div class="blank30"></div>


<!-- 页底推荐图文产品开始 -->
<?php echo templatetag::tag('内容页底图文产品三条');?>
<!-- 页底推荐图文产品结束 -->


<?php echo template('footer.html'); ?>