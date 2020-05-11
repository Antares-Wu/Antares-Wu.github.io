<html>
<body>
<body>

<header class="navbar-fixed">
    <nav id="headNav" class="bg-color nav-transparent">
        <div id="navContainer" class="nav-wrapper container">
            <div class="brand-logo">
                <a href="/" class="waves-effect waves-light">

                    <img src="/medias/logo.png" class="logo-img" alt="LOGO">

                    <span class="logo-span">Antares-Wu's blog</span>
                </a>
            </div>


            <a href="#" data-target="mobile-nav" class="sidenav-trigger button-collapse"><i class="fa fa-navicon"></i></a>
            <ul class="right">

                <li class="hide-on-med-and-down">
                    <a href="/" class="waves-effect waves-light">

                        <span>首页</span>
                    </a>
                </li>

                <li class="hide-on-med-and-down">
                    <a href="/tags" class="waves-effect waves-light">

                        <span>标签</span>
                    </a>
                </li>

                <li class="hide-on-med-and-down">
                    <a href="/categories" class="waves-effect waves-light">

                        <span>分类</span>
                    </a>
                </li>

                <li class="hide-on-med-and-down">
                    <a href="/archives" class="waves-effect waves-light">

                        <span>归档</span>
                    </a>
                </li>

                <li class="hide-on-med-and-down">
                    <a href="/about" class="waves-effect waves-light">

                        <span>关于</span>
                    </a>
                </li>

                <li class="hide-on-med-and-down">
                    <a href="/friends" class="waves-effect waves-light">

                        <span>友情链接</span>
                    </a>
                </li>

                <li class="hide-on-med-and-down">
                    <a href="/contact" class="waves-effect waves-light">

                        <span>留言板</span>
                    </a>
                </li>

                <li>
                    <a href="#searchModal" class="modal-trigger waves-effect waves-light">
                        <i id="searchIcon" class="fa fa-search" title="搜索"></i>
                    </a>
                </li>
            </ul>

            <div id="mobile-nav" class="side-nav sidenav">

                <div class="mobile-head bg-color">

                    <img src="/medias/logo.png" class="logo-img circle responsive-img">

                    <div class="logo-name">Antares-Wu's blog</div>
                    <div class="logo-desc">

                        华东师范大学 | 数据科学与大数据技术

                    </div>
                </div>



                <ul class="menu-list mobile-menu-list">

                    <li>
                        <a href="/" class="waves-effect waves-light">

                            <i class="fa fa-fw fa-link"></i>

                            首页
                        </a>
                    </li>

                    <li>
                        <a href="/tags" class="waves-effect waves-light">

                            <i class="fa fa-fw fa-link"></i>

                            标签
                        </a>
                    </li>

                    <li>
                        <a href="/categories" class="waves-effect waves-light">

                            <i class="fa fa-fw fa-link"></i>

                            分类
                        </a>
                    </li>

                    <li>
                        <a href="/archives" class="waves-effect waves-light">

                            <i class="fa fa-fw fa-link"></i>

                            归档
                        </a>
                    </li>

                    <li>
                        <a href="/about" class="waves-effect waves-light">

                            <i class="fa fa-fw fa-link"></i>

                            关于
                        </a>
                    </li>

                    <li>
                        <a href="/friends" class="waves-effect waves-light">

                            <i class="fa fa-fw fa-link"></i>

                            友情链接
                        </a>
                    </li>

                    <li>
                        <a href="/contact" class="waves-effect waves-light">

                            <i class="fa fa-fw fa-link"></i>

                            留言板
                        </a>
                    </li>


                    <li><div class="divider"></div></li>
                    <li>
                        <a href="https://github.com/Antares-Wu" class="waves-effect waves-light" target="_blank">
                            <i class="fa fa-github-square fa-fw"></i>Fork Me
                        </a>
                    </li>

                </ul>
            </div>

        </div>


        <style>
            .nav-transparent .github-corner {
                display: none !important;
            }

            .github-corner {
                position: absolute;
                z-index: 10;
                top: 0;
                right: 0;
                border: 0;
                transform: scale(1.1);
            }

            .github-corner svg {
                color: #0f9d58;
                fill: #fff;
                height: 64px;
                width: 64px;
            }

            .github-corner:hover .octo-arm {
                animation: a 0.56s ease-in-out;
            }

            .github-corner .octo-arm {
                animation: none;
            }

            @keyframes a {
                0%,
                to {
                    transform: rotate(0);
                }
                20%,
                60% {
                    transform: rotate(-25deg);
                }
                40%,
                80% {
                    transform: rotate(10deg);
                }
            }
        </style>

        <a href="https://github.com/Antares-Wu" class="github-corner tooltipped hide-on-med-and-down" target="_blank"
           data-tooltip="Fork Me" data-position="left" data-delay="50">
            <svg viewBox="0 0 250 250" aria-hidden="true">
                <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path>
                <path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2"
                      fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
                <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z"
                      fill="currentColor" class="octo-body"></path>
            </svg>
        </a>

    </nav>

</header>

