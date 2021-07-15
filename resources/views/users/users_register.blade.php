<form name="frmRegister" method="post" action="/users/store">
    @csrf
    <label>Tên đăng nhập: </label>
    <input type="text" name="username" id="username" /><br>
    <label>Mật khẩu: </label>
    <input type="password" name="password" id="password" /><br>
    <label>Họ và tên: </label>
    <input type="text" name="name" id="name"/><br>
    <label>Email: </label>
    <input type="email" name="email" id="email"/><br>
    <input type="submit" name="btnRegister" value="Đăng kí" />
</form>
