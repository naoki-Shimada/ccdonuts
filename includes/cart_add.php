<!-- detail.php のフォームから送信された id と quantity(数量) を受け取り、セッションに追加します。
 -->

<?php
session_start();

// 送信データの取得
$id = $_POST['id'] ?? null;
$quantity = (int)($_POST['quantity'] ?? 1);

if ($id) {
    // カートが未作成なら初期化
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // すでにある商品は個数を加算、なければ新規追加
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id] += $quantity;
    } else {
        $_SESSION['cart'][$id] = $quantity;
    }
}

// カート一覧画面へリダイレクト
header('Location: cart_list.php');
exit;
?>