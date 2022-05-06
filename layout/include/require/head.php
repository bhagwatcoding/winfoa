<?php
// auto title select
    if (empty($title)):
        $title = "winfoa Web Develepment Company";  
    endif;
    // auto descriptio select
    if (empty($desc)):
        $desc =  "A website develpment company in html, css, javascript, php, laravel , mysql, sql.. and many more.";
    endif;
    // auto key word select
    if (empty($kwd)):
        $kwd = "html, css, javascript, php, laravel";
    endif;

$icon = "static/assets/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <link rel="alternate" media="x-default" href="https://www.winfoa.com">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $icon;?>144x144.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $icon;?>120x120.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $icon;?>114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $icon;?>72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $icon;?>57x57.png" />
    <link rel="shortcut icon" type="image/ico" sizes="16x16" href="<?php echo $icon;?>16x16.png" />

<?php
    $self = "/";
    if ($_SERVER['PHP_SELF'] == $self):
       echo '    <link rel="preconnect" crossorigin href="https://www.googletagservices.com/" />
    <link rel="preconnect" crossorigin href="https://www.google-analytics.com/" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZHX27E9G0F"></script>
    ';

    endif;

?>

    <!-- General Information-->
    <meta name="description" content="<?php echo $desc;?>" />
    <meta name="keywords" content="<?php echo $kwd;?>" />
    <meta name="news_description" content="<?php echo $desc;?>" />
    <meta name="news_keywords" content="<?php echo $kwd;?>" />

    <!-- General Share pops-->
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="<?php echo $title;?>" />
    <meta property="og:description" content="<?php echo $desc;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo getcwd();?>" />
    <meta property="og:image" content="<?php echo $icon;?>icon_300x300.jpg" />

    <!-- twitter card -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php echo $title;?>" />
    <meta name="twitter:description" content="<?php echo $desc;?>" />
    <meta name="twitter:url" content="<?php echo getcwd();?>" />
    <meta name="twitter:image" content="https://www.winfoa.com/<?php echo $icon;?>icon_300x300.jpg" />
    <meta name="twitter:site_name" content="Begusarai Live News" />
    
<?php
    if ($_SERVER['PHP_SELF'] == $self):
    echo "<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-ZHX27E9G0F');

        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                })(window,document,'script','dataLayer','GTM-PDQ85H9');
    </script>";
    endif;
?>

    <!--========== Website stylesheet Area ==========-->
    <!--================ START ================-->
<?php 
    $dir = "static/assets/css/"; // global assets dir 
    include 'library/resource/style.php';  // inlude tyle file
    style('i'); // exicute style in include
    // style(); // exicute style in link
?>
    <!--================ END ================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<?php
    if ($_SERVER['PHP_SELF'] == $self):
    echo '<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDQ85H9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            ';
    endif;
?>

    <!-- navbar content start-->
    <?php include_once 'layout/include/header/index.html';?>
    <!-- navbar content end -->
