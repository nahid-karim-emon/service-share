<div>
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
        .money-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2em;
            display: inline-block;
        }

        .money-label {
            font-size: 1.2em;
            margin-bottom: 0.5em;
        }

        .money-amount {
            font-size: 2em;
            font-weight: bold;
            color: #27ae60;
        }
       </style>
    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>
        
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <div class="book-form">
                            <h3>Withdraw Money</h3>
                            <p class="lead">
                            </p>
                            <div class="money-container">
                                <div class="money-label">Your Available Balance:</div>
                                <div class="money-amount">৳{{$sprovider->amount}}</div>
                            </div>
                            <br>
                            <br>
                        @if(Session::has('message'))
                            <div class="alert alert-success">{{Session::get('message')}}</div>
                        @endif
                        <form id="bookform" class="form-theme" method="post" wire:submit.prevent="withdrawNow">
                            @csrf 
                            <input type="text" placeholder="Enter Amount" name="amount" id="amount" wire:model="amount" required="">
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input type="submit" name="Submit" value="Withdraw" class="book-form-btn">
                        </form>
                            <div id="result"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter content_resalt border-top">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
