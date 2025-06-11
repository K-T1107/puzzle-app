<html lang=“ja”>
<body>
<h1>■ログイン■</h1>
@if(!empty($error_id))
    <p><font color="red">名前、もしくはパスワードが間違ってるぜ</font></p>
@endif
<ul>
    <form method="post" action="{{url('doLogin')}}">
        @csrf
        <input name="name">
        <input name="password">
        <button type="submit">送信</button>
    </form>
</ul>
</body>
</html>
