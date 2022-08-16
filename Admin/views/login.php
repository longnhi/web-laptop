<div class="container mt-3 mb-3" style="padding: 200px;
                                        width: max-content;
                                        border-radius: 15px;
                                        position: relative;
                                        color: white;
                                        background: linear-gradient(to right, #34568B, #7FFFD4);">
    <form class="form-horizontal col-sm-9" action="./user.php?action=dangnhap" method="POST" style="margin: auto; width: max-content;">
        <h1 style="text-align: center; padding: 10px">LOGIN</h1>

        <div class="row form-group mb-3">
            <div class="col col-sm-3"><label for="username">Name:</label></div>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="User Name" id="username" name="username" required>
            </div>
        </div>
        <div class="row form-group mt-3 mb-3">
            <div class="col col-sm-3"><label for="password">Password:</label></div>
            <div class="col-sm-9">
                <input type="password" class="form-control" placeholder="password" id="password" name="password"
                       required>
            </div>
        </div>
        <div class="row form-group text-center mt-3">
            <div class="col col-sm-12">
                <button type="submit" class="btn btn-success" name="btn_action" value="">SIGN IN</button>
            </div>
        </div>
    </form>
</div>