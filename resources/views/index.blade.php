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
        <h1>展示页面</h1>
        <a href="{{url('home/welcome')}}">添加</a>
        <table border="1">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>pwd</td>
                <td>action</td>
            </tr>
            <?php foreach($res as $k=>$v){ ?>
            <tr>
                <td>{{$v->id}}</td>
                <td>{{$v->name}}</td>
                <td>{{$v->pwd}}</td>
                <td>
                    <a href="{{url('home/del')}}/{{$v->id}}">删除</a>
                    <a href="{{url('home/update')}}/{{$v->id}}">修改</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <span>{{$res->appends(['type'=>$type])->render()}}</span>

</body>
</html>