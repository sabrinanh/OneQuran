 <!-- about section starts -->

<section class="detail">

    <h1 class="heading">Article</h1>

    <div class="container">

        <figure class="detail-image">
            <img src="<?=BASEURL?>/assets/images/blog-<?=$data['id']?>.jpg" alt="" height="450">
        </figure>

        <div class="detail-content">
            <h3 style="text-align: center;"><?=$data['article']['title']?></h3>
            
            <div style="text-align: justify;">
                <?=$data['article']['description'] ?>
            </div>
<br>
            <h4>
                dipublikasikan pada <?=$data['article']['published'] ?>
            </h4>
        </div>
    </div>

</section>

<!-- about section ends -->