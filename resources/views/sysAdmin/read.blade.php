<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/index.css')}}"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
</head>
<body>
<div class="admin-dashboard">
    <div class="admin-dashboard-child"></div>
    <a class="admin-dashboard-inner"
    ><div class="vuesaxlinearlogout-parent">
            <img
                class="vuesaxlinearlogout-icon"
                alt=""
                src="{{ asset('css/public/vuesaxlinearlogout1.svg') }}"
            />
            <div class="logout">Logout</div>
        </div></a
    >
    <div class="frame-parent">
        <div class="vuesaxlinearcategory-parent">
            <img
                class="vuesaxlinearlogout-icon"
                alt=""
                src="{{ asset('css/public/vuesaxlinearcategory1.svg') }}"
            />
            <div class="dashboard">Dashboard</div>
        </div>
        <a
            class="vuesaxlinearprofile-parent"
            href="./admin-create"
            id="frameLink1"
        ><img
                class="vuesaxlinearlogout-icon"
                alt=""
                src="{{ asset('css/public/vuesaxlinearprofile1.svg') }}"
            />
            <div class="dashboard">Create</div></a
        ><a
            class="vuesaxlinearreceipt-2-parent"
            href="./admin-deleted"
            id="frameLink2"
        ><img
                class="vuesaxlinearlogout-icon"
                alt=""
                src="{{ asset('css/public/vuesaxlinearreceipt21.svg') }}"
            />
            <div class="dashboard">Deleted</div></a
        >
    </div>
    <h1 class="active-users-wrapper">
        <div class="active-users">Active and Inactive Users
            <div class="box_table">
                <table id="myTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th width="20%">Status</th>
                        <th width="20%">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $a)
                    <tr>
                        <td>{{$a->name}}</td>
                        <td>{{$a->email}}</td>
                        <td>{{$a->username}}</td>
                        <td>{{$a->password}}</td>
                        <td>{{$a->role}}</td>
                        <td>{{$a->status}}</td>
                        <td>
                            <a href="admin-update/{{$a->id}}" class="btn btn-success m-1">Edit</a>
                            <a href="admin-delete/{{$a->id}}"  class="btn btn-danger m1 btn-hapus">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </h1>
    <div class="frame-div">
        <div class="group-wrapper">
            <div class="lala-lulu-parent">
                <div class="lala-lulu">Lala Lulu</div>
                <div class="admin">Admin</div>

            </div>
        </div>
    </div>
    <img class="group-icon" alt=""  src="{{ asset('css/public/group.svg') }}" />
</div>


<script>
    var frameLink1 = document.getElementById("frameLink1");
    if (frameLink1) {
        frameLink1.addEventListener("click", function (e) {
            window.location.href = "./admin-create";
        });
    }

    var frameLink2 = document.getElementById("frameLink2");
    if (frameLink2) {
        frameLink2.addEventListener("click", function (e) {
            window.location.href = "./admin-deleted";
        });
    }

    $(document).ready(function() {
        $('#myTable').DataTable({
            // responsive: true
        });
    });
</script>
</body>
</html>
