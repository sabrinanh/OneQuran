 <!-- teacher section starts -->


<section class="teacher" id="teacher">

    <h1 class="heading">our expert teacher</h1>

    <div class="box-container">

        <?php for($i=0; $i<$data['teachers']->countAll(); $i++) : ?>
            <div class="box">
                <div class="image">
                    <img src="<?=BASEURL?>/assets/images/teacher-<?=$i?>.jpg" alt="" height="300px">
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

</section>

<!-- teacher section ends -->