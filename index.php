<!-- header.php読み込み -->
<?php require 'includes/header.php'; ?>

    <!-- ヒーロー画像 -->
    <section class="HeroSection">
        <p>ようこそ、<span class="UserName">様。</p>
        <img src="images/PCHero.png" alt="Hero">
    </section>

    <section class="PickupSection">
        <div class="DonutsContainer">
                <div class="TopRaw">
                    <div class="ContentBox">
                        <img src="images/NewProduct.png" alt="New">
                    </div>
                    <div class="ContentBox">
                        <img src="images/PCCCdonutsLife.png" alt="Life">
                    </div>
                </div>

            <div class="ContentBoxBanner">
                <img src="images/PCProductBanner.png" alt="Product">
            </div>
        </div>
    </section>

    <section class="PhilosophySection">
        <div class="Hero-Container">
            <div class="Content">
                <h2 class="Title-en">Philosophy</h2>
                <p class="Title-jp">私たちの信念</p>

                <p class="Tagline-en">"Creating Connections"</p>
                <p class="Tagline-jp">ドーナツでつながる</p>
            </div>
        </div>
    </section>

    <section class="RankingSection">
        <h2 class="ProductTitle">人気ランキング</h2>

        <div class="RankingContainer">
            <div class="ProductItem">
                <div class="RankBadge Rank1">1</div>
                <img src="images/Original.png" alt="Product1">
                <h3 class="ItemName">CCドーナツ 当店オリジナル（5個入り）</h3>
                <p class="ItemPrice">税込 ¥1,500</p>
                <button class="CartButton">カートに入れる</button>
            </div>
        
            <div class="ProductItem">
                <div class="RankBadge Rank2">2</div>
                <img src="images/Fruit_12.png" alt="Product2">
                <h3 class="ItemName">フルーツドーナツセット（12個入り）</h3>
                <p class="ItemPrice">税込 ¥3,500</p>
                <button class="CartButton">カートに入れる</button>
            </div>

            <div class="ProductItem">
                <div class="RankBadge Rank3">3</div>
                <img src="images/Fruit_14.png" alt="Product3">
                <h3 class="ItemName">フルーツドーナツセット（14個入り）</h3>
                <p class="ItemPrice">税込 ¥4,000</p>
                <button class="CartButton">カートに入れる</button>
            </div>

            <div class="ProductItem">
                <div class="RankBadge RankOther">4</div>
                <img src="images/Chocolate.png" alt="Product4">
                <h3 class="ItemName">チョコレートデライト（5個入り）</h3>
                <p class="ItemPrice">税込 ¥1,600</p>
                <button class="CartButton">カートに入れる</button>
            </div>

            <div class="ProductItem">
                <div class="RankBadge RankOther">5</div>
                <img src="images/Selection.png" alt="Product5">
                <h3 class="ItemName">ベストセレクションボックス（4個入り）</h3>
                <p class="ItemPrice">税込 ¥1,200</p>
                <button class="CartButton">カートに入れる</button>
            </div>

            <div class="ProductItem">
                <div class="RankBadge RankOther">6</div>
                <img src="images/Strawberry.png" alt="Product6">
                <h3 class="ItemName">ストロベリークラッシュ（5個入り）</h3>
                <p class="ItemPrice">税込 ¥1,800</p>
                <button class="CartButton">カートに入れる</button>
            </div>
        </div>
    </section>

<!-- footer.php読み込み -->
<?php require 'includes/footer.php'; ?>