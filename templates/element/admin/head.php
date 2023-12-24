
<nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']) ?>">
                    <h1 class="tm-site-title mb-0"><?= __('Product Admin'); ?></h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= $this->Url->build(['controller' => 'Dashboard', 'action' => 'index']) ?>">
                                <i class="fas fa-tachometer-alt"></i>
                                <?= __('Dashboard'); ?> 
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                <?= __('Reports'); ?> <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"> <?= __('Daily Report'); ?></a>
                                <a class="dropdown-item" href="#"><?= __('Weekly Report'); ?></a>
                                <a class="dropdown-item" href="#"><?= __('Yearly Report'); ?></a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->Url->build(['controller' => 'products', 'action' => 'index']) ?>">
                                <i class="fas fa-shopping-cart"></i>
                                <?= __('Products'); ?> 
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= $this->Url->build(['controller' => 'accounts', 'action' => 'index']) ?>">
                                <i class="far fa-user"></i>
                                <?= __('Accounts'); ?> 
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-cog"></i>
                                <span>
                                <?= __('Settings'); ?>  <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><?= __('Profile'); ?></a>
                                <a class="dropdown-item" href="#"><?= __('Billing'); ?></a>
                                <a class="dropdown-item" href="#"><?= __('Customize'); ?></a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="nav-link d-block">
                                <?php 
                                    if(isset($user)){
                                        echo $user->loginId;
                                        ?>
                                        <a href=<?= $this->Url->build(['controller' => 'users', 'action' => 'logout']) ?>>
                                            <b><?= __('Logout'); ?></b>
                                        </a>
                                <?php  } ?>    
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>