<!-- blog section starts -->

<section class="blog" id="blog">

    <h1 class="heading">our blogs</h1>

    <div class="box-container">

        <?php for($i=0; $i<3; $i++ ) :?>
                <div class="box">
                    <div class="image shine">
                        <img src="<?=BASEURL?>/assets/images/blog-<?=$i?>.jpg" alt="">
                        <h3><?=$data['articles']->getArticle($i)['published']?></h3>
                    </div>
                    <div class="content">
                        <div class="icons">
                            <a href="#"><i class="fas fa-user"></i>by admin</a>
                        </div>
                        <h3><?=$data['articles']->getArticle($i)['title']?></h3>
                        <p><?= substr( $data['articles']->getArticle($i)['description'], 0, 150). '...'?></p>
                        <a href="<?=BASEURL?>/blog/detail/<?=$i?>" class="btn">
                            <span class="text text-1">read more</span>
                            <span class="text text-2" aria-hidden="true">read more</span>
                        </a>
                    </div>
                </div>
        <?php endfor;?>

    </div>
    <div style="text-align: center; margin-top: 1rem;">
        <a href="<?=BASEURL?>/blog" class="btn">
            <span class="text text-1">more articles</span>
            <span class="text text-2" aria-hidden="true">more articles</span>
        </a>    
    </div>

</section>

<!-- blog section ends -->