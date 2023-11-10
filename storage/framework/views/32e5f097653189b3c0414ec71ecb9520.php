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

    <script type="text/javascript" src="<?php echo e(asset('js/turn.js')); ?>"></script>

    <style>
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .invisible {
            visibility: hidden;
        }

        .hidden {
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

        @media only screen and (max-width: 300px) {
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
        }
    </style>
</head>

<body>
    <!-- Container for the flipbook -->
    <span id="strFilePath" class="invisible"> <?php echo e($strFilePath); ?> </span>
    <h3 id="message">Preparing Document...</h3>

    <div id="flipbookContainer" class="flipbook invisible"></div>

    <script>
        const pdfUrl= document.getElementById("strFilePath").innerHTML;
        
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
                            height: 500,
                            width: 700
                        });

                        document.getElementById("message").classList.add("hidden");
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

</html><?php /**PATH D:\Works\WritesAndArts\Source\WritesAndArts\resources\views/magazine/view.blade.php ENDPATH**/ ?>