<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>信号機マップ(情報追加)</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="add" method="POST">
        @csrf
        警察署ID<input type="text" name="police_id"><br>
        管理No<input type="text" name="ctl_no"><br>
        交差点名<input type="text" name="intersection"><br>
        設置場所<input type="text" name="address"><br>
        業者ID<input type="text" name="co_id">
       
        <input class="btn btn-primary" type="submit" name="submit" value="追加">
      </form>
        交差点名<a href="./">マップ表示</a>
        <table border="1">
        <tbody>
        <tr>
        <th>id</th><th>警察ID</th><th>管理No</th><th>交差点名</th><th>設置場所</th><th>業者ID</th>
        </tr>
        @foreach($intersections as $intersection)
        <tr>
            <td>{{$intersection->id}}</td><td>{{$intersection->police_id}}</td><td>{{$intersection->ctl_no}}</td><td>{{$intersection->intersection}}</td><td>{{$intersection->address}}</td><td>{{$intersection->co_id}}</td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
    </body>
</html>
