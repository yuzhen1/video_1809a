<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no"/>
    <title>Aliplayer Online Settings</title>
    <link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.2/skins/default/aliplayer-min.css" />
    <script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.2/aliplayer-min.js"></script>
</head>
<body>
<div class="prism-player" id="player-con"></div>
<script>
    var player = new Aliplayer({
            "id": "player-con",
            "source": "http://play1.video.zyzyz.top/a1/a11.flv?auth_key=1562924782-0-0-8610df12cd8c3a8d2bdfc3a3f0a0465c",
            "width": "100%",
            "height": "500px",
            "autoplay": true,
            "isLive": true,
            "rePlay": false,
            "playsinline": true,
            "preload": true,
            "controlBarVisibility": "hover",
            "useH5Prism": true
        }, function (player) {
            console.log("The player is created");
        }
    );
</script>
</body>