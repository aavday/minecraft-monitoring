import VueRouter from 'vue-router';
import exampleComponent from "./components/ExampleComponent";

const routes = [
    {
        path: '/',
        component: exampleComponent,
        name: 'home'
    }
];

const router = new VueRouter({
    mode: 'history',
    routes,
})

export default router;
