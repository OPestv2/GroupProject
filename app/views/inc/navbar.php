    <header class="p-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-end">
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Wyszukaj...">
                </form>

                <div class="text-end">
                    <?php if(!isLoggedIn()): ?>
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-primary me-2">Zaloguj</a>
                        <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-outline-secondary">Zarejestruj</a>
                    <?php else: ?>
                        <a href="<?php echo URLROOT; ?>/users/logout" class="btn btn-primary me-2">Wyloguj</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </header>