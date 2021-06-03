<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="taskId">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">曲名</label>
                        <input type="text" class="col-sm-9 form-control" id="title">
                    </div>
                    <div class="form-group row">
                        <label for="artist" class="col-sm-3 col-form-label">アーティスト</label>
                        <input type="text" class="col-sm-9 form-control" id="artist">
                    </div>
                    <div class="form-group row">
                        <label for="tag" class="col-sm-3 col-form-label">タグ</label>
                        <input type="text" class="col-sm-9 form-control" id="tag">
                    </div>
                    <div class="form-group row">
                        <label for="song-data" class="col-sm-3 col-form-label">楽曲データ</label>
                        <input type="text" class="col-sm-9 form-control" id="song-data">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            songId: String
        }
    }
</script>