<div>
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
        <table>
            <tr>
                　@foreach($accounts as $account)
                    <th>
                        <li>ID: {{$account['ID']}} 名前：{{$account['name']}} スコア：{{$account['score']}}</li>
                        <br>
                    </th>
                @endforeach
            </tr>
        </table>
    </ul>
    </body>
    </html>

</div>
