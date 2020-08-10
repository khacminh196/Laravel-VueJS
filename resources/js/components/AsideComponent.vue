<template>
    <aside class="left-sidebar" data-sidebarbg="skin5">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <router-link :to="{name: 'home'}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Home</span>
                        </router-link>
                    </li>
                    <li class="sidebar-item">
                        <router-link :to="{name: 'profile'}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Profile</span>
                        </router-link>
                    </li>
                    <li class="sidebar-item">
                        <router-link :to="{name: 'form'}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Form Basic</span>
                        </router-link>
                    </li>
                    <li class="sidebar-item">
                        <router-link :to="{name: 'table'}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Table</span>
                        </router-link>
                    </li>
                    <li class="sidebar-item">
                        <router-link :to="{name: 'icon'}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Icon</span>
                        </router-link>
                    </li>
                    <li class="sidebar-item">
                        <router-link :to="{name: 'blank'}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">Blank</span>
                        </router-link>
                    </li>
                    <li class="sidebar-item">
                        <router-link :to="{name: 'error'}" class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false">
                            <i class="mdi mdi-av-timer"></i>
                            <span class="hide-menu">404</span>
                        </router-link>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
</template>

<script>
export default {

}
</script>

<style>
    #sidebarnav .sidebar-item a {
        text-decoration: none;
    }
</style>
