<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .to-do-button{
            background-color: #ffb600 ;
            padding: 10px 30px;
            display: inline-block;
            color: white;
            border-radius: 4px;
            text-align: center;
            min-width: 59px;
            transition: all .3s ease;
        }
        .to-do-button:hover{
            background-color: #022279 ;
            padding: 10px 30px;
            display: inline-block;
            color: white;
        }
    </style>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Waiting Service Provider</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Waiting Service Provider</li>
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
                                    <div class="row">
                                        <div class="col-md-6">
                                            All Waiting Service Provider
                                        </div>
                                        <div class="col-md-6">
                                           
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
                                                <th>User Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user as $use)
                                                <tr>
                                                    <td>{{$use->id}}</td>
                                                    <td>{{$use->name}}</td>
                                                    <td>{{$use->email}}</td>
                                                    <td>
                                                        <a class="to-do-button" href="#" onclick="confirm('Are you sure, you want to approve this service provider?')|| event.stopImmediatePropagation()" wire:click.prevent="updateUser({{$use->id}})">Approve</a>
                                                        <a class="to-do-button" href="#" onclick="confirm('Are you sure, you want to Delete this service provider?')|| event.stopImmediatePropagation()" wire:click.prevent="deleteUser({{$use->id}})">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$user->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


