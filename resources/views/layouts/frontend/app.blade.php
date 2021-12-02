<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Bisnopur High School</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('/') }}v2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{ asset('/') }}v2/css/style.css" rel="stylesheet">
    <link href="{{ asset('/css/custom-style.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="top">
            <div class="left">
                <div class="brand d-flex align-items-center justify-content-center">
                    <div class="logo-container mr-3">
                        <img class="logo" src="http://gsaext.teletalk.com.bd/assets/images/dhselogo.jpg"
                            alt="Bangladesh Govt. Logo">
                    </div>
                    <div class="govt-org">
                        <!-- <div class="govt">Government of the People's Republic of Bangladesh</div> -->
                        <div class="govt">মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর, গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</div>
                        <div class="organization">বেসরকারি বিদ্যালয়সমূহে ভর্তি - ২০২২</div>
                    </div>
                </div>
            </div>

        </div>


    </header>
    <div>
        <main>
            @yield('content')
        </main>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>
    <script src="{{ asset('/') }}v2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
