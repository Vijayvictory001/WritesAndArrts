<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PDF to Image Flipbook</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
    <script>
        // Specify the workerSrc to point to the worker script
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js';
    </script>

    <!-- Include Turn.js library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/3/turn.min.js" integrity="sha512-rFun1mEMg3sNDcSjeGP35cLIycsS+og/QtN6WWnoSviHU9ykMLNQp7D1uuG1AzTV2w0VmyFVpszi2QJwiVW6oQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script type="text/javascript" src="{{asset('js/turn.js')}}"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/authentication.css')}}">

    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .invisible{
            display: none;
        }

        .flipbook {
            width: 400px;
            height: 300px;
            position: relative;
        }

        .page {
            background-color: rgba(128, 128, 128, 0.245);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .page img {
            max-width: 100%;
            max-height: 100%;
        }

        /* @media only screen and (max-width: 300px) {
            .flipbook {
                width: 100px;
                height: 50px;
                position: relative;
            }
        }
        @media only screen and (max-width: 500px) {
            .flipbook {
                width: 200px;
                height: 100px;
                position: relative;
            }
        } */
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top">
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
    </nav>

    <!-- Container for the flipbook -->
    <div class="container p-5 bg-light d-flex justify-content-center">
        <span id="strFilePath" class="invisible">{{ $strFilePath }}</span>
        <h3 id="message" class="text-center">Preparing Document...</h3>

        <div id="flipbookContainer" class="flipbook invisible"></div>
    </div>

    <section class="copyright">
        <div class="copyright-contents bg-dark">
            <img src="{{asset('images/b9.jpg')}}">
            <div class="contents">
                <h6 class="text-center text-light pt-2">"Handwriting is a spiritual design, even through it appears by means of a material instrument."-Eucld</h6>
                <em class="d-flex justify-content-center text-light">copyright @ WriteArts</em>
            </div>
            
        </div>
    </section>

    <script>
        const pdf= document.getElementById("strFilePath").textContent;
        const pdfUrl = "{{asset('PdfFiles/')}}"+'/'+pdf;
        // console.log(pdfUrl);

        // Function to render a specific page as an image  
        
        function renderPageAsImage(pageNumber) {
            pdfjsLib.getDocument(pdfUrl).promise
                .then(function (pdfDoc) {
                    return pdfDoc.getPage(pageNumber);
                })
                .then(function (page) {
                    const viewport = page.getViewport({ scale: 1 });
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;
                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };
                    return page.render(renderContext).promise.then(function () {
                        return canvas.toDataURL('image/png');
                    });
                })
                .then(function (imageDataUrl) {
                    const pageDiv = document.createElement('div');
                    pageDiv.className = 'page';
                    const img = document.createElement('img');
                    img.src = imageDataUrl;
                    pageDiv.appendChild(img);
                    document.querySelector('.flipbook').appendChild(pageDiv);

                    if (pageNumber < numPages) {
                        renderPageAsImage(pageNumber + 1);
                    } 
                    else {
                        // Initialize Turn.js for the flipbook
                        $('.flipbook').turn({
                            display:'double',
                            acceleration: true,
                            elevation:50,
                            height: 400,
                            width: 700
                        });

                        document.getElementById("message").classList.add("invisible");
                        document.getElementById("flipbookContainer").classList.remove("invisible");
                    }
                })
                .catch(function (error) {
                    console.error('Error rendering page:', error);
                });
        }
    

        // Load and render the first page as an image    
        
        let numPages = 0;    
        pdfjsLib.getDocument(pdfUrl).promise
            .then(function (pdfDoc) {
                numPages = pdfDoc.numPages;
                renderPageAsImage(1);
            })
            .catch(function (error) {
                console.error('Error loading PDF:', error);
            });
       
    </script>
</body>

</html>