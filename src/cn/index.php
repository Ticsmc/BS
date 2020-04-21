<!DOCTYPE html>
<html lang="zh">
<?php
require_once("../config.php");
$mysqli=new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME,$DB_PORT);
$mysqli->set_charset("utf8");?>
<head>
    <script async src = "//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" >
    </script>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8550836177608334",
        enable_page_level_ads: true
    });
    </script>
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "https://hm.baidu.com/hm.js?c05bb16ea908292af9f6c513087a1cc3";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="viggo" />
    <title>我的毕业设计</title>


    <link rel="shortcut icon" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="../assets/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="../assets/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/xenon-core.css">
    <link rel="stylesheet" href="../assets/css/xenon-components.css">
    <link rel="stylesheet" href="../assets/css/xenon-skins.css">
    <link rel="stylesheet" href="../assets/css/nav.css">
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- / FB Open Graph -->
    <!--<meta property="og:type" content="article">-->
    <!--<meta property="og:url" content="http://www.webstack.cc/">-->
    <!--<meta property="og:title" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">-->
    <!--<meta property="og:description" content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">-->
    <!--<meta property="og:image" content="http://webstack.cc/assets/images/webstack_banner_cn.png">-->
    <!--<meta property="og:site_name" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">-->
    <!--&lt;!&ndash; / Twitter Cards &ndash;&gt;-->
<!--    <meta name="twitter:card" content="summary_large_image">-->
<!--    <meta name="twitter:title" content="WebStack - 收集国内外优秀设计网站、UI设计资源网站、灵感创意网站、素材资源网站，定时更新分享优质产品设计书签。www.webstack.cc">-->
<!--    <meta name="twitter:description" content="UI设计,UI设计素材,设计导航,网址导航,设计资源,创意导航,创意网站导航,设计师网址大全,设计素材大全,设计师导航,UI设计资源,优秀UI设计欣赏,设计师导航,设计师网址大全,设计师网址导航,产品经理网址导航,交互设计师网址导航,www.webstack.cc">-->
<!--    <meta name="twitter:image" content="http://www.webstack.cc/assets/images/webstack_banner_cn.png">-->
</head>

<body class="page-body">
    <!-- skin-white -->
    <div class="page-container">
        <div class="sidebar-menu toggle-others fixed">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
                    <div class="logo">
                        <a href="index.php" class="logo-expanded">
                            <img src="../assets/images/logo_zknu.png" width="100%" alt="" />
                        </a>
                        <a href="index.php" class="logo-collapsed">
                            <img src="../assets/images/logo-collapsed@2x.png" width="40" alt="" />
                        </a>
                    </div>
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="user-info-menu">
                            <i class="linecons-cog"></i>
                        </a>
                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                    <?php
<<<<<<< HEAD

=======
>>>>>>> 276e9d894155cb08a68cd6806bbc46eecdb376e9
                    $stmt=$mysqli->prepare("SELECT * FROM site_type ORDER BY st_id");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $site_type_ids = array();
                    $site_type_name = array();
                    while ($row = $result->fetch_assoc()) {
                        array_push($site_type_ids, $row['st_id']);
                        array_push($site_type_name, $row['st_name']);
                        ?>
                        <li>
                            <a href="#<?php echo $row['st_id'];?>" class="smooth">
                                <i class="linecons-star"></i>
                                <span class="title"><?php echo $row['st_name']; ?></span>
                            </a>
<<<<<<< HEAD
                            <ul>
                                <?php
                                $mysqli_2=new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME,$DB_PORT);
                                $mysqli_2->set_charset("utf8");
                                $stmt_2=$mysqli_2->prepare("SELECT * from site WHERE s_type_id = ?");
                                $stmt_2->bind_param('i', $row['st_id']);
                                $stmt_2->execute();
                                $result_2 = $stmt_2->get_result();
                                while ($row = $result_2->fetch_assoc()) {?>
                                    <li>
                                        <a id="<?php echo $row['s_url']; ?>" class="smooth load-topic">
                                            <span class="title"><?php echo $row['s_name']?></span>
                                        </a>
                                    </li>

                                <?php } ?>
                            </ul>

=======
>>>>>>> 276e9d894155cb08a68cd6806bbc46eecdb376e9
                        </li>

                    <?php } ?>



<!--                    <div class="submit-tag">-->
<!--                        <a href="about.html">-->
<!--                            <i class="linecons-heart"></i>-->
<!--                            <span class="tooltip-blue">关于本站</span>-->
<!--                            <span class="label label-Primary pull-right hidden-collapsed">♥︎</span>-->
<!--                        </a>-->
<!--                    </div>-->
                </ul>
            </div>
        </div>
        <div class="main-content">
            <nav class="navbar user-info-navbar" role="navigation">
