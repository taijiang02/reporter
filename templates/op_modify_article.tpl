<script src="ckeditor/ckeditor.js"></script>
<script src="js/languages/jquery.validationEngine-zh_TW.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css">


<form action="admin.php" method="post" enctype="multipart/form-data" id="myform">
    <div class="form-group" id="form">
        <label for="title" class="col-form-label">文章標題</label>
        <input type="text" name="title" id="title" class="form-control validate[required]" placeholder="請輸入文章標題" value="{$article.title}"></input>
    </div>

    <div class="form-group" id="form">
        <label for="content" class="col-form-label">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control validate[required, minSize[20]]" placeholder="請輸入文章內容">{$article.content}</textarea>
    </div>

    <div class="form-group" id="form">
        <label for="title" class="col-form-label">封面圖</label>
        <input type="file" name="pic" id="pic" class="form-control" placeholder="請上傳一張封面圖"></input>
    </div>

    <div class="text-center">
        <input type="hidden" name="sn" value="{$article.sn}">
        <input type="hidden" name="op" value="update">
        <input type="hidden" name="username" value="{$smarty.session.username}">
        <button type="submit" class="btn btn-primary">更新</button>

    </div>
</form>

<script>
    CKEDITOR.replace('content');
    $(document).ready(function () {
        $('#myform').validationEngine();
    });

</script>