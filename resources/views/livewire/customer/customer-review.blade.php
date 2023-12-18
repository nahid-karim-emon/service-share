
<div>
    <style>
        .contact-form h3 {
            text-align: center;
            font-size: 30px;
            color: #022279;
            font-weight: 600;
        }

        .contact-form-btn {
            width: 100% !important;
            border-radius: 50px !important;
            margin: 0 auto !important;
            background-color: #ffb600;
            color: white;
            transition: all .3s ease
        }

        .contact-form-btn:hover {
            background-color: #022279;
        }

        .review-number {
            font-size: 24px;
        }
    </style>

    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="img/img-theme/shp.png" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row d-flex justify-content-center">

                        <div class="col-md-12 d-flex justify-content-center contact-form">
                            <h3>Feedback</h3>
                            <p class="lead">
                            </p>

                            <div class="alert alert-success"></div>
                            @if(Session::has('message'))
                                <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif

                            <form id="contactform" class="form-theme" method="post" wire:submit.prevent="submitReview">


                                <textarea placeholder="Service Feedback" class="form-control" name="message"
                                    id="message" wire:model="message" required=""></textarea>

                                @error('message')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <br>
                                <input placeholder="Rating" type="text" name="rating" wire:model="rating" required="">
                                @error('rating')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror

                                <input type="submit" name="Submit" value="Submit" class="contact-form-btn">
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

