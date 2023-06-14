 <!-- about section starts -->

<section class="about">

    <h1 class="heading">our expert teacher</h1>

    <div class="container">

        <figure class="about-image">
            <img src="<?=BASEURL?>/assets/images/teacher-<?=$data['id']?>.jpg" alt="" height="450">
            <section class="footer" style="background-color: white;"">
                <div class="box-container">
                    <div class="box">
                        <h3>check here to know more</h3>
                        <div class="share">
                            <a href="#" class="fab fa-facebook-f"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-instagram"></a>
                            <a href="#" class="fab fa-linkedin"></a>
                        </div>
                    </div>
                </div>
            </section>
        </figure>

        <div class="about-content">
            <h3><?=$data['teacher']['name']?></h3>
            <?=$data['teacher']['description']?>

            
                    
        </div>

    </div>

</section>

<!-- about section ends -->