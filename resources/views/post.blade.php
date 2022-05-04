<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>レビュー</title>
    </head>
    <body>
        <h1>{{ -> }}</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>団体名</h2>
                <input type="text" name="post[title]" placeholder="団体名"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="post[body]" placeholder="詳細文"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>