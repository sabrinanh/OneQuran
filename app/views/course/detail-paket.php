<!-- subjects section starts -->

<section class="subjects">

    <h3 class="heading">Apa yang akan Anda dapatkan</h3>

    <div class="box-container">

        <?php for($i=0; $i<$data['courses']->countFasilitasByKategoriKelas($data['courses']->getCourseById($data['id'])['kategori_kelas']); $i++) :?>
            <div class="box" style="background-color: white;">
                <img src="<?=BASEURL?>/assets/images/packet-<?=$i?>.png" alt="">
                <h3 style="color: black;"><?=$data['courses']->getFasilitasByKategoriKelas($data['courses']->getCourseById($data['id'])['kategori_kelas'])[$i]?></h3>
                <!-- <p style="color: black;">fun & challenging</p> -->
            </div>
        <?php endfor;?>
    </div>

</section>

<!-- subject section ends -->