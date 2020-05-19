<div class="row text-center justify-content-center">

    <h2 class="font-roboto prussian">HUBUNGI KAMI</h2>

</div>

<div class="row">

    <div class="col-md-6 col-12">

        <div class="images-hubungi text-center">

            <img src="<?= base_url('assets/Resource/hubungikami.png')?>" alt="">

        </div>

    </div>

    <div class="col-md-6 col-12">

        <ul class="list-contact prussian">

            <li>
                Info selengkapnya hubungi 
                SMKN 1 BOYOLANGU
            </li>

            <li>

                Alamat: Jl. Ki Mangunsarkoro VI/3, Beji, Boyolangu, 
                Tulungagung, Jawa Timur

            </li>

            <li style="padding-left:0">

                <ul style="padding-left:0">

                    <li style="padding:0px 20px">
                        Email : <a href="mailto: smkn1boyolangu@yahoo.co.id"> smkn1boyolangu@yahoo.co.id</a>
                    </li>

                    <li>
                        Telp : (0355) 323224
                    </li>

                </ul>

            </li>

        </ul>

    </div>

    <div class="col-md-6">

        <div class="form-wrap">

            <?= form_open('pesan'); ?>

                <div class="form-group">

                    <label for='nama'>Nama</label>
                    <input class="form-control w-75" type='text' name='nama' id='nama' placeholder=''>

                </div>

                <div class="form-group">

                    <label for='nama'>No.Telp</label>
                    <input class="form-control w-75" type='text' name='nama' id='nama' placeholder=''>

                </div>

                <div class="form-group">

                    <label for='pesan'>Pesan</label>
                    <textarea class="form-control w-75" name="pesan" id="pesan" cols="5" rows="5"></textarea>

                </div>
                <div class="form-group">

                    <button class="btn btn-success w-75" type="submit">Kirim</button>

                </div>

            <?php form_close(); ?>

        </div>

    </div>

</div>