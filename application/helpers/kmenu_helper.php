<?php // test_helper.php
if(!defined('BASEPATH')) exit('No direct script access allowed');

function kmenu($base)
{
    $ci =& get_instance();
    
    $role = $ci->session->userdata('id_role');
    
    switch ($role) {
        case '4': //petugas yandu
            $str = '<ul class="mainnav subnavbar-open-right">
                <li class=""> <a href="'.$base.'home/"><i class="icon-home"></i><span>home</span> </a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-bar-chart"></i><span>PERKEMBANGAN</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'perkembangan/entri">Entri</a></li>
                        <li><a href="'.$base.'perkembangan/index">Grafik Perkembangan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-umbrella"></i><span>IMUNISASI</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'imunisasi/index">Agenda Imunisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-wrench"></i><span>SETTING</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'setting/imunisasi">Master Imunisasi</a></li>
                    </ul>
                </li>
            </ul>
        ';
            break;
        case '3'://dokter
            $str = '<ul class="mainnav subnavbar-open-right">
                <li class=""> <a href="'.$base.'home/"><i class="icon-home"></i><span>home</span> </a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-bar-chart"></i><span>PERKEMBANGAN</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'perkembangan/index">Grafik Perkembangan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-umbrella"></i><span>IMUNISASI</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'imunisasi/index">Agenda Imunisasi</a></li>
                    </ul>
                </li>
            </ul>
        ';
            break;
        case '2'://orang tua
            $str = '<ul class="mainnav subnavbar-open-right">
                <li class=""> <a href="'.$base.'home/"><i class="icon-home"></i><span>home</span> </a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-bar-chart"></i><span>PERKEMBANGAN</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'perkembangan/entri">Entri</a></li>
                        <li><a href="'.$base.'perkembangan/index">Grafik Perkembangan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-umbrella"></i><span>IMUNISASI</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'imunisasi/index">Agenda Imunisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-wrench"></i><span>SETTING</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'setting/balita">Data Balita</a></li>
                    </ul>
                </li>
            </ul>
        ';
            break;
        default :
            $str = '<ul class="mainnav subnavbar-open-right">
                <li class=""> <a href="'.$base.'home/"><i class="icon-home"></i><span>home</span> </a> </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-bar-chart"></i><span>PERKEMBANGAN</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'perkembangan/entri">Entri</a></li>
                        <li><a href="'.$base.'perkembangan/index">Grafik Perkembangan</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-umbrella"></i><span>IMUNISASI</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'imunisasi/index">Agenda Imunisasi</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <i class="icon-wrench"></i><span>SETTING</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$base.'setting/imunisasi">Master Imunisasi</a></li>
                        <li><a href="'.$base.'setting/ortu">Data Orang Tua</a></li>
                        <li><a href="'.$base.'setting/dokter">Data Dokter</a></li>
                        <li><a href="'.$base.'setting/petugas">Data Petugas Posyandu</a></li>
                        <li><a href="'.$base.'setting/balita">Data Balita</a></li>
                    </ul>
                </li>
            </ul>
        ';
            break;
    }
    //default
//    $str = '<ul class="mainnav subnavbar-open-right">
//                <li class=""> <a href="'.$base.'home/"><i class="icon-home"></i><span>home</span> </a> </li>
//                <li class="dropdown">
//                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
//                    <i class="icon-bar-chart"></i><span>PERKEMBANGAN</span> <b class="caret"></b>
//                    </a>
//                    <ul class="dropdown-menu">
//                        <li><a href="'.$base.'perkembangan/entri">Entri</a></li>
//                        <li><a href="'.$base.'perkembangan/index">Grafik Perkembangan</a></li>
//                    </ul>
//                </li>
//                <li class="dropdown">
//                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
//                    <i class="icon-umbrella"></i><span>IMUNISASI</span> <b class="caret"></b>
//                    </a>
//                    <ul class="dropdown-menu">
//                        <li><a href="'.$base.'imunisasi/index">Agenda Imunisasi</a></li>
//                    </ul>
//                </li>
//                <li class="dropdown">
//                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
//                    <i class="icon-wrench"></i><span>SETTING</span> <b class="caret"></b>
//                    </a>
//                    <ul class="dropdown-menu">
//                        <li><a href="'.$base.'setting/imunisasi">Master Imunisasi</a></li>
//                        <li><a href="'.$base.'setting/ortu">Data Orang Tua</a></li>
//                        <li><a href="'.$base.'setting/dokter">Data Dokter</a></li>
//                        <li><a href="'.$base.'setting/petugas">Data Petugas Posyandu</a></li>
//                        <li><a href="'.$base.'setting/balita">Data Balita</a></li>
//                    </ul>
//                </li>
//            </ul>
//        ';
    return $str;
}
?>