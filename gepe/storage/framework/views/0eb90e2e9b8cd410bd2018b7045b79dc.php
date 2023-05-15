            <!-- Brand Logo -->
            <a href="<?php echo e(route('character.list')); ?>" class="brand-link">
                <img src="<?php echo e(asset('adminlte/img/GepeLogo.png')); ?>" alt="GEPE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8"><br>
                <span class="brand-text font-weight-light">GEPE<br>Gerenciador de Personagens</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?php echo e(route('character.list')); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> Personagens </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('player.list')); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> Jogadores </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('race.list')); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> Ascendências </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('profession.list')); ?>" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p> Profissões </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
<?php /**PATH C:\laragon\www\gepe\resources\views/template/side.blade.php ENDPATH**/ ?>