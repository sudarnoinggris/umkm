<div id="wrapper" class="home-page">
    <div class="topbar">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    <header>
        <!--<nav class="navbar navbar-inverse"> -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">
                        <img src="<?php echo base_url('assets/img/logotext.png');  ?> " height="30px" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="<?php echo base_url(); ?>">Home</a></li> -->
                        <li><a href="<?php echo base_url(); ?>">HOME</a></li>
                        <li><a href="<?php echo base_url('produk'); ?>">PRODUK</a></li>
                        <li><a href="<?php echo base_url('daftar'); ?>">DAFTAR ANGGOTA</a></li>
                        <li><a href="<?php echo base_url('kontak'); ?>">KONTAK</a></li>



                        <li><a href="<?php echo base_url() . 'auth'; ?>"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>

                    </ul>
                </div>
            </div>


        </nav>

    </header>


</div> <!-- class home page atas -->
<?php if ($title != 'Home') { ?>

    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="pageTitle"><?php echo $title; ?></h2>
                </div>
            </div>
        </div>
    </section>

<?php }; ?>