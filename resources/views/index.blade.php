<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>mogiten_keijiban</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
      <h1>模擬店掲示板</h1>
      <!-- 画面上部バー -->
      <div class'posts'>
          <h3 class'post'>
              <a href="/posts/{{ $->id }}">ログイン</a>
              <a href="/posts/{{ $school->id }}">大学ページ</a>
              <a href="/posts/{{ $shop->id }}">店舗検索</a>
              <a href="/posts/{{ $->id }}">お気に入り</a>
          </h3>
      </div>
      //人気大学ランキング
      <div class'contents'>
          <ul class="ranking"> 
          
            <li class="no01">
            <p class="school-name">{{ -> }}</p>
            <p class="link-next02"><a href="リンク先URL">「学校1」の詳細を見る</a></p>
            </li>
             
            <li class="no02">
            <p class="school-name">{{ 学校2 }}</p>
            <p class="link-next02"><a href="リンク先URL">「学校2」の詳細を見る</a></p>
            </li>
             
            <li class="no03">
            <p class="school-name">{{ 学校3 }}</p>
            <p class="link-next02"><a href="リンク先URL">「学校3」の詳細を見る</a></p>
            </li>
             
            <li class="no04">
            <p class="school-name">{{ 学校4 }}</p>
            <p class="link-next02"><a href="リンク先URL">「学校4」の詳細を見る</a></p>
            </li>
             
            <li class="no05 end">
            <p class="school-name">{{ 学校5 }}</p>
            <p class="link-next02"><a href="リンク先URL">「学校5」の詳細を見る</a></p>
            </li>
          </ul>
          
      </div>
      
      //人気店舗ランキング
      <div>
          <ul class="ranking"> 
          
            <li class="no01">
            <p class="shop-name">{{ 店舗1 }}</p>
            <p class="link-next02"><a href="リンク先URL">「店舗1」の詳細を見る</a></p>
            </li>
             
            <li class="no02">
            <p class="shop-name">{{  }}</p>
            <p class="link-next02"><a href="リンク先URL">「店舗2」の詳細を見る</a></p>
            </li>
             
            <li class="no03">
            <p class="shop-name">{{ 店舗3 }}</p>
            <p class="link-next02"><a href="リンク先URL">「店舗3」の詳細を見る</a></p>
            </li>
             
            <li class="no04">
            <p class="shop-name">{{ 店舗4 }}</p>
            <p class="link-next02"><a href="リンク先URL">「店舗4」の詳細を見る</a></p>
            </li>
             
            <li class="no05 end">
            <p class="shop-name">{{ 店舗5 }}</p>
            <p class="link-next02"><a href="リンク先URL">「店舗5」の詳細を見る</a></p>
            </li>
        　</ul>
          
      </div>
      
      //評価の高い団体
      <div>
          
          
      </div>
      
      //最近評価された団体
      <div class'posts'>
          <div class'post'>
              <h2 class'title'>{{ organization }}</h2>
              <p class'review'>{{ Text }}</p>
          </div>
      </div>
      
       <div class'posts'>
          <div class'post'>
              <h2 class'title'>{{ organization }}</h2>
              <p class'review'>{{ Text }}</p>
          </div>
       </div>
       
       <div class='paginate'>
            {{ $->links() }}
       </div>
    </body>
</html>
