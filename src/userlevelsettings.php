<?php

namespace PHPMaker2025\new2025;

/**
 * User levels
 *
 * @var array<int, string, string>
 * [0] int User level ID
 * [1] string User level name
 * [2] string User level hierarchy
 */
$USER_LEVELS = [["-2","Anonymous",""],
    ["0","Default",""]];

/**
 * User roles
 *
 * @var array<int, string>
 * [0] int User level ID
 * [1] string User role name
 */
$USER_ROLES = [["-1","ROLE_ADMIN"],
    ["0","ROLE_DEFAULT"]];

/**
 * User level permissions
 *
 * @var array<string, int, int>
 * [0] string Project ID + Table name
 * [1] int User level ID
 * [2] int Permissions
 */
// Begin of modification by Masino Sinaga, September 17, 2023
$USER_LEVEL_PRIVS_1 = [["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}announcement","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}announcement","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}help","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}help","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}help_categories","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}help_categories","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}home.php","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}home.php","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}languages","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}languages","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}settings","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}settings","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}theuserprofile","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}theuserprofile","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}userlevelpermissions","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}userlevelpermissions","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}userlevels","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}userlevels","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}users","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}users","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}dosen","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}dosen","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}fakultas","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}fakultas","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}khs","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}khs","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}krs","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}krs","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}krs_detail","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}krs_detail","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}mahasiswa","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}mahasiswa","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}matakuliah","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}matakuliah","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}prodi","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}prodi","0","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}tahun_akademik","-2","0"],
    ["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}tahun_akademik","0","0"]];
$USER_LEVEL_PRIVS_2 = [["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}breadcrumblinksaddsp","-1","8"],
					["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}breadcrumblinkschecksp","-1","8"],
					["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}breadcrumblinksdeletesp","-1","8"],
					["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}breadcrumblinksmovesp","-1","8"],
					["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}loadhelponline","-2","8"],
					["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}loadaboutus","-2","8"],
					["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}loadtermsconditions","-2","8"],
					["{1CC1ED58-B5F5-4803-92AE-63548E8546D7}printtermsconditions","-2","8"]];
$USER_LEVEL_PRIVS = array_merge($USER_LEVEL_PRIVS_1, $USER_LEVEL_PRIVS_2);
// End of modification by Masino Sinaga, September 17, 2023

/**
 * Tables
 *
 * @var array<string, string, string, bool, string>
 * [0] string Table name
 * [1] string Table variable name
 * [2] string Table caption
 * [3] bool Allowed for update (for userpriv.php)
 * [4] string Project ID
 * [5] string URL (for OthersController::index)
 */
// Begin of modification by Masino Sinaga, September 17, 2023
$USER_LEVEL_TABLES_1 = [["announcement","announcement","Announcement",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","announcementlist"],
    ["help","help","Help (Details)",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","helplist"],
    ["help_categories","help_categories","Help (Categories)",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","helpcategorieslist"],
    ["home.php","home","Home",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","home"],
    ["languages","languages","Languages",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","languageslist"],
    ["settings","settings","Application Settings",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","settingslist"],
    ["theuserprofile","theuserprofile","User Profile",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","theuserprofilelist"],
    ["userlevelpermissions","userlevelpermissions","User Level Permissions",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","userlevelpermissionslist"],
    ["userlevels","userlevels","User Levels",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","userlevelslist"],
    ["users","users","Users",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","userslist"],
    ["dosen","dosen","dosen",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","dosenlist"],
    ["fakultas","fakultas","fakultas",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","fakultaslist"],
    ["khs","khs","khs",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","khslist"],
    ["krs","krs","krs",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","krslist"],
    ["krs_detail","krs_detail","krs detail",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","krsdetaillist"],
    ["mahasiswa","mahasiswa","mahasiswa",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","mahasiswalist"],
    ["matakuliah","matakuliah","matakuliah",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","matakuliahlist"],
    ["prodi","prodi","prodi",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","prodilist"],
    ["tahun_akademik","tahun_akademik","tahun akademik",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","tahunakademiklist"]];
$USER_LEVEL_TABLES_2 = [["breadcrumblinksaddsp","breadcrumblinksaddsp","System - Breadcrumb Links - Add",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","breadcrumblinksaddsp"],
						["breadcrumblinkschecksp","breadcrumblinkschecksp","System - Breadcrumb Links - Check",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","breadcrumblinkschecksp"],
						["breadcrumblinksdeletesp","breadcrumblinksdeletesp","System - Breadcrumb Links - Delete",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","breadcrumblinksdeletesp"],
						["breadcrumblinksmovesp","breadcrumblinksmovesp","System - Breadcrumb Links - Move",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","breadcrumblinksmovesp"],
						["loadhelponline","loadhelponline","System - Load Help Online",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","loadhelponline"],
						["loadaboutus","loadaboutus","System - Load About Us",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","loadaboutus"],
						["loadtermsconditions","loadtermsconditions","System - Load Terms and Conditions",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","loadtermsconditions"],
						["printtermsconditions","printtermsconditions","System - Print Terms and Conditions",true,"{1CC1ED58-B5F5-4803-92AE-63548E8546D7}","printtermsconditions"]];
$USER_LEVEL_TABLES = array_merge($USER_LEVEL_TABLES_1, $USER_LEVEL_TABLES_2);
// End of modification by Masino Sinaga, September 17, 2023
