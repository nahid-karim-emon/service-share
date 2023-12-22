<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style>
        span{
            color: #022279;
        }
     .book-form{
           max-width: 600px !important;
           margin: 0 auto !important;
           text-align: center;
        }
        .trans-title{
           text-align: center;
           font-size: 30px;
           color: #022279;
           font-weight: 600;
        }
       
        .book-form-btn{
           width: 20% !important;
           padding: 10px 0;
           border-radius: 50px !important;
           margin: 0 auto !important;
           background-color: #ffb600;
           color: white;
           transition: all .3s ease;
           display: block;
           border: none;
           margin-top: 20px;
        }
        .book-form-btn:hover{ 
           background-color: #022279;
        }
        .back-home{
            float: left;
            
        }
        .back-home-btn{
            
           border-radius: 50px !important;
           margin: 0 auto !important;
           background-color: #ffb600;
           color: white;
           transition: all .3s ease;
           display: block;
           border: none;
           margin-top: 20px;
           padding: 10px 20px;
        }
        .back-home-btn:hover{ 
           background-color: #022279;
        }
       a{
        text-decoration: none;
       }
      
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="back-home">
            <a href="/"><input type="button" class="back-home-btn" value="back To Home"  /></a>
           </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="text-xs-center">
                    <i class="fa fa-search-plus float-xs-left icon"></i>
                    <h2 class="text-center trans-title">Successfully Transaction is Complete!</h2>
                </div>
                <hr>
                <div class="row d-flex justify-content-center">
                    <div class="col-xs-12 col-md-3 col-lg-6 ">
                        <div class="card w-100 mb-5">
                            <div class="card-header text-center">Payment Details</div>
                            <div class="card-block p-3">
                                <table>
                                    <tr><strong>Transaction Id: <span>{{$tran_id}}</span></strong><br></tr><hr>
                                    <tr><strong>Amount: <span>{{$amount}}</span></strong><br></tr><hr>
                                    <tr><strong>Currency Type: <span>{{$currency}}</span></strong><br></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <input type="button" class="book-form-btn " value="Print this page" onclick="printPage()" />
               
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