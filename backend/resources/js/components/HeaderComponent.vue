<template>
    <div class="container-fluid bg-dark mb-3">
        <div class="container">
            <nav class="navbar navbar-dark">
                <span class="navbar-brand mb-0 h1">Music</span>
                <div>
                    <router-link v-bind:to="{name: 'artist.list'}">
                        <button class="btn btn-success">Artist</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'song.list'}">
                        <button class="btn btn-success">Song</button>
                    </router-link>
                    <router-link v-bind:to="{name: 'tag.list'}">
                        <button class="btn btn-success">tag</button>
                    </router-link>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {}
</script>