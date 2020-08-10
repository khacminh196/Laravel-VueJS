import Home from "./components/content/Home.vue";
import Profile from "./components/content/Profile.vue";
import FormBasic from "./components/content/FormBasic.vue";
import Table from "./components/content/TableBasic.vue";
import Icon from "./components/content/Icon.vue";
import Blank from "./components/content/Blank.vue";
import Error404 from "./components/content/Error404.vue";

export const routes = [
    { path : '/', name : 'home', component : Home },
    { path : '/profile', name : 'profile', component : Profile },
    { path : '/form', name : 'form', component : FormBasic},
    { path : '/table', name : 'table', component : Table},
    { path : '/icon', name : 'icon', component : Icon},
    { path : '/blank', name : 'blank', component : Blank},
    { path : '/404', name : 'error', component : Error404},
]
