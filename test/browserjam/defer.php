<!doctype html>
<html>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>js卡渲染进程测试</title>
    <body>
        <h1>下面再defer的script中执行一个10秒的js循环</h1>

        <script defer>
            var time = (new Date()).getTime();
            while(((new Date()).getTime()-time) < 10000);
        </script>

        <p>根据标准，这行字应该立即渲染出来，而defer的js要等到解析结束后才执行。
        <?php include("../../ga.php"); ?>
