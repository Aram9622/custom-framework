<?php
use App\Classes\Product\User;
?>


Hello <?= User::$name?>
<form action="<?= route("login")?>" method="POST">
    <input type="text" name="name">
    <input type="text" name="email">

    <button >Send</button>
</form>
