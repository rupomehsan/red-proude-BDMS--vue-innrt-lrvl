import { defineStore } from "pinia";

export const doner_list_setup_store = defineStore("doner_list_setup_store", {
    state: () => ({
        all_data: {},
        single_data: {},
        role_data: {},
        blood_group_data: [],
        division_data: [],
        district_data: [],
        station_data: [],
        api: "users",
    }),
    getters: {
        doubleCount: (state) => state.count * 2,
    },
    actions: {
        all: async function (url) {
            let response;
            if (url) {
                response = await axios.get(url);
            } else {
                response = await axios.get(this.api);
            }
            this.all_data = response.data.data;
        },
        // additional function
        // additional function
        get_all_blood_groups: async function () {
            let response = await axios.get(`blood-groups?get_all=1`);
            response = response.data.data;
            this.blood_group_data = response;
        },
        get_all_divisions: async function () {
            let response = await axios.get(`divisions?get_all=1`);
            response = response.data.data;
            this.division_data = response;
        },
        get_district_by_division_id: async function (division_id) {
            let response = await axios.get(
                `districts?get_all=1&division_id=${division_id}`
            );
            response = response.data.data;
            return response;
        },
        get_station_by_district_id: async function (district_id) {
            let response = await axios.get(
                `stations?get_all=1&district_id=${district_id}`
            );
            response = response.data.data;
            return response;
        },
    },
});
