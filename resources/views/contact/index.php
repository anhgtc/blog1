<!DOCTYPE html>
<html>
<body>
    <form name="frmContact" method="get" action="">
        <input type="text" name="name" id="name" placeholder="<?php echo __('message.Name')?>"/><br/>
        <input type="text" name="address" id="address" placeholder="<?php echo __('message.Address')?>"/><br />
        <input type="text" name="email" id="email" placeholder="<?php echo __('message.Email')?>" /><br />
        <input type="text" name="content" id="content" placeholder="<?php echo __('message.Content')?>"/><br/>
        <input type="submit" name="btnAdd" value="<?php echo __('message.Add')?>" />
    </form>
</body>
<?php
    if (isset($_GET['btnAdd']))
    {
        $name = $_GET['name'];
        $address = $_GET['address'];
        $email = $_GET['email'];
        $content = $_GET['content'];
        echo __('message.Name').': '.$name."<br>";
        echo __('message.Address').': '.$address."<br>";
        echo __('message.Email').': '.$email."<br>";
        echo __('message.Content').': '.$content."<br>";
    }
?>
</html>
