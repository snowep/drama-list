<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>watchlist App</title>
    <style>
        .overlay-top-card {
            height: 100%;
            width: 100%;
            position: absolute;
            background-color: black;
            opacity: 0.5;
        }
    </style>
</head>

<body>
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        function previewImage() {
            const cover = document.querySelector('#dramaCover');
            const coverLabel = document.querySelector('.form-file-text');
            const imgPreview = document.querySelector('.img-preview');

            coverLabel.textContent = cover.files[0].name;

            const fileCover = new FileReader();
            fileCover.readAsDataURL(cover.files[0]);

            fileCover.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
    <script>
        var inputX = document.querySelectorAll('input[list]');
        for (var j = 0; j < inputX.length; j++) {

            inputX[j].addEventListener('input', function(e) {
                var input = e.target,
                    list = input.getAttribute('list'),
                    options = document.querySelectorAll('#' + list + ' option'),
                    hiddenInput = document.getElementById(input.getAttribute('id') + '-hidden'),
                    inputValue = input.value;
                console.log(inputValue);
                hiddenInput.value = inputValue;

                for (var i = 0; i < options.length; i++) {
                    var option = options[i];

                    if (option.innerText === inputValue) {
                        hiddenInput.value = option.getAttribute('data-value');
                        break;
                    }

                }
            })

        }
    </script>
</body>

</html>