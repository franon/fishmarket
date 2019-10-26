<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= SITE_NAME ." - ". ucfirst($this->uri->segment(1))  ?></title>
</head>
<body>
    
<?php if($this->session->flashdata('message')){
    echo ($this->session->flashdata('message'));    
} ?>

<form action="<?= BASE_URL();?>seller/register" method="post">

<label for="fishowneremail">email</label> <br>
<input type="text" name="fishowneremail" id="fishowneremail" placeholder="email"><br><br>
<!-- <?php echo form_error('fishowneremail'); ?>  -->

<label for="fishownerfullname">Nama Lengkap</label> <br>
<input type="text" name="fishownerfullname" id="fishownerfullname" placeholder="fullname"><br><br>
<!-- <?php echo form_error('fishownerfullname'); ?>  -->

<label for="fishownerusername">Username</label> <br>
<input type="text" name="fishownerusername" id="fishownerusername" placeholder="username"><br><br>
<!-- <?php echo form_error('fishownerusername'); ?>  -->

<label for="fishownerpassword">Password</label> <br>
<input type="password" name="fishownerpassword" id="fishownerpassword" placeholder="password"><br><br>
<!-- <?php echo form_error('fishownerpassword'); ?> -->



<button type="submit">Regist!</button>

</form>
</body>
</html>