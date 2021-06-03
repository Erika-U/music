<template>
    <div class="container">
        <div class="text-right m-4">
            <router-link v-bind:to="{name: 'song.create'}">
                <button class="btn btn-primary">Add</button>
            </router-link>
        </div>
        <table class="table table-hover">
           <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">曲名</th>
                <th scope="col">アーティスト名</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Title1</td>
                <td>Content1</td>
                <td>
                    <router-link v-bind:to="{name: 'song.show', params: {songId: 1}}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'song.edit', params: {songId: 1}}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Title2</td>
                <td>Content2</td>
                <td>
                    <router-link v-bind:to="{name: 'song.show', params: {songId: 2}}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'song.edit', params: {songId: 2}}">
                        <button class="btn btn-success">Edit</button>
                    </router-link>
                </td>
                <td>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Title3</td>
                <td>Content3</td>
                <td>
                    <router-link v-bind:to="{name: 'song.show', params: {songId: 2}}">
                        <button class="btn btn-primary">Show</button>
                    </router-link>
                </td>
                <td>
                    <router-link v-bind:to="{name: 'song.edit', params: {songId: 3}}">
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
    export default {}
</script>