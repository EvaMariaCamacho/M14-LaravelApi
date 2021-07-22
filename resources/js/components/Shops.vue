<template>
    <div>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Capacidad</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="shop in shops" :key="shop.id">
                <td>{{ shop.id }}</td>
                <td>{{ shop.nombre }}</td>
                <td>{{ shop.capacidad }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editshop', params: { id: shop.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteshopvue(shop.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <button type="button" class="btn btn-info" @click="this.$router.push('/shopvue/add')">Crear</button>
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
            this.$axios.get('/shopvue')
                .then(response => {
                    this.shopvue = response.data;
                })
                .catch(function (error) {
                    console.error(error);
                });
        })
    },
    methods: {
        deleteShop(id) {
            this.$axios.get('/sanctum/csrf-cookie').then(response => {
                this.$axios.delete('/shopvue/delete/{$id}')
                    .then(response => {
                        let i = this.shops.map(item => item.id).indexOf(id); // find index of your object
                        this.shops.splice(i, 1)
                    })
                    .catch(function (error) {
                        console.error(error);
                    });
            })
        }
    },

}
</script>