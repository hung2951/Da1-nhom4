<?php
function news(){
    $sql="select * from news";
   $news = executeQuery($sql);
   client_render('news/blog-grid.php', [
       'news' => $news,
   ]);
}
function news_detail(){
    $id_news = $_GET['id_news'];
    $sql="select * from news where id_news  = $id_news";
   $news_detail = executeQuery($sql,false);
   client_render('news/blog-detail.php', [
       'news_detail' => $news_detail,
   ]);
}
?>
