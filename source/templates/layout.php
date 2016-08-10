<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">

        <!-- Mobile viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon 32x32px -->
        <link rel="shortcut icon" href="favicon.ico">

        <!-- Apple-touch-icon.png 182×182px-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- Styles -->
        <link rel="stylesheet" href="css/main.min.css">

        <!-- js -->
        <script src="js/main.min.js"></script>
    </head>
    <body>
        <div class="page">

            <header class="header js-sticky">
                <h1 class="logo"><a href="<?php echo $home;?>"><?php echo $title; ?> <span><?php echo $version; ?></span></a></h1>

                <div class="navicon js-navicon">
                    <svg viewBox="0 0 14 14">
                        <line x1="0" x2="14" y1="0" y2="0"/>
                        <line x1="0" x2="14" y1="0" y2="0"/>
                        <line x1="0" x2="14" y1="0" y2="0"/>
                    </svg>
                </div>

                <nav class="nav">
                    <ul>
                        <li>
                            <a href="#getting-started">Getting Started</a>
                        </li>
                    </ul>
                </nav>
            </header>

            <div class="content">

                <div id="getting-started">
                    <?php echo $getting_started; ?>
                </div>

            </div>

        </div>

    </body>
</html>
