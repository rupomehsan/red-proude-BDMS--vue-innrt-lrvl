<template>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-lg-12 card my-5 p-2">
                <div class="appointment">
                    <div class="page-body">
                        <div>
                            <form @submit.prevent="submitHandler">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="text-capitalize text-center">
                                            Register as a doner
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row my-3">
                                            <div class="col-md-6">
                                                <p
                                                    class="form-control bg-warning"
                                                >
                                                    General information
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Enter your full
                                                        name</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <input
                                                            class="form-control form-control-square mb-2"
                                                            type="text"
                                                            v-model="
                                                                user_info.name
                                                            "
                                                            name="name"
                                                        />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Date of birth</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <input
                                                            class="form-control form-control-square mb-2"
                                                            type="date"
                                                            v-model="
                                                                user_info.date_of_birth
                                                            "
                                                            name="date_of_birth"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Enter your email</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <input
                                                            class="form-control form-control-square mb-2"
                                                            type="text"
                                                            v-model="
                                                                user_info.email
                                                            "
                                                            id="email"
                                                            name="email"
                                                        />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Enter your
                                                        password</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <input
                                                            class="form-control form-control-square mb-2"
                                                            type="password"
                                                            v-model="
                                                                user_info.password
                                                            "
                                                            id="password"
                                                            name="password"
                                                        />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Select blood
                                                        group</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <select
                                                            class="form-control"
                                                            v-model="
                                                                user_info.blood_group_id
                                                            "
                                                            name="blood_group_id"
                                                            id="blood_group_id"
                                                        >
                                                            <option value="">
                                                                Select blood
                                                                group
                                                            </option>
                                                            <template
                                                                v-for="item in blood_group_data"
                                                                :key="item.id"
                                                            >
                                                                <option
                                                                    :value="
                                                                        item.id
                                                                    "
                                                                >
                                                                    {{
                                                                        item.name
                                                                    }}
                                                                </option>
                                                            </template>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Select gender</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <select
                                                            class="form-control"
                                                            v-model="
                                                                user_info.gender
                                                            "
                                                            name="gender"
                                                            id="gender"
                                                        >
                                                            <option value="">
                                                                Select gender
                                                            </option>
                                                            <option
                                                                value="male"
                                                            >
                                                                Male
                                                            </option>
                                                            <option
                                                                value="female"
                                                            >
                                                                Female
                                                            </option>
                                                            <option
                                                                value="others"
                                                            >
                                                                Others
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Select religion</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <select
                                                            class="form-control"
                                                            v-model="
                                                                user_info.religion
                                                            "
                                                            name="religion"
                                                            id="religion"
                                                        >
                                                            <option value="">
                                                                Select religion
                                                            </option>
                                                            <option
                                                                value="islam"
                                                            >
                                                                Islam
                                                            </option>
                                                            <option
                                                                value="hindu"
                                                            >
                                                                Hindu
                                                            </option>
                                                            <option
                                                                value="christian"
                                                            >
                                                                Christian
                                                            </option>
                                                            <option
                                                                value="boddoh"
                                                            >
                                                                Boddoh
                                                            </option>
                                                            <option
                                                                value="others"
                                                            >
                                                                Others
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for=""
                                                        >Upload Image</label
                                                    >
                                                    <div class="mt-1 mb-3">
                                                        <img
                                                            v-if="
                                                                user_info.photo
                                                            "
                                                            :src="
                                                                user_info.photo
                                                            "
                                                            alt=""
                                                            height="100"
                                                            width="100"
                                                        />
                                                        <input
                                                            class="form-control form-control-square mb-2"
                                                            type="file"
                                                            name="photo"
                                                            id="photo"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-md-6">
                                                <p
                                                    class="form-control bg-warning"
                                                >
                                                    Phone Numbers
                                                </p>
                                            </div>
                                            <div class="col-md-2">
                                                <button
                                                    type="button"
                                                    @click="addPhoneNumber"
                                                    class="btn btn-info"
                                                >
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div
                                                    class="row align-items-center"
                                                    v-for="(
                                                        item, index
                                                    ) in phone_number"
                                                    :key="index"
                                                >
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for=""
                                                                >Enter your
                                                                phone</label
                                                            >
                                                            <div
                                                                class="mt-1 mb-3"
                                                            >
                                                                <input
                                                                    class="form-control form-control-square mb-2"
                                                                    type="text"
                                                                    v-model="
                                                                        item.number
                                                                    "
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for=""
                                                                >Select phone
                                                                type</label
                                                            >
                                                            <div
                                                                class="mt-1 mb-3"
                                                            >
                                                                <select
                                                                    class="form-control"
                                                                    v-model="
                                                                        item.type
                                                                    "
                                                                >
                                                                    <option
                                                                        value="primary"
                                                                    >
                                                                        Primary
                                                                    </option>
                                                                    <option
                                                                        value="alternative"
                                                                    >
                                                                        Alternative
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-2"
                                                        v-if="
                                                            phone_number.length >
                                                            1
                                                        "
                                                    >
                                                        <button
                                                            type="button"
                                                            @click="
                                                                removePhoneNumber(
                                                                    index
                                                                )
                                                            "
                                                            class="btn btn-danger btn-sm mt-4"
                                                        >
                                                            <i
                                                                class="fa fa-minus"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row my-3">
                                            <div class="col-md-6">
                                                <p
                                                    class="form-control bg-warning"
                                                >
                                                    Address details
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <button
                                                    type="button"
                                                    class="btn btn-info"
                                                    @click="addAddress"
                                                >
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div
                                            class="card p-2"
                                            id="addressCard"
                                            v-for="(
                                                item, index
                                            ) in address_info"
                                            :key="index"
                                        >
                                            <button
                                                v-if="address_info.length > 1"
                                                type="button "
                                                @click="removeAddress(index)"
                                                class="btn btn-danger btn-sm mt-4 address-remove-btn"
                                            >
                                                <i class="fa fa-minus"></i>
                                            </button>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""
                                                            >Select
                                                            division</label
                                                        >
                                                        <div class="mt-1 mb-3">
                                                            <select
                                                                class="form-control"
                                                                v-model="
                                                                    item.division_id
                                                                "
                                                                @change="
                                                                    getDistrictByDivisionId(
                                                                        index
                                                                    )
                                                                "
                                                            >
                                                                <option
                                                                    value=""
                                                                    selected
                                                                >
                                                                    Select
                                                                    division
                                                                </option>
                                                                <option
                                                                    v-for="division in item.division_data"
                                                                    :key="
                                                                        division.id
                                                                    "
                                                                    :value="
                                                                        division.id
                                                                    "
                                                                >
                                                                    {{
                                                                        division.name
                                                                    }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""
                                                            >Select
                                                            disctrict</label
                                                        >
                                                        <div class="mt-1 mb-3">
                                                            <select
                                                                class="form-control"
                                                                v-model="
                                                                    item.district_id
                                                                "
                                                                @change="
                                                                    getStationByDistrictId(
                                                                        index
                                                                    )
                                                                "
                                                            >
                                                                <option
                                                                    value=""
                                                                    selected
                                                                    v-if="
                                                                        item.district_data &&
                                                                        item
                                                                            .district_data
                                                                            .length
                                                                    "
                                                                >
                                                                    Select
                                                                    disctrict
                                                                </option>
                                                                <option
                                                                    v-for="disctrict in item.district_data"
                                                                    :value="
                                                                        disctrict.id
                                                                    "
                                                                    :key="
                                                                        disctrict.id
                                                                    "
                                                                >
                                                                    {{
                                                                        disctrict.name
                                                                    }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""
                                                            >Select
                                                            station</label
                                                        >
                                                        <div class="mt-1 mb-3">
                                                            <select
                                                                class="form-control"
                                                                v-model="
                                                                    item.station_id
                                                                "
                                                            >
                                                                <option
                                                                    value=""
                                                                    selected
                                                                    v-if="
                                                                        item.station_data &&
                                                                        item
                                                                            .station_data
                                                                            .length
                                                                    "
                                                                >
                                                                    Select
                                                                    station
                                                                </option>
                                                                <option
                                                                    v-for="station in item.station_data"
                                                                    :value="
                                                                        station.id
                                                                    "
                                                                    :key="
                                                                        station.id
                                                                    "
                                                                >
                                                                    {{
                                                                        station.name
                                                                    }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""
                                                            >Select address
                                                            type</label
                                                        >
                                                        <div class="mt-1 mb-3">
                                                            <select
                                                                class="form-control"
                                                                v-model="
                                                                    item.address_type
                                                                "
                                                            >
                                                                <option
                                                                    value="present"
                                                                >
                                                                    Present
                                                                </option>
                                                                <option
                                                                    value="permanent"
                                                                >
                                                                    Permanent
                                                                </option>
                                                                <option
                                                                    value="peripatetic"
                                                                >
                                                                    Peripatetic
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""
                                                            >Enter your street
                                                            address</label
                                                        >
                                                        <div class="mt-1 mb-3">
                                                            <input
                                                                class="form-control form-control-square mb-2"
                                                                type="text"
                                                                v-model="
                                                                    item.street_address
                                                                "
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="d-flex align-items-center justify-content-center"
                                        >
                                            <div class="red_btn">
                                                <button
                                                    type="submit"
                                                    class="btn"
                                                >
                                                    Submit Now
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { user_setup_store } from "./setup/store";

export default {
    data: () => ({
        route_prefix: "",
        param_id: null,
        is_register: false,
        user_info: {
            name: "",
            photo: "",
            date_of_birth: "",
            blood_group_id: "",
            gender: "",
            religion: "",
            email: "",
            password: "",
        },
        phone_number: [
            {
                number: "",
                type: "primary",
            },
        ],
        address_info: [
            {
                division_id: "",
                district_id: "",
                station_id: "",
                street_address: "",
                address_type: "",

                division_data: [],
                district_data: [],
                station_data: [],
            },
        ],
    }),
    created: async function () {
        await this.get_all_blood_groups();
        await this.get_all_divisions();
        if (this.division_data) {
            this.address_info[this.address_info.length - 1].division_data =
                this.division_data;
        }
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
                this.$inertia.visit("blood-doner-list");
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
#addressCard {
    position: relative;
}
.address-remove-btn {
    position: absolute;
    bottom: 10px;
    right: 10px;
}
</style>
