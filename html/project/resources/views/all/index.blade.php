<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>sample</title>
    </head>
    <body>

    @if($form == 'All')
        <table border = "1">
        <thead>
            <th>ID</th><th>名前</th><th>アドレス</th><th>tel</th>
        </thead>
        <tbody>
            
            @foreach($list as $item)
            <tr>
            <td>{{$item->id}}</td> 
            <td>{{$item->name}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->tel}}</td>
            </tr>
            @endforeach
    @elseif($form == 'Single' )
        </tbody>
        </table>

        <!-- singleのとき -->
        <table border = "1">
        <thead>
            <th>ID</th><th>名前</th><th>アドレス</th><th>tel</th>
        </thead>
        <tbody>
            
            <tr>
            <td>{{$list->id}}</td> 
            <td>{{$list->name}}</td>
            <td>{{$list->address}}</td>
            <td>{{$list->tel}}</td>
            </tr>

        </tbody>
        </table>
    
        @elseif($form == 'Update' )


        <p>更新に成功しました。</p>       
        <a href="http://localhost:4501/index.php?route=/sql&db=laravel_db&table=office_masters&pos=0">確認する</a>

        @elseif($form == 'AddSingle' )
        <p>新規追加に成功しました。</p>       
        <a href="http://localhost:4501/index.php?route=/sql&db=laravel_db&table=office_masters&pos=0">確認する</a>




        @endif
    </body>
</html>