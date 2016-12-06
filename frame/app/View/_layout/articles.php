<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="http://allfont.ru/allfont.css?fonts=oswald-" rel="stylesheet" type="text/css" /><!--Подключение шрифтов-->
       <link href="http://allfont.ru/allfont.css?fonts=six-caps" rel="stylesheet" type="text/css"><!--Подключение шрифтов-->
        <link rel="stylesheet" type="text/css" href="<?php echo SERVER; ?>style/style.css" />
        <title><?php echo $title; ?></title>
        <style>

li.menuu/* Задал шрифт элементов меню, размер, цвет */
{
    display: inline;
   font-family: 'Six Caps', arial;
    font-size: 40pt;
    color:#a0acb9;
}
            body
{
    background-image: url(<?php echo SERVER; ?>images/wood.png);
    background-size: auto;
    background-repeat:repeat;
}
            .main
{
box-shadow: 0 0 20px rgba(0,0,0,0.5);
background-image: url(<?php echo SERVER; ?>images/2.png);
height: 1564px;
margin:0 auto;
width: 1110px;
}
            .menu
{
    min-height: 66px;
    margin: 0 auto;
    height: 66px;
    width: 90%;
    background: url(<?php echo SERVER; ?>images/menu.png);
    background-repeat: repeat-x;
}
        </style>
    </head>
    <body>
        <div class="site">
        <div class="logo"><!--Логотип-->
            <h1 class="logo1"><a class="logotip" href="pr6.html">shifrovka</a></h1>
            <img class="clap" src="<?php echo SERVER; ?>images/clap.png">
        </div>
        <div class="main">
            <div class="header"><!--Шапка-->
                <div class="search"><!--Поиск-->
                    <img src="<?php echo SERVER; ?>images/4.png" style="margin-top: -27px;margin-right:2%;">
                </div>
                <div class="menu"><!--Меню-->
                    
                    <ul class="menu2"><!-- Пункты Меню-->
<?php echo $menu; //MENUHA ?>
                        <!--<li class="menuu"><a href="">Shifri</a></li>
                        <img src="img/5.png" style="margin-bottom:10px;">
                        <li class="menuu"><a href="">Info</a></li>
                        <!--<img src="img/5.png" style="margin-bottom:10px;">
                        <li class="menuu"><a href="">services</a></li>
                        <img src="img/5.png" style="margin-bottom:10px;">
                        <li class="menuu"><a href="">page layouts</a></li>
                        <img src="img/5.png" style="margin-bottom:10px;">
                        <li class="menuu"><a href="">sliders</a></li>-->
                    </ul>
                </div>
            </div>
            
            <div class="contant"><!--посты-->
                <div class="post1"style="text-align:center; width: 100%;">
    <?php echo $content_for_layout; ?>
               
                    <p class="post"></p>
                    <!--<img src="img/post1.png">-->
                </div>
                
                <div class="linia"><!--линия-->
                <img class="line" src="<?php echo SERVER; ?>images/line.png">
                </div>
                <div class="slider"><!--картинка под меню-->
               <img class="slider"src="<?php echo SERVER; ?>images/reclama.jpg">
            </div> 
                <div class="pf"><!--предфуттер-->
                    <img class="pf" src="<?php echo SERVER; ?>images/pf.png">
                </div>
            </div>
            
            <div class="footer"><!--Подвал-->
            <footer>
            <div class="posts">
                <h3> Шифры</h3>
                <ul style="list-style-type:none;">
                    <li class="spis">Шифр Цезаря</li>
                    <li class="spis">RSA</li>
                    <li class="spis">Шифр Виженера</li>
                    <li class="spis">Другой шифр</li>
                    <li class="spis">Добавим</li>
                </ul>
            </div>
            <div class="categories">
                <h3>Категории</h3>
                <ul style="list-style-type:none;">
                    <li class="spis">Category 1</li>
                    <li class="spis">Category 2</li>
                    <li class="spis">Category 3</li>
                    <li class="spis">Featured</li>
                    <li class="spis">Uncategprized</li>
                </ul>
            </div>
            <div class="copyright">
                <h3>COPYRIGHT</h3>
                <ul style="list-style-type:none;">
                    <li class="spis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</li>
                </ul>
            </div>
                <div class="p">
                    <img src="<?php echo SERVER; ?>images/10.png">
                </div>
            </footer>
        </div>
        
        </div>
        </div>
    </body>
</html>