<?php require APPROOT . '/views/inc/header.php'; ?>

<main class="form-signin text-center m-auto">
    <a href="<?php echo URLROOT; ?>/pages/main" class="btn btn-success">Wróć na stronę główną</a>
    <form>
        <h1 class="display-2">
        <h1 class="h3 mb-3 fw-normal">Zaloguj się</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Hasło">
            <label for="floatingPassword">Hasło</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Zapamiętaj mnie
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Zaloguj</button>
        <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-lg btn-light w-100">Zarejestruj się</a>
        <p class="mt-5 mb-3 text-muted">© 2021</p>
    </form>
</main>

<?php require APPROOT . '/views/inc/footer.php'; ?>