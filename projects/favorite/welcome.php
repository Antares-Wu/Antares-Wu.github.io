<html>
<body>

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
            echo "url=" . "<a href='$url_value' > $url_value</a> " . ", label=" . $url_label . ", note=" . $url_note;
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

    echo "url=" . "<a href='$url_value' > $url_value</a> " . ", label=" . $url_label . ", note=" . $url_note;
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