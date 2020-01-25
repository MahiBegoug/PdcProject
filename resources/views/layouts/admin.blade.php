<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>


<body  class="page-header-fixed">

        <div class="page-header navbar navbar-fixed-top">
            @include('partials.header')
        </div>

        <div class="clearfix"></div>

        <div class="page-container">

            <div class="page-sidebar-wrapper">
                @include('partials.sidebar')
            </div>

            <div class="page-content-wrapper">
                <div class="page-content">

                    <div class="row">
                         <div class="col-md-12">
                               @yield('content')
                         </div>
                    </div>
                </div>
            </div>

       </div>

</body>
</html>
