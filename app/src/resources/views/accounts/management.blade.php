<html lang=“ja”>
<body>
<h1>■管理画面■</h1>
<ul>
    <form method="post" action="{{url('logout')}}">
        @csrf
        <a href='{{url('/users')}}'>プレイヤー一覧</a>
        <br>
        <a href="{{url('/items')}}">アイテム一覧</a>
        <br>
        <a href="{{url('/user-items')}}">もちもの</a>
        <br>
        <a href="{{url('create')}}">新規作成</a>
        <br>
        <button type="submit">ログアウト</button>
    </form>
</ul>
</body>
</html>
