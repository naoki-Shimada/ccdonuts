<!-- header.php読み込み -->
<?php require 'includes/header.php'; ?>

    <div class="BreadList">
        <p>TOP>商品一覧</p>
    </div>
    <div class="BreadListBorder">
    </div>

    <div class="BreadList">
        <p>ようこそ、<span class="UserName"></span>様。</p>
    </div>
    <div class="BreadListBorder">
    </div>

    <section class="ProductSection">
        <h2 class="ProductTitle">商品一覧</h2>

        <h3 class="ProductSubTitle">メインメニュー</h3>
            <div class="ProductContainer">
                <div class="ProductItem">
                    <a href="detail.php?id=1">
                    <img src="images/Original.png" alt="Original">
                    <h3 class="ItemName">CCドーナツ 当店オリジナル（5個入り）</h3>
                    </a>
                    <p class="ItemPrice">税込 ¥1,500</p>

                    <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                </div>

                <div class="ProductItem">
                    <a href="detail.php?id=2">
                    <img src="images/Chocolate.png" alt="Chocolate">
                    <h3 class="ItemName">チョコレートデライト（5個入り）</h3>
                    </a>
                    <p class="ItemPrice">税込 ¥1,600</p>

                    <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                </div>

                <div class="ProductItem">
                    <a href="detail.php?id=3">
                    <img src="images/CaramelCream.png" alt="CaramelCream">
                    <h3 class="ItemName">キャラメルクリーム（5個入り）</h3>
                    </a>
                    <p class="ItemPrice">税込 ¥1,600</p>

                    <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                </div>

                <div class="ProductItem">
                    <a href="detail.php?id=4">
                    <img src="images/Classic.png" alt="Classic">
                    <h3 class="ItemName">プレーンクラシック（5個入り）</h3>
                    </a>
                    <p class="ItemPrice">税込 ¥1,500</p>
                    <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="4">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                </div>

                <div class="ProductItem">
                    <a href="detail.php?id=5">
                    <img src="images/SummerCitras.png" alt="SummerCitras">
                    <h3 class="ItemName">【新作】サマーシトラス（5個入り）</h3>
                    </a>
                    <p class="ItemPrice">税込 ¥1,600</p>
                    <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="5">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                </div>

                <div class="ProductItem">
                    <a href="detail.php?id=6">
                    <img src="images/Strawberry.png" alt="Strawberry">
                    <h3 class="ItemName">ストロベリークラッシュ（5個入り）</h3>
                    </a>
                    <p class="ItemPrice">税込 ¥1,800</p>
                    <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="6">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                </div>
            </div>

            <h3 class="ProductSubTitle">バラエティセット</h3>
                <div class="ProductContainer">
                    <div class="ProductItem">
                        <a href="detail.php?id=7">
                        <img src="images/Fruit_12.png" alt="Fruit_12">
                        <h3 class="ItemName">フルーツドーナツセット（12個入り）</h3>
                        </a>
                        <p class="ItemPrice">税込 ¥3,500</p>
                        <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="7">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                    </div>

                    <div class="ProductItem">
                        <a href="detail.php?id=8">
                        <img src="images/Fruit_14.png" alt="Fruit_14">
                        <h3 class="ItemName">フルーツドーナツセット（14個入り）</h3>
                        </a>
                        <p class="ItemPrice">税込 ¥4,000</p>
                        <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="8">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                    </div>

                    <div class="ProductItem">
                        <a href="detail.php?id=9">
                        <img src="images/Selection.png" alt="Selection">
                        <h3 class="ItemName">ベストセレクションボックス（4個入り）</h3>
                        </a>
                        <p class="ItemPrice">税込 ¥1,200</p>
                        <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="9">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                    </div>

                    <div class="ProductItem">
                        <a href="detail.php?id=10">
                        <img src="images/CrashBox.png" alt="CrashBox">
                        <h3 class="ItemName">クラッシュボックス（7個入り）</h3>
                        </a>
                        <p class="ItemPrice">税込 ¥2,400</p>
                        <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="10">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                    </div>

                    <div class="ProductItem">
                        <a href="detail.php?id=11">
                        <img src="images/Cream_4.png" alt="Cream_4">
                        <h3 class="ItemName">クリームボックス（4個入り）</h3>
                        </a>
                        <p class="ItemPrice">税込 ¥1,400</p>
                        <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="11">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                    </div>

                    <div class="ProductItem">
                        <a href="detail.php?id=12">
                        <img src="images/Cream_9.png" alt="Cream_9">
                        <h3 class="ItemName">クリームボックス（9個入り）</h3>
                        </a>
                        <p class="ItemPrice">税込 ¥2,800</p>
                        <form action="includes/cart_add.php" method="POST">
                        <input type="hidden" name="id" value="12">
                        <input type="hidden" name="quantity" value="1">
                        <button class="CartButton">カートに入れる</button>
                    </form>
                    </div>
                </div>
    </section>


<!-- footer.php読み込み -->
<?php require 'includes/footer.php'; ?>