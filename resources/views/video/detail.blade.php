<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>视频详情页</title>
</head>
<body>
<h2>详情</h2>
<hr>

<div style="border:1px solid #ff58f2">
    <video src="{{env('CDN_HOST')}}/{{$v['path']}}" controls="controls"></video>
</div>

</body>
</html>