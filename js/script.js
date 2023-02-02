const { createApp } = Vue;

createApp({
    data() {
        return {
            discsList: [],
            apiUrl: './server.php',
        }
    },

    methods: {
        getDiscs() {
            axios.get(this.apiUrl).then((response) => {
                console.log(response.data);
                this.discsList = response.data;
            }).catch((error) => {
                console.warn(error);
            })
        }
    },

    created() {
        this.getDiscs();
    },
}).mount('#app')