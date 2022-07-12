<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
        <h1>取得データ</h1>
        <!-- All -->
        <form action="/office_masters" method="post" id="All">
            @csrf
            axreq:All<input type="hidden" name="axreq" value="All">
            <input type="submit" value="送信" form="All"><br>
        </form>

        <br>

        <!-- Single -->
        <form action="/office_masters" method="post" id="Single">
            @csrf
            axreq:Single<input type="hidden" name="axreq" value="Single"><br>
            id:<input type="lavel" name="id" value="1">
            <input type="submit" value="送信" form="Single">
        </form>

        <br>

        <!-- Update -->
        <form action="/office_masters" method="post" id="Update">
            @csrf
            axreq:Update<input type="hidden" name="axreq" value="Update"><br>
            id:<input type="lavel" name="id" value="1"><br>
            name:<input type="lavel" name="name" value=""><br>
            address:<input type="lavel" name="address" value=""><br>
            tel:<input type="lavel" name="tel" value=""><br>
            <input type="submit" value="送信" form="Update">
        </form>

        <br>

        <!-- AddSingle -->
        <form action="/office_masters" method="post" id="AddSingle">
            @csrf
            axreq:AddSingle<input type="hidden" name="axreq" value="AddSingle"><br>
            <!-- id:<input type="lavel" name="id" value="1"><br> -->
            name:<input type="lavel" name="name" value=""><br>
            address:<input type="lavel" name="address" value=""><br>
            tel:<input type="lavel" name="tel" value=""><br>
            <input type="submit" value="送信" form="AddSingle">
        </form>



    </body>
</html>
