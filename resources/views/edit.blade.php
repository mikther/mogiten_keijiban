<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>mogiten_keijiban</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>

    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $Club->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>団体名</h2>
                    <input type='text' name='post[title]' value="{{ $Club->title }}">
                </div>
                <div class='content__body'>
                    <h2>詳細文</h2>
                    <input type='text' name='post[body]' value="{{ $ClubClub->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>