<style type="text/css">
    /* don't remove. */
    .about-cover {
        height: 75vh;
    }
</style>

<div class="bg-cover pd-header about-cover">
    <div class="container">
        <div class="row">
            <div class="col s10 offset-s1 m8 offset-m2 l8 offset-l2">
                <div class="brand">
                    <div class="title center-align">
                        404
                    </div>
                    <div class="description center-align">
                        Sorry,the connection has failed :(
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<form action="welcome.php" method="post">
    请输入添加的url: <input type="text" name="url"><br>
    请输入标签: <input type="text" name="label"><br>
    请输入注释：<input type="text" name="note"><br>
    <input type="submit" value="添加收藏">
</form>

<!--url is --><?php //echo $_POST["url"]; ?><!--<br>-->
<!--label is: --><?php //echo $_POST["label"]; ?><!-- <br>-->
<!--note is: --><?php //echo $_POST["note"]; ?><!-- <br>-->
<br>

<form action="welcome.php" method="post">
    请输入删除的url: <input type="text" name="url_del"><br>
    <input type="submit" value="删除收藏">
</form>

<br>

<form action="welcome.php" method="post">
    请输入查找的标签: <input type="text" name="label_search"><br>
    <input type="submit" value="查找标签">
</form>

<br>
<form action="welcome.php" method="post">
    请输入要修改的url: <input type="text" name="url_fix"><br>
    请输入新的标签：<input type="text" name="label_fix"><br>
    请输入新的注释：<input type="text" name="note_fix"><br>
    <input type="submit" value="修改收藏">
</form>


<!-- 定义url的数据结构 -->
<?php
class Site {
    /* 成员变量 */
    var $url;
    var $label;
    var $note;
    /* 成员函数 */
}

?>
<!--搜索标签-->
<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );
//Get the data from the url
$label_value = $_POST['label_search'];

if($label_value == null){}
else {

    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);

    $arrlength = count($json_arr);

    for ($i = 0; $i < $arrlength; $i++) {
        if ($json_arr[$i]['label'] == $label_value) {
            $url_value = $json_arr[$i]['url'];
            $url_label = $json_arr[$i]['label'];
            $url_note = $json_arr[$i]['note'];
            $extra_url="http://";
            echo "url=" . "<a href='$extra_url$url_value' target=\"_blank\" > $url_value</a> "   . ", label=" . $url_label . ", note=" . $url_note;
            echo "<br>";
        }
    }

    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    exit(0);
    header("location:welcome.php");
}

?>
<!--打印收藏-->
<?php
// read json file
$data = file_get_contents('example.json');
// decode json
$json_arr = json_decode($data, true);


$arrlength=count($json_arr);
for ($i=0; $i<$arrlength; $i++) {
    $url_value = $json_arr[$i]['url'];
    $url_label = $json_arr[$i]['label'];
    $url_note = $json_arr[$i]['note'];
    $extra_url="http://";
    echo "url=" . "<a href='$extra_url$url_value' target=\"_blank\" > $url_value</a> "   . ", label=" . $url_label . ", note=" . $url_note;
    echo "<br>";
}

// encode json and save to file
file_put_contents('example.json', json_encode($json_arr));
?>

<!-- 增加收藏-->
<?php
//Get the data from the url
$url_value = $_POST['url'];
$label_value = $_POST['label'];
$note_value = $_POST['note'];

// read json file
$data = file_get_contents('example.json');
// decode json
$json_arr = json_decode($data, true);
//if the input is null or same as the last, exit(0)
$arrlength=count($json_arr);
// encode json and save to file
file_put_contents('example.json', json_encode($json_arr));

if($url_value == null || $url_value == $json_arr[$arrlength-1]['url']){}
else {

    $x = new Site;

    $x->url = $url_value;
    $x->label = $label_value;
    $x->note = $note_value;

    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);
    // add data
    $json_arr[] = $x;
    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    header("location:welcome.php");
}
?>


<!-- 删除收藏-->
<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );

//Get the data from the url
$url_value = $_POST['url_del'];
if($url_value == null) {}
else {
    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);

    $arrlength = count($json_arr);


    for ($i = 0; $i < $arrlength; $i++) {
        if ($json_arr[$i]['url'] == $url_value) {
            array_splice($json_arr,$i,1);
//            unset($json_arr[$i]['url']);
//            unset($json_arr[$i]['label']);
//            unset($json_arr[$i]['note']);
        }
    }
    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    header("location:welcome.php");
}

?>


<!--修改收藏-->
<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );

//Get the data from the url
$url_value2 = $_POST['url_fix'];
$label_value2 = $_POST['label_fix'];
$note_value2 = $_POST['note_fix'];

if($url_value2 == null){}
else {
    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);

    $arrlength = count($json_arr);

    for ($i = 0; $i < $arrlength; $i++) {
        if ($json_arr[$i]['url'] == $url_value2) {
            $json_arr[$i]['label'] = $label_value2;
            $json_arr[$i]['note'] = $note_value2;
        }

    }

    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    header("location:welcome.php");
}
?>



</body>
</html>