@extends('dashboard.constants.layout')
@section('content')


<div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <br>
                                <h4 class="card-title">Plans List</h4>
                                <br>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div id="table" class="table-editable">
                                <table class="table table-bordered table-responsive-md table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Muscle</th>
                                        <th>Exercise</th>
                                        <th>Day</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    @foreach($plans as $plan)
                                        <tbody>
                                        <tr>
                                            <td>#{{$plan->id}}</td>
                                            <td class="text-center">{{$plan-> user -> name}}</td>
                                            <td>{{$plan-> muscle -> name}}</td>
                                            <td>{{$plan-> exercise -> name}}</td>
                                            <td>{{$plan->day}}</td>
                                            <td><a class="text-danger" href="{{route('admin.destroy-plan' , $plan -> id)}}">Delete</a><br></td>
                                        </tr>
                                        </tbody>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
