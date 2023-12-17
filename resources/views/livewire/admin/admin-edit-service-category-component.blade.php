<div>
    <style>
           .edit-service-title{
            font-size: 24px !important;
            color: #022279 !important;
            font-weight: 600 !important;
            margin-top: 20px !important;
        }
        .add-new-btn{
       padding: 14px 35px;
       background-color: #ffb600;
       border: 0;
       border-radius: 50px;
       color: rgb(0, 0, 0) !important;
       transition: all .3s ease
       
    }
    .add-new-btn:hover{ 
       background-color: #022279;
       color: white !important;
    }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Edit Service Category</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Edit Service Category</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="edit-service-title">Edit Service Category</p>
                                            
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.service_categories')}}" class="add-new-btn pull-right">All Categories</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="updateServiceCategory">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-3">Category Name: </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug" />
                                                @error('name') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug" class="control-label col-sm-3">Category Slug: </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug" wire:model="slug" />
                                                @error('slug') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug" class="control-label col-sm-3">Category Image: </label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control-file" name="image" wire:model="newimage" />
                                                @error('newimage') <p class="text-denger">{{$message}}</p> @enderror
                                                @if($newimage)
                                                    <img src="{{$newimage->temporaryUrl()}}" width="60" />
                                                @else
                                                <img src="{{asset('images/categories')}}/{{$image}}" width="60" />
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="featured" class="control-label col-sm-3">Featured: </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="featured" wire:model="featured">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>

                                        <button tupe="submit" class="add-new-btn pull-right">Update Category</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
