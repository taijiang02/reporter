<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark p-0 ">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">
        <img alt="Brand" src="images/logo.png" class="img-fluid">
    </a>

    <div class="collapse navbar-collapse" id="menu">
        <div class="navbar-nav mr-auto">
            <a href="index.php" class="text-white nav-link">首頁</a>
            <a href="index.php" class="text-white nav-link">編輯精選</a>
            <a href="index.php" class="nav-link text-white">街巷故事</a>
            <a href="index.php" class="nav-link text-white">市井觀點</a>
            <a href="index.php" class="nav-link text-white">私房知識塾</a>
        </div>
        <!--判斷有登入者  -->
        <div class="navbar-nav">
            {if isset($smarty.session.username)}
            <a href="admin.php?op=article_form" class="text-white nav-link">發佈</a>
            <a href="logout.php" class="text-white nav-link">登出_歡迎{$smarty.session.username}</a>
            <!-- 否則無登入者 -->
            {else}
            <a href="signup.php" class="text-white nav-link">註冊</a>
            <a href="main_login.php" class="text-white nav-link">登入</a> {/if}
        </div>
    </div>
</nav>