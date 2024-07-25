<template>
    <div>
        <form @submit.prevent="submitHandler">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="text-capitalize">
                        {{ param_id ? "Update" : "Create" }} new
                        {{ route_prefix }}
                    </h5>
                    <div>
                        <router-link
                            class="btn btn-outline-warning btn-sm"
                            :to="{ name: `All${route_prefix}` }"
                            >All {{ route_prefix }}</router-link
                        >
                    </div>
                </div>
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col-md-6">
                            <p class="form-control bg-warning">
                                General information
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter your full name</label>
                                <div class="mt-1 mb-3">
                                    <input
                                        class="form-control form-control-square mb-2"
                                        type="text"
                                        v-model="user_info.name"
                                        name="name"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date of birth</label>
                                <div class="mt-1 mb-3">
                                    <input
                                        class="form-control form-control-square mb-2"
                                        type="date"
                                        v-model="user_info.date_of_birth"
                                        name="date_of_birth"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Select blood group</label>
                                <div class="mt-1 mb-3">
                                    <select
                                        class="form-control"
                                        v-model="user_info.blood_group_id"
                                        name="blood_group_id"
                                    >
                                        <template
                                            v-for="item in blood_group_data"
                                            :key="item.id"
                                        >
                                            <option :value="item.id">
                                                {{ item.name }}
                                            </option>
                                        </template>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Select gender</label>
                                <div class="mt-1 mb-3">
                                    <select
                                        class="form-control"
                                        v-model="user_info.gender"
                                        name="gender"
                                    >
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Select religion</label>
                                <div class="mt-1 mb-3">
                                    <select
                                        class="form-control"
                                        v-model="user_info.religion"
                                        name="religion"
                                    >
                                        <option value="islam">Islam</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="christian">
                                            Christian
                                        </option>
                                        <option value="boddoh">Boddoh</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Upload Image</label>
                                <div class="mt-1 mb-3">
                                    <img
                                        v-if="user_info.photo"
                                        :src="user_info.photo"
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
                            <p class="form-control bg-warning">Phone Numbers</p>
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
                                v-for="(item, index) in phone_number"
                                :key="index"
                            >
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Enter your phone</label>
                                        <div class="mt-1 mb-3">
                                            <input
                                                class="form-control form-control-square mb-2"
                                                type="text"
                                                v-model="item.number"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="">Select phone type</label>
                                        <div class="mt-1 mb-3">
                                            <select
                                                class="form-control"
                                                v-model="item.type"
                                            >
                                                <option value="primary">
                                                    Primary
                                                </option>
                                                <option value="alternative">
                                                    Alternative
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-md-2"
                                    v-if="phone_number.length > 1"
                                >
                                    <button
                                        type="button"
                                        @click="removePhoneNumber(index)"
                                        class="btn btn-danger btn-sm mt-4"
                                    >
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col-md-6">
                            <p class="form-control bg-warning">
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
                        v-for="(item, index) in address_info"
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
                                    <label for="">Select division</label>
                                    <div class="mt-1 mb-3">
                                        <select
                                            class="form-control"
                                            v-model="item.division_id"
                                            @change="
                                                getDistrictByDivisionId(index)
                                            "
                                        >
                                            <option value="" selected>
                                                Select division
                                            </option>
                                            <option
                                                v-for="division in item.division_data"
                                                :key="division.id"
                                                :value="division.id"
                                            >
                                                {{ division.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Select disctrict</label>
                                    <div class="mt-1 mb-3">
                                        <select
                                            class="form-control"
                                            v-model="item.district_id"
                                            @change="
                                                getStationByDistrictId(index)
                                            "
                                        >
                                            <option
                                                value=""
                                                selected
                                                v-if="
                                                    item.district_data &&
                                                    item.district_data.length
                                                "
                                            >
                                                Select disctrict
                                            </option>
                                            <option
                                                v-for="disctrict in item.district_data"
                                                :value="disctrict.id"
                                                :key="disctrict.id"
                                            >
                                                {{ disctrict.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Select station</label>
                                    <div class="mt-1 mb-3">
                                        <select
                                            class="form-control"
                                            v-model="item.station_id"
                                        >
                                            <option
                                                value=""
                                                selected
                                                v-if="
                                                    item.station_data &&
                                                    item.station_data.length
                                                "
                                            >
                                                Select station
                                            </option>
                                            <option
                                                v-for="station in item.station_data"
                                                :value="station.id"
                                                :key="station.id"
                                            >
                                                {{ station.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Select address type</label>
                                    <div class="mt-1 mb-3">
                                        <select
                                            class="form-control"
                                            v-model="item.address_type"
                                        >
                                            <option value="present">
                                                Present
                                            </option>
                                            <option value="permanent">
                                                Permanent
                                            </option>
                                            <option value="peripatetic">
                                                Peripatetic
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""
                                        >Enter your street address</label
                                    >
                                    <div class="mt-1 mb-3">
                                        <input
                                            class="form-control form-control-square mb-2"
                                            type="text"
                                            v-model="item.street_address"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" v-if="is_register">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter your email</label>
                                <div class="mt-1 mb-3">
                                    <input
                                        class="form-control form-control-square mb-2"
                                        type="text"
                                        v-model="user_info.email"
                                        id="email"
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Enter your password</label>
                                <div class="mt-1 mb-3">
                                    <input
                                        class="form-control form-control-square mb-2"
                                        type="text"
                                        v-model="user_info.password"
                                        id="password"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="">are you want to register?</label>
                        <input
                            type="checkbox"
                            name=""
                            id=""
                            v-model="is_register"
                        />
                    </div>
                    <div class="form-group">
                        <button
                            type="submit"
                            class="btn btn-light btn-square px-5"
                        >
                            <i class="icon-lock"></i> Submit
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import { mapActions, mapState } from "pinia";
import { user_setup_store } from "./setup/store";
import setup from "./setup";


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
        let id = this.$route.query.id;
        this.route_prefix = setup.route_prefix;
        await this.get_all_blood_groups();
        await this.get_all_divisions();

        if (id) {
            this.param_id = id;
            await this.get_single_data(id);
            if (this.single_data) {
                this.user_info.name = this.single_data.name;
                this.user_info.photo = this.single_data.photo;
                if (this.single_data.user_details) {
                    this.user_info.date_of_birth =
                        this.single_data.user_details?.date_of_birth;
                    this.user_info.blood_group_id =
                        this.single_data.user_details?.blood_group_id;
                    this.user_info.gender =
                        this.single_data.user_details?.gender;
                    this.user_info.religion =
                        this.single_data.user_details?.religion;
                    this.phone_number =
                        this.single_data.user_details.phone_numbers;
                }
            }
            if (this.single_data.user_address_details) {
                this.address_info = [];
                this.single_data.user_address_details.forEach(async (item) => {
                    let data = {};

                    let district_data = await this.get_district_by_division_id(
                        item.division_id
                    );
                    let station_data = await this.get_station_by_district_id(
                        item.district_id
                    );
                    (data.id = item.id),
                        (data.division_id = item.division_id),
                        (data.district_id = item.district_id),
                        (data.station_id = item.station_id),
                        (data.address_type = item.address_type),
                        (data.street_address = item.street_address),
                        (data.division_data = this.division_data),
                        (data.district_data = district_data);
                    data.station_data = station_data;
                    this.address_info.push(data);
                });
            }
        } else {
            if (this.division_data) {
                this.address_info[this.address_info.length - 1].division_data =
                    this.division_data;
            }
        }
    },
    methods: {
        ...mapActions(user_setup_store, {
            get_all_blood_groups: "get_all_blood_groups",
            get_all_divisions: "get_all_divisions",
            get_single_data: "get",
            store_data: "store",
            update_data: "update",
            get_district_by_division_id: "get_district_by_division_id",
            get_station_by_district_id: "get_station_by_district_id",
        }),

        submitHandler: async function ($event) {
            if (this.param_id) {
                let aditionalData = {
                    address_info: this.address_info,
                    phone_number: this.phone_number,
                };
                let response = await this.update_data(
                    $event.target,
                    this.param_id,
                    aditionalData
                );
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
            } else {
                let aditionalData = {
                    address_info: this.address_info,
                    phone_number: this.phone_number,
                };
                let response = await this.store_data(
                    $event.target,
                    aditionalData
                );
                if (response.data.status === "success") {
                    window.s_alert(response.data.message);
                    this.$router.push({ name: `All${this.route_prefix}` });
                }
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
            single_data: "single_data",
            all_data: "all_data",
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
