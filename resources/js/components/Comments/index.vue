<template>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tienda</th>
      <th scope="col">Capacidad</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="shop in shops.data" :key="shop.id">
      <!--<th scope="row"></th>-->
      <td>{{ shop.id }}</td>
      <td>{{ shop.nombre }}</td>
      <td>{{ shop.capacidad }}</td>
    </tr>
  </tbody>
</table>

</template>

<script>

export default{
  data(){
    return{
      shops: []
    }
  },mounted(){
    axios.get('api/shops').then(response =>{
      this.shops = response;
      console.log(this.shops);
    });
  }
}

</script>
