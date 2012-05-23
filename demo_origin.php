<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nicu
 * Date: 5/22/12
 * Time: 1:11 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>jQuery custom scrollbar demo</title>
    <style type="text/css">
        <!--
        html,body{height:100%;}
        body {margin:0; padding:0; background:#111 url(images/mcs_demo_bg.jpg) no-repeat; min-width:1100px; min-height:940px;}
        a:link,a:visited,a:hover{color:#C30;}
        .info{position:absolute; left:40px; top:20px; width:260px; color:#CCC; font-family:"Lobster",Arial, Helvetica, sans-serif; font-size:18px; padding:5px;}
        .info .big{font-size:34px;}
        .postURL{position:absolute; top:20px; right:20px; display:block; width:100px; height:100px; background:url(images/plugin_homepage.png) no-repeat; z-index:10;}
        .blue{color:#09C;}
        h1{padding:10px 5px; margin:10px 0; color:#fff; font-family:"Yanone Kaffeesatz", Georgia, "Times New Roman", Times, serif; font-size:36px; font-weight:normal; line-height:34px;}
        h2{font-family:"Lobster",Arial, Helvetica, sans-serif; font-size:22px; font-weight:normal; color:#09C; margin-left:5px;}
        h3{font-family:"Lobster",Arial, Helvetica, sans-serif; font-size:26px; font-weight:normal; color:#31231E; margin-left:10px;}
        h4{font-family:"Lobster",Arial, Helvetica, sans-serif; font-size:18px; font-weight:normal; color:#C30; margin:5px 10px;}
        -->
    </style>
    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
</head>

<body>
<a href="http://manos.malihu.gr/jquery-custom-content-scroller" class="postURL"></a>
<div class="info"><span class="blue">malihu </span><br /><span class="big">Custom Scrollbar </span>plugin</div>
<!-- content block -->
<div id="mcs_container">
    <div class="customScrollBox">
        <div class="container">
            <div class="content">
                <h1>Adjustable scroller height with easing</h1>
                <p><a href="#" onclick="LoadNewContent('mcs_container','dynamic_content.html');return false">Load new content dynamically</a></p>
                <p style="color:#C96;">Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. </p>
                <p class="alt"><em>consectetur adipiscing elit. Nulla consectetur libero consectetur quam consequat nec tincidunt massa feugiat. Donec egestas mi turpis. Fusce adipiscing dui eu metus gravida vel facilisis ligula iaculis. Cras a rhoncus massa. Donec sed purus eget nunc placerat consequat.</em></p>
                <img src="images/mcsImg1.jpg" />
                <p>Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. Cras venenatis condimentum nibh a mollis. Duis id sapien nibh. Vivamus porttitor, felis quis blandit tincidunt, erat magna scelerisque urna, a faucibus erat nisl eget nisl. Aliquam consequat turpis id velit egestas a posuere orci semper. Mauris suscipit erat quis urna adipiscing ultricies. In hac habitasse platea dictumst. Nulla scelerisque lorem quis dui sagittis egestas.</p>
                <p class="alt">Etiam sed massa felis, aliquam pellentesque est. Quisque quis ante tortor, sed egestas risus. Maecenas varius adipiscing nulla, nec rhoncus est mattis id. Aenean blandit convallis nisi at fringilla. Nunc id massa eu sapien fringilla posuere.</p>
                <img src="images/mcsImg2.jpg" />
                <p style="color:#C96;">Nam eu arcu at purus tincidunt pharetra ultrices at ipsum. Mauris urna nunc, vulputate quis gravida in, pharetra id mauris. Ut sit amet mi dictum nulla lobortis adipiscing quis a nulla. Etiam diam ante, imperdiet vel scelerisque eget, venenatis non eros. Praesent ipsum sem, eleifend ut gravida eget, tristique id orci. Nam adipiscing, sem in mattis vulputate, risus libero adipiscing risus, eu molestie mi justo eget nulla.</p>
                <p>Cras venenatis metus et urna egestas non laoreet orci rutrum. Pellentesque ullamcorper dictum nisl a tincidunt. Quisque et lacus quam, sed hendrerit mi. Mauris pretium, sapien et malesuada pulvinar, lorem leo viverra leo, et egestas mi nisl quis odio. </p>
                <p>Aliquam erat volutpat. Sed urna arcu, tempus eu vulputate adipiscing, consectetur et orci. Vivamus congue, nunc vitae fringilla convallis, libero massa lacinia lorem, id convallis mauris elit ut leo. Nulla vel odio sem. Duis lorem urna, congue vitae rutrum sed, tincidunt vel tortor. In hac habitasse platea dictumst. Nunc vitae enim ante, vitae facilisis massa. Etiam sagittis sapien at nibh fermentum consectetur convallis lacus blandit.</p>
                <h1>the end.</h1>
            </div>
        </div>
        <div class="dragger_container">
            <div class="dragger"></div>
        </div>
    </div>
    <a href="#" class="scrollUpBtn"></a> <a href="#" class="scrollDownBtn"></a>
</div>

<!-- content block -->
<div id="mcs2_container">
    <div class="customScrollBox">
        <div class="container">
            <div class="content">
                <h1>Adjustable scroller height without easing</h1>
                <p><a href="#" onclick="LoadNewContent('mcs2_container','dynamic_content.html');return false">Load new content dynamically</a></p>
                <p class="alt">Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam.</p>
                <p><em>consectetur adipiscing elit. Nulla consectetur libero consectetur quam consequat nec tincidunt massa feugiat. Fusce adipiscing dui eu metus gravida vel facilisis ligula iaculis.</em></p>
                <img src="images/mcsImg2.jpg" />
                <p>In hac habitasse platea dictumst. Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. Cras venenatis condimentum nibh a mollis. Duis id sapien nibh. Vivamus porttitor, felis quis blandit tincidunt, erat magna scelerisque urna, a faucibus erat nisl eget nisl. Aliquam consequat turpis id velit egestas a posuere orci semper.</p>
                <h1>the end.</h1>
            </div>
        </div>
        <div class="dragger_container">
            <div class="dragger">&#9618;</div>
        </div>
    </div>
</div>

<!-- content block -->
<div id="mcs3_container">
    <div class="customScrollBox">
        <div class="container">
            <div class="content">
                <h3>Adjustable scroller height with 1/3 range and greater easing, without mouse-wheel support</h3>
                <p>Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. </p>
                <p>consectetur adipiscing elit. Nulla consectetur libero consectetur quam consequat nec tincidunt massa feugiat. Donec egestas mi turpis. Fusce adipiscing dui eu metus gravida vel facilisis ligula iaculis. Cras a rhoncus massa. Donec sed purus eget nunc placerat consequat. Nulla facilisi. Nam vel augue odio, dignissim mattis dolor. Nullam at mi aliquet quam interdum consectetur. Duis tempus mauris in lorem dictum eget euismod urna aliquet. In vestibulum tempor porta.</p>
                <p>Morbi porttitor rhoncus nisi, eget vehicula quam sodales at. Maecenas ipsum tellus, mollis quis faucibus id, feugiat molestie lacus. Sed nec quam purus, at condimentum quam. Integer imperdiet faucibus urna tempus consectetur. Nullam non purus ligula, et tincidunt nulla. Aenean tincidunt, dui at elementum egestas, sem turpis volutpat turpis, nec congue purus quam quis ligula. Nam dictum rutrum pulvinar. Aenean sed cursus purus. Curabitur non dui eu nibh fermentum interdum a id dui. Fusce iaculis blandit tellus, nec tincidunt massa adipiscing id. Aliquam dui massa, porttitor eget molestie at, semper eu libero. Suspendisse sit amet velit et elit viverra convallis vitae ut turpis. Maecenas vehicula blandit odio sollicitudin eleifend. Curabitur molestie porta neque ac imperdiet. Phasellus nec nisl non lectus pharetra porttitor sit amet tristique mi. Integer vehicula vestibulum sem vitae varius. Ut scelerisque semper posuere.</p>
                <img src="images/mcsImg1.jpg" />
                <p>Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. Cras venenatis condimentum nibh a mollis. Duis id sapien nibh. Vivamus porttitor, felis quis blandit tincidunt, erat magna scelerisque urna, a faucibus erat nisl eget nisl. Aliquam consequat turpis id velit egestas a posuere orci semper. Mauris suscipit erat quis urna adipiscing ultricies. In hac habitasse platea dictumst. Nulla scelerisque lorem quis dui sagittis egestas. Etiam sed massa felis, aliquam pellentesque est. Quisque quis ante tortor, sed egestas risus. Maecenas varius adipiscing nulla, nec rhoncus est mattis id. Aenean blandit convallis nisi at fringilla. Nunc id massa eu sapien fringilla posuere.</p>
                <img src="images/mcsImg2.jpg" />
                <p>Nam eu arcu at purus tincidunt pharetra ultrices at ipsum. Mauris urna nunc, vulputate quis gravida in, pharetra id mauris. Ut sit amet mi dictum nulla lobortis adipiscing quis a nulla. Etiam diam ante, imperdiet vel scelerisque eget, venenatis non eros. Praesent ipsum sem, eleifend ut gravida eget, tristique id orci. Nam adipiscing, sem in mattis vulputate, risus libero adipiscing risus, eu molestie mi justo eget nulla. Cras venenatis metus et urna egestas non laoreet orci rutrum. Pellentesque ullamcorper dictum nisl a tincidunt. Quisque et lacus quam, sed hendrerit mi. Mauris pretium, sapien et malesuada pulvinar, lorem leo viverra leo, et egestas mi nisl quis odio. Aliquam erat volutpat. Sed urna arcu, tempus eu vulputate adipiscing, consectetur et orci. Vivamus congue, nunc vitae fringilla convallis, libero massa lacinia lorem, id convallis mauris elit ut leo. Nulla vel odio sem. Duis lorem urna, congue vitae rutrum sed, tincidunt vel tortor. In hac habitasse platea dictumst. Nunc vitae enim ante, vitae facilisis massa. Etiam sagittis sapien at nibh fermentum consectetur convallis lacus blandit.</p>
                <img src="images/mcsImg1.jpg" />
                <p>Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. Cras venenatis condimentum nibh a mollis. Duis id sapien nibh. Vivamus porttitor, felis quis blandit tincidunt, erat magna scelerisque urna, a faucibus erat nisl eget nisl. Aliquam consequat turpis id velit egestas a posuere orci semper. Mauris suscipit erat quis urna adipiscing ultricies. In hac habitasse platea dictumst. Nulla scelerisque lorem quis dui sagittis egestas. Etiam sed massa felis, aliquam pellentesque est. Quisque quis ante tortor, sed egestas risus. Maecenas varius adipiscing nulla, nec rhoncus est mattis id. Aenean blandit convallis nisi at fringilla. Nunc id massa eu sapien fringilla posuere.</p>
                <img src="images/mcsImg2.jpg" />
                <p>Nam eu arcu at purus tincidunt pharetra ultrices at ipsum. Mauris urna nunc, vulputate quis gravida in, pharetra id mauris. Ut sit amet mi dictum nulla lobortis adipiscing quis a nulla. Etiam diam ante, imperdiet vel scelerisque eget, venenatis non eros. Praesent ipsum sem, eleifend ut gravida eget, tristique id orci. Nam adipiscing, sem in mattis vulputate, risus libero adipiscing risus, eu molestie mi justo eget nulla. Cras venenatis metus et urna egestas non laoreet orci rutrum. Pellentesque ullamcorper dictum nisl a tincidunt. Quisque et lacus quam, sed hendrerit mi. Mauris pretium, sapien et malesuada pulvinar, lorem leo viverra leo, et egestas mi nisl quis odio. Aliquam erat volutpat. Sed urna arcu, tempus eu vulputate adipiscing, consectetur et orci. Vivamus congue, nunc vitae fringilla convallis, libero massa lacinia lorem, id convallis mauris elit ut leo. Nulla vel odio sem. Duis lorem urna, congue vitae rutrum sed, tincidunt vel tortor. In hac habitasse platea dictumst. Nunc vitae enim ante, vitae facilisis massa. Etiam sagittis sapien at nibh fermentum consectetur convallis lacus blandit.</p>
                <p>the end.</p>
            </div>
        </div>
        <div class="dragger_container">
            <div class="dragger"></div>
        </div>
    </div>
</div>

<!-- content block -->
<div id="mcs4_container">
    <div class="customScrollBox">
        <div class="container">
            <div class="content">
                <h2>Non-adjustable scroller height with minor easing</h2>
                <p>Lorem ipsum dolor sit amet. Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. </p>
                <p>consectetur adipiscing elit. Nulla consectetur libero consectetur quam consequat nec tincidunt massa feugiat. Donec egestas mi turpis. Fusce adipiscing dui eu metus gravida vel facilisis ligula iaculis. Cras a rhoncus massa. Donec sed purus eget nunc placerat consequat. Nulla facilisi. Nam vel augue odio, dignissim mattis dolor. Nullam at mi aliquet quam interdum consectetur. Duis tempus mauris in lorem dictum eget euismod urna aliquet. In vestibulum tempor porta.</p>
                <p>Aliquam erat volutpat. Maecenas non tortor nulla, non malesuada velit. Nullam felis tellus, tristique nec egestas in, luctus sed diam. Suspendisse potenti. Cras venenatis condimentum nibh a mollis. Duis id sapien nibh. Vivamus porttitor, felis quis blandit tincidunt, erat magna scelerisque urna, a faucibus erat nisl eget nisl. Aliquam consequat turpis id velit egestas a posuere orci semper. Mauris suscipit erat quis urna adipiscing ultricies. In hac habitasse platea dictumst. Nulla scelerisque lorem quis dui sagittis egestas. Etiam sed massa felis, aliquam pellentesque est. Quisque quis ante tortor, sed egestas risus. Maecenas varius adipiscing nulla, nec rhoncus est mattis id. Aenean blandit convallis nisi at fringilla. Nunc id massa eu sapien fringilla posuere.</p>
                <h2>the end.</h2>
            </div>
        </div>
        <div class="dragger_container">
            <div class="dragger"></div>
        </div>
    </div>
</div>

<!-- content block -->
<div id="mcs5_container">
    <div class="customScrollBox">
        <!-- horWrapper div is important for horizontal scrollers! -->
        <div class="horWrapper">
            <div class="container">
                <div class="content">
                    <h4>Horizontal non-adjustable image scroller with easing</h4>
                    <p><img src="images/mcsThumb1.jpg" /><img src="images/mcsThumb2.jpg" /><img src="images/mcsThumb3.jpg" /><img src="images/mcsThumb4.jpg" /><img src="images/mcsThumb5.jpg" /><img src="images/mcsThumb6.jpg" /><img src="images/mcsThumb7.jpg" /><img src="images/mcsThumb8.jpg" /><img src="images/mcsThumb1.jpg" /><img src="images/mcsThumb2.jpg" /><img src="images/mcsThumb3.jpg" /><img src="images/mcsThumb4.jpg" /></p>
                </div>
            </div>
            <div class="dragger_container">
                <div class="dragger"></div>
            </div>
        </div>
    </div>
    <a href="#" class="scrollUpBtn">&#8678;</a> <a href="#" class="scrollDownBtn">&#8680;</a>
</div>

<!-- content to show if javascript is disabled -->
<noscript>
    <style type="text/css">
        #mcs_container .customScrollBox,#mcs2_container .customScrollBox,#mcs3_container .customScrollBox,#mcs4_container .customScrollBox,#mcs5_container .customScrollBox{overflow:auto;}
        #mcs_container .dragger_container,#mcs2_container .dragger_container,#mcs3_container .dragger_container,#mcs4_container .dragger_container,#mcs5_container .dragger_container{display:none;}
    </style>
</noscript>

<script>
    $(window).load(function() {
        mCustomScrollbars();
    });

    function mCustomScrollbars(){
        /*
      malihu custom scrollbar function parameters:
      1) scroll type (values: "vertical" or "horizontal")
      2) scroll easing amount (0 for no easing)
      3) scroll easing type
      4) extra bottom scrolling space for vertical scroll type only (minimum value: 1)
      5) scrollbar height/width adjustment (values: "auto" or "fixed")
      6) mouse-wheel support (values: "yes" or "no")
      7) scrolling via buttons support (values: "yes" or "no")
      8) buttons scrolling speed (values: 1-20, 1 being the slowest)
      */
        $("#mcs_container").mCustomScrollbar("vertical",400,"easeOutCirc",1.05,"auto","yes","yes",10);
        $("#mcs2_container").mCustomScrollbar("vertical",0,"easeOutCirc",1.05,"auto","yes","no",0);
        $("#mcs3_container").mCustomScrollbar("vertical",900,"easeOutCirc",1.05,"auto","no","no",0);
        $("#mcs4_container").mCustomScrollbar("vertical",200,"easeOutCirc",1.25,"fixed","yes","no",0);
        $("#mcs5_container").mCustomScrollbar("horizontal",500,"easeOutCirc",1,"fixed","yes","yes",20);
    }

    /* function to fix the -10000 pixel limit of jquery.animate */
    $.fx.prototype.cur = function(){
        if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {
            return this.elem[ this.prop ];
        }
        var r = parseFloat( jQuery.css( this.elem, this.prop ) );
        return typeof r == 'undefined' ? 0 : r;
    }

    /* function to load new content dynamically */
    function LoadNewContent(id,file){
        $("#"+id+" .customScrollBox .content").load(file,function(){
            mCustomScrollbars();
        });
    }
</script>
<script src="js/jquery.mCustomScrollbar.js"></script>
</body>
</html>
