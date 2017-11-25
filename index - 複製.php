<?php
require_once 'header.php';
$page_title = '首頁';

$op = isset($_REQUEST['op']) ? filter_var($_REQUEST['op']) : '';
$sn = isset($_REQUEST['sn']) ? (int) ($_REQUEST['sn']) : 0;
switch ($op) {
    // case "list_one":
    //     $msg = list_one();
    //     redirect_header("index.php", 3000, $msg);
    //     exit;
    default:
        if ($sn) {
            show_article($sn);
            $op = 'show_article';
        } else {
            list_article();
            $op = 'list_article';
        }
        break;
}

// $smarty->assign('now', date("Y年m月d日 H:i:s"));
require_once 'footer.php';

//讀出所有文章
function list_article()
{
    global $db, $smarty;

    $sql    = "SELECT * FROM `article` ORDER BY `update_time` desc ";
    $result = $db->query($sql) or die($db->error);
    $all    = [];
    while ($data = $result->fetch_assoc()) {
        $all[] = $data;
    }
    // die(var_export($all));
    $smarty->assign('all', $all);

    // print_r($sql);
    // die();

    $sn = $db->insert_id;
    return $sn;
}
//讀出單一文章
function show_article($sn)
{
    global $db, $smarty;

    //讀取資料表所有欄位，並指定某一筆特定資料
    $sql = "SELECT * FROM `article` WHERE sn='$sn'";

    //傳回值存到 $result 以供抓取資料用
    $result = $db->query($sql) or die($db->error);
    $data   = $result->fetch_assoc($result);
    $smarty->assign('article', $data);

}
//讀出單一文章
// function list_article()
// {
//     global $db, $smarty;

//     $sql    = "SELECT * FROM `article` ORDER BY `update_time` desc ";
//     $result = $db->query($sql) or die($db->error);
//     $all    = [];
//     while ($data = $result->fetch_assoc()) {
//         $all[] = $data;
//     }
//     // die(var_export($all));
//     $smarty->assign('all', $all);

//     // print_r($sql);
//     // die();

//     $sn = $db->insert_id;
//     return $sn;
// }

// //顯示單一頁面
// function listone_article($sn = "")
// {
//     global $db, $smarty;

//     //讀取eznews資料表所有欄位，並指定某一筆特定資料
//     $sql = "SELECT * FROM `article` WHERE sn='$sn'";

//     //傳回值存到 $result 以供抓取資料用
//     $result = $db->query($sql) or die($db->error);
//     $news   = fetch_assoc($result);

//     $news_content = nl2br($news['news_content']);

//     $one_news = "<h1>{$news['title']}</h1>
//     <div class='well'>
//       {$content}
//     </div>";
//  $smarty->assign('all', $one_news);
//     return $one_news;
// }
