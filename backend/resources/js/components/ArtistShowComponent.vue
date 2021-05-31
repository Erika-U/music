<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row border-bottom">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="artistId">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="title" class="col-sm-3 col-form-label">アーティスト名</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="title" value="title title">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="song" class="col-sm-3 col-form-label">曲</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="song" value="song song">
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            artistId: String
        }
    }
</script>