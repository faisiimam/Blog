<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <!-- <div class="sb-sidenav-menu-heading">Blogs</div> -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Blogs
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('blog.list')}}">All Blogs</a>
                            <a class="nav-link" href="{{route('blog.add')}}">Add Blogs</a>
                            <a class="nav-link" href="{{route('blog.edit')}}">Edit Blogs</a>
                            <a class="nav-link" href="{{route('blog.trashed')}}">Trashed Blogs</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Contact
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('contact.list')}}">All Contacts</a>
                            <a class="nav-link" href="{{route('contact.add')}}">Add Contact</a>
                            <a class="nav-link" href="{{route('contact.edit')}}">Edit Contact</a>
                            <a class="nav-link" href="{{route('contact.update')}}">Update Contact</a>
                            <a class="nav-link" href="{{route('contact.delete')}}">Delete Contact</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="false" aria-controls="collapseUser">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        User
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseUser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('user.list')}}">All Users</a>
                            <a class="nav-link" href="{{route('user.add')}}">Add User</a>
                            <a class="nav-link" href="{{route('user.update')}}">Update User</a>
                            <a class="nav-link" href="{{route('user.delete')}}">Delete User</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>