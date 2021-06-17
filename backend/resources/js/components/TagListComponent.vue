<template>
    <div class="container">
        <div class="text-right m-4">
            <router-link v-bind:to="{name: 'tag.create'}">
                <button class="btn btn-primary">Add</button>
            </router-link>
        </div>
        <table class="table table-hover">
           <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">タグ名</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(tag, index) in tags" :key="index">
                <th scope="row">{{ tag.id }}</th>
                <td>{{ tag.title }}</td>
                <td>{{ tag.content }}</td>
                <td>{{ tag.person_in_charge }}</td>
                <td>
                    <router-link v-bind:to="{name: 'tag.show', params: {tagId: tag.id }}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'tag.edit', params: {tagId: tag.id }}">
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
               tags: []
           }
       },
       methods: {
           getTags() {
               axios.get('/api/tags')
                   .then((res) => {
                       this.tags = res.data;
                   });
           }
       },
       mounted() {
           this.getTags();
       }
   }
</script>