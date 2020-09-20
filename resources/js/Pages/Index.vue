<template>
    <v-app>
        <v-card color="grey darken-4" flat height="100%" tile>
            <v-toolbar dense class="blue" app>
                <v-app-bar-nav-icon @click.stop="clickDrawer"></v-app-bar-nav-icon>
                <v-toolbar-title>Anodaweb</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-btn icon>
                    <v-icon>exit_to_app</v-icon>
                </v-btn>
            </v-toolbar>
            <v-navigation-drawer v-model="drawer" permanent class="blue lighten-3">
                <template v-slot:prepend>
                    <v-list-item two-line>
                        <v-list-item-avatar>
                            <img src="https://randomuser.me/api/portraits/women/81.jpg">
                        </v-list-item-avatar>

                        <v-list-item-content>
                            <v-list-item-title>Jane Smith</v-list-item-title>
                            <v-list-item-subtitle>Logged In</v-list-item-subtitle>
                        </v-list-item-content>
                    </v-list-item>
                </template>
                <v-divider></v-divider>
                <v-list dense nav>
                    <v-list-item v-for="item in items" :key="item.title" link>
                        <v-list-item-icon>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title>{{ item.title }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
            </v-navigation-drawer>
        </v-card>
    </v-app>
</template>
<script>
export default {
    data(){
        return {
            items: [
                { title: 'Dashboard', icon: 'mdi-view-dashboard' },
                { title: 'Profil', icon: 'mdi-account' },
                { title: 'About', icon: 'mdi-help-box' },
            ],
            drawer: !null
        }
    },
    methods:{
        clickDrawer(){
            this.drawer = !this.drawer
        }
    }
}
</script>
