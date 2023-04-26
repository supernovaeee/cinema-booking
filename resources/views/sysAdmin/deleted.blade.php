<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/admin-deleted.css')}}"/>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
</head>
<body>
<div class="admin-deleted">
    <div class="admin-deleted-child"></div>
    <a class="admin-deleted-inner">
        <div class="vuesaxlinearlogout-group">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearlogout.svg') }}"
            />

            <div class="logout1">Logout</div>
        </div>
    </a>
    <div class="frame-group">
        <a class="vuesaxlinearcategory-group" href="admin-dashboard" id="frameLink1">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearcategory.svg') }}"
            />

            <div class="dashboard1">Dashboard</div>
        </a>
        <a
            class="vuesaxlinearprofile-group"
            href="./admin-create"
            id="frameLink2"
        >
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearprofile.svg') }}"
            />

            <div class="dashboard1">Create</div>
        </a>
        <div class="vuesaxlinearreceipt-2-group">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearreceipt21.svg') }}"
            />

            <div class="dashboard1">Deleted</div>
        </div>
    </div>
    <img class="group-icon1" alt="" src="{{ asset('css/public/group1.svg') }}"  />

    <h1 class="deleted-users-wrapper">
        <div class="deleted-users">Deleted Users</div><br><br><br>
        <div class="box_table">
            <table id="myTable" class="table">
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
                        <a href="admin-restore/{{$a->id}}" class="btn btn-success m-1">Restore</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </h1>


</div>

<script>
    var frameLink1 = document.getElementById("frameLink1");
    if (frameLink1) {
        frameLink1.addEventListener("click", function (e) {
            window.location.href = "admin-dashboard";
        });
    }

    var frameLink2 = document.getElementById("frameLink2");
    if (frameLink2) {
        frameLink2.addEventListener("click", function (e) {
            window.location.href = "./admin-create";
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
