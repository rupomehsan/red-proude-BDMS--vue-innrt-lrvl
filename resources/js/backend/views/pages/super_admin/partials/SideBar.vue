<template>
    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper">
        <div class="brand-logo">
            <router-link
                :to="{ name: `SuperAdminDashboard` }"
                class="d-flex align-items-center"
            >
                <img
                    src="/backend/assets/images/logo-icon.png"
                    class="logo-icon"
                    alt="logo icon"
                />
                <h5 class="logo-text">Ecommerce Admin</h5>
            </router-link>
            <div class="close-btn">
                <i class="zmdi zmdi-close" @click="toggle_menu"></i>
            </div>
        </div>
        <div class="m-2">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
        <hr />
        <ul class="metismenu" id="menu">
            <li>
                <router-link
                    :to="{ name: `SuperAdminDashboard` }"
                    class="border"
                    href="javascript:void();"
                >
                    <div class="parent-icon">
                        <i class="zmdi zmdi-view-dashboard"></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </router-link>
            </li>

            <!-- <side-bar-single-menu
                :menu_title="`Users`"
                :route_name="`AllUser`"
                :icon="`fa fa-plus`"
            /> -->

            <side-bar-drop-down-menus
                :icon="`fa fa-plus`"
                :menu_title="`Blood Management`"
                :menus="[
                    {
                        route_name: `AllBloodDoner`,
                        title: `BloodDoner`,
                    },
                    {
                        route_name: `AllBloodGroup`,
                        title: `BloodGroup`,
                    },
                    {
                        route_name: `AllPostForBlood`,
                        title: `PostForBlood`,
                    },
                ]"
            />
            <side-bar-drop-down-menus
                :icon="`fa fa-plus`"
                :menu_title="`Blog Management`"
                :menus="[
                    {
                        route_name: `AllPostForBlood`,
                        title: `Blood`,
                    },
                    {
                        route_name: `AllBlogCategory`,
                        title: `BlogCategory`,
                    },
                ]"
            />
        </ul>
    </div>
</template>

<script>
import { mapActions } from "pinia";
import { auth_store } from "../../../../store/auth_store";
import SideBarDropDownMenus from "./SideBarDropDownMenus.vue";
import SideBarSingleMenu from "./SideBarSingleMenu.vue";

export default {
    data: () => ({
        showSidebar: true,
    }),
    components: { SideBarDropDownMenus, SideBarSingleMenu },
    methods: {
        toggle_menu: function () {
            document.getElementById("wrapper").classList.toggle("toggled");
        },
    },
};
</script>

<style></style>
