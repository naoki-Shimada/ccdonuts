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
header('Location: ../cart.php');
exit;
?>

<!-- // --- デバッグ用コードここから ---
echo '<pre>';
echo "--- リクエストメソッドの確認 ---\n";
var_dump($_SERVER['REQUEST_METHOD']); // GETかPOSTかを確認

echo "\n--- 受信データの確認 (POST) ---\n";
var_dump($_POST); // 送信された中身を確認

echo "\n--- 現在のセッション状態 ---\n";
var_dump($_SESSION['cart'] ?? 'カートは空です');
echo '</pre>';
exit; 
// --- デバッグ用コードここまで --- -->




<!-- 実処理

--- リクエストメソッドの確認 ---
string(4) "POST"

--- 受信データの確認 (POST) ---
array(2) {
  ["id"]=>
  string(1) "1"
  ["quantity"]=>
  string(1) "1"
}

--- 現在のセッション状態 ---
array(1) {
  [1]=>
  int(8)
} -->