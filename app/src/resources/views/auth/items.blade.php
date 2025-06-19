<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>プレイヤー一覧</title>
</head>
<body>
<h1>プレイヤー一覧</h1>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>種類</th>
        <th>効果</th>
        <th>作成日</th>
        <th>更新日</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->kinds }}</td>
            <td>{{ $item->effects }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
