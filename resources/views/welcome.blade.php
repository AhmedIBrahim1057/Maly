<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- CDNs -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Almarai:wght@800&family=Cairo:wght@600&display=swap">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                direction: rtl;
                background-color: #181a1b;
            }
            .container{
                font-family: 'Almarai', sans-serif;
                font-family: 'Cairo', sans-serif;
                height: 80vh;
            }
            .row {
                    height: 80vh;
                }
            .card {
                    border-radius: 20px;
                    box-shadow: 0px 0px 10px #32383E;
                }
            button{
                    border-radius: 10px;
                }
            input{
                border: 1px solid #777 !important;
                color: #eee !important;
            }
            img{
                max-width: 100px;
            }

            @media (max-width: 768px) {
                .navbar{
                    justify-content: center;
                }

                h1, .h1 {
                    font-size: 1.2rem;
                }

                h3, .h3 {
                    font-size: 1.0rem;
                }

                .btn-lg, .btn-group-lg > .btn {
                    font-size: 0.9rem;
                }
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark pr-md-5">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('logo.png') }}" alt="">
            </a>
        </nav>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <div class="card bg-dark text-white text-right">
                        <div class="card-header px-3 text-center">
                            <h1>ادخال كلمة السر الجديدة</h1>
                        </div>
                        <div class="card-body py-5 px-3">
                            <form action="{{ url('/reset-password') }}" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><h3>ادخل كلمة السر </h3></label>
                                    <input type="password" class="form-control bg-dark" id="exampleInputPassword1" name="password" placeholder="كلمة السر" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputResetPassword2"><h3>اعد ادخال كلمة السر </h3></label>
                                    <input type="password" class="form-control bg-dark" id="exampleInputResetPassword2" name="repeat-password" placeholder="اعادة كلمة السر" required>
                                </div>
                                <div class="text-center pt-4">
                                    <button type="submit" class="btn-lg btn-primary shadow w-50">ارسال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
