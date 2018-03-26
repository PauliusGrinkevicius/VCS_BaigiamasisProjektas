<!DOCTYPE html>   
<html>

    <head> 
        
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> Paulius Grinkevičius CV </title>
        
<!--    <link rel="stylesheet" href="naujascv.css">-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300i,400" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.css">
    <link href="stylesheet" href="ionicons.css">
      <?php 
        wp_head();
        ?>
    </head>
    
    <body> 
        <header>
        <div class="kairysis-blokas"> 
            
            <button class="burger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </button>
            <div id='nav' class="nav">
                <nav>
                    <ul id ="nav2" class="header_menu hide">
                        <?php wp_nav_menu(array( 
                        'theme_location' => 'top-menu',
                        'container' => false,
                        'menu_class' => 'links'

                        )); ?>
<!--
                        <li> <a href="#Lets-make">Pagrindinis</a> </li>
                        <li> <a href="#apie-mane-konteineris">Apie mane</a>  </li>
                        <li> <a href="#darbo-patirtis">Darbo patirtis</a> </li>
                        <li> <a href="#issilavinimas">Išsilavinimas</a> </li>
                        <li><a href="#igudziai">Įgūdžiai</a></li>
                        <li><a href="#kontaktai">Kontaktai</a></li>
-->
                    </ul> 
                </nav>      
            </div>
        </div>
        </header>