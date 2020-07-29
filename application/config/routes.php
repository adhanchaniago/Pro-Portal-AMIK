<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Admin
$route['Admin'] = 'admin/Admin/index';
$route['Admin/Add'] = 'admin/Admin/add';
$route['Admin/Delete/(:num)'] = 'admin/Admin/delete/$1';
$route['Admin/(:num)'] = 'admin/Admin/index/$1';
$route['Admin/Update'] = 'admin/Admin/update';

// Dosen
$route['Dosen'] = 'admin/Dosen/index';
$route['Dosen/Add'] = 'admin/Dosen/add';
$route['Dosen/Delete/(:num)'] = 'admin/Dosen/delete/$1';
$route['Dosen/(:num)'] = 'admin/Dosen/index/$1';
$route['Dosen/Detail/(:num)'] = 'admin/Dosen/detail/$1';
$route['Dosen/Update'] = 'admin/Dosen/update';

// Berita
$route['Berita'] = 'admin/Berita/index';
$route['Berita/Add'] = 'admin/Berita/add';
$route['Berita/Delete/(:num)'] = 'admin/Berita/delete/$1';
$route['Berita/(:num)'] = 'admin/Berita/index/$1';
$route['Berita/Detail/(:num)'] = 'admin/Berita/detail/$1';
$route['Berita/Update'] = 'admin/Berita/update';

// Penelitian
$route['Penelitian'] = 'admin/Penelitian/index';
$route['Penelitian/Add'] = 'admin/Penelitian/add';
$route['Penelitian/Delete/(:num)'] = 'admin/Penelitian/delete/$1';
$route['Penelitian/(:num)'] = 'admin/Penelitian/index/$1';
$route['Penelitian/Detail/(:num)'] = 'admin/Penelitian/detail/$1';
$route['Penelitian/Update'] = 'admin/Penelitian/update';

$route['HalamanLoginAdmin'] = 'admin/Login/halamanAdmin';
$route['LoginAdmin'] = 'admin/Login/doLoginAdmin';
$route['Home'] = 'admin/Home/index';
$route['LogoutAdmin'] = 'admin/Login/logoutAdmin';
$route['LogoutDosen'] = 'admin/Login/LogoutDosen';

$route['Laporan'] = 'admin/Laporan/index';
$route['Laporan/Cetak'] = 'admin/Laporan/cetak';
// $route['Laporan/Print'] = 'admin/Laporan/cetak';

$route['LoginDosen'] = 'admin/Login/doLoginDosen';
$route['HomeDosen'] = 'Welcome/afterLogin';
$route['Ajukan'] = 'Welcome/Ajukan';
