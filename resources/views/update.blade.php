<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>修改页面</h1>
        <form action="{{url('home/updatedes')}}" method="post">
            {{csrf_field()}}
        <table border="1">
            <input type="hidden" name="id" value="{{$res->id}}">
            <tr>
                <td>账号</td>
                <td><input type="text" name="name" value="{{$res->name}}"></td>

            </tr>
            <tr>
                <td>密码</td>
                <td><input type="text" name="pwd" value="{{$res->pwd}}"></td>

            </tr>
            <tr>
                <td><input type="submit" name="提交"></td>

            </tr>

        </table>
        </form>

</body>
</html>