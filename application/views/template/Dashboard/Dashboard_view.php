    <div id="dashboard">

        <nav id="sidebar" class="nav prussian-bg">
    
            <ul class="menu">
    
                <li class="font-roboto <?= aktifclass('Beranda') ?>"><?= anchor('beranda','Beranda'); ?></li>
                <li class="font-roboto <?php if($this->router->fetch_class()=="Portofolio")echo "active" ?>"><?= anchor('portofolio','Portofolio'); ?></li>
                <li class="font-roboto <?php if($this->router->fetch_class()=="Hubungi_kami")echo "active" ?>"><?= anchor('hubungi-kami','Hubungi Kami'); ?></li>
    
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
