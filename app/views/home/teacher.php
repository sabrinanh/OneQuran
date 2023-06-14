 <!-- teacher section starts -->

<section class="teacher" id="teacher">

    <h1 class="heading">our expert teacher</h1>

    <div class="box-container">

        <?php for($i=0; $i<4; $i++) : ?>
            <div class="box">
                <div class="image">
                    <img src="<?=BASEURL?>/assets/images/teacher-<?=$i?>.jpg" alt="">
                    <div class="share">
                        <a href="<?=BASEURL?>/teacher/detail/<?=$i?>" class="fas fa-info"></a>
                    </div>
                </div>
                <div class="content">
                    <h3><?=$data['teachers']->getTeacher($i)['name']?></h3>
                    <span>instructor</span>
                </div>
            </div>
        <?php endfor;?>
    </div>
    <div style="text-align: center; margin-top: 1rem;">
        <a href="<?=BASEURL?>/teacher" class="btn">
            <span class="text text-1">more teachers</span>
            <span class="text text-2" aria-hidden="true">more teachers</span>
        </a>    
    </div>

</section>

<!-- teacher section ends -->