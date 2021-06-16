<main>
<section class="admission">
    <header class="admission__header">
        <span class="admission__name">Регистрация на сайте</span>
    </header>
    <main class="admission__content">
        <form class="logForm" id="logForm" method="post">
            <input class="logForm__input" type="text" placeholder="Login" name="login">
            <input class="logForm__input" type="text" placeholder="Name" name="name">
            <input class="logForm__input" type="password" placeholder="Password" name="password">
            <!--<input class="logForm__input" type="password" placeholder="Confirm password" name="password">-->
        </form>
        <div class="admission__wrapper">
            <a class="admission__link" href="/login">Login</a>
            <button type="submit" form="logForm">Войти</button>
        </div>
    </main>
</section>
</main>