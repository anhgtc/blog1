<form name="frmLogin" method="post" action="/users/login/confirm">
    @csrf
    <label>Tên đăng nhập: </label>
    <input type="text" name="username" id="username" /><br>
    <label>Mật khẩu: </label>
    <input type="password" name="password" id="password" /><br>
    <input type="submit" name="btnLogin" value="Đăng nhập" />
</form>
<form action="/users/register">
    @csrf
    <span>Bạn chưa có tài khoản ?</span>
    <input type="submit" name="btnRegister" value="Đăng kí" />
</form>


