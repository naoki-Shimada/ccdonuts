<!-- header.php読み込み -->
<?php require 'includes/header.php'; ?>

<?php
// データベース接続
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 
	'ccStaff', 'ccDonuts');

//  URLの「?id=◯」の部分を取得する
$id = $_GET['id'] ?? null;

if (!$id) {
    die('商品IDが指定されていません。');
}

// プリペアードステートメントでDBから商品を取得
$sql = $pdo->prepare('SELECT * FROM products WHERE id = ?');
$sql->execute([$id]);

// ここでデータベースから一件分のデータを取得する
$item = $sql->fetch(PDO::FETCH_ASSOC);

// 該当する商品があるかチェック
if (!$item) {
    // 商品がない場合はエラー表示
    die('商品が見つかりませんでした。');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?> | 商品詳細</title>
</head>
<body>

    <div class="BreadList">
        <p>TOP>商品一覧><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></p>
    </div>
    <div class="BreadListBorder">
    </div>

    <div class="BreadList">
        <p>ようこそ、<span class="UserName"></span>様。</p>
    </div>
    <div class="BreadListBorder">
    </div>


<div class="DetailContainer">
    <div class="ProductImageBox">
        <img src="images/<?php echo htmlspecialchars($item['img'], ENT_QUOTES, 'UTF-8'); ?>" alt="商品画像">
    </div>

    <div class="ProductInfoBox">
            <h1 class="ProductName"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h1>
        
        <hr class="Divider">

        <div class="Description">
            <!-- nl2br: htmlの<br>と同等 -->
            <p><?php echo nl2br(htmlspecialchars($item['introduction'], ENT_QUOTES, 'UTF-8')); ?></p>
        </div>

        <hr class="Divider">

        <p class="Price">
        税込 &yen;<?php echo number_format($item['price']); ?>
        </p>
        
        <form action="cart_add.php" method="POST" class="ActionArea">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="number" name="quantity" value="1" min="1" class="QuantityInput">
            <span>個</span>

            <button type="submit" class="CartButton">カートに入れる</button>

            <button type="button" class="FavoriteButton">♡</button>
        </form>
    </div>
</div>

</body>
</html>

<!-- footer.php読み込み -->
<?php require 'includes/footer.php'; ?>