<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Circular Progress Bar</title>
    <link rel="stylesheet" href="{{ asset('assets/css/onlinetutorial/circularPro.css')}}">
</head>
<body>
    <section>
        <div class="container">
            <div class="card">
                <div class="box">
                    <div>
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>90<span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">Html</div>
            </div>
            
            <div class="card">
                <div class="box">
                    <div>
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>82<span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">CSS</div>
            </div>

            <div class="card">
                <div class="box">
                    <div>
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>65<span>%</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text">JavaScript</div>
            </div>
            
        </div>
    </section>
    
    <script src="{{ asset('assets/js/onlinetutorial/circularPro.js')}}"></script>
</body>
</html>