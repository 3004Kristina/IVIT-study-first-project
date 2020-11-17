<?php

$parts = \explode('?', $_SERVER['REQUEST_URI']);
$code = \strtr(\trim($parts[0], '/'), ['.php' => '', '/' => '_']);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="page_<?= $code ?: 'main'; ?>">

<!--HEADER START-->
<header class="header_wrapper">
    <div class="header_panel_top">
        <div class="container">
            <div class="panel_top_wrapper">

                <div class="panel_top_item">
                    <span>Currency:</span>
                    <select class="currency">
                        <option value="GBP">GBP</option>
                        <option value="EUR">EUR</option>
                        <option value="USD">USD</option>
                    </select>
                </div>

                <div class="panel_top_item">
                    <div class="item_scope">
                        <div class="register">
                            <a href="/registration.php">Register</a>
                            <a href="/registration.php">Sign In</a>
                        </div>
                        <div class="basket">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            <a href="#">empty</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--MENU TOP START-->
    <div class="menu_top_wrapper">
        <div class="mobile_menu_bg"></div>

        <div class="logo">
            <a href="/"><span>avenue</span> fashion</a>
        </div>

        <div class="menu_search_wrapper">

            <div class="main_menu">
                <ul class="menu_top">
                    <li class="with_dropdown">
                        <a href="#" class="dropdown_toggle">mens</a>
                        <div class="dropdown">
                            <div class="dropdown_list">
                                <ul class="dropdown_item">
                                    <li><a href="/product_view.php">casuals</a></li>
                                    <li><a href="/product_view.php">Jackets</a></li>
                                    <li><a href="/product_view.php">Hoodies & Sweatshirts</a></li>
                                    <li><a href="/product_view.php">Polo Shirts</a></li>
                                    <li><a href="/product_view.php">Sportswear</a></li>
                                    <li><a href="/product_view.php">Trousers & Chinos</a></li>
                                    <li><a href="/product_view.php">T-Shirts</a></li>
                                </ul>
                                <ul class="dropdown_item">
                                    <li><a href="/product_view.php">Formal</a></li>
                                    <li><a href="/product_view.php">Jackets</a></li>
                                    <li><a href="/product_view.php">Shirts</a></li>
                                    <li><a href="/product_view.php">Suits</a></li>
                                    <li><a href="/product_view.php">Trousers</a></li>
                                </ul>
                            </div>
                            <div class="dropdown_sale">
                                <p class="sale">
                                    Autumn sale!
                                </p>
                                <p>
                                    up to 50% off
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="with_dropdown">
                        <a href="#" class="dropdown_toggle">womens</a>
                        <div class="dropdown">
                            <div class="dropdown_list">
                                <ul class="dropdown_item">
                                    <li><a href="#">casuals</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Hoodies & Sweatshirts</a></li>
                                    <li><a href="#">Polo Shirts</a></li>
                                    <li><a href="#">Sportswear</a></li>
                                    <li><a href="#">Trousers & Chinos</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                </ul>
                                <ul class="dropdown_item">
                                    <li><a href="#">Formal</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Suits</a></li>
                                    <li><a href="#">Trousers</a></li>
                                </ul>
                            </div>
                            <div class="dropdown_sale">
                                <p class="sale">
                                    Autumn sale!
                                </p>
                                <p>
                                    up to 50% off
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="/brand.php">the brand</a>
                    </li>
                    <li class="with_dropdown">
                        <a href="#" class="dropdown_toggle">local stores</a>
                        <div class="dropdown">
                            <div class="dropdown_list">
                                <ul class="dropdown_item">
                                    <li><a href="/local_stories.php">Our Local Stories</a></li>
                                    <li><a href="/local_stories.php">London</a></li>
                                    <li><a href="/local_stories.php">New York</a></li>
                                    <li><a href="/local_stories.php">Paris</a></li>
                                </ul>
                            </div>
                            <div class="dropdown_sale">
                                <p class="sale">
                                    Autumn sale!
                                </p>
                                <p>
                                    up to 50% off
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="with_dropdown">
                        <a href="#" class="dropdown_toggle">look book</a>
                        <div class="dropdown">
                            <div class="dropdown_list">
                                <ul class="dropdown_item">
                                    <li><a href="/lookbook.php">Our Lookbooks</a></li>
                                    <li><a href="/lookbook.php">Latest Posts (mixed)</a></li>
                                    <li><a href="/lookbook.php">Men’s Lookbook</a></li>
                                    <li><a href="/lookbook.php">Women’s Lookbook</a></li>
                                </ul>
                                <ul class="dropdown_item">
                                    <li><a href="/lookbook.php">Your Lookbook</a></li>
                                    <li><a href="/lookbook.php">View and Edit</a></li>
                                    <li><a href="/lookbook.php">Share</a></li>
                                    <li><a href="/lookbook.php">Delete</a></li>
                                </ul>
                            </div>
                            <div class="dropdown_sale">
                                <p class="sale">
                                    Autumn sale!
                                </p>
                                <p>
                                    up to 50% off
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="search_form_wrapper">
                <form action="" method="get">
                    <div class="search_form">
                        <input type="search" name="q" placeholder="Search..">
                        <button type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
            <a href="#" class="mobile_menu_btn">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
    <!--MENU TOP END    -->
</header>
<!--HEADER START-->