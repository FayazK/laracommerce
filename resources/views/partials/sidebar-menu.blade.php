<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Dashboard -->
    {!!sidebarMenu(url('admin'),'Dashboard','dashboard','',[
        sidebarMenuChild('Dashboard Home',url('admin/home'))
    ])!!}
    
    <!-- Users -->
    {!!sidebarMenu(url('admin/users'),'Users','users','',[
        sidebarMenuChild('All users',url('admin/users'),'users'),
        sidebarMenuChild('Add new',url('admin/users/add'),'user-plus')
    ])!!}
    <!-- Settings -->
    {!!sidebarMenu(url('admin/settings'),'Settings','cogs')!!}
</ul>