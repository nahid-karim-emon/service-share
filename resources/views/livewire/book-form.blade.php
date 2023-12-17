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
                            <h3>Book Form</h3>
                            <p class="lead">
                            </p>
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif
                            <form id="bookform" class="form-theme" method="post" wire:submit.prevent="bookNow">
                                @csrf 
                                <input type="text" placeholder="Location" name="location" id="location" wire:model="location" required="">
                                @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <input type="text" placeholder="Phone" name="phone" id="phone" wire:model="phone" required="">
                                @error('phone')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <input type="submit" name="Submit" value="Pay" class="book-form-btn">
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
