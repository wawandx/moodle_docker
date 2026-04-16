<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_office365', language 'id', version '5.1'.
 *
 * @package     repository_office365
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_unifiedfolderids'] = 'Repositori Microsoft 365 - ID map terpadu';
$string['cachedef_unifiedgroupfolderids'] = 'Repositori Microsoft 365 - ID map terpadu untuk grup';
$string['configplugin'] = 'Konfigurasikan Repositori Microsoft 365';
$string['controlledsharelinkdesc'] = 'Salinan bersama (hanya untuk anggota organisasi)';
$string['copiedfile'] = 'Salinan berkas';
$string['coursegroup'] = 'Nonaktifkan map Grup (Kursus) di pemilih berkas';
$string['defaultgroupsfolder'] = 'Berkas Kursus';
$string['directlinkdesc'] = 'Tautan langsung (izin yang sudah ada)';
$string['disableanonymousshare'] = 'Nonaktifkan opsi "{$a}"';
$string['disableanonymousshare_help'] = 'Saat tidak dicentang (berkas), pengguna dapat memilih untuk membuat salinan berkas dan membagikannya dengan semua orang di organisasi. Salinan tersebut disimpan di OneDrive pengguna dan dibagikan dengan semua anggota organisasi.

**Cara Kerjanya:**
* Membuat salinan berkas yang dipilih dengan akhiran "- Shared".
* Salinan tersebut disimpan ke OneDrive pengguna (bukan lokasi aslinya).
* Tautan berbagi lingkup organisasi dibuat untuk salinan tersebut.
* Berkas asli tetap tidak berubah dengan izin yang ada.

**Kontrol Akses:**
* Hanya anggota organisasi Microsoft 365 Anda yang dapat mengakses berkas.
* Siapa pun di organisasi dengan tautan tersebut dapat MELIHAT berkas.
* Pengguna eksternal dan pengguna anonim TIDAK DAPAT mengakses berkas.
* Tautan tidak kedaluwarsa secara otomatis.
* Pemilik berkas dapat mengelola atau mencabut berbagi dari OneDrive mereka.

**Kapan Digunakan:**
* Anda ingin berbagi berkas dengan semua anggota organisasi.
* Anda ingin melindungi berkas asli dari perubahan yang tidak disengaja.
* Ruang penyimpanan di Moodle menjadi perhatian.
* Konten berkas harus sesuai untuk akses di seluruh organisasi.

**Catatan Penting:**
* Operasi penyalinan mungkin membutuhkan beberapa detik untuk berkas berukuran besar.
* Pengguna harus memastikan konten berkas sesuai untuk dibagikan di seluruh organisasi.
* Berkas yang disalin akan muncul di OneDrive pengguna dengan akhiran "- Shared".
* Perubahan yang dilakukan pada berkas asli TIDAK akan tercermin dalam salinan yang dibagikan, dan sebaliknya.

Centang kotak ini untuk menonaktifkan opsi ini dan mencegah pengguna membuat salinan yang dibagikan di seluruh organisasi.';
$string['disableanonymoussharewarning'] = '<div class="alert alert-info"><strong>Catatan:</strong> Saat menggunakan opsi "{$a}", salinan berkas asli akan dibuat dan dibagikan kepada semua anggota organisasi. Berkas asli tetap tidak berubah. Pengguna harus memastikan bahwa isi berkas sesuai untuk akses oleh seluruh anggota organisasi.</div>';
$string['disabledirectlink'] = 'Nonaktifkan opsi "{$a}"';
$string['disabledirectlink_help'] = 'Saat tidak dicentang (bawaan), pengguna dapat menambahkan tautan langsung ke berkas di OneDrive mereka alih-alih menyalinnya ke Moodle. Berkas tetap berada di OneDrive dan Moodle hanya menyimpan tautan referensi.

**Pertimbangan Kontrol Akses Penting:**
* Izin OneDrive yang ada pada berkas TIDAK diubah.
* Pengguna yang mengakses tautan harus memiliki izin yang sesuai di OneDrive untuk melihat berkas.
* Merupakan tanggung jawab pengguna yang menambahkan tautan untuk memastikan izin akses yang tepat.
* Jika izin OneDrive tidak diatur dengan benar, pengguna lain mungkin tidak dapat mengakses berkas.

**Kapan menggunakan opsi ini:**
* Berkas sudah dibagikan dengan audiens yang dituju di Microsoft 365.
* Anda ingin mempertahankan satu sumber kebenaran di OneDrive.
* Ruang penyimpanan di Moodle menjadi perhatian.
* Perubahan pada berkas OneDrive harus tercermin di Moodle.

Centang kotak ini untuk menonaktifkan opsi ini dan mewajibkan semua berkas disalin ke Moodle.';
$string['disabledirectlinkwarning'] = '<div class="alert alert-info"><strong>Catatan:</strong> Saat menggunakan opsi "{$a}", tidak ada perubahan pengaturan berbagi yang dilakukan pada berkas OneDrive. Pengguna yang menambahkan berkas harus memastikan bahwa izin berkas di OneDrive telah diatur dengan benar.</div>';
$string['erroraccessdenied'] = 'Akses ditolak';
$string['errorauthoidcnotconfig'] = 'Harap konfigurasikan pengaya autentikasi OpenID Connect sebelum mencoba menggunakan repositori Microsoft 365.';
$string['errorbadclienttype'] = 'Jenis klien tidak valid.';
$string['errorbadpath'] = 'Jalur Buruk';
$string['errorcoursenotfound'] = 'Kursus tidak ditemukan';
$string['erroro365required'] = 'Berkas ini saat ini hanya tersedia untuk pengguna Microsoft 365.';
$string['errorwhiledownload'] = 'Terjadi galat saat mengunduh berkas';
$string['errorwhilesharing'] = 'Terjadi galat saat membuat tautan yang dapat dibagikan';
$string['file'] = 'Berkas';
$string['filelinkingheader'] = 'Opsi penautan berkas';
$string['groups'] = 'Grup (Kursus)';
$string['myfiles'] = 'OneDrive Saya';
$string['notconfigured'] = '<p class="error">Untuk menggunakan pengaya ini, Anda harus terlebih dahulu mengonfigurasi <a href="{$a}/admin/settings.php?section=local_o365">pengaya Microsoft 365</a></p>';
$string['office365:view'] = 'Lihat repositori Microsoft 365';
$string['onedrivegroup'] = 'Nonaktifkan map OneDrive Saya di pemilih berkas';
$string['pluginname'] = 'Microsoft 365';
$string['pluginname_help'] = 'Repositori Microsoft 365';
$string['privacy:metadata'] = 'Pengaya ini berkomunikasi dengan API OneDrive Microsoft 365 sebagai pengguna saat ini. Semua berkas yang diunggah akan dikirim ke server jarak jauh.';
$string['trendingaround'] = 'Berkas Tren di Sekitar Saya';
$string['trendinggroup'] = 'Nonaktifkan map Berkas Tren di Sekitar Saya di pemilih berkas';
$string['upload'] = 'Unggah Berkas Baru';
