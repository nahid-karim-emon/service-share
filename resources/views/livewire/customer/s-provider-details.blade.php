<div>
    <style>
        .card{
            border: 1px solid rgba(128, 128, 128, 0.408);
            background-color: aliceblue
        }
        .to-btn{
         display: flex !important;
         justify-content: center !important;
         align-items: center !important;
         margin-top: 40px
        }
        .to-do-button{
            display: block !important;
            background-color: #ffb600 ;
            padding: 20px 45px;
            width: 50%;
            text-align: center;
            color: white;
            font-size: 24px;
        }
    </style>
    <div class="container py-5">
        <div class="row d-flex justify-content-center">
            {{-- <div class="col-md-10 col-xl-8 text-center">
                <h3 class="fw-bold mb-4">Service Provider Name: {{$spro->name}}</h3>
                <h4 class="fw-bold mb-4">Service Provider Phone: {{$spro->phone}}</h4>
            </div> --}}
            
            <div class="col-md-10 col-xl-8 text-center">
                <h3 class="fw-bold mb-4">All Reviews</h3>
            </div>
        </div>
        <div>
            @if(Session::has('message'))
                <div class="alert alert-success">{{Session::get('message')}}</div>
            @endif
        </div>
        <br>
        <br>
            <div class="row text-center">
                @if(isset($review) && $review->count() > 0)
                @foreach($review as $rev)
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body py-4 mt-2">
                            <p class="mb-2">
                                <h3>{{$rev->review}}</h3>
                            
                            </p>
                            <h5>Rating: {{$rev->rating}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
                @else 
                <div class="alert alert-success">Succesfully Approved this survice provider</div>
                @endif
            </div>
            
   <div class="to-btn">`
    @if(isset($review) && $review->count() > 0)
    <a class="to-do-button" href="#" onclick="confirm('Are you sure, you approve this service provider?')|| event.stopImmediatePropagation()" wire:click.prevent="updatePendingTask({{$tas->id}})">Approve</a>
    {{$review->links()}}
    @endif
    {{-- {{$spro->links()}} --}}
   </div>
       
    </div>
</div>