<?php /* $dir =  'static/assets/css/';
    foreach ($cssArr as $value) {
        echo '<link rel="stylesheet" type="text/css" href="'.$dir.$value.'.css">';
        
};
*/?>

<style type="text/css">
        <?php $dir =  'static/assets/css/';
        $cssArr = ['default','header', 'footer','subscribe','slider'];
        
        foreach ($cssArr as $value) {
            include_once "$dir$value.css";
        };
        ?>
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- navbar content start-->

    <?php include_once 'layout/include/header/index.html';?>
    <!-- navbar content end -->
