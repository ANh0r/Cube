<div class="main-content container-fluid">
    <div class="splash-container">
    <div class="card card-border-color card-border-color-primary">
        <div class="card-header"><span class="splash-description">请先登录 Cube</span></div>
        <div class="card-body">
        <form action="/Account/LoginAction" method="post" accept-charset="utf-8">
            <div class="form-group">
            <input class="form-control" name="Name" type="text" placeholder="账号" autocomplete="off">
            </div>
            <div class="form-group">
            <input class="form-control" name="Passwd" type="password" placeholder="密码">
            </div>
            <div class="form-group row login-tools">
            <div class="col-6 login-remember">
            </div>
            <div class="col-6 login-forgot-password"><a href="pages-forgot-password.html">忘记密码?</a></div>
            </div>
            <div class="form-group login-submit"><button type="submit" class="btn btn-primary btn-xl" data-dismiss="modal">登录 Cube</button></div>
        </form>
        </div>
    </div>
    </div>
</div>