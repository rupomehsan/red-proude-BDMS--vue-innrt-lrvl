import { defineStore } from "pinia";

export const user_setup_store = defineStore("user_setup_store", {
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

        get: async function (id) {
            let response = await axios.get(`${this.api}/${id}`);
            response = response.data.data;
            this.single_data = response;
        },

        store: async function (form, aditionalData) {
            let formData = new FormData(form);
            formData.append(
                "address_info",
                JSON.stringify(aditionalData.address_info)
            );
            formData.append(
                "phone_number",
                JSON.stringify(aditionalData.phone_number)
            );
            let response = await axios.post(this.api + "/store", formData);
            return response;
        },

        update: async function (form, id,aditionalData) {
            let formData = new FormData(form);
            formData.append(
                "address_info",
                JSON.stringify(aditionalData.address_info)
            );
            formData.append(
                "phone_number",
                JSON.stringify(aditionalData.phone_number)
            );
            let response = await axios.post(
                `${this.api}/update/${id}`,
                formData
            );
            return response;
        },

        delete: async function (id) {
            var data = await window.s_confirm();
            if (data) {
                let response = await axios.delete(`${this.api}/${id}`);
                window.s_alert("Data deleted");
                this.all();
                console.log(response.data);
            }
        },
        bulk_action: async function (action, data) {
            let response = await axios.post(`${this.api}/bulk-action`, {
                action,
                data,
            });
            if (response.data.status === "success") {
                window.s_alert(response.data.message);
                this.all();
            }
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
