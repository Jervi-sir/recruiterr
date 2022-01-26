@extends('layouts.master')

@section('title')
Maison d'entrepreneuriat
@endsection

@section('top-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@voerro/vue-tagsinput@2.7.1/dist/style.css">
@endsection
@section('content')
<div class="container">
    <!-- Banner Area Start -->

    <div class="row" id="formProfile" >
        <div class="col-lg-8">
            <div class="block-box">
                <h3 class="item-title">Add an Article</h3>
                <form action="{{ route('article.publish') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gutters-20">
                        <div class="col-lg-12 form-group">
                            <label for="">Title</label>
                            <input v-model="title" type="text" class="form-control" name="title" placeholder="Write a title" required>
                            <span v-show="error.title.state" class="error">@{{ error.title.text }}</span>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label for="add-image">Image</label>
                            <div class="file-btn">
                                <label for="add-image">Add an Image</label>
                                <input id="add-image" type="file" class="form-control" accept="image/*" name="image" @change="previewFiles" required hidden>
                                <div class="preview">
                                    <span class="details">@{{ imageDetails }}</span>
                                    <img class="preview" :src="image" alt="">
                                </div>
                            </div>
                            <span v-show="error.image.state" class="error">@{{ error.image.text }}</span>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label for="">Article Link</label>
                            <input v-model="link" type="text" class="form-control" name="link" placeholder="Link of the article, example: facebook.com/p..." required>
                            <span v-show="error.link.state" class="error">@{{ error.link.text }}</span>
                        </div>

                        <div class="col-lg-12 form-group">
                            <label for="add-image">Quick Description</label>
                            <textarea v-model="description" name="description" cols="30" rows="3" class="textarea form-control" placeholder="a Recap about the article"></textarea>
                            <span v-show="error.DescMax.state" class="error">@{{ error.DescMax.text }}</span>
                        </div>

                        <div class="col-12 form-group submit-internal">
                            <input id="submit-btn" type="submit" class="submit-btn" hidden>
                            <input type="button" class="submit-btn" value="Publish" @click="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('vuejs')
<!-- Vue js section -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@voerro/vue-tagsinput@2.7.1/dist/voerro-vue-tagsinput.js"></script>

<script>
    new Vue({
        el: '#formProfile',
        components: { "tags-input": VoerroTagsInput },

        data: {
            image: '',
            imageDetails: '',
            title: '',
            link: '',
            description: '',
            error: {
                link: {
                    state: 0,
                    text: 'Must be a url link',
                },
                image: {
                    state: 0,
                    text: 'Please select an image',
                },
                DescMax: {
                    state: 0,
                    text: 'Reached the maximum',
                },
                title: {
                    state: 0,
                    text: 'Please add a title',
                },
            }
        },
        methods: {
            previewFiles: function(event) {
                const file = event.target.files[0];
                this.image = URL.createObjectURL(file);
                this.imageDetails = file.name;
            },
            submit: function() {
                if(this.image == '') {
                    this.error.image.state = 1;
                    return 0;
                }
                if(this.title == '') {
                    this.error.title.state = 1;
                    return 0;
                }
                if(!this.validURL(this.link)) {
                    this.error.link.state = 1;
                    return 0;
                }
                document.getElementById('submit-btn').click();
            },
            validURL: function(str) {
            var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
                '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
                '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
                '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
                '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
                '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
            return !!pattern.test(str);
            }

        },
        mounted() {
        }
    });

</script>

@endsection


@section('bottom-style')
<style>

    .error {
        color:rgb(209, 68, 68);
        font-size: 12px;
    }

    .block-box {
        padding: 1rem 2rem !important;
    }

    .submit-internal {
        text-align: end;
    }

    .file-btn {
        color: #111111;
        border-color: #d7d7d7;
        background-color: #ffffff;
        border-radius: 4px;
        height: 50px;
        border: 1px solid #d7d7d7;
        display: flex;
        align-items: center;
        overflow: hidden;
        justify-content: space-between;
    }

    .file-btn label {
        margin: 0;
        padding: 0 20px;
        color: rgb(134, 134, 134);
        background-color: #d7d7d7;
        height: 100%;
        text-align: center;
        /* vertical-align: middle; */
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .preview img {
        max-width: 100%;
        height: auto;
        height: 40px;
        border-radius: 4px;
        padding-right: 5px;
    }

    @media (max-width: 666px) {
        .preview .details {
            display: none;
        }
    }


</style>


@endsection

