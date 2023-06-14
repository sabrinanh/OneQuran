 <!-- contact section starts -->

 <section id="form-regis" class="contact" style=" display: none; opacity: 0;">

    <h1 class="heading">Pendaftaran</h1>

    <div class="row" style="background-color: #3dbcbb;">
        <!-- <div class="image">
            <img src="<?=BASEURL?>/assets/images/contact.png" alt="">
        </div> -->
        <form action="" >
            <h3 style="color: white;" >Pendaftaran Kelas <?=$data['courses']->getCourseById($data['id'])['nama_kelas']?> <?=$data['courses']->getCourseById($data['id'])['kategori_kelas']?> <?=$data['courses']->getCourseById($data['id'])['kategori_peserta']?> </h3>
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="number" placeholder="phone number" class="box">
            <select name="class" id="class-form" class="box" style="color: black;">
                <option value="">Pilih Kelas</option>
                <option value="">Online</option>
                <option value="">Offline</option>
            </select>
            <select name="sesi" id="sesi-form" class="box" style="color: black;">
                <option value="">Pilih Sesi Kelas</option>
                <?php for($i=1; $i<$data['courses']->countJadwalById($data['id']%2); $i++) :?>
                    <option value=""><?=$data['courses']->getJadwalById($data['id']%2)[0]?> <?=$data['courses']->getJadwalById($data['id']%2)[$i];?></option>
                <?php endfor;?>  
            </select>
            <!-- <textarea placeholder="message" class="box" cols="30" rows="10"></textarea> -->
            <btn class="btn" type="submit" id="form-regis-submit-btn" style="cursor: pointer; pointer-events: none;">
                <span class="text text-1">submit</span>
                <span class="text text-2" aria-hidden="true">submit</span>
            </btn>
        </form>
    </div>

</section>

<!-- contact section ends -->