 <!-- about section starts -->

<section class="detail-course-deskripsi" id="detail-course-deskripsi">

    <div class="container">

        <div class="detail-course-deskripsi-content">
            <h3>Deskripsi</h3>
            <div style="text-align: justify;">
                    <?=$data['courses']->getDescByNamaKelas($data['courses']->getCourseById($data['id'])['nama_kelas'])['short_desc']?>
                    <?=$data['courses']->getDescByNamaKelas($data['courses']->getCourseById($data['id'])['nama_kelas'])['desc']?>
            </div>
            <h2>Ketentuan Kelas <?=$data['courses']->getCourseById($data['id'])['kategori_kelas']?>  </h2>
            <ul>
                <?php for($i=0; $i<$data['courses']->countKategoriKelasByKategoriKelas($data['courses']->getCourseById($data['id'])['kategori_kelas']); $i++)  : ?>
                <li><?=$data['courses']->getKategoriKelasByKategoriKelas($data['courses']->getCourseById($data['id'])['kategori_kelas'])[$i]?></li>
                <?php endfor;?>
            </ul>
                  
                <btn class="btn"  id="form-regis-btn" style="cursor: pointer;">
                    <span class="text text-1">Daftar Sekarang</span>
                    <span class="text text-2" aria-hidden="true">Daftar Sekarang</span>
                </btn> 
            
        </div>

        <div class="detail-course-deskripsi-silabus">
            <h3>Ketentuan belajar</h3>
            <h2>
                Peserta <?=$data['courses']->getCourseById($data['id'])['kategori_peserta']?> :
            </h2>
            <?php for($i=0; $i<$data['courses']->countKategoriPesertaByKategoriPeserta($data['courses']->getCourseById($data['id'])['kategori_peserta']); $i++) :?>
                <ul> 
                    <li><?=$data['courses']->getKategoriPesertaByKategoriPeserta($data['courses']->getCourseById($data['id'])['kategori_peserta'])[$i]?></li>
                </ul>
            <?php endfor;?>
            
            <h2 >
                Jadwal  :
            </h2>
            <?php for($i=0; $i<$data['courses']->countJadwalById($data['id']%2); $i++) :?>
                <ul style="list-style-type: none;">
                    <li><?=$data['courses']->getJadwalById($data['id']%2)[$i];?></li>
                </ul>
            <?php endfor;?>    
            
        </div>

    </div>

</section>

<!-- about section ends -->