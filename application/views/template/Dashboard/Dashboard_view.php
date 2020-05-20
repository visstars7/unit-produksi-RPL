<div id="dashboard">

    <nav id="sidebar" class="nav prussian-bg">

        <ul class="menu">

            <li class="font-roboto <?= aktifclass('Beranda') ?>">       <?= anchor('beranda','Beranda'); ?></li>
            <li class="font-roboto <?= aktifclass('Portofolio')?>">     <?= anchor('portofolio','Portofolio'); ?></li>
            <li class="font-roboto <?= aktifclass('Hubungi_kami')?>">   <?= anchor('hubungi-kami','Hubungi Kami'); ?></li>
            <li class="font-roboto <?= aktifclass('Struktur')?>">       <?= anchor('struktur','Struktur Organisasi'); ?></li>
        </ul>

    </nav>

    <div id="content">
    
        <nav class="navbar navbar-expand navbar-light">
        
            <button type="button" id="sidebarCollapse" class="btn btn-outline-dark">

                <i class="fa fa-align-justify"></i>

            </button>


            <?= anchor('#','RPL',['class'=>'logo-header prussian']); ?>
        
        </nav>

        <div class="container">

            <?php $this->load->view($konten); ?>

        </div>

</div>
