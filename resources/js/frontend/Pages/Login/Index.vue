<template>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-6  my-5">
                <div class="appointment">
                    <h4 class="my-4">Login Here</h4>

                    <form
                        @submit.prevent="submitHandlerForLogin"
                        class="row hm1_contact_form"
                    >
                        <div class="col-xl-6 col-12 mb-4">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Your Name"
                                name="email"
                            />
                        </div>
                        <div class="col-xl-6 col-12 mb-4">
                            <input
                                type="password"
                                class="form-control"
                                placeholder="Phone Number"
                                name="password"
                            />
                        </div>

                        <div class="col-12">
                            <button type="submit" class="red_btn">
                                Submit Now
                            </button>
                            <a href="#" class="mx-5">Lost your password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        submitHandlerForLogin: async function () {
            let formData = new FormData(event.target);
            let response = await axios.post("login", formData);
            if (response.data.status === "success") {
                localStorage.setItem(
                    "token",
                    response.data?.data?.access_token
                );
                if (response.data?.data?.user.role_id == 3) {
                    window.location.href = "profile";
                }
                if (response.data?.data?.user.role_id != 3) {
                    window.location.href = "admin";
                }
            }
        },
    },
};
</script>
<style lang="scss" scoped></style>
