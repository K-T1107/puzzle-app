<html lang="ja">
<body>
<h1>■アイテム作成■</h1>
<form method="POST" action="{{ url('store') }}">
    @csrf
    <input type="text" name="name" placeholder="名前を入力">
    <br>
    <input type="text" name="kinds" placeholder="タイプを入力">
    <br>
    <input type="text" name="effect" placeholder="効果値を入力">
    <br>
    <input type="text" name="explanation" placeholder="説明を入力">
    <br>
    <button type="submit">登録</button>
</form>
</body>
</html>
