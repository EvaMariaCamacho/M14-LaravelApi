<template>
    <div>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateShop">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" v-model="shop.nombre">
                    </div>
                    <div class="form-group">
                        <label>Capacidad</label>
                        <input type="text" class="form-control" v-model="shop.capacidad">
                    </div>
                    <button type="submit" class="btn btn-primary">Modificar</button>
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
    created() {
        this.$axios.get('/sanctum/csrf-cookie').then(response => {
            this.$axios.get('/shopvue/edit/{$id}')
                .then(response => {
                    this.shopvue = response.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
    },
    methods: {
        updateShop() {
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.post('/shopvue/update/{$id}', this.shop)
                    .then(response => {
                        this.$router.push({name: 'shopvue'});
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            })
        }
    },
  
}
</script>