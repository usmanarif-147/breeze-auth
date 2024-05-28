<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('layouts.admin.partials.css')

    <style>
        body {
            background: black;
        }

        main {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-content {
            border: 1px solid rgb(141, 141, 141);
            border-radius: 15px;
            box-shadow: 1px 1px 40px 1px rgb(141, 141, 141);
            width: 800px;
        }
    </style>

    <title>{{ $title ?? 'Login' }}</title>
</head>

<body>
    <main>
        <div class="main-content">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 p-0">
                        <div class="admin-picture">
                            <img src="{{ asset('asset/images/admin-login-new.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" class="custom-border-radius"
                        style="background: #F7FAFF; border-radius: 0px 15px 15px 0px;">
                        <livewire:admin.login />
                    </div>
                </div>
            </div>
        </div>
    </main>



    @include('layouts.admin.partials.js')

</body>

</html>
