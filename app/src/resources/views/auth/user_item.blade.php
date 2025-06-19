<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ユーザーアイテム一覧</title>
</head>
<body>
<h1>ユーザーアイテム一覧</h1>

<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>ユーザーID</th>
        <th>アイテムID</th>
        <th>個数</th>
        <th>作成日</th>
        <th>更新日</th>
    </tr>
    </thead>
    <tbody>
    @foreach($userItems as $userItem)
        <tr>
            <td>{{ $userItem->id }}</td>
            <td>{{ $userItem->user_id }}</td>
            <td>{{ $userItem->item_id }}</td>
            <td>{{ $userItem->amount }}</td>
            <td>{{ $userItem->created_at }}</td>
            <td>{{ $userItem->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
