<div>
    <style>
         .add-service-categorie-title{
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
                <h1>Add Service</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Add Service</li>
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
                                           <p class="add-service-categorie-title"> Add New Service</p>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.all_services')}}" class="add-new-btn pull-right">All Services</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <form class="form-horizontal" wire:submit.prevent="createService">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-3">Name: </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug" />
                                                @error('name') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug" class="control-label col-sm-3">Slug: </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug" wire:model="slug" />
                                                @error('slug') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tagline" class="control-label col-sm-3">Tagline: </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="tagline" wire:model="tagline" />
                                                @error('tagline') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="service_category" class="control-label col-sm-3">Service Category: </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model="service_category_id">
                                                    <option value="">Select Service Category</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('service_category_id') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="control-label col-sm-3">Price: </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="price" wire:model="price" />
                                                @error('price') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="discount" class="control-label col-sm-3">Discount: </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="discount" wire:model="discount" />
                                                @error('discount') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="discount_type" class="control-label col-sm-3">Discount Type: </label>
                                            <div class="col-sm-9">
                                                <select class="form-control" wire:model="discount_type">
                                                    <option value="">Select Service Category</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="percent">Percent</option>
                                                </select>
                                                @error('discount_type') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="control-label col-sm-3">Description: </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" wire:model="description"></textarea>
                                                @error('description') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inclusion" class="control-label col-sm-3">Inclusion: </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" wire:model="inclusion"></textarea>
                                                @error('inclusion') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exclusion" class="control-label col-sm-3">Exclusion: </label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" wire:model="exclusion"></textarea>
                                                @error('exclusion') <p class="text-denger">{{$message}}</p> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="thumbnail" class="control-label col-sm-3">Thumbnail: </label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control-file" name="thumbnail" wire:model="thumbnail" />
                                                @error('thumbnail') <p class="text-denger">{{$message}}</p> @enderror
                                                @if($thumbnail)
                                                    <img src="{{$thumbnail->temporaryUrl()}}" width="60" />
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="image" class="control-label col-sm-3">Image: </label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control-file" name="image" wire:model="image" />
                                                @error('image') <p class="text-denger">{{$message}}</p> @enderror
                                                @if($image)
                                                    <img src="{{$image->temporaryUrl()}}" width="60" />
                                                @endif
                                            </div>
                                        </div>
                                        <button tupe="submit" class="add-new-btn pull-right">Add Service</button>
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
