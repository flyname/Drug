<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
    <?php
        echo Form::open(array('url' => 'home/add'));
        echo Form::text('name');
        echo '<br/>';


        echo Form::password('pwd');
        echo '<br/>';

        echo Form::submit('点击我!');
        echo Form::close();
    ?>
    </body>
</html>
