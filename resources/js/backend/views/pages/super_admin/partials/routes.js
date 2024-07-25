import Layout from "./Layout.vue";
import Dashboard from "../Dashboard.vue";

import blog_routes from "../management/BlogManagement/BlogPost/setup/routes";
import blog_category_routes from "../management/BlogManagement/BlogCategory/setup/routes";
import blood_group_routes from "../management/BloodManagement/BloodGroup/setup/routes";
import blood_post_routes from "../management/BloodManagement/PostForBlood/setup/routes";
import blood_doner_routes from "../management/BloodManagement/BloodDoner/setup/routes";
import user_routes from "../management/UserManagement/User/setup/routes";

const routes = {
    path: "/",
    component: Layout,
    children: [
        {
            path: "dashboard",
            component: Dashboard,
            name: "SuperAdminDashboard",
        },

        blog_routes,
        blog_category_routes,

        blood_group_routes,
        blood_post_routes,
        blood_doner_routes,

        user_routes,
    ],
};

export default routes;
