<template>
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <router-link class="nav-link active"
                                         :to="{ name: 'admin.dashboard.index'}">
                                <i class="fa fa-fw fa-user-circle"></i> Home
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse"
                               aria-expanded="false" data-target="#submenu-1-1"
                               aria-controls="submenu-1-1">
                                <i class="fa fa-clipboard"></i> Posts
                            </a>
                            <div id="submenu-1-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <router-link class="nav-link"
                                                     :to="{ name: 'admin.post.index'}">
                                            <i class="fa fa-list"></i> List
                                        </router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link class="nav-link"
                                                     :to="{ name: 'admin.post.create'}">
                                            <i class="fa fa-plus-circle"></i> Add new
                                        </router-link>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                expandedGroup: [],
                routes: [],
                openedNav: {}
            }
        },

        methods:{
            navOnClick(route){
                //determine status
                let status = route.meta.nav.open ? false : true;

                //find index
                let index = this.routes.findIndex(x => x.meta.nav.id === route.meta.nav.id);
                let navID = this.routes[index].meta.nav.id;

                //open or close nav
                this.routes[index].meta.nav.open = status;

                // we only want to save opened navs not all
                if(status){
                    this.openedNav[navID] = status;
                    console.log(this.openedNav)
                    localStorage.setItem('opened_navs', JSON.stringify(this.openedNav));
                }

                this.setNavRoutes();
            },

            setNavRoutes: function(){
                localStorage.setItem('nav_routes', JSON.stringify(this.routes))
            },

            getNavRoutes: function(){
                return JSON.parse(localStorage.getItem('nav_routes') );
            }
        },

        mounted()
        {
            let routes = this.$router.options.routes;
            let savedRoutes = this.getNavRoutes();

            // console.log(routes)

            // if(savedRoutes && savedRoutes.length){
            //     this.routes = savedRoutes;
            // }else{
            //     for(var i=0; i < routes.length; i++)
            //     {
            //         if(routes[i].meta && routes[i].meta.nav)
            //         {
            //             //route.meta.nav.icon
            //             //build children
            //             let navID = routes[i].meta.nav.id;
            //             let items = routes[i].meta.nav.items;
            //             let children = routes[i].children;
            //
            //             //ensure we use only available routes
            //             let validChildren = [];
            //
            //             //go over items (route children)
            //             if(typeof items == 'object')
            //             {
            //                 for(var it=0; it < items.length; it++){
            //                     let name = items[it].name;
            //                     //console.log(items[it].name)
            //                     let child = children.find(x => x.name === items[it].name);
            //                     validChildren[name] = child;
            //                     //console.log(child)
            //                 }
            //             }
            //
            //             //add children
            //             routes[i].children = validChildren;
            //             this.routes.push(routes[i]);
            //         }
            //     }
            // }
        }
    }
</script>
