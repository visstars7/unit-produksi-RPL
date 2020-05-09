    <div id="dashboard">

        <nav id="sidebar" class="nav prussian-bg">
    
            <ul class="menu">
    
                <li class="font-roboto"><?= anchor('dashboard','Beranda'); ?></li>
                <li class="font-roboto"><?= anchor('portofolio','Portofolio'); ?></li>
                <li class="font-roboto"><?= anchor('Hubungi-kami','Hubungi Kami'); ?></li>
    
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

                <div class="row justify-content-center">

                    <h2 class="unit-produk font-roboto prussian">UNIT JASA</h2>

                </div>

                <div class="row">


                    <div class="col-md-6">
    
                        <div id="image">
        
                            <img src="<?=base_url('assets/Resource/gambarproject.png')?>" alt="produk-manager">
        
                        </div>
    
                    </div>
    
                    <div class="col-md-6">
                        
                        <ol class="prussian font-roboto">

                            <li>Web Company Profile</li>
                            <li>Web Online Shop</li>
                            <li>Aplikasi Berbasis Web</li>
                            <li>Penjulan Hosting dan Domain</li>
                            <li>Pengetikan dan Input Data</li>
                            <li>Pembuatan Aplikasi Desktop</li>

                        </ol>
                        
                    </div>
        
                </div>

            </div>

    </div>
