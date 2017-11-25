<script src="ckeditor/ckeditor.js"></script>


<form action="admin.php" method="post" enctype="multipart/form-data">
    <div class="form-group" id="form">
        <label for="title" class="col-form-label">文章標題</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="請輸入文章標題" value="{$article.title}"></input>
    </div>

    <div class="form-group" id="form">
        <label for="content" class="col-form-label">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容">{$article.content}</textarea>
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

</script>