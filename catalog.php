 	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<title>FZ FORZA</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery.formstyler.css">
	<link rel="stylesheet" href="css/jquery.formstyler.theme.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />	
   		
</head>

<body>

 <?php
		include "header.php";
		
	?>
<main class="main">

    <section class="header-inner" style="background-image: url('img/header-inner.png');">
		<ul class="bread-crambs">
			<li class="bread-crambs__item">
				<a href="#" class="bread-crambs__link">Главная/</a> 
			</li>
			<li class="bread-crambs__item">
				<a href="#" class="bread-crambs__link">Одежда/</a> 
			</li>
			<li class="bread-crambs__item">
				<a href="#" class="bread-crambs__link">Мужская/</a> 
			</li>
		</ul>

		<span class="category">мужская</span><!--мелкий шрифт над одеждой-->
		<h1 class="header-inner__title">Одежда</h1>
	</section>
	<div class="tab-wrap">
		<div class="filter">
			<div class="filter-sidebar">
				<button class="toggle-filter">
					<span class="icon-sliders"></span>
					<span class="sr-only">Фильтр</span>
				</button>
				<span class="filter__title">Найдено 34 товара</span>
			</div>
            <div class="filter-content">
                <span class="filter__title">Соптировать по:</span>
                <div class="sort">
                    <input type="radio" id="sort1" name="sort">
                    <label for="sort1" class="sort__item">Цене <span class="icon-arrow-up-down"><span class="path1"></span></span></label>
                    <input type="radio" id="sort2" name="sort" checked="">
                    <label for="sort2" class="sort__item">Наименованию <span class="icon-arrow-up-down"><span class="path1"></span></span></label>
                    <input type="radio" id="sort3" name="sort">
                    <label for="sort3" class="sort__item">Популярности <span class="icon-arrow-up-down"><span class="path1"></span></span></label>
                </div>

                <ul class="filter-list tabs">
                    <li class="filter-list__item">
                        <a href="#tab_1" class="filter-list__link"><span class="icon-list-2"></span></a>
                    </li>
                    <li class="filter-list__item active">
                        <a href="#tab_2" class="filter-list__link"><span class="icon-list"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="box-main">
            
            <?php
                
                include "filter.php";
            ?>
        
            <div class="content">
                <div class="box-tab-cont">
                    <div class="tab-cont hide" id="tab_1">
                    <?php
                         	
                             include "connection.php";
                             
                             
                             
                             if(isset($_POST['men'])){
                                $result=mysql_query("SELECT * FROM product where category=1",$link);
                                 $row = mysql_fetch_array($result);
                                 do{
                                     echo '
                                         <div class="product box">
                                             <div class="img_product">
                                                 <img src="/img/'.$row["image"].'" alt="">
                                             </div>
                                             <h2>'.$row["name"].'</h2>
                                             <p class="price">'.$row["price"].' руб.</p>
                                             <p>'.$row["description"].'</p>
                                         </div>
                                     ' ;
                                 }
                                 while( $row = mysql_fetch_array($result));
                             }
                         
                         
                       ?>
                       
                    </div>
                </div>
            </div>
            <div>
                <div class="tab-cont " id="tab_2">
                <?php
                         	
                             include "connection.php";
                             
                             $result=mysql_query("SELECT * FROM product",$link);
                             
                             if($result > 0 ){
                                 $row = mysql_fetch_array($result);
                                 do{
                                     echo '
                                         <div class="product1 box">
                                             <div class="img_product">
                                                 <img src="/img/'.$row["image"].'" alt="">
                                             </div>
                                             <h2>'.$row["name"].'</h2>
                                             <p class="price">'.$row["price"].' руб.</p>
                                             <p>'.$row["description"].'</p>
                                         </div><br>
                                     ' ;
                                 }
                                 while( $row = mysql_fetch_array($result));
                             }
                         
                         
                       ?>
                </div>
                <button class="load_more" type="button">
                    Загрузить еще
                </button>
            </div>
        </div>
	</div>
</main>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/jquery.formstyler.min.js"></script>
<script src="js/custom.js"></script>
</body>


