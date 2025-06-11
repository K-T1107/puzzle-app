<html lang=“ja”>
<body>
<h1>■管理画面■</h1>
<ul>
    <form method="post" action="{{url('login')}}">
        @csrf
        <a href="{{url('index')}}">ユーザー一覧</a>
        <br>
        <a href="{{url('scores')}}">スコア一覧</a>
        <br>
        <button type="submit">ログアウト</button>
    </form>
</ul>
</body>
</html>
