<html lang=“ja”>
<style>
    table, tr, td, th {
        border: solid 1px black;
        border-collapse: collapse;
    }
</style>
<body>
<h1>■{{$title}}■</h1>
<ul>
    　@foreach($accounts as $account)
        <li>ID:{{$account['id']}} 名前：{{$account['name']}} パス：{{$account['password']}}</li>
        <br>
    @endforeach
</ul>
</body>
</html>
