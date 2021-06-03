<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label">ID</label>
                        <input type="text" class="col-sm-9 form-control-plaintext" readonly id="id" v-bind:value="tagId">
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">タグ名</label>
                        <input type="text" class="col-sm-9 form-control" id="title">
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
            tagId: String
        }
    }
</script>