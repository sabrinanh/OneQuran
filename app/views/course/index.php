<!-- courses section starts -->

<section class="courses" id="courses">

    <h1 class="heading">our famous courses</h1>
    <div class="box-container">

        <?php for($i=0; $i<$data['courses']->countCourses(); $i++) :?>
            <div class="box">
                <div class="image shine">
                    <img src="<?=BASEURL?>/assets/images/course-<?=$i?>.jpg" alt="">
                    <a style="text-decoration: none;" href="<?=BASEURL?>/course/detail/<?=$i?>">see courses</a>
                </div>
                <div class="content">
                    <h4>Rp <?=$data['courses']->getCourseById($i)['cost']?>.000</h4>
                    <p>updated 25/09/2021</p>
                    <h3>Kelas <?=$data['courses']->getCourseById($i)['nama_kelas']?> <?=$data['courses']->getCourseById($i)['kategori_kelas']?> <?=$data['courses']->getCourseById($i)['kategori_peserta']?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(785)</span>
                    </div>
                    <div class="icons">
                        <span><i class="far fa-bookmark"></i> <?=$data['courses']->getKurikulumByKategoriKelas($data['courses']->getCourseById($i)['kategori_kelas'])['paket_belajar']?> lessons</span>
                        <span><i class="far fa-clock"></i><?=$data['courses']->getKurikulumByKategoriKelas($data['courses']->getCourseById($i)['kategori_kelas'])['durasi_pertemuan']?>x Pertemuan</span>
                    </div>
                </div>
            </div>
        <?php endfor;?>

    </div>

</section>

<!-- courses section ends -->

