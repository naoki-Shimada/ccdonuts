<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header class="MainHeader">
        <div class="HeaderTop">
            <div class="NavToggle">
                <span></span><span></span><span></span>
            </div>
            <div class="Logo">
                <img src="images/PCHeaderLogo.png" alt="Logo">
            </div>
            <div class="UserActions">
                <div class="ActionItem">
                    <img src="images/PCLoginLogo.png">
                    <span>ログイン</span>
                </div>
                <div class="ActionItem">
                    <img src="images/PCCartLogo.png">
                    <span>カート</span>
                </div>
            </div>
        </div>
        <div class="HeaderBottom">
            <div class="SearchContainer">
                <button type="submit" class="SearchButton">
                    <span class="SearchIcon"></span>
                </button>
                <input type="text" class="SearchInput" placeholder="">
            </div>
        </div>
    </header>
</body>
</html>