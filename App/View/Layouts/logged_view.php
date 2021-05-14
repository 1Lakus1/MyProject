<main class="main">
    <div class="main__wrapper">
        <div class="main__title title">
            <div class="title__text"> LOGIN PAGE </div>
        </div>
        <div class="login">
            <h2> You are logged in <span class="login_name"><?php echo $login; ?></span> </h2>
            <form method="POST">
                <input type="submit" name="logOut" value="Logout">
            </form>
        </div>
    </div>
</main>