<!--                 User Info, Notifications and Menu Bar-->
<!--                 Left links for user info navbar-->
                <ul class="user-info-menu left-links list-inline list-unstyled">
                    <li class="hidden-sm hidden-xs">
                    <a href="#" data-toggle="sidebar">
                        <i class="fa-bars"></i>
                    </a>
                </li>
<!--                    <li class="dropdown hover-line language-switcher">-->
<!--                        <a href="../cn/index.php" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                            <img src="../assets/images/flags/flag-cn.png" alt="flag-cn" /> Chinese-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu languages">-->
<!--                            <li>-->
<!--                                <a href="../en/index.php">-->
<!--                                    <img src="../assets/images/flags/flag-us.png" alt="flag-us" /> English-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li class="active">-->
<!--                                <a href="../cn/index.php">-->
<!--                                    <img src="../assets/images/flags/flag-cn.png" alt="flag-cn" /> Chinese-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </li>-->

                </ul>
                <H1 class="text-gray" > 毕业设计</H1>
            </nav>
            <!-- 常用推荐 -->
<<<<<<< HEAD
            <div id="topic-list" class="">
=======
>>>>>>> 276e9d894155cb08a68cd6806bbc46eecdb376e9
        <?php
        for ($i = 0; $i < count($site_type_ids); $i++){ ?>
            <h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="<?php echo $site_type_ids[$i] ?>"><?php echo $site_type_name[$i] ?></i></h4>
                <?php
                $stmt=$mysqli->prepare("SELECT * from site WHERE s_type_id = ?");
                $stmt->bind_param('i', $site_type_ids[$i]);
                $stmt->execute();
                $result = $stmt->get_result();
                while ($row = $result->fetch_assoc()) {?>

<<<<<<< HEAD
                <div  class="col-sm-3">

                        <div  class="xe-widget xe-conversations box2 label-info"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title=<?php echo $row['s_name'] ?>>
                        <div  class="xe-comment-entry" id="<?php echo $row['s_url']; ?>">
                            <a class="xe-user-img">
                                <img data-src="../assets/images/logos/<?php echo $site_type_ids[$i] ?>.png" class="lozad img-circle" width="40">
                            </a>
                            <div  class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong><?php echo $row['s_name']?></strong>
                                </a>

=======
                <div class="col-sm-3">
                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('.<?php echo $row['s_url'] ?>', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title=<?php echo $row['s_name'] ?>>
                        <div class="xe-comment-entry">
                            <a class="xe-user-img">
                                <img data-src="../assets/images/logos/<?php echo $site_type_ids[$i] ?>.png" class="lozad img-circle" width="40">
                            </a>
                            <div class="xe-comment">
                                <a href="#" class="xe-user-name overflowClip_1">
                                    <strong><?php echo $row['s_name']?></strong>
                                </a>
>>>>>>> 276e9d894155cb08a68cd6806bbc46eecdb376e9
                                <p class="overflowClip_2"> 难度:<?php echo $row['s_id']/5 ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
            <div class="row"></div>
            <?php } ?>
<<<<<<< HEAD
            <?php mysqli_close($mysqli);
            mysqli_close($mysqli_2);?>
            </div>
=======
            <?php mysqli_close($mysqli);?>

>>>>>>> 276e9d894155cb08a68cd6806bbc46eecdb376e9

            <!--END 界面设计 -->
            <!-- 交互动效 -->
            <!--<h4 class="text-gray"><i class="linecons-tag" style="margin-right: 7px;" id="交互动效"></i>交互动效</h4>-->
            <!--<div class="row">-->
<!--                <div class="col-sm-3">-->
<!--                    <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('https://www.adobe.com/cn/products/aftereffects/', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="https://www.adobe.com/cn/products/aftereffects/">-->
<!--                        <div class="xe-comment-entry">-->
<!--                            <a class="xe-user-img">-->
<!--                                <img data-src="../assets/images/logos/AdobeAfterEffectsCC.png" class="lozad img-circle" width="40">-->
<!--                            </a>-->
<!--                            <div class="xe-comment">-->
<!--                                <a href="#" class="xe-user-name overflowClip_1">-->
<!--                                    <strong>Adobe After Effects CC</strong>-->
<!--                                </a>-->
<!--                                <p class="overflowClip_2">电影般的视觉效果和动态图形。</p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <!--<br />-->


            <!--END UED团队 -->
            <!-- Main Footer -->
            <!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
            <!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
            <!-- Or class "fixed" to  always fix the footer to the end of page -->
            <footer class="main-footer sticky footer-type-1">
                <div class="footer-inner">
                    <!-- Add your copyright text here -->
                    <div class="footer-text">
                        &copy; 2017-2019
                        <a href="../cn/about.html"><strong>zhr</strong></a> design by <strong>BZ</strong>
                        <!--  - Purchase for only <strong>23$</strong> -->
                    </div>
                    <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                    <div class="go-up">
                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- 锚点平滑移动 -->
    <script type="text/javascript">
    $(document).ready(function() {
         //img lazy loaded
         const observer = lozad();
         observer.observe();

<<<<<<< HEAD
        // $(document).on('click', '.has-sub', function(){
        //     var _this = $(this)
        //     if(!$(this).hasClass('expanded')) {
        //        setTimeout(function(){
        //             _this.find('ul').attr("style","")
        //        }, 300);
        //
        //     } else {
        //         $('.has-sub ul').each(function(id,ele){
        //             var _that = $(this)
        //             if(_this.find('ul')[0] != ele) {
        //                 setTimeout(function(){
        //                     _that.attr("style","")
        //                 }, 300);
        //             }
        //         })
        //     }
        // })
        // $('.user-info-menu .hidden-sm').click(function(){
        //     if($('.sidebar-menu').hasClass('collapsed')) {
        //         $('.has-sub.expanded > ul').attr("style","")
        //     } else {
        //         $('.has-sub.expanded > ul').show()
        //     }
        // })
        // $("#main-menu li ul li").click(function() {
        //     $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
        //     $(this).addClass('active'); // 添加当前元素的样式
        // });
        // $("a.smooth").click(function(ev) {
        //     ev.preventDefault();
        //
        //     public_vars.$mainMenu.add(public_vars.$sidebarProfile).toggleClass('mobile-is-visible');
        //     ps_destroy();
        //     $("html, body").animate({
        //         scrollTop: $($(this).attr("href")).offset().top - 30
        //     }, {
        //         duration: 500,
        //         easing: "swing"
        //     });
        // });

        $("div.xe-comment-entry").click(function() {
            $("#topic-list").css("height","550px");
             var urls = "<iframe src=\"." +$(this).attr("id")+"\" width=\"100%\" height=\"100%\" frameborder=\"0\">\n" +
                 "    您的浏览器不支持iframe，请升级\n" +
                 "    </iframe>";
             // alert(urls);
            // $("#topic-list").innerHTML=urls;
            $("#topic-list").html(urls);
            // alert( $("#topic-list").html());
        });
        $("a.load-topic").click(function () {
            $("#topic-list").css("height","550px");
            var urls = "<iframe src=\"." +$(this).attr("id")+"\" width=\"100%\" height=\"100%\" frameborder=\"0\">\n" +
                "    您的浏览器不支持iframe，请升级\n" +
                "    </iframe>";
             // alert(urls);
            $("#topic-list").html(urls);
        });

        return false;
    });

    // var href = "";
    // var pos = 0;
    // $("a.smooth").click(function(e) {
    //     $("#main-menu li").each(function() {
    //         $(this).removeClass("active");
    //     });
    //     $(this).parent("li").addClass("active");
    //     e.preventDefault();
    //     href = $(this).attr("href");
    //     pos = $(href).position().top - 30;
    // });

=======
        $(document).on('click', '.has-sub', function(){
            var _this = $(this)
            if(!$(this).hasClass('expanded')) {
               setTimeout(function(){
                    _this.find('ul').attr("style","")
               }, 300);
              
            } else {
                $('.has-sub ul').each(function(id,ele){
                    var _that = $(this)
                    if(_this.find('ul')[0] != ele) {
                        setTimeout(function(){
                            _that.attr("style","")
                        }, 300);
                    }
                })
            }
        })
        $('.user-info-menu .hidden-sm').click(function(){
            if($('.sidebar-menu').hasClass('collapsed')) {
                $('.has-sub.expanded > ul').attr("style","")
            } else {
                $('.has-sub.expanded > ul').show()
            }
        })
        $("#main-menu li ul li").click(function() {
            $(this).siblings('li').removeClass('active'); // 删除其他兄弟元素的样式
            $(this).addClass('active'); // 添加当前元素的样式
        });
        $("a.smooth").click(function(ev) {
            ev.preventDefault();

            public_vars.$mainMenu.add(public_vars.$sidebarProfile).toggleClass('mobile-is-visible');
            ps_destroy();
            $("html, body").animate({
                scrollTop: $($(this).attr("href")).offset().top - 30
            }, {
                duration: 500,
                easing: "swing"
            });
        });
        return false;
    });

    var href = "";
    var pos = 0;
    $("a.smooth").click(function(e) {
        $("#main-menu li").each(function() {
            $(this).removeClass("active");
        });
        $(this).parent("li").addClass("active");
        e.preventDefault();
        href = $(this).attr("href");
        pos = $(href).position().top - 30;
    });
>>>>>>> 276e9d894155cb08a68cd6806bbc46eecdb376e9
    </script>
    <!-- Bottom Scripts -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/TweenMax.min.js"></script>
    <script src="../assets/js/resizeable.js"></script>
    <script src="../assets/js/joinable.js"></script>
    <script src="../assets/js/xenon-api.js"></script>
    <script src="../assets/js/xenon-toggles.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="../assets/js/xenon-custom.js"></script>
    <script src="../assets/js/lozad.js"></script>
</body>

</html>
