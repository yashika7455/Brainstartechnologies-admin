<!DOCTYPE html>
<<<<<<< HEAD

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  

    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/css/allemployeeslist.css" />
    <link rel="stylesheet" href="../assets/css/adminprofile.css" />
    <link rel="stylesheet" href="../assets/css/attendence.css" />
    <link rel="stylesheet" href="../assets/css/leaves.css" />
    

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/custom.js"></script>



  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link">
              <span class="app-brand-logo demo">
             
                    <svg version="1.1" viewBox="0 0 2048 755" width="1280" height="1280" xmlns="http://www.w3.org/2000/svg">
                    <path transform="translate(0)" d="m0 0h2048v755h-2048z" fill="#FEFEFE"/>
                    <path transform="translate(485,83)" d="m0 0h3l7 25 5 14 8 26 15 45 5 16 6 18 4 13 3 8 6 20 5 15 5 17 3 9h43v-31h5l1 256v46l-1 70h-5l-1-33-11-8-15-11-8-6-5-3-3-3-7-4-10-8-10-6-4-4-6-4-6-5-7-5-6-3-2-4-10-5-2-4-7-1-7 6-8 6-10 7-6 4-6 5-8 6-10 7-5 2-1 3-10 6h-2l-1 4-10 6-13 10-4 2-5 5-8 5-4 4-11 7-13 10-10 7-24 18-6 4h-2v2l-4 3h-2l4-16 4-12 4-10 5-17 5-13 6-21 5-13 5-18 2-2 7-24 6-16 6-20 5-13 5-16 6-16-4-2-12-8-10-7-6-4-11-8-13-9-9-7-9-6-16-11-10-7-8-6-9-6-11-8-6-4-11-8-17-12-5-4-7-4-6-5-9-6-6-5v-1h241l10-32 5-15 5-17 3-8 5-18 4-10 8-27 5-14 6-19 5-15 5-18 5-14 4-16z" fill="#C12E35"/>
                    <path transform="translate(603,278)" d="m0 0h5l1 256v46l-1 70h-5l-1-33-11-8-15-11-8-6-5-3-3-3-7-4-10-8-10-6-4-4-6-4-6-5-7-5-6-3-2-4-10-5-2-4-7-1-7 6-8 6-10 7-6 4-6 5-8 6-10 7-5 2-1 3-10 6h-2l-1 4-10 6-13 10-4 2-5 5-8 5-4 4-11 7-13 10-10 7-24 18-6 4h-2v2l-4 3h-2l4-16 4-12 4-10 5-17 5-13 6-21 5-13 5-18 2-2 4-15 2-2 26-2 26-4 32-9 12-5 16-7 4-3 16-8 5-4 10-6 11-8 8-7 6-4 2-4 6-4 8-9 5-5 10-12 7-9 9-14 5-8 8-14 10-22 9-27 4-18 1-9-33 1-2-2 43-1z" fill="#C12D34"/>
                    <path transform="translate(547,290)" d="m0 0 3 2 6 14 2 2 37 1v1l-27 1h27v9l-6 25-9 25-12 25-6 10-7 10-7 11-6 7-9 11-4 5-5 4-7 8-4 2-3 5-6 4-8 7-13 9-10 6-5 4-26 13-11 5-21 7-24 6-21 3-27 2 3-10 4-11 2-1 7-19 11-33 4-9v-7l-8-7h3l9-4 4-1 5-5 3-5 6-7 3-5h2v-2h2v-4h2v-3l3-2 2-5 6-4 3-5 4-8 7-8 11-9h2l1-3 5-2 1-3h2v-2l5-5h2l1-3 4-3h3l1-3 17-8 6-5 9-5 8-5h6l4-2 4-1v-2h2v-2l9-1 4-2 6-1 2-4 4-3 1-3h2z" fill="#DB5F63"/>
                    <path transform="translate(628,307)" d="m0 0h103l11 3 12 8 6 12 1 14-3 12-7 7-4 3 7 4 7 11 3 9v8l-4 13-5 8-9 8-14 4h-104z" fill="#184292"/>
                    <path transform="translate(440,244)" d="m0 0 2 1v5l-4 8 1 2v5l4 6v3l2-1v2l4 1-1 4h-5l1 6 4-1h7l10-3 6-4h2v-2h3l1-2 2 1v-2h2v-2l6-3h2v-2l4-2 6 2-1 3 9 5v2l9-6 5-1 5-5 3-9 4-8 5 2v2h2l1-3 6 20 5 15 5 17 3 9-4-2-8-16-3 1-1 4-5 4-3 3-7 2-1 1h-9v2h-2v2l-4 2-5 2h-5l-9 6-9 5-7 5-15 7-1 2-7 4-6 7h-2v2l-8 6-5 5-9 7-3 4h-2l-2 4-3 7-5 7-5 3-2 5-3 1v3h-2v4h-2v2l-3 2-3 5-6 8-4 6-5 3-4 1-7 3v1l6 5v7l-6 15-9 27-8 22h-1l1-9 13-39 6-16 2-6-4-2-12-8-10-7-6-4-11-8-8-6 1-3 4 1 6 2 10 1 8-3h3v-2h2l1-7h2l1-3h2v-5l5-7 2-4 4-6 3-10-5 3 1-6 4-5 4-3 3-5 5-3 4-3 1-4-1-4 6-1v-3h-8l-5-6-5-2-15-3-19-3-6-1v-2h5l3-1h8l5-1 5 1 5-1h16 3l4 1 5-1 12 1 10-1 2-4 4-12 3-13 4-9 3-7 3-5 3-10z" fill="#D23D42"/>
                    <path transform="translate(781,307)" d="m0 0h101l10 3 10 6 6 5 5 9 5 16v12l-5 18-7 9-6 5-6 3h-2l35 35 2 3-2 1h-29l-9-9-9-11-8-8-4-5-2-1h-28l-19-1v-19l1-1 61-1 7-3 5-9 1-6v-10l-3-10-7-6-6-2h-73v101h-24z" fill="#194392"/>
                    <path transform="translate(1332,307)" d="m0 0h101v22l-1 1h-93l-7 1-2 5-1 2v12l4 6 2 1 19 1h46l16 2 8 4 8 6 5 10 3 13-1 8-5 15-7 8-6 4-11 3h-103l-1-1v-21l97-1 9-2 5-9-1-9-4-7-6-2-70-1-10-2-6-3-5-4-5-5-6-12-1-4v-12l4-10 5-8 10-7z" fill="#C33037"/>
                    <path transform="translate(1728,307)" d="m0 0h100l9 3 12 7 6 7 6 12 2 8v17l-4 13-8 12-11 7-2 1 36 36-1 1-29 1-8-7-9-10-12-14-4-3-47-1v-19l1-1 60-1 7-3 6-7 2-8v-11l-3-8-7-7-2-1-11-1h-66l-1 100-1 1h-21l-1-7v-116z" fill="#C23037"/>
                    <path transform="translate(1165,305)" d="m0 0 6 1 6 4 54 54 12 11 20 20 1-88 1-1h20l1 1v115l-4 8-5 3-8-1-8-6-22-22-5-6-8-7-49-49v89h-21l-1-1v-112l2-9z" fill="#1B4492"/>
                    <path transform="translate(1630,305)" d="m0 0 7 1 6 7 5 7 6 11 11 18 24 40 6 9 11 19 5 7 3 7h-27l-7-10-7-13-4-6-3-1-57-1 2-4 3-5 5-9 9-1h29l-6-8-8-15-8-13-4-6-2-1-2 6-7 12-45 75h-26l2-5 6-9 3-6 4-6 4-7 8-13 11-18 7-11 12-21 6-9 8-14 7-6z" fill="#C33037"/>
                    <path transform="translate(1014,305)" d="m0 0 7 2 4 5 7 10 9 16 10 16 9 15 10 17 12 19 10 17 5 7v2h-28l-10-18-6-10-1-2-60-1 8-14 2-4 9-1h28l-8-15-11-18-6-9-2-1-1 5-12 19-8 14-13 22-4 5-5 9-9 16-2 3h-25l1-5 8-13 12-20 8-13 11-18 4-6 6-10 5-9 17-28 5-3z" fill="#184292"/>
                    <path transform="translate(652,329)" d="m0 0h71l8 2 6 5 1 2v13l-3 5-5 2-6 1h-58v19h63l7 3 3 4 1 3v11l-4 6-7 3-6 1h-71l-1-79z" fill="#FEFEFE"/>
                    <path transform="translate(1449,307)" d="m0 0h118v22l-4 1h-44v101h-22l-1-63v-38h-41l-6-2z" fill="#C33037"/>
                    <path transform="translate(1210,516)" d="m0 0 19 1 11 4 8 9 3 9v15l-3 8-6 8-10 6-5 2-9 1h-10l-11-2-8-4-7-6-5-10-1-6v-10l2-9 6-8 5-4 9-3z" fill="#85868B"/>
                    <path transform="translate(1422,517)" d="m0 0h30l10 3 8 7 4 8 1 6v9l-2 10-4 6-9 8-10 4-8 1h-10l-11-2-11-6-6-7-3-7-1-7v-9l2-9 6-9 10-5z" fill="#86878C"/>
                    <path transform="translate(1112,307)" d="m0 0h22v124h-22l-1-32v-52z" fill="#154092"/>
                    <path transform="translate(1544,517)" d="m0 0h43v10l-37 1-9 3-5 5-2 4v13l5 8 7 5 33 1v-17h-28v-8h39v36l-21 1h-15l-10-2-11-6-6-7-3-7-1-6v-11l3-10 5-7 9-5z" fill="#85868B"/>
                    <path transform="translate(1819,517)" d="m0 0h53v10l-48 1-4 3v8l2 2 39 1 7 3 6 8v13l-3 5-8 6-3 1h-52l1-10 49-1 4-2 2-4v-7l-1-2-3-1-40-1-6-3-6-8-1-8 3-8 6-5z" fill="#85868B"/>
                    <path transform="translate(1066,515)" d="m0 0 6 2 12 11 6 6v2h2l7 8 6 5v2l4 2 6 6 1-43 10-1 1 3-1 58-3 3-5-1-7-7-5-4-7-8-26-26v45l-1 1h-9l-1-1v-59z" fill="#85868B"/>
                    <path transform="translate(1427,527)" d="m0 0h19l9 2 6 4 3 6v16l-3 5-8 6-10 2h-13l-9-2-8-6-3-7v-13l4-7 8-5z" fill="#FEFEFE"/>
                    <path transform="translate(1204,527)" d="m0 0h17l10 2 6 4 3 5 1 4v11l-3 6-7 6-3 2h-28l-8-5-4-5-2-5v-11l4-8 8-5z" fill="#FEFEFE"/>
                    <path transform="translate(1703,517)" d="m0 0h57l-1 10h-46v41h46v10l-55 1-1-1z" fill="#85868B"/>
                    <path transform="translate(735,517)" d="m0 0h55l-1 10h-44v41h45v10l-55 1z" fill="#85868B"/>
                    <path transform="translate(860,517)" d="m0 0h42l-1 10-36 1-9 3-5 5-2 4v13l3 6 9 7 3 1 38 1-1 10h-39l-14-7-6-7-3-7-1-6v-9l2-10 5-8 10-6z" fill="#85868B"/>
                    <path transform="translate(628,517)" d="m0 0h59v9l-1 1h-23v51l-1 1h-9l-1-51-24-1z" fill="#85868B"/>
                    <path transform="translate(1300,517)" d="m0 0h11v51h42v10l-52 1-1-1z" fill="#86878C"/>
                    <path transform="translate(1e3 517)" d="m0 0h11v61l-1 1h-10v-29h-31v-8l31-1z" fill="#85868B"/>
                    <path transform="translate(1867,554)" d="m0 0 2 4 1 5h2v-9l2 2v10l-3 5-8 6-3 1h-52l1-10 49-1 4-2 3-4v2h2z" fill="#838489"/>
                    <path transform="translate(592,348)" d="m0 0 2 1-1 9v13l4 1-5 5-2 4-5 1-3 14-2 4h-7v2l-3 3-6 12-2 5-2 4h-2v2l-4 4-1 2 1 1-1 5-3 3-5 2h-3l5-5h-1l-4 1v2h-2l-2 5-4 4v5l-3 3h-2v-8h2v-2h2l1-2 3-4h2v-3h2l1-3 3-1 3-5h2v-2l4-4 5-10 3-5h2l1-4 3-7h2l2-6h2l2-7h2v-6l2-4h2v-4h2l1-9 2-6 3-8z" fill="#D23C41"/>
                    <path transform="translate(950,517)" d="m0 0h11v61l-1 1h-9z" fill="#86878C"/>
                    <path transform="translate(1641,517)" d="m0 0h10v61l-1 1h-9z" fill="#86878C"/>
                    <path transform="translate(1722,542)" d="m0 0h35v8h-35z" fill="#8A8B90"/>
                    <path transform="translate(754,542)" d="m0 0h34v8h-34z" fill="#8E8F93"/>
                    <path transform="translate(1872,554)" d="m0 0 2 2v10l-3 5-8 6-3 1h-52l1-10 3 2h-2v5l48-1 8-3 4-5z" fill="#76777E"/>
                    <path transform="translate(1704,567)" d="m0 0h1l1 7h50v-3l-30-1v-1l33-1v10l-55 1z" fill="#73757E"/>
                    <path transform="translate(788,568)" d="m0 0h2v10l-55 1v-7l2 1v2l50-1-1-3-18-1v-1z" fill="#76777F"/>
                    <path transform="translate(1818,543)" d="m0 0 42 1 8 4 3 5v10l-2 2-2-11-5-5-5-1h-33l-6-2z" fill="#FEFEFE"/>
                    <path transform="translate(1703,517)" d="m0 0h57l-1 10h-3l-1-6h-49l-2 3z" fill="#70747F"/>
                    <path transform="translate(735,517)" d="m0 0h55l-1 10-5-1v-2l2-1v-2h-48l-3 1z" fill="#77787F"/>
                    <path transform="translate(1422,517)" d="m0 0h30l10 3 8 7 3 6-1 4-6-10-7-5-10-2h-24l-11 3-9 8-1-3 4-5 10-5z" fill="#78797F"/>
                    <path transform="translate(860,517)" d="m0 0h42l-1 10-2-2-1-5h-37l-11 4-6 7-3 6h-1l1-7 4-6 10-6z" fill="#75767E"/>
                    <path transform="translate(1351,568)" d="m0 0h2v10l-52 1v-5l8 1 41-1 1-4-2-1z" fill="#76777E"/>
                    <path transform="translate(1471,558)" d="m0 0 1 4-7 8-7 5-8 3-8 1h-10l-11-2-10-5v-2l10 3 10 2h14l12-3 8-6z" fill="#787980"/>
                    <path transform="translate(1819,517)" d="m0 0h53l-1 5-1-2h-50l-8 5-3 3 1-5 6-5z" fill="#76777E"/>
                    <path transform="translate(1210,516)" d="m0 0 19 1 11 4 8 9 1 4-9-9-8-4-6-1h-27l-11 4-8 9-1-3 8-9 6-3z" fill="#787980"/>
                    <path transform="translate(364,456)" d="m0 0h3l-1 4-11 33-8 22h-1l1-9 13-39z" fill="#D04146"/>
                    <path transform="translate(1544,517)" d="m0 0h42v8l-2-4-1-1h-40l-8 4-7 5 2-5 7-5z" fill="#76777E"/>
                    <path transform="translate(898,568)" d="m0 0 4 1-1 9h-39l-1-2 2-1 36-1z" fill="#76777E"/>
                    <path transform="translate(450,247)" d="m0 0 5 2v7h-2l1 3-9 3-4 1-1-4 8-8-2-1z" fill="#D23C41"/>
                    <path transform="translate(641,517)" d="m0 0h45l-1 4-50-2v-1z" fill="#76777E"/>
                    <path transform="translate(1562,575)" d="m0 0h27l1 3-21 1h-15l-1-3z" fill="#78797F"/>
                    <path transform="translate(1245,563)" d="m0 0 1 2-5 6-14 7-9 1h-10l-4-2 2-1 21-2 9-3z" fill="#797A80"/>
                    <path transform="translate(1558,545)" d="m0 0h16l6 1-3 3h-24v-3z" fill="#FEFEFE"/>
                    <path transform="translate(1125,516)" d="m0 0h2l-1 60-3 3-5-1-1-2 7-1z" fill="#5D6984"/>
                    <path transform="translate(988,544)" d="m0 0h13v5h-17v-3z" fill="#FEFEFE"/>
                    <path transform="translate(564,441)" d="m0 0 1 2-2 5h-2l-1 4h-2l-2 5-3 3-8 4-3 3-3-1h2v-2h2v-2l8-5h2l2-5 3-4h2v-2h2z" fill="#D33D42"/>
                    <path transform="translate(860,517)" d="m0 0 3 1h-2v2l-11 4-6 7-3 6h-1l1-7 4-6 10-6z" fill="#797A80"/>
                    <path transform="translate(296,659)" d="m0 0 7 1 1 5-5 2v2l-4 3h-2z" fill="#D4454A"/>
                    <path transform="translate(364,456)" d="m0 0h3l-1 4-6 18h-2l1-8z" fill="#CF4046"/>
                    <path transform="translate(450,212)" d="m0 0 1 4-3 9v12h-3l-1 3h-1l1-7 2-10 3-10z" fill="#D33D42"/>
                    <path transform="translate(1066,515)" d="m0 0 6 2 10 9-1 2-9-7-5-2-4 2 1-4z" fill="#787980"/>
                    <path transform="translate(766,518)" d="m0 0h23v9l-5-1v-2l2-1v-4h-20z" fill="#475C88"/>
                    <path transform="translate(553,291)" d="m0 0 2 3 5 13v2l-4-2-4-8z" fill="#D14146"/>
                    <path transform="translate(1458,519)" d="m0 0 5 2 7 6 3 6-1 4-6-10-7-5z" fill="#7A7B81"/>
                    <path transform="translate(1544,517)" d="m0 0h5l-2 2-11 4-8 6 2-5 7-5z" fill="#7B7C82"/>
                    <path transform="translate(515,466)" d="m0 0h3l-2 5-2 3-6 3-3-1 3-3h2v-2z" fill="#D23C41"/>
                    <path transform="translate(1865,544)" d="m0 0 5 3 4 6-2 10h-1l-1-10-3-5-4-3z" fill="#86878C"/>
                    <path transform="translate(1641,517)" d="m0 0h10l-1 5-4-1-4 3z" fill="#73757E"/>
                    <path transform="translate(366,442)" d="m0 0 4 2v7l-2 5h-2l-1 2 1-7 2-6h-2z" fill="#C9393F"/>
                    <path transform="translate(552,435)" d="m0 0h2l-1 5-3 3-5 2h-3l8-8h2z" fill="#D33D42"/>
                    <path transform="translate(1245,563)" d="m0 0 1 2-5 6-9 5h-2v-2l10-6z" fill="#7A7B81"/>
                    <path transform="translate(1642,574)" d="m0 0h8v5h-9z" fill="#797A81"/>
                    <path transform="translate(357,477)" d="m0 0 2 1-2 9-2 6-3-1 3-9z" fill="#D4464B"/>
                    <path transform="translate(959,569)" d="m0 0h1l1 9-1 1h-9v-2l8-2z" fill="#777982"/>
                    <path transform="translate(533,567)" d="m0 0h7l6 6v2l-5-2-8-5z" fill="#D5494E"/>
                    <path transform="translate(843,542)" d="m0 0h1l1 11-3 1-1-2v-9z" fill="#FEFEFE"/>
                    <path transform="translate(1819,517)" d="m0 0 2 1-3 3-6 4-3 3 1-5 6-5z" fill="#7A7B81"/>
                    <path transform="translate(1301,517)" d="m0 0h10l-1 4-9-1z" fill="#76777E"/>
                    <path transform="translate(1125,564)" d="m0 0h1v12l-3 3-5-1-1-2 7-1z" fill="#495E88"/>
                    <path transform="translate(1871,427)" d="m0 0 3 3-1 1h-26v-1h24z" fill="#DA5C60"/>
                    <path transform="translate(950,517)" d="m0 0h11l-1 6-4-3-5-1z" fill="#73757F"/>
                    <path transform="translate(358,434)" d="m0 0 3 1 4 5 2 2-2 2-7-5z" fill="#D5474C"/>
                    <path transform="translate(1e3 517)" d="m0 0h11v3h-10z" fill="#77787F"/>
                    <path transform="translate(1071,574)" d="m0 0h1v5h-9v-2z" fill="#7B7C82"/>
                    <path transform="translate(488,487)" d="m0 0 3 1-4 5-4-1 2-4z" fill="#D33D42"/>
                    <path transform="translate(1755,519)" d="m0 0h4v8h-3l-1-6z" fill="#76777E"/>
                    <path transform="translate(527,455)" d="m0 0 2 1-6 8h-2v2h-2v-3h2l1-2 3-4h2z" fill="#D33D42"/>
                    <path transform="translate(1406,544)" d="m0 0h1v9h-3v-8z" fill="#FEFEFE"/>
                    <path transform="translate(496,539)" d="m0 0 8 1 3 4h-3l-1 2-1-3-4-2z" fill="#D5484C"/>
                    <path transform="translate(334,421)" d="m0 0 4 2 7 3 2 4-5-2-6-4z" fill="#DB5F63"/>
                    </svg>

              </span>
             
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="{{ url('admin/app') }}" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Without menu">Dashboard</div>
                </a>
            </li>

            <!-- Employees -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Layouts">Employees</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="{{ url('admin/employeeslist') }}" class="menu-link">
                    <div data-i18n="Without menu">All Employees</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('admin/attendence') }}" class="menu-link">
                    <div data-i18n="Without navbar">Attendence</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('admin/leaves') }}" class="menu-link">
                    <div data-i18n="Container">Leave</div>
                  </a>
                </li>
              </ul>
            </li>

            <!-- Front Pages -->
            <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-store"></i>
                <div data-i18n="Front Pages">Front Pages</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/front-pages/landing-page.html"
                    class="menu-link"
                    target="_blank">
                    <div data-i18n="Landing">Landing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/front-pages/pricing-page.html"
                    class="menu-link"
                    target="_blank">
                    <div data-i18n="Pricing">Pricing</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/front-pages/payment-page.html"
                    class="menu-link"
                    target="_blank">
                    <div data-i18n="Payment">Payment</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/front-pages/checkout-page.html"
                    class="menu-link"
                    target="_blank">
                    <div data-i18n="Checkout">Checkout</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/front-pages/help-center-landing.html"
                    class="menu-link"
                    target="_blank">
                    <div data-i18n="Help Center">Help Center</div>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Apps &amp; Pages</span>
            </li> -->
            <!-- Apps -->
            <!-- <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-envelope"></i>
                <div data-i18n="Email">Email</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
              </a>
            </li> -->
            <!-- <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-chat.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-chat"></i>
                <div data-i18n="Chat">Chat</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
              </a>
            </li> -->

            <!-- calendar -->
            <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-calendar.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-calendar"></i>
                <div data-i18n="Calendar">Calendar</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
              </a>
            </li>
            
            <!-- Authenitication -->
            
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="auth-login-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Login</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-register-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Register</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                    <div data-i18n="Basic">Forgot Password</div>
                  </a>
                </li>
              </ul>
            </li>
            
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
            <!-- Cards -->
            <!-- <li class="menu-item">
              <a href="cards-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cards</div>
              </a>
            </li> -->
            <!-- User interface -->
            <!-- <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">User interface</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="ui-accordion.html" class="menu-link">
                    <div data-i18n="Accordion">Accordion</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-alerts.html" class="menu-link">
                    <div data-i18n="Alerts">Alerts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-badges.html" class="menu-link">
                    <div data-i18n="Badges">Badges</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-buttons.html" class="menu-link">
                    <div data-i18n="Buttons">Buttons</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-carousel.html" class="menu-link">
                    <div data-i18n="Carousel">Carousel</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-collapse.html" class="menu-link">
                    <div data-i18n="Collapse">Collapse</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-dropdowns.html" class="menu-link">
                    <div data-i18n="Dropdowns">Dropdowns</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-footer.html" class="menu-link">
                    <div data-i18n="Footer">Footer</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-list-groups.html" class="menu-link">
                    <div data-i18n="List Groups">List groups</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-modals.html" class="menu-link">
                    <div data-i18n="Modals">Modals</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-navbar.html" class="menu-link">
                    <div data-i18n="Navbar">Navbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-offcanvas.html" class="menu-link">
                    <div data-i18n="Offcanvas">Offcanvas</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                    <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-progress.html" class="menu-link">
                    <div data-i18n="Progress">Progress</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-spinners.html" class="menu-link">
                    <div data-i18n="Spinners">Spinners</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tabs-pills.html" class="menu-link">
                    <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-toasts.html" class="menu-link">
                    <div data-i18n="Toasts">Toasts</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-tooltips-popovers.html" class="menu-link">
                    <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="ui-typography.html" class="menu-link">
                    <div data-i18n="Typography">Typography</div>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- Extended components -->
            <!-- <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Extended UI</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="extended-ui-text-divider.html" class="menu-link">
                    <div data-i18n="Text Divider">Text Divider</div>
                  </a>
                </li>
              </ul>
            </li> -->

            <!-- <li class="menu-item">
              <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Boxicons</div>
              </a>
            </li> -->

            <!-- Forms & Tables -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li>
            <!-- Forms -->
            <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Form Elements</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="forms-basic-inputs.html" class="menu-link">
                    <div data-i18n="Basic Inputs">Basic Inputs</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="forms-input-groups.html" class="menu-link">
                    <div data-i18n="Input groups">Input groups</div>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="form-layouts-vertical.html" class="menu-link">
                    <div data-i18n="Vertical Form">Vertical Form</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="form-layouts-horizontal.html" class="menu-link">
                    <div data-i18n="Horizontal Form">Horizontal Form</div>
                  </a>
                </li>
              </ul>
            </li> -->
            <!-- Form Validation -->
            <!-- <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/form-validation.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div data-i18n="Form Validation">Form Validation</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
              </a>
            </li> -->
            <!-- Tables -->
            <!-- <li class="menu-item">
              <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
              </a>
            </li> -->
            <!-- Data Tables -->
            <!-- <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/tables-datatables-basic.html"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div data-i18n="Datatables">Datatables</div>
                <div class="badge bg-label-primary fs-tiny rounded-pill ms-auto">Pro</div>
              </a>
            </li> -->
            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
            <!-- <li class="menu-item">
              <a
                href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li> -->
            <!-- <li class="menu-item">
              <a
                href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li> -->
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-medium d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ url('admin/profile') }}">
                        <i class="bx bx-user me-2"></i>
                            <span class="align-middle">  
                          Profile
                        </span>
                       
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle ms-1">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('admin.logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          
          @yield('content')

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium">Developers</a>
                </div>
                <!-- <div class="d-none d-lg-inline-block">
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link"
                    >Support</a
                  >
                </div> -->
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    
  </body>
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('admin.layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
>>>>>>> remoterepo/main
</html>
