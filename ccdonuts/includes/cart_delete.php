
<?php
session_start();

// URLパラメータから届いたIDを確認
$id = $_GET['id'] ?? null;


if($id && isset($_SESSION['cart'][$id])){
    /* 変数 $id を指定して、特定の商品をセッションから削除 */
    unset($_SESSION['cart'][$id]);

}

// カート一覧画面へ戻る
header('Location: ../cart.php');
exit;
?>

<!-- デバッグ用コードここから

id取得し変数$idへ代入挙動
echo '<pre>--- 削除処理のデバッグ ---' . PHP_EOL;
echo 'URLから受け取ったID: ';
var_dump($id);

削除前のカート状態
echo '削除前のカートの状態: ';
var_dump($_SESSION['cart'] ?? '空です');

変数$idの削除
   echo PHP_EOL . '✅ ID: ' . $id . ' を削除しました。' . PHP_EOL;
} else {
    echo PHP_EOL . '❌ 削除対象が見つかりません（IDが不正、またはカートに存在しません）。' . PHP_EOL;

    echo '削除後のカートの状態: ';
var_dump($_SESSION['cart'] ?? '空です');
echo '-----------------------</pre>';

// 挙動を確認するため、リダイレクトを一時停止
echo '<p><a href="../cart.php">カートへ戻る（手動）</a></p>';
exit;
デバッグ用コードここまで -->

<!-- --- 削除処理のデバッグ ---
URLから受け取ったID: string(1) "1"
削除前のカートの状態: array(1) {
  [1]=>
  int(8)
}


エラーの原因は変数$idを'id'にしていたため
「id」という名前の文字を探して消そうとしていたことによる。

✅ ID: 1 を削除しました。
削除後のカートの状態: array(1) {
  [1]=>
  int(8)
}
----------------------- -->
