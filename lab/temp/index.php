<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <script type="text/javascript" src="/assets/js/md5.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/jsencrypt.js"></script>

    <!-- load template -->
    <?php include("../index.html"); ?>
    <!-- jspsych核心 -->
    <script type="text/javascript" src="/assets/mupsy/mupsy.js"></script>
    <link href="/assets/mupsy/mupsy.css" rel="stylesheet" type="text/css">
</head>

<body>
</body>
<script type="text/javascript">
let timeline = [];
let info = {};
timeline.push(info_get(), {
    type: "html-keyboard-response",
    stimulus: "123"
})

mupsyStart({
    timeline: timeline
});
</script>
</html>