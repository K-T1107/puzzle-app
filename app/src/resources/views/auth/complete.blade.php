<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>登録完了</title>
</head>
<body>
<h1>登録完了！</h1>
<p>{{ session('item_name') }} を登録しました。</p>
<a href="{{ route('accounts.management') }}">戻る</a>
</body>
</html>
