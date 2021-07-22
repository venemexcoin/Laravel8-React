<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/codinglab/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/codinglab/withScroll.css')}}">
    <script src="https://kit.fontawesome.com/3226d1ef96.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="logo"><a href="#">CodingLab</a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#category">Category</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#feedback">Feedback</a></li>
            </ul>
        </div>
    </nav>

    <section id="home">Home Section</section>
    <section id="about">About Section</section>
    <section id="category">category Section</section>
    <section id="contact">Contact Section</section>
    <section id="feedback">Feedback Section</section>

    <div class="button">
        <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>

    <script src="{{asset('assets/js/codinglab/withScroll.js')}}"></script>
</body>
</html>