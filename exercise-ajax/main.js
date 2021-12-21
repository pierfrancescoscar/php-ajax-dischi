// Get data from our database from php

const app = new Vue ({
    el: '#app',
    data: {
        database: null,
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('http://localhost:8888/php-ajax-dischi/exercise-ajax/database.php')
            .then(response => {
                console.log(response.data);
                this.database = response.data;
            })
            .catch(err => {
                console.log(err);
            })
        }
    }
})