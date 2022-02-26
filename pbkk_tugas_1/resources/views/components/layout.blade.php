<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <title>PBKK | {{ $titlePage }}</title>
</head>

<body>
    <section class="section d-flex justify-content-center align-items-center">
        <div class="container border border-2 shadow">
            <div class="row" style="height: 100%">
                <div class="order-2 order-xl-1 col-12 col-xl-8" style=" height: 100%;">
                    <header style="height: 10%; " class="d-flex align-items-center">
                        <nav class="d-flex justify-content-between"
                            style="padding: 0 0.2rem; font-size: 1.2rem;  width: 100%">
                            <div style="font-family: 'Poppins', sans-serif; font-weight: 700"> Ini Logo</div>
                            <div>

                                <a href="{{ route('index_page') }}"
                                    style="margin-right: 0.5rem; @if (request()->routeIs('index_page')) text-decoration: underline @endif"
                                    class="">Home
                                </a>
                                <a href="{{ route('form_page.create') }}"
                                    style="@if (request()->routeIs('form_page.create')) text-decoration: underline @endif"
                                    class="">Form
                                </a>
                            </div>
                        </nav>
                    </header>
                    <main class="d-flex flex-column justify-content-center align-items-center mx-auto "
                        style=" height: 90% ">

                        {{ $slot }}

                    </main>
                </div>
                <div class="order-1 order-xl-2 col-12 col-xl-4 d-flex flex-column justify-content-center align-items-center"
                    style="background: #F5F5FB; color: rgba(242, 243, 249, 1) ">
                    <div style=" background-color: #312F36; border-radius: 10px; padding: 0.2rem 4rem"
                        class="mb-4">
                        <h2 class="text-center" style="font-size: 3rem;">{{ $titlePage }}
                        </h2>
                    </div>
                    <x-svg />
                </div>
            </div>
        </div>
    </section>

    {{-- ======== toast ======== --}}
    @if (session('success'))
        <div class="position-fixed top-50 p-3" style="z-index: 11; left: 50%; transform: translate(-50%, -50%)">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Notification</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
        var toastLiveExample = document.getElementById('liveToast')
        var toast = new bootstrap.Toast(toastLiveExample)
        toast.show()
    </script>
    @yield('script')
</body>

</html>
