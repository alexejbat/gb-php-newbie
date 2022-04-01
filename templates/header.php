<?php if(!$auth):?>
    <form method="post">
        <input type='text' name='login' placeholder='Логин'>
        <input type='password' name='pass' placeholder='Пароль'>
        Запомнить меня: <input type='checkbox' name='save'>
        <input type='submit' name='send'>
    </form>

<?endif;?>