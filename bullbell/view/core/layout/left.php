<nav class="sidebar sidebar-offcanvas" id="sidebar" >
    <ul class="nav">
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->getUrl()->getUrl('dashboard','index'); ?>">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->getUrl()->getUrl('grid','product'); ?>">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Manage Items</span>
            </a>
        </li>
    </ul>
</nav>