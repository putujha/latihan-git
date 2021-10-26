web.php
[10.42, 26/10/2021] Delika Bsi Chimone 2: <?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
        $data['judul'] = "Home Page";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about()
    {
        $data['judul'] = "About Page";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
    public function profile()
    {
        $data['judul'] = "Profile Page";
        $this->load->view('v_header',$data);
    …
[10.42, 26/10/2021] Delika Bsi Chimone 2: <section>
    <h1><?php echo $judul ?></h1>
    <ul type="square">
        <li>Selamat Datang Pada Halaman About</li>
        <li>About berisi tentang kumpulan galery saya</li>
    </ul>
</section>
<footer>
    <a>Ini Catatankaki</a>
</footer>
</div>
</body>

</html>
footer
about
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Web programming II | Merancang Template sederhana dengan codeigniter</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/stylebuku.css">
</head>
<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>Home</h1>
                <h3>Ini Template Pertama Saya</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url(). 'web' ?>">Home</a></li>
                    <li><a href="<?php echo base_url(). 'web/Profile' ?>">Profile</a></li>
                    <li><a href="<?php echo base_url(). 'web/About' ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
        index
        <section>
        <h1><?php echo $judul ?></h1>
        <p align='justify'>Selamat Datang Pada Halaman Home</p>
</section>
</div>
header
body{
    background: #eee;
    color: #333;
    font-family: sans-serif;
    font-size:15px;
}

#wrapper{
    background: #fff;
    width: 1100px;
    margin: 20px auto;
}

#wrapper header{
    background-color: #232323;
    padding: 20px;
}

#wrapper header hgroup{
    float: left;
    color: #fff;
}

#wrapper header nav{
    float: right;
    margin-top: 50px;
}

#wrapper header nav ul{
    padding: 0;
    margin: 0;
}

#wrapper header nav ul li{
    float: left;
    list-style: none;
}

#wrapper header nav ul li a{
    padding: 15px;
    color: #fff;
    text-decoration: none;
}

.clear{
    clear: both;
}

footer{
    background: #232323;
    padding: 20px;
    width: 1060px;
    margin: 1px auto;
}

footer a{
    color: #fff;
    text-decoration: none;
}

section{
    padding: 20px;
    height: 60vh;
}
<section>
    <h2>Profile Page</h2>
    <p>Selamat Datang Pada Halaman Profil</p> <br>
    <p>Nama : Rio Dwi Apriliansyah</p> <br>
    <p>NIM : 12201318/p> <br>
    <p>Kelas : 12.3A.03</p> <br>
    <p>Jurusan : Sistem Informasi</p>
</section>
profile