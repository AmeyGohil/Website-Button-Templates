<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>mytemplate</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

    <style>
        .btn-wrapper {
            transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            display: flex;
            width: 300px;
            flex-wrap: wrap;
        }
        .btn-wrapper button {
            display: block;
            margin-bottom: 20px;
            overflow: hidden;
            position: relative;
            width: 100%;
            border: none;
            padding: 20px 50px;
            background: #3ef5bc;
            color: white;
            font-family: sans-serif;
            font-weight: 100;
            font-size: 20px;
            border-radius: 50px;
            outline: none;
            cursor: pointer;
            transition: all ease 250ms;
        }
        .btn-wrapper button:hover {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .btn-wrapper button.blue {
            background: #559cf9;
        }
        .btn-wrapper button.disabled {
            background: transparent;
            border: 1px solid #d2d2d2;
            color: #d2d2d2;
            box-shadow: none;
            opacity: 0.8;
            pointer-events: none;
        }
        .btn-wrapper button #circle {
            position: absolute;
            width: 50%;
        }
        .btn-wrapper button #circle:before {
            display: block;
            animation-duration: 500ms;
            animation-timing-function: cubic-bezier(0.1, -0.6, 0.2, 0);
            animation-name: clicked;
            content: "";
            transition: all ease 250ms;
            background: black;
            width: 100%;
            height: 0;
            padding-bottom: 100%;
            border-radius: 50%;
            opacity: 0;
        }

        @keyframes clicked {
            0% {
                transform: translate(-50%, -50%) scale(0);
                opacity: 0;
            }
            50% {
                opacity: 0.1;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.5);
                opacity: 0;
            }
        }

    </style>
</head>
<body>


<div class='btn-wrapper'>
    <button class="ripple" type="button">Click me </button>
    <button class="ripple blue" type="button">Click me </button>
    <button class="ripple disabled" type="button">You can't click me</button>
</div>


<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
<script>

    var buttons = document.querySelectorAll(".ripple");

    buttons.forEach( function(element, i ){
        element.onclick = function(){
            var rect = event.target.getBoundingClientRect();
            var x = event.clientX - rect.left;
            var y = event.clientY - rect.top;
            var createg = document.createElement('span');
            var isCircle = document.getElementById('circle') !=null;

            if (isCircle != false){
                element.getElementById('circle').remove();
            }

            element.append(createg);
            createg.setAttribute("id", "circle");

            var g = document.getElementById('circle');
            g.style.left = x+'px';
            g.style.top = y+'px';
            g.addEventListener("animationend", animationEnd);
        }
    });

    function animationEnd(event) {
        this.remove();
    }
</script>
</body>
</html>
