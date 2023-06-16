<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{asset('/')}}backend-assets/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        


        {{-- navbar included  --}}
        @include('backend.includes.navbar')


        <div id="layoutSidenav">
            
            {{-- sidenav included  --}}
            @include('backend.includes.sidenav')



            <div id="layoutSidenav_content">
                <main>
                    
                    {{-- main content @yield  --}}
                    @yield('content')

                </main>
                

                {{-- footer included  --}}
                @include('backend.includes.footer')



            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/')}}backend-assets/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/')}}backend-assets/assets/demo/chart-area-demo.js"></script>
        <script src="{{asset('/')}}backend-assets/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('/')}}backend-assets/js/datatables-simple-demo.js"></script>
    </body>
</html>
