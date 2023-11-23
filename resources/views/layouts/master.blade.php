<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>WritesArts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Dependency Files for Flipbook -->
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <!-- costume css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flipbook.style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <div class="navbar navbar-expand-lg bg-light">
        <div class="container">
            {{-- <a class="navbar-brand" href="#">WritesArts</a> --}}
            <img src="{{asset('images/WriteArtsLogo.png')}}" alt="Logo" id="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('MagazineView')}}">Magazine</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("ContactUsView") }}">Contact Us</a>
                    </li>
                </ul>
                
                @if (Session::has("UserName"))
                    <a href="#" class="btn btn-light text-primary d-flex justify-center">{{ Session::get('UserName', 'Anonymous') }}</a>
                    <a href="{{ route("Logout") }}" class="btn btn-danger d-flex justify-center">Logout</a>
                @else
                    <a href="{{route('RegisterView')}}" class="btn btn-light text-primary d-flex justify-center">signup</a>
                    <a href="{{route('LoginView')}}" class="btn btn-primary d-flex justify-center">Login</a>
                @endif
            </div>
        </div>
    </div>

    @yield('main')

    <div class="copyright">
        <div class="copyright-contents bg-dark">
            <img src="{{asset('images/b9.jpg')}}">
            <div class="contents">
                <h6 class="text-center text-light pt-2">"Handwriting is a spiritual design, even through it appears by means of a material instrument."-Eucld</h6>
                <em class="d-flex justify-content-center text-light">copyright @ WriteArts</em>
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

    <script src="{{asset('js/flipbook.min.js')}}"></script>

    <script type="text/javascript">
        function showPdf(pdf, id) {
            const pdfUrl = "{{asset('PdfFiles/')}}"+'/'+pdf;

            $(".showPdf-"+id).flipBook({
                //Layout Setting
                pdfUrl: pdfUrl,
                lightBox: true,
                layout: 3,
                currentPage:{ vAlign:"bottom", hAlign:"left" },
                // BTN SETTING
                btnShare : { enabled:false },
                btnPrint : {
                    enabled: false,
                    hideOnMobile:true
                },
                btnDownloadPdf : {
                    enabled: false
                },
                btnDownloadPages : {
                    enabled: false,
                    title: "Download pages",
                    icon: "fa-download",
                    icon2: "file_download",
                    url: "images/pdf.rar",
                    name: "allPages.zip",
                    hideOnMobile:false
                },
                btnColor:'rgb(255,120,60)',
                sideBtnColor:'rgb(255,120,60)',
                sideBtnSize:60,
                sideBtnBackground:"rgba(0,0,0,.7)",
                sideBtnRadius:60,
                btnSound:{ vAlign:"top", hAlign:"left" },
                btnAutoplay:{ vAlign:"top", hAlign:"left" },
                // SHARING
                btnShare : {
                    enabled: false,
                    title: "Share",
                    icon: "fa-share-alt"
                }
                /*facebook : {
                    enabled: true,
                },
                google_plus : {
                    enabled: false
                },
                email : {
                    enabled: true,
                },
                twitter : {
                    enabled: true
                },
                pinterest : {
                    enabled: true
                }*/
            });
        }
    </script>
</body>
</html>