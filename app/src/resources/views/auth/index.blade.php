<html lang=“ja”>
<body>
<h1>■ログイン■</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
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
