<?php
$menu_itemms_phone = [
    ['name'=>'iphone11', 'image'=>'img/Phone.svg'],
    ['name'=>'iphone11', 'image'=>'img/Phone.svg'],
    ['name'=>'iphone11', 'image'=>'img/Phone.svg'],
    ['name'=>'iphone11', 'image'=>'img/Phone.svg'],
]
?>
<!doctype html>
<html lang="it">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>Hello, world!</title>
</head>
<body class="load">
<div class="preloader">
    <div class="logo-prealoader">
    <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div>
</div>

</body>
<nav class="gen_nav align-items-stretch">
    <div class="gen_nav_slider p-2">
        <table>
            <tbody>
            <tr>
                <td class="align-middle">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/slide1.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/slide1.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/slide1.png" class="d-block w-100 img-fluid" alt="...">
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="align-bottom text-right">
                    <div class="description">
                        <h2>ремонт Айфонов
                            профессиональный</h2>
                        <button type="button" class="btn btn-one mt-1 mr-auto">Riparare</button>
                        <span class="slider_number_status">1/4</span>
                    </div>


                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="gen_nav_items p-2">
        <ul>
            <li class="t_i"><a href="#">Onefig</a>
                <ul>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                </ul>
            </li>
            <li class="t_i"><a href="#">Onefig</a>
                <ul>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                    <li><a href="#">Onefig</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<header>
    <nav class="container">
        <div class="row">
            <div class="col-lg-3">
                <img src="img/logz1.png" alt="Лого" class="logo">
                <h1>IRIPARAZIONE</h1>
            </div>
            <div class="col">
                <ul class="d-flex justify-content-around">
                    <?php foreach ($menu_itemms_phone as $item):?>
                        <li class="p-2">
                            <a href="#">
                                <img src="<?=$item['image']?>" alt="<?=$item['name']?>">
                                <span><?=$item['name']?></span>
                            </a>

                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
            <div class="col-lg-3">
                <div id="nav-icon1">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

    </nav>
    <div class="container index">
        <div class="row">
            <div class="col-lg-12">
                <table style="height: 600px; max-width: 500px; width: 100%;">
                    <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <span>Iphone's</span>
                            <h2>Riparazione professionale</h2>
                            <button type="button" class="btn btn-one">Riparare</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</header>
<div class="container-fluid form-index">
    <div class="row justify-content-center">
        <div class="col-12  text-center">
            <img alt="cloud" class="d-inline-block" src="/img/image22.svg" >
            <h2 class="d-inline-block" >Sconti per piu' riparazioni</h2>
            <article>Sconti fino a 50% per la sostituzione di più pezzi</article>
            <hr>
        </div>
        <div class="col-12 form-index-content">
            <img alt="phone" class="left-image" src="./img/image23.png">
            <img alt="phone" class="right-image"  src="./img/image25.png">
            <span class="percent left-percent">50%</span>
            <span class="percent right-percent">50%</span>
            <img class="left-center-image" src="img/image24.png">
            <img class="right-center-image" src="img/image26.png">
            <div class="form-container">

                <form>
                    <div class="form-group">
                        <label id="nome">Nome:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Pinco Pallino">
                    </div>
                    <div class="form-group" id="phonen">
                        <label>N.d. Telefono:</label>
                        <input type="text" class="form-control" id="phonen1" placeholder="+39 33 3337 3114">
                    </div>
                    <div class="form-group" id="email">
                        <label>E-MAIL:</label>
                        <input type="text" class="form-control" id="phonen1" placeholder="+39 33 3337 3114">

                    </div>
                    <button type="button" class="btn btn-one">Riparare</button>
                </form>

            </div>

        </div>
    </div>
</div>
<?php
$phones = [
    '4',
    '4S',
    '5',
    '5S',
    'SE',
    '6',
    '6S',
    '7',
    '8'
];
?>
<div class="container reasonable-prices">
    <div class="row">
        <div class="col-12 head-content text-center">
            <img alt="cloud" class="d-inline-block" src="/img/image22.svg" >
            <h2 class="d-inline-block" >Sconti per piu' riparazioni</h2>
            <article>Sconti fino a 50% per la sostituzione di più pezzi</article>
            <hr>
        </div>
        <div class="col-12 pt-2">
            <ul class="text-center">
                <?php foreach ($phones as $phone):?>

                    <li><a href=""><?=$phone?></a></li>

                <?php endforeach;?>
            </ul>
        </div>
    </div>
    <?php
    $phone_repo = [
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/cam.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте'],
        ['name'=> 'Не работает \ не четко снимает камера', 'img' => '/img/phone/headphone.jpg', 'alt' => 'динамик iphone', 'price' => 'Уточняйте'],
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/leftbuttons.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте'],
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/volume_button.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте'],
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/acum.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте'],
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/crash_display.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте'],
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/lighting.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте'],
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/dinamic.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте'],
        ['name' => 'Не работает \ не четко снимает камера', 'img' => '/img/phone/button_apple.jpg', 'alt' => 'камера iphone', 'price' => 'Уточняйте']
    ]
    ?>
    <div class="row justify-content-center reasonable-prices-phone">
        <?php
        foreach ($phone_repo as $key => $phones_repo):
            if($key % 2 or $key === (count($phone_repo) - 1)){
                $i = true;
            }else{
                $i = false;
            }



            ?>

            <div class="col-6 pt-5">
                <div class="block-float text-<?=($i)? 'left ml' : 'right mr'?>-auto">
                    <img class="m-2 float-<?=($i)? 'left' : 'right'?>" src="<?=$phones_repo['img']?>" alt="<?=$phones_repo['alt']?>">
                    <h3 class="pt-4"><?=$phones_repo['name']?></h3>
                    <article><?=$phones_repo['price']?></article>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
<?php
$highlight = [
    'Display Rotto',
    'Display Rotto',
    'Display Rotto',
    'Display Rotto',
    'Display Rotto',
    'Display Rotto',
    'Display Rotto',
    'Display Rotto',
    'Display Rotto'
];
?>

<footer>
    <h2>Vi possiamo aiutare</h2>

    <div class="container">
        <div class="col-12 pb-5">
            <div class="d-flex justify-content-center flex-wrap pt-5">
                <?php foreach ($highlight as $heghlights):?>
                    <a href="#" class="p-2 m-2 bd-highlight"><?=$heghlights?></a>
                <?php endforeach; ?>

            </div>
            <button type="button" class="btn btn-one mt-5" >Riparare</button>
        </div>
    </div>

</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
    let all_slide = $("#carouselExampleSlidesOnly .carousel-item").length;
    render_slide_count(1, all_slide)
    $('#carouselExampleSlidesOnly').on('slide.bs.carousel', function (e) {
        let number_slide = e.to+1;
        render_slide_count(number_slide, all_slide);
    })
    function render_slide_count(number_slide, all_slide){
        $('.slider_number_status').html(number_slide + "/" + all_slide);
    }
</script>
</body>

</html>