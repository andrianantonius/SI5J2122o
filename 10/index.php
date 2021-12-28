<?php
/*  Plugin Name: Plugin Rajin Belajar
	Plugin URI: https://ww.rajin.com
	Description: Plugin Rajin Belajar, Jika males nilaunya kecil, apalagi saat dijelaskan sedang sinuk sendiri chat tunang.
	Version: 0.1
	Author: Andrian Antonius
	Author URI: https://www.natal.com
	License: GPL2
*/
?>
<?php 
function modulnya(){
	echo "Andrian Antonius";
	echo "Nim 1922500215";
}
?>
<?php 
function namamenu(){
	add_menu_page(
		"Andrian WEB", #title 
		"SI WEB", #menu yang ditampilkan pada dashboard 
		"manage_options", #capabilities / capabilitu dari role / peran pengguna
		"linknya", #nama link
		"modulnya" #nama modul yang dipanggil
	);
}
 add_action("admin_menu", "namamenu");
?> 
