<template>
    <div class="container-fluid my-5" id="donerList">

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
