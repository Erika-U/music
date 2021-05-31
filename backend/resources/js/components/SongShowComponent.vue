<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row border-bottom">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="songId">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="title" class="col-sm-3 col-form-label">曲名</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="title" value="title title">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">アーティスト</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="person-in-charge" value="Ichiro">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="tag" class="col-sm-3 col-form-label">タグ</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="tag" value="tag tag">
                    </div>
                    <div class="form-group row border-bottom">
                        <label for="data" class="col-sm-3 col-form-label">楽曲データ</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="data" value="data data">
                    </div>
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