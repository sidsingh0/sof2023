<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: #fff;    border: 1px solid #eadbf6;" id="accordionSidebar">

<!-- Sidebar - Brand -->

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item mt-2">
    <a class="nav-link d-flex flex-column p-0">
        <!-- <i class="fas fa-fw fa-cog"></i> -->
        <div class="" style="background-color:#f5eefb;padding: 0.75rem 1.5rem;border-radius: 4px;">
            <span style="font-weight: 500;font-size: 18px;color:#302a68;display: block;">Manage JOBFAIR</span>
            <?php if (isset($_COOKIE["username"])){
                echo '<a href="logout.php" style="font-weight: 300;color:#a8acc2">Logout</a>';
            } ?>
            
        
        </div>
        
    </a>
</li>
<!-- <hr class="sidebar-divider my-2"> -->

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item mt-4">
    <a href="index.php" class="nav-link">
        <i class="fas fa-fw fa-list"></i>
        <span>All Candidates</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link">
    <i class="fas fa-fw fa-list"></i>
        <span>Attendees</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link">
    <i class="fas fa-fw fa-list"></i>
        <span>Pending Candidates</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link">
    <i class="fas fa-fw fa-list"></i>
        <span>Top Candidates</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link">
    <i class="fas fa-fw fa-list"></i>
        <span>Update Apti Marks</span>
    </a>
</li>

<!-- Sidebar Toggler (Sidebar) -->
<!-- <div class="text-center d-none d-md-inline" style="color:#302a68">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> -->

<!-- Sidebar Message -->

</ul>
<!-- End of Sidebar -->