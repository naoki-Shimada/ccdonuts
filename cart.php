<!-- header.php読み込み -->
<?php require 'includes/header.php'; ?>

    

    <!-- 現在　商品: count点
    ご注文小計：税込 ¥sum -->

<?php
session_start();

// DB接続
$pdo=new PDO('mysql:host=localhost;dbname=ccdonuts;charset=utf8', 
	'ccStaff', 'ccDonuts');

$cart_items = [];
$total_count = 0;
$total_price = 0;

if(!empty($_SESSION['cart'])) {
    // カートに商品ID「5」が2個、商品ID「8」が1個入っている場合
    /* 出力結果のイメージ:
    array(2) {
    [5]=> int(2)
    [8]=> int(1)
    }
    */

    // array_keys():今カートに入っているすべての商品IDを配列として抽出する
    $ids = array_keys($_SESSION['cart']);

        /* 出力結果のイメージ:
    array(2) {
    [0]=> string(1) "5"
    [1]=> string(1) "8"
    }
    */
    

    // SQLのIN句を作成(ID=商品の数だけ?を並べる) 例: カートに商品が3つある場合、?,?,? という文字列が生成される
    // str_repeat...count($ids) - 1: 最後に出力される余計なカンマを防ぐ
    $placeholders = str_repeat('?', count($ids) - 1) . '?';

     /* 出力結果のイメージ:
    string(3) "?,?"
    */

    // 生成したplaceholdersをproductsテーブルに組み込む
    // 直接変数を埋め込まず?を使い、SQLインジェクション攻撃を防ぐ
   
    $sql = $pdo->prepare("SELECT * FROM products WHERE id IN ($placeholders)");
    // execute($ids):作成した?部分にID配列を代入する
    $sql->execute($ids);
    // fetchall(PDO::FETCH_ASSOC):該当するすべての商品データを、カラム名（name, priceなど）をキーとした連想配列の形でまとめて取得する
    $cart_items = $sql->fetchall(PDO::FETCH_ASSOC);

        /* 出力結果のイメージ:
    array(2) {
    [0]=> array(4) {
        ["id"]=> string(1) "5"
        ["name"]=> string(15) "チョコドーナツ"
        ["price"]=> string(3) "200"
        ["img"]=> string(9) "choco.jpg"
    }
    [1]=> array(4) {
        ["id"]=> string(1) "8"
        ["name"]=> string(21) "オールドファッション"
        ["price"]=> string(3) "180"
        ["img"]=> string(8) "old.jpg"
    }
    }
    */

    /* 合計金額と点数の計算 */
    foreach ($cart_items as $item) {
        $quantity = $_SESSION['cart'][$item['id']];
        $total_count += $quantity;
        $total_price += $item['price'] * $quantity;
    }
}

?>

<div class="BreadList">
        <p>TOP>カート</p>
    </div>
    <div class="BreadListBorder">
    </div>

    <div class="BreadList">
        <p>ようこそ、<span class="UserName">様。</p>
    </div>
    <div class="BreadListBorder">
    </div>



<main class="CartPageContainer">
    <?php if (empty($cart_items)): ?>
        <p class="EmptyMessage">カートに商品が入っていません。</p>
    <?php else: ?>
        
        <div class="SummaryBox">
            <p>現在 商品<?php echo $total_count; ?>点</p>
            <p class="SummaryTotal">ご注文小計：税込 <span class="TotalPrice">&yen;<?php echo number_format($total_price); ?></span></p>
            <a href="login.php" class="LoginButton">購入画面へ進む</a>
        </div>


        <div class="CartItemList">
            <?php foreach($cart_items as $item): ?>
                <div class="CartItem">
                    <div class="CartItemImage">
                        <img src="images/<?php echo htmlspecialchars($item['img'], ENT_QUOTES, 'UTF-8'); ?>" alt="">
                    </div>
                    <div class="CartItemInfo">
                        <h2 class="ItemName"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <hr class="ItemDivider">
                        <div class="ItemDetailRow">
                            <p class="ItemPrice">税込 &yen;<?php echo number_format($item['price']); ?></p>
                            <div class="QuantityArea">
                                <span>数量</span>
                                <input type="number" value="<?php echo $_SESSION['cart'][$item['id']]; ?>" class="CartQuantityInput">
                                <span>個</span>
                            </div>
                        </div>
                        <div class="ItemActionRow">
                            <button type="button" class="RecalculateButton">再計算</button>
                            <a href="cart_delete.php?id=<?php echo $item['id']; ?>" class="DeleteLink">削除する</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="SummaryBox">
            <p>現在 商品<?php echo $total_count; ?>点</p>
            <p class="SummaryTotal">ご注文小計：税込 <span class="TotalPrice">&yen;<?php echo number_format($total_price); ?></span></p>
            <a href="login.php" class="LoginButton">購入画面へ進む</a>
        </div>

        <?php endif; ?>

        <div class="ContinueShoppingArea">
            <a href="" class="ContinueButton">買い物を続ける</a>
        </div>
    </main>


<!-- footer.php読み込み -->
<?php require 'includes/footer.php'; ?>