<!-- subjects section starts -->

<section class="subjects">

    <h3 class="heading">Hubungi Kami</h3>

    <div class="box-container">

        <?php for($i=0; $i<$data['CS']->countDataCS(); $i++) :?>
            <div class="box" >
                <img src="<?=BASEURL?>/assets/images/packet-3.png" alt="">
                <h3><?=$data['CS']->getDataCS()[$i]['area']?></h3>
                <p><?=$data['CS']->getDataCS()[$i]['telp']?></p>
            </div>
        <?php endfor;?>
    </div>

</section>

<!-- subject section ends -->