<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">

        <!-- Mobile viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/main.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/1.1.4/stickyfill.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/languages/less.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/languages/css.min.js"></script>
        <script src="/js/main.min.js"></script>
    </head>
    <body>
        <div class="page">

            <header class="header js-sticky">
                <h1 class="logo"><a href="<?php echo $home;?>"><?php echo $title.' '.$version; ?></a></h1>

                <div class="svg-menu">
                    <svg viewBox="0 0 16 16">
                        <line x1="0" x2="14" y1="0" y2="0"/>
                        <line x1="0" x2="14" y1="0" y2="0"/>
                        <line x1="0" x2="14" y1="0" y2="0"/>
                    </svg>
                </div>

                <nav class="nav js-sticky">
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
