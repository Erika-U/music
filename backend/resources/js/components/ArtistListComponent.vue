<template>
    <div class="container">
        <div class="text-right m-4">
            <router-link v-bind:to="{name: 'artist.create'}">
                <button class="btn btn-primary">Add</button>
            </router-link>
        </div>
        <table class="table table-hover">
           <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">アーティスト名</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(artist, index) in artists" :key="index">
                <th scope="row">{{ artist.id }}</th>
                <td>{{ artist.title }}</td>
                <td>{{ artist.content }}</td>
                <td>{{ artist.person_in_charge }}</td>
                <td>
                    <router-link v-bind:to="{name: 'artist.show', params: {artistId: artist.id }}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'artist.edit', params: {artistId: artist.id }}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
       data: function () {
           return {
               artists: []
           }
       },
       methods: {
           getArtists() {
               axios.get('/api/artists')
                   .then((res) => {
                       this.artists = res.data;
                   });
           }
       },
       mounted() {
           this.getArtists();
       }
   }
</script>