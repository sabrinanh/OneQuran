 <!-- about section starts -->

<section class="detail-course">

    <!-- <h1 class="heading">Kelas Tahsin Dasar</h1> -->

    <div class="container">

        <figure class="detail-course-image">
            <img src="<?=BASEURL?>/assets/images/course-<?=$data['id']?>.jpg" alt="" height="300">
        </figure>

        <div class="detail-course-content">
            <h3>Kelas <?=$data['courses']->getCourseById($data['id'])['nama_kelas']?> <?=$data['courses']->getCourseById($data['id'])['kategori_kelas']?> <?=$data['courses']->getCourseById($data['id'])['kategori_peserta']?></h3>

            <div class="icons">
                    <span><i class="far fa-bookmark"></i> 
                        <?=$data['courses']->getKurikulumByKategoriKelas($data['courses']->getCourseById($data['id'])['kategori_kelas'])['paket_belajar']?> Lessons
                    </span>
                    <span><i class="far fa-clock"></i>
                        <?=$data['courses']->getKurikulumByKategoriKelas($data['courses']->getCourseById($data['id'])['kategori_kelas'])['durasi_pertemuan']?>x Pertemuan
                    </span>
                </div>
                <div style="text-align: justify;">
                    <?=$data['courses']->getDescByNamaKelas($data['courses']->getCourseById($data['id'])['nama_kelas'])['short_desc']?>
                </div>
               
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni voluptatum ipsa quod dolores officia at excepturi quas numquam vero dolorem vitae 
                veritatis quisquam fugit voluptates doloribus, id pariatur in ipsam?</p>      -->
        </div>

        <div class="detail-course-menu">
 
                <div class="box-container">

                    <div class="box">
                        <img src="<?=BASEURL?>/assets/images/icon-1.png" alt="">
                        <a href="#detail-course-deskripsi">
                            <h3 class="primary">Informasi kelas</h3>
                        </a>
                        <a href="#review">
                            <h3 class="secondary">Testimoni</h3>
                        </a>
                    </div>

                </div>
        </div>

    </div>

</section>

<!-- about section ends -->