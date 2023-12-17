<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .service-categorie-title{
            font-size: 24px !important;
            color: #022279 !important;
            font-weight: 600 !important;
            margin-top: 20px !important;
        }
        .add-new-btn{
       padding: 14px 35px;
       background-color: #ffb600;
       color: white;
       border-radius: 50px;
       transition: all .3s ease
       
    }
    .add-new-btn:hover{ 
       background-color: #022279;
       color: white;
    }
    .fa-list,.fa-edit{
        color: #022279 !important;
    }
    .action-icon{
        display: flex;
        justify-content: space-around;
    }
    .table>thead>tr>th{
        color: #022279 !important;
    }
    .table>tbody>tr>td{
        color: #000000 !important;
    }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1 >Service Categories</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Service Categories</li>
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
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-md-6">
                                            <p class="service-categorie-title">All Service Categories</p>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.add_service_category')}}" class="add-new-btn pull-right">Add New</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                    @endif
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Featured</th>
                                                <th style="display: flex; align-items:center; justify-content: center;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($scategories as $scategory)
                                                <tr>
                                                    <td>{{$scategory->id}}</td>
                                                    <td><img src="{{asset('images/categories')}}/{{$scategory->image}}" width="60"></td>
                                                    <td>{{$scategory->name}}</td>
                                                    <td>{{$scategory->slug}}</td>
                                                    <td>
                                                        @if($scategory->featured)
                                                            Yes
                                                        @else 
                                                            No 
                                                        @endif
                                                    </td>
                                                    <td class="action-icon">
                                                        <a href="{{route('admin.services_by_category',['category_slug'=>$scategory->slug])}}" style="margin-right: 10px;"><i class="fa fa-list fa-2x text-info"></i></a>
                                                        <a href="{{route('admin.edit_service_category',['category_id'=>$scategory->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                        <a href="#" onclick="confirm('Are you sure, you want to delete this service category!') || event.stopImmediatePropagation()" wire:click.prevent="deleteServiceCategory({{$scategory->id}})" style="mergin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                                    </td>
                                            
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$scategories->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
