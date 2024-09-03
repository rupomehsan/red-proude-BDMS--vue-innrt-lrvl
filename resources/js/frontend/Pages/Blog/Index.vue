<template>
    <div class="container-fluid my-5" id="donerList">
        <div class="row mt-3 justify-content-center mx-5">
            <div class="common_title text-center">

                <h2>our doner list</h2>
            </div>
            <div>
                <input type="text" class="form-control" name="" id="" />
            </div>
            <template v-for="item in 10" :key="item">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-2">
                    <div class="card">
                        <div class="cover-photo">
                            <img
                                src="frontend/assets/images/help2.png"
                                class="profile"
                            />
                        </div>
                        <h3 class="profile-name">James Carson</h3>
                        <p class="about">
                            UI/UX Designer <br />
                            Front End Developer
                        </p>
                        <button class="btn">Message</button>
                        <button class="btn">Following</button>
                        <div class="icons">
                            <i class="fa-brands fa-linkedin"></i>
                            <i class="fa-brands fa-github"></i>
                            <i class="fa-brands fa-youtube"></i>
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { user_setup_store } from "./setup/store";

export default {
    data: () => ({}),
    created: async function () {
        await this.get_all_blood_groups();
        await this.get_all_divisions();
    },
    methods: {
        ...mapActions(user_setup_store, {
            get_all_blood_groups: "get_all_blood_groups",
            get_all_divisions: "get_all_divisions",
            get_district_by_division_id: "get_district_by_division_id",
            get_station_by_district_id: "get_station_by_district_id",
            store_data: "store_data",
        }),

        submitHandler: async function ($event) {
            let aditionalData = {
                address_info: this.address_info,
                phone_number: this.phone_number,
            };
            let response = await this.store_data($event.target, aditionalData);
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.$router.push({ name: `All${this.route_prefix}` });
            }
        },

        addPhoneNumber: function () {
            let data = {};
            (data.number = ""),
                (data.type = "primary"),
                this.phone_number.push(data);
        },
        removePhoneNumber: function (item) {
            this.phone_number = this.phone_number.filter(
                (data, index) => item != index
            );
            console.log(this.phone_number);
        },
        addAddress: function () {
            let data = {};
            (data.division_id = ""),
                (data.district_id = ""),
                (data.station_id = ""),
                (data.address_type = ""),
                (data.street_address = ""),
                this.address_info.push(data);
            this.address_info[this.address_info.length - 1].division_data =
                this.division_data;
        },
        removeAddress: function (item) {
            this.address_info = this.address_info.filter(
                (data, index) => item != index
            );
            console.log(this.address_info);
        },
        getDistrictByDivisionId: async function (index) {
            let response = await this.get_district_by_division_id(
                event.target.value
            );
            this.address_info[index].district_data = response;
        },
        getStationByDistrictId: async function (index) {
            let response = await this.get_station_by_district_id(
                event.target.value
            );
            this.address_info[index].station_data = response;
        },
    },

    computed: {
        ...mapState(user_setup_store, {
            blood_group_data: "blood_group_data",
            division_data: "division_data",
            district_data: "district_data",
            station_data: "station_data",
        }),
    },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap");

#donerList .card {
    padding: 15px;
    background: #222;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.7);
    user-select: none;
}

#donerList .cover-photo {
    position: relative;
    /* background: url('https://i.imgur.com/jxyuizJ.jpeg'); */
    background-color: #380303;
    background-size: cover;
    height: 100px;
    border-radius: 5px 5px 0 0;
}

#donerList .profile {
    position: absolute;
    width: 120px;
    bottom: -60px;
    left: 15px;
    border-radius: 50%;
    border: 2px solid #222;
    background: #222;
    padding: 5px;
}

#donerList .profile-name {
    font-size: 20px;
    margin: 25px 0 0 120px;
    color: #fff;
}

#donerList .about {
    margin-top: 30px;
    line-height: 1.6;
}

#donerList .btn {
    margin: 30px 15px;
    background: #7ce3ff;
    padding: 10px 25px;
    border-radius: 3px;
    border: 1px solid #7ce3ff;
    font-weight: bold;
    font-family: Montserrat;
    cursor: pointer;
    color: #222;
    transition: 0.2s;
}

#donerList .btn:last-of-type {
    background: transparent;
    border-color: #7ce3ff;
    color: #7ce3ff;
}

#donerList .btn:hover {
    background: #7ce3ff;
    color: #222;
}

#donerList .icons {
    width: 180px;
    margin: 0 auto 10px;
    display: flex;
    justify-content: space-between;
    gap: 15px;
}

#donerList .icons i {
    cursor: pointer;
    padding: 5px;
    font-size: 18px;
    transition: 0.2s;
    color: white;
    border: 1px solid #ff00004d;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.7);
}

#donerList .icons i:hover {
    color: #7ce3ff;
}
</style>
