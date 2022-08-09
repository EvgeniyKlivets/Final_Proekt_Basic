<?php
$content = convertContentToAssoc(db_select(
    from:'content',
    conditions:"name = 'navigation'"
    /*conditions:"name = 'products' OR name ='about'"*/
));
if (!empty($content['navigation']));
?>
<header id="header">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-between">
          <div id="logo">
            <a href="<?=$content['navigation']['logo']['link']?>">
                <img class ="img" src="<?=ASSETS_URI . $content['navigation']['logo']['images']?>" alt="logo">
            </a>

            <nav id="nav-menu-container">
                <?php if (!empty($content['navigation']['links'])): ?>
                <ul class="nav-menu">
                    <?php foreach ($content['navigation']['links'] as $key => $link): ?>

                    <li class="<?=($key === 0 ? 'menu-active' : '')?>">
                    <a href="<?=($link['anchor'] ? $link['href'] : DOMAIN . $link['href'])?>"><?=$link['title']?></a>
                </li>
                <?php endforeach;?>
                <li></li>
                <li><a href ="<?=DOMAIN?>/login">Sign In</a></li>
                <li><a href ="<?=DOMAIN?>/register">Sign Up</a></li>

                </ul>
                <?php endif;?>
            </nav>
            </div>
            <h4 class="cofe_chay">Coffe|Tea</h4>
        </div>

    </div>
    </div>
    </header>