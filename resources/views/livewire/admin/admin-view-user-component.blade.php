<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>All Users</h1>
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
                                <div class="panel-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                {{-- <th>Email</th> --}}
                                                <th>User Type</th>
                                                <th>Address</th>
                                                <th>Contact Number</th>
                                                <th>Discount</th>
                                                <th>Total Orders</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $l=0;
                                            @endphp
                                            @foreach($users as $user)
                                                <tr>
                                                    @php
                                                        $l++;
                                                    @endphp
                                                    <td>{{$l}}</td>
                                                    <td>{{$user->name}}</td>
                                                    {{-- <td>{{$user->email}}</td> --}}
                                                    <td>{{$user->usertype}}</td>
                                                    <td>{{$user->address}}</td>
                                                    <td>+880{{$user->phone}}</td>
                                                    <td>{{$user->discount}}%</td>
                                                    <td>{{$user->total_order}}</td>
                                                    <td>
                                                        <a href="#"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                        <a href="#" style="mergin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$users->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
