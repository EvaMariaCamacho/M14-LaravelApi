<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addShop">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" v-model="shop.nombre">
                    </div>
                    <div class="form-group">
                        <label>Capaciad</label>
                        <input type="text" class="form-control" v-model="shop.capacidad">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Shop</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            shop: {}
        }
    },
    methods: {
        addShop() {
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.post('/shopvue/add', this.shop)
                    .then(response => {
                        this.$router.push({name: 'shopvue'})
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            })
        }
    },

}
</script>