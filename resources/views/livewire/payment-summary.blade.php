<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
       
        
        .book-form{
           max-width: 600px !important;
           margin: 0 auto !important;
           text-align: center;
        }
        .book-form h3{
           text-align: center;
           font-size: 30px;
           color: #022279;
           font-weight: 600;
        }
       
        .book-form-btn{
           width: 100% !important;
           border-radius: 50px !important;
           margin: 0 auto !important;
           background-color: #ffb600;
           color: white;
           transition: all .3s ease
        }
        .book-form-btn:hover{ 
           background-color: #022279;
        }
       </style>
  
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-xs-center">
                    <i class="fa fa-search-plus float-xs-left icon"></i>
                    <h2 class="text-center">Payment #33221</h2>
                </div>
                <hr>
                <div class="row">
                    <div class="col-xs-12 col-md-3 col-lg-3 float-xs-left">
                        <div class="card ">
                            <div class="card-header text-center">Amount</div>
                            <div class="card-block p-3">
                                <strong>David Peere:</strong><br>
                                <strong>Currency:</strong><br>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="card ">
                            <div class="card-header text-center">Email</div>
                            <div class="card-block p-3">
                                <strong>Card Name:</strong> Visa<br>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <div class="card ">
                            <div class="card-header text-center">Phone</div>
                            <div class="card-block p-3">
                                <strong>Card Name:</strong> Visa<br>

                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3 float-xs-right">
                        <div class="card ">
                            <div class="card-header text-center">Address</div>
                            <div class="card-block p-3">
                                <strong>David Peere:</strong>

                            </div>
                        </div>
                    </div>
                    <input type="button" class=" w-50 mx-auto mt-5" value="Print this page" onclick="printPage()" />
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <script>
        function printPage() {
            window.print();
        }
    </script>
</body>

</html>