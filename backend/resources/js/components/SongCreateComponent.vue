<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">曲名</label>
                        <input type="text" class="col-sm-9 form-control" id="title">
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label">アーティスト</label>
                        <input type="text" class="col-sm-9 form-control" id="content">
                    </div>
                    <div class="form-group row">
                        <label for="person-in-charge" class="col-sm-3 col-form-label">タグ</label>
                        <input type="text" class="col-sm-9 form-control" id="person-in-charge">
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-3 col-form-label">楽曲データ</label>
                        <input type="text" class="col-sm-9 form-control" id="content">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {}
</script>