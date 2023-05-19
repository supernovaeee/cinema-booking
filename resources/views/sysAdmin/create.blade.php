<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" type="text/css" href="{{url('css/global.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('css/admin-create.css')}}"/>
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
<div class="admin-create">
    <div class="admin-create-child"></div>
    <a class="admin-create-inner"
    ><div class="vuesaxlinearlogout-group">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearlogout1.svg') }}"            />
            <a class="logout1" href="{{route('index')}}">Logout</a>
        </div></a
    >
    <div class="frame-container">
        <a class="vuesaxlinearcategory-group" href="admin-dashboard" id="frameLink1"><img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearcategory.svg') }}"/>
            <div class="dashboard1">Dashboard</div></a
        >
        <div class="vuesaxlinearprofile-group">
            <img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearprofile2.svg') }}"
            />
            <div class="dashboard1">Create</div>
        </div>
        <a
            class="vuesaxlinearreceipt-2-group"
            href="./admin-deleted"
            id="frameLink2"
        ><img
                class="vuesaxlinearlogout-icon1"
                alt=""
                src="{{ asset('css/public/vuesaxlinearreceipt21.svg') }}"
            />
            <div class="dashboard1">Deleted</div></a
        >
    </div>
    <img class="group-icon1" alt="" src="{{ asset('css/public/group4.svg') }}"/>
    <div class="admin-create-inner1">
        <div class="group-frame">
            <div class="lala-lulu-group">
                <div class="lala-lulu1">Lala Lulu</div>
                <div class="admin3">Admin</div>
            </div>
        </div>
    </div>
    <form action="{{ url('users.store') }}" method="post">
        @csrf
    <div class="role-parent">
        <div class="role">Role</div>
        <div class="status1">Status</div>
        <div class="menu-item-checkbox-selecte">
            <div class="main-menu-item-selection">
                <div class="checkbox">
                    <div class="main-checkbox-text">
                        <select class="main-checkbox" name="role">
                            <option value="" disabled selected>Select an option</option>
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
                            <option value="" disabled selected>Select an option</option>
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
            <div class="email">Email</div>
            <div class="password">Password</div>
            <input class="rectangle-input" type="text" name="name"/>
            <input class="group-child5" type="email" name="email"/>
            <input class="group-child6" type="password" name="password"/>
            <input class="group-child7" type="text" name="username"/>
            <img class="group-icon2" alt="" src="{{ asset('css/public/vuesaxlineargroup11.svg') }}" />
        </div>
    </div>
        <button type="submit" class="button"><div class="button1">Create</div></button>
    </form>
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
            window.location.href = "./admin-deleted";
        });
    }
</script>
</body>
</html>
