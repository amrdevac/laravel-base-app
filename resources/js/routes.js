const home = () => import("../views/vue/page/homepage.vue");
const dashboard = () => import("../views/vue/page/dashboard.vue");
const notFound = () => import("../views/vue/page/notFound.vue");

let routes = [
    {
        path: "/",
        component: home,
        name: "homepage",
    },
];

if (window.user) {
    routes = [];
    if (window.user.role == 1) {
        routes.push(
            {
                path: "/dashboard",
                component: dashboard,
                name: "dashboard",
            },
        );
    }

    if (window.user.role == 0) {
        routes.push(
            {
                path: "/dashboard",
                component: dashboard,
                name: "dashboard",
            },
        );
    }
}

routes.push({
    path: "/*",
    component: notFound,
    name: "notfound",
});

export default routes;
