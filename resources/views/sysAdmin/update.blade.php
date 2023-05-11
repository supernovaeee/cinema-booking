<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/admin-update.css')}}"/>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600&display=swap"
    />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
    />
    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="//cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
</head>
<body>
<div class="admin-update">
    <div class="admin-update-child"></div>
    <a class="admin-update-inner"
    ><div class="vuesaxlinearlogout-group">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearlogout.svg') }}"
            />
            <div class="logout1">Logout</div>
        </div></a
    >
    <div class="admin-update-inner1">
        <div class="group-container">
            <div class="lala-lulu-group">
                <div class="lala-lulu1">Lala Lulu</div>
                <div class="admin1">Admin</div>
            </div>
        </div>
    </div>
    <img class="group-icon1" alt="" src="{{ asset('css/public/group1.svg') }}" />
    <div class="frame-group">
        <div class="vuesaxlinearcategory-group">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearcategory1.svg') }}"
            />
            <div class="dashboard1">Dashboard</div>
        </div>
        <div class="vuesaxlinearprofile-group" id="frameContainer4">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearprofile.svg') }}"
            />
            <div class="dashboard1">Create</div>
        </div>
        <div class="vuesaxlinearreceipt-2-group" id="frameContainer5">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearreceipt21.svg') }}"
            />
            <div class="dashboard1">Deleted</div>
        </div>
    </div>
    <a class="vuesaxlinearlogout" href="/" id="vuesaxlinearlogout"
    ><img
            class="vuesaxlinearlogout-icon2"
            alt=""
            src="{{ asset('css/public/vuesaxlinearlogout3.svg') }}"
        /></a>
    <form action="{{ url('users.update/' .$users->id) }}"  enctype="multipart/form-data" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
    <div class="role-parent">
        <div class="role">Role</div>
        <div class="status">Status</div>
        <div class="menu-item-checkbox-selecte">
            <div class="main-menu-item-selection">
                <div class="checkbox">
                    <div class="main-checkbox-text">
                        <select class="main-checkbox" name="role">
                            <option value="{{$users->role}}" disabled selected>{{$users->role}}</option>
                            <option value="1">Admin</option>
                            <option value="2">Owner</option>
                            <option value="3">Manager</option>
                            <option value="4">Customer</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu-item-checkbox-selecte3">
            <div class="main-menu-item-selection">
                <div class="checkbox">
                    <div class="main-checkbox-text">
                        <select class="main-checkbox" name="status">
                            <option value="{{$users->status}}" disabled selected>Select an option</option>
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                            <option value="2">Deleted</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-name-parent">
            <div class="full-name">Full Name</div>
            <div class="username">Username</div>
            <div class="email">Email</div>
            <div class="password">Password</div>
            <input class="group-child" type="text" name="name" value="{{$users->name}}"/>
            <input class="group-item" type="email" name="email" value="{{$users->email}}"/>
            <input class="group-inner" type="password" name="password" value="{{$users->password}}"/>
            <input class="rectangle-input" type="text" name="username" value="{{$users->username}}"/>
            <img class="group-icon2" alt="" src="{{ asset('css/public/group3.svg') }}" />
        </div>
    </div>
        <button type="submit" class="button"><div class="button1">Update</div></button>
    </form>
</div>

<script>
    var frameContainer4 = document.getElementById("frameContainer4");
    if (frameContainer4) {
        frameContainer4.addEventListener("click", function (e) {
            window.location.href = "./admin-create";
        });
    }

    var frameContainer5 = document.getElementById("frameContainer5");
    if (frameContainer5) {
        frameContainer5.addEventListener("click", function (e) {
            window.location.href = "./admin-deleted";
        });
    }

    var vuesaxlinearlogout = document.getElementById("vuesaxlinearlogout");
    if (vuesaxlinearlogout) {
        vuesaxlinearlogout.addEventListener("click", function (e) {
            window.location.href = "admin-dashboard";
        });
    }
</script>
</body>
</html>
