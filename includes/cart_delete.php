
<?php
session_start();

$id = $_GET['id'] ?? null;

if($id && isset($_SESSION['cart'][$id])){
    /* 特定の商品をセッションから削除 */
    unset($_SESSION['cart']['id']);
}

// カート一覧画面へ戻る
header('Location: cart_list.php');
exit;
?>