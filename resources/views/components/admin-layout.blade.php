<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <meta name="description" content="Responsive">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="msapplication-tap-highlight" content="no">
    
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="/assets/smartadmin/css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="/assets/smartadmin/css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="/assets/smartadmin/css/skins/skin-master.css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/smartadmin/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/smartadmin/img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="/assets/smartadmin/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="/assets/smartadmin/css/datagrid/datatables/datatables.bundle.css">
    
    {{ $styles ?? '' }}
</head>
<body class="mod-bg-1 mod-nav-link">
    <script>
        'use strict';
        var classHolder = document.getElementsByTagName("BODY")[0],
            themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) : {},
            themeURL = themeSettings.themeURL || '',
            themeOptions = themeSettings.themeOptions || '';
        if (themeSettings.themeOptions) {
            classHolder.className = themeSettings.themeOptions;
            console.log("%c✔ Theme settings loaded", "color: #148f32");
        } else {
            console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
        }
        if (themeSettings.themeURL && !document.getElementById('mytheme')) {
            var cssfile = document.createElement('link');
            cssfile.id = 'mytheme';
            cssfile.rel = 'stylesheet';
            cssfile.href = themeURL;
            document.getElementsByTagName('head')[0].appendChild(cssfile);
        } else if (themeSettings.themeURL && document.getElementById('mytheme')) {
            document.getElementById('mytheme').href = themeSettings.themeURL;
        }
        var saveSettings = function() {
            themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item) {
                return /^(nav|header|footer|mod|display)-/i.test(item);
            }).join(' ');
            if (document.getElementById('mytheme')) {
                themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
            };
            localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
        }
        var resetSettings = function() {
            localStorage.setItem("themeSettings", "");
        }
    </script>
    
    <div class="page-wrapper">
        <div class="page-inner">
            <x-sidebar />
            
            <div class="page-content-wrapper">
                <x-header />
                
                <main id="js-page-content" role="main" class="page-content">
                    <ol class="breadcrumb page-breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $breadcrumb1 ?? 'SmartAdmin' }}</a></li>
                        @if($breadcrumb2)<li class="breadcrumb-item">{{ $breadcrumb2 }}</li>@endif
                        @if($breadcrumb3)<li class="breadcrumb-item active">{{ $breadcrumb3 }}</li>@endif
                        <li class="position-absolute pos-top pos-right d-none d-sm-block"><span class="js-get-date"></span></li>
                    </ol>
                    
                    @if($pageTitle)
                    <div class="subheader">
                        <h1 class="subheader-title">{!! $pageTitle !!}</h1>
                    </div>
                    @endif
                    
                    {{ $slot }}
                </main>
                
                <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
                
                <x-footer />
                <x-color-profile />
            </div>
        </div>
    </div>
    
    <x-page-settings />
    
    <script src="/assets/smartadmin/js/vendors.bundle.js"></script>
    <script src="/assets/smartadmin/js/app.bundle.js"></script>
    
    {{ $scripts ?? '' }}
</body>
</html>
