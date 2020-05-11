<html>
<body>
<!DOCTYPE HTML>
<html lang="zh-CN">


<head><meta name="generator" content="Hexo 3.9.0">
    <meta charset="utf-8">
    <meta name="keywords" content="404, ECNU DaSE">
    <meta name="baidu-site-verification" content>
    <meta name="google-site-verification" content>
    <meta name="360-site-verification" content>
    <meta name="description" content="404 | Antares-Wu&#39;s blog">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="renderer" content="webkit|ie-stand|ie-comp">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <title>404 | Antares-Wu&#39;s blog</title>
    <link rel="icon" type="image/png" href="/favicon.png">

    <link rel="stylesheet" type="text/css" href="/libs/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/libs/materialize/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="/libs/aos/aos.css">
    <link rel="stylesheet" type="text/css" href="/libs/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="/libs/lightGallery/css/lightgallery.min.css">
    <link rel="stylesheet" type="text/css" href="/css/matery.css">
    <link rel="stylesheet" type="text/css" href="/css/my.css">
    <style type="text/css">

    </style>

    <script src="/libs/jquery/jquery-2.2.0.min.js"></script>
    <script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?46e79e71af0709a5b9106bf20cecc493";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <link rel="stylesheet" href="/css/prism-tomorrow.css" type="text/css">
    <link rel="stylesheet" href="/css/prism-line-numbers.css" type="text/css"></head>
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