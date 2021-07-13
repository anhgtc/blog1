
    <form name="frmContact" method="post" action="/contact/contacts/store">
        @csrf
        <input type="text" name="name" id="name" placeholder="name"/><br/>
        <input type="text" name="address" id="address" placeholder="address"/><br />
        <input type="text" name="email" id="email" placeholder="email" /><br />
        <input type="text" name="content" id="content" placeholder="content"/><br/>
        <input type="submit" name="btnAdd" value="Create" />
    </form>
