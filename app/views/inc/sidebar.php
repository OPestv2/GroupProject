    <div class="d-flex flex-column p-3 text-white bg-dark h-100" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4"><?php echo SITENAME; ?></span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="<?php echo URLROOT; ?>/pages/main" class="nav-link active">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                    Główna
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                    Moje multimedia
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                    O nas
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <?php if(isLoggedIn()): ?>
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle me-2">
                    <strong><?php echo $_SESSION['user_name']; ?></strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    <div class="overflow-scroll w-100">
    <?php require APPROOT . '/views/inc/navbar.php';