<?php include_once('tpl/header.php'); ?>

<section class="section center-container">
    <div class="form-container">
        <h3>Реєстрація</h3>

        <form action="save_register.php" method="post">
            <div class="form-group">
                <label>Ваше ім'я:</label>
                <input name="name" type="text" size="15" maxlength="15" class="form-control">
            </div>
            <div class="form-group">
                <label>Ваш логін:</label>
                <input name="login" type="login" type="text" size="15" maxlength="15" class="form-control">
            </div>
            <div class="form-group">
                <label>Ваш пароль:</label>
                <input name="password"  type="password" size="15" maxlength="15" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Зареєструватися</button>
        </form>

    </div>
</section>
<?php include_once('tpl/footer.php'); ?>