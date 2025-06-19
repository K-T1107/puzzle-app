<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アイテム一覧</title>
</head>
<body>
<h1>アイテム一覧</h1>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>レベル</th>
        <th>経験値</th>
        <th>作成日</th>
        <th>更新日</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->level }}</td>
            <td>{{ $user->Exp }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
