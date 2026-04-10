<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
{{--
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    --}}

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('assets/adminkit/img/icons/icon-48x48.png') }}" />

    {{--
    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />
    --}}

    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('assets/adminkit/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminkit-custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="{{ $adminSidebarCollapsed 
            ? 'sidebar js-sidebar collapsed' 
            : 'sidebar js-sidebar' }}">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="{{ route('admin.home') }}"><span class="align-middle">{{ config('app.name', 'Laravel') }}</span></a>
                @include('admin.layouts.parts.main-menu')
            </div>
        </nav>
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle"><i class="hamburger align-self-center"></i></a>
                <div class="navbar-collapse collapse">
                    @include('admin.layouts.parts.top-menu')
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">
                    @if(!empty($title))
                        <h1 class="h3 mb-3">{{ $title }}</h1>
                    @endif
                    <x-admin::messages />
                    <div class="row">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a>
                                {{--
                                 - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a>                               &copy;
                                --}}
                            </p>
                        </div>
                        {{--
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                        --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/adminkit/js/app.js') }}"></script>
    <script src="{{ asset('js/adminkit-custom.js') }}"></script>
    <script type="text/javascript">     
        $(document).on("click", ".sidebar-toggle", function() {
            if ($("#sidebar").hasClass("collapsed")) {        
                document.cookie = "admin-sidebar-collapsed=1; path=/";
            } else {
                document.cookie = "admin-sidebar-collapsed=0; path=/";
            }
        });
    </script>
    @stack('scripts')
</body>
</html>