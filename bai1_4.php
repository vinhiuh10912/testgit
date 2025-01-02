<html>
    <head>
        <meta content="charset=utf-8">
        <title>Hien thi thong tin</title>
    </head>
    <body>
        <style>
            .body {margin: auto; padding-left: 100px;padding-top: 20px;}
            .a_0{font-weight:bold;}
            .a_1{font-weight:normal;font-style:italic;}
        </style>
        <?php
        for ($i=0; $i < 21; $i++) { 
            echo '<span class="a_'.($i%2).'">'.$i.'</span>';
        }
        ?>
    </body>
</html>