<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
          integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<!--   <script type="text/javascript" src="./js/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="./js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="./js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <script type="text/javascript">
        $(document).ready(function(){
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 500,
                speedOut: 500,
                hideOnOverlayClick: false,
                titlePosition: 'over'
            });	}); </script>-->

</head>

<body>
<div id="main">
    <?=$menu?>
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
       <?=$content?>
    </div>

</div>

</body>
</html>
