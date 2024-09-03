<template>
    <!-- header start -->
    <!--preloader start-->
    <div class="preloader" style="display: none">
        <h1>Blad Ai</h1>
        <div class="preload-progress">
            <span></span>
        </div>
    </div>
    <!--preloader end-->

    <!-- scroll to top -->
    <div class="progress-wrap cursor-pointer">
        <svg
            class="progress-circle svg-content"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
        >
            <path
                d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="
                    transition: stroke-dashoffset 10ms linear;
                    stroke-dasharray: 307.919, 307.919;
                    stroke-dashoffset: 307.919;
                "
            ></path>
        </svg>
    </div>
    <!-- scroll to top -->

    <!-- header start -->
    <header>
        <div class="header_top d-none d-lg-block d-xl-block d-xxl-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="header_top_content">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <a href="tel:01977259912">+01 (977) 2599 12</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header_top_content">
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <a href="mailto:company@domin.com"
                                >company@domin.com</a
                            >
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header_top_content">
                            <span
                                ><i class="fa-solid fa-location-dot"></i
                            ></span>
                            <a href="#">3146 Koontz Lane, USA</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="header_top_social">
                            <p>Follow Now</p>
                            <ul class="d-flex">
                                <li>
                                    <a href="#"
                                        ><i class="fa-brands fa-facebook-f"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa-brands fa-twitter"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa-brands fa-instagram"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href="#"
                                        ><i class="fa-brands fa-pinterest-p"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-xl-2 col-lg-2 col-md-4 col-6">
                        <div class="header_logo">
                            <Link
                                href="/"
                                class="text-decoration-none text-black"
                            >
                                <h3>RedProude</h3>
                            </Link>
                        </div>
                    </div>
                    <div
                        class="col-xl-8 col-lg-8 d-none d-xxl-block d-xl-block"
                    >
                        <ul class="main_menu">
                            <li>
                                <Link href="blood-doner-list">Doner Lists</Link>
                            </li>
                            <li><Link href="blogs">Blogs</Link></li>
                            <li><Link href="blood-register">Register</Link></li>
                            <li><Link href="login">Login</Link></li>
                        </ul>
                    </div>
                    <div
                        class="col-xl-2 col-lg-2 d-none d-xxl-block d-xl-block"
                    >
                        <div class="header_search_menu d-flex">
                            <div class="dropdown dropdown_search">
                                <button
                                    class="search-btn"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="true"
                                >
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-end"
                                    data-popper-placement="bottom-end"
                                >
                                    <form
                                        class="search-form d-flex align-items-center gap-2"
                                    >
                                        <input
                                            type="text"
                                            placeholder="Search..."
                                            class="theme-input bg-transparent"
                                        />
                                        <button
                                            type="submit"
                                            class="submit-btn"
                                        >
                                            Go
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- right offcanvas -->
                            <div class="offcanvas_right">
                                <button
                                    class="header_toggle_btn bg-transparent offcanvas_btn"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasRight"
                                    aria-controls="offcanvasRight"
                                >
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- mobile menu bar -->
                    <div
                        class="col-lg-10 col-md-8 col-6 d-block d-xxl-none d-xl-none"
                    >
                        <div
                            class="d-flex align-items-center gap-2 justify-content-end"
                        >
                            <div class="dropdown dropdown_search">
                                <button
                                    class="search-btn"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="true"
                                >
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <div
                                    class="dropdown-menu dropdown-menu-end"
                                    data-popper-placement="bottom-end"
                                >
                                    <form
                                        class="search-form d-flex align-items-center gap-2"
                                    >
                                        <input
                                            type="text"
                                            placeholder="Search..."
                                            class="theme-input bg-transparent"
                                        />
                                        <button
                                            type="submit"
                                            class="submit-btn"
                                        >
                                            Go
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="mobile_menu">
                                <button
                                    class="header_toggle_btn bg-transparent border-0"
                                    type="button"
                                    data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvas-mobile"
                                >
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
    <!-- header end -->
</template>

<script>
export default {
    data: () => ({
        is_home: true,
        search: "",
    }),
    created: async function () {},

    methods: {},
    computed: {},
};
</script>

<style scoped>
header {
    border-bottom: 1px solid #8080801f;
}
</style>
