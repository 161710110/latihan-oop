<?php

require_once 'konstrak.php';

$konstrak = new konstrak('Fikri','Bandung','XI RPL 1','SingleLillah');
echo "Namanya..".$konstrak->get_nama()."<br>";
echo "Tempat Lahir..".$konstrak->get_tempatlahir()."<br>";
echo "Kelas..".$konstrak->get_kelas()."<br>";
echo "Status..".$konstrak->get_status()."<br>";

?>