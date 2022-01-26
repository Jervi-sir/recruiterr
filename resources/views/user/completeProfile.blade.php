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
    <div class="newsfeed-banner">
        <img src="media/banner/logo-words.png" alt="">
    </div>

    <div class="newsfeed-search">
        @include('user.stepsLeft')
    </div>
    <div class="row" id="formProfile" >
        <div class="col-lg-8">
            <div class="block-box">
                <h3 class="item-title">Complete my profile</h3>
                <form action="{{ route('profile.completeUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row gutters-20">
                        <div class="col-lg-12 form-group">
                            <label for="select-image">Image</label>

                            <div class="file-btn">
                                <label for="select-image">Change Image</label>
                                <input id="select-image" type="file" class="form-control" accept="image/*" name="image" @change="previewFiles" required hidden>
                                <div class="preview">
                                    <span class="details">@{{ imageDetails }}</span>
                                    <img class="preview" :src="image" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">
                                <span>First Name</span>
                                <div class="annotation" title="first name"> ? </div></label>
                            <input v-model='user.familyName' type="text" class="form-control" name="first_name" placeholder="Enter your First Name" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="">
                                <span>Last Name</span>
                                <div class="annotation" title="first name"> ? </div></label>
                            </label>
                            <input v-model='user.firstName' type="text" class="form-control" name="last_name" placeholder="Enter your Last Name" required>
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">
                                <span>Email</span>
                                <div class="annotation" title="first name"> ? </div></label>
                            </label>
                            <input v-model='user.email' type="email" class="form-control" placeholder="E-mail" disabled>
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Phone number</label>
                            <input v-model='user.phone' type="text" class="form-control" name="phone_number" placeholder="Phone" required>
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Birthdate</label>
                            <input v-model='user.birthdate' type="date" class="form-control" name="birth_date" placeholder="E-mail" required>
                        </div>

                        <div class="col-lg-6 form-group">
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Grade</label>
                            <input v-model='user.grade' type="text" class="form-control" name="student_code" placeholder="Code" >
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Student Code</label>
                            <input v-model='user.code' type="text" class="form-control" name="student_code" placeholder="Code">
                        </div>

                        <div class="line-separator"></div>

                        <div class="col-lg-12 form-group custom-range">
                            <label for="customRange2" class="form-label">Arabic</label>
                            <div class="level-input">
                                <div class="levels">
                                    <span>Normal</span>
                                    <span>intermediere</span>
                                    <span>expert</span>
                                </div>
                                <input v-model='user.language.arabic' name="level_arabic" type="range" class="form-range"  min="0" max="2" id="customRange2">
                            </div>
                        </div>

                        <div class="col-lg-12 form-group custom-range">
                            <label for="customRange2" class="form-label">English</label>
                            <div class="level-input">
                                <div class="levels">
                                    <span>Normal</span>
                                    <span>intermediere</span>
                                    <span>expert</span>
                                </div>
                                <input v-model='user.language.english' name="level_english" type="range" class="form-range" value="0"  min="0" max="2" id="customRange2">
                            </div>
                        </div>

                        <div class="col-lg-12 form-group custom-range">
                            <label for="customRange2" class="form-label">French</label>
                            <div class="level-input">
                                <div class="levels">
                                    <span>Normal</span>
                                    <span>intermediere</span>
                                    <span>expert</span>
                                </div>
                                <input v-model='user.language.french' name="level_french" type="range" class="form-range" value="0" min="0" max="2" id="customRange2">
                            </div>
                        </div>
                        <!-- :only-existing-tags="true" -->
                        <div class="col-lg-12 form-group">
                            <label for="">my Skills</label>
                            <tags-input name="skills" element-id="tags"
                                v-model="selectedTags"
                                placeholder="Add a skill"
                                :typeahead="true"
                                :typeahead-hide-discard="true"

                                :existing-tags="existingTags"
                                id-field="id"
                                text-field="name">
                            </tags-input>
                        </div>

                        <div class="line-separator"></div>
                        <!--
                        <div class="col-lg-4 form-group">
                            <label for="">What formation you need</label>
                            <select name="formations" class="form-select custom-select" size="3" aria-label="size 3 select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        -->
                        <div class="col-lg-12 form-group radioBox">
                            <label for="">Do u need help from Entp</label>
                            <div class="box-choise">
                                <div class="choise">
                                    <input id="help-yes" name="entp_help" value="yes" type="radio" class="form-control" aria-label="yes">
                                    <label for="help-yes">Yes</label>
                                </div>
                                <div class="choise">
                                    <input id="help-no" name="entp_help" value="no" type="radio" class="form-control" aria-label="no">
                                    <label for="help-no">No</label>
                                </div>
                                <div class="choise">
                                    <input id="help-probably" name="entp_help" value="probably" type="radio" class="form-control" aria-label="probably">
                                    <label for="help-probably">Probably</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Bio</label>
                            <textarea v-model='user.bio' name="bio" id="message" cols="30" rows="3" class="textarea form-control" placeholder="About Me and My Goals"></textarea>
                        </div>
                        <div class="col-12 form-group submit-internal">
                            <input id="submit-btn" type="submit" class="submit-btn" value="Update My Profile">
                        </div>
                    </div>
                    <div class="form-response"></div>
                </form>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block-box user-preview">
                <h3 class="item-title">preview</h3>
                <div class="user-image">
                    <img :src="image" alt="">
                </div>
                <h6>Details</h6>
                <div class="user-names">
                    @{{ user.familyName }}<br> @{{ user.firstName }}
                </div>
                <div class="user-code">
                    @{{ user.code }}
                </div>
                <div class="user-birthdate">
                    @{{ user.birthdate }}
                </div>
                <div class="user-email">
                    @{{ user.email }}
                </div>
                <div class="user-phone">
                    @{{ user.phone }}
                </div>
                <div class="user-grade">
                    @{{ selectedSpeciality }}
                </div>

                <h6>Language</h6>
                <div class="user-languages">
                    <div class="lang-container">
                        <div class="lang-choice">
                            Arabic
                        </div>
                        <div class="lang-level">
                            <span class="normal" v-show="user.language.arabic == 0">Normal</span>
                            <span class="medium" v-show="user.language.arabic == 1">Medium</span>
                            <span class="expert" v-show="user.language.arabic == 2">Expert</span>
                        </div>
                    </div>
                    <div class="lang-container">
                        <div class="lang-choice">
                            English
                        </div>
                        <div class="lang-level">
                            <span class="normal" v-show="user.language.english == 0">Normal</span>
                            <span class="medium" v-show="user.language.english == 1">Medium</span>
                            <span class="expert" v-show="user.language.english == 2">Expert</span>
                        </div>
                    </div>
                    <div class="lang-container">
                        <div class="lang-choice">
                            French
                        </div>
                        <div class="lang-level">
                            <span class="normal" v-show="user.language.french == 0">Normal</span>
                            <span class="medium" v-show="user.language.french == 1">Medium</span>
                            <span class="expert" v-show="user.language.french == 2">Expert</span>
                        </div>
                    </div>
                </div>

                <div class="user-bio">
                    @{{ user.bio }}
                </div>

                <h6>Skills</h6>
                <div class="user-skills">
                    <span v-for="(item, index) in selectedTags" class="tags-input-badge tags-input-badge-pill tags-input-badge-selected-default">
                        @{{item.name}}
                    </span>
                </div>
                <div class="user-need-formation"></div>
            </div>
        </div>

        <div class="col-lg-4 form-group submit-external">
            <input type="submit" class="submit-btn" value="Update My Profile" @click="submit">
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
            specialities: [],
            selectedTags: [],
            existingTags: [],
            selectedSpeciality: '',
            profile: '',
            user: {
                familyName: '',
                firstName: '',
                email: '',
                birthdate: '',
                phone: '',
                code: '',
                grade: '',
                language: {
                    arabic: 1,
                    english: 0,
                    french: 0,
                },
                bio: '',
            },
            image: 'media/figure/chat_1.jpg',
            imageDetails: '',
        },
        methods: {
            selectGrade: function() {
                this.selectedSpeciality = this.specialities.find(item => item.id === this.user.grade).name;
            },
            submit:function() {
                document.getElementById('submit-btn').click();
            },
            previewFiles: function(event) {
                const file = event.target.files[0];
                this.image = URL.createObjectURL(file);
                this.imageDetails = file.name;
            },
        },
        mounted() {
            this.existingTags = JSON.parse({!! json_encode($skills) !!});
            this.specialities = JSON.parse({!! json_encode($specialities) !!});
            this.profile = JSON.parse({!! json_encode($profile) !!});
            this.user.grade = this.profile.grade;
            this.user.email = this.profile.email;
            this.user.code = this.profile.code;
            this.user.phone = this.profile.phone;
        }
    });

</script>

@endsection


@section('bottom-style')
<style>
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

    label {
        display: flex;
        gap: 2rem;
    }
    label .annotation {
        cursor: pointer;
    }
    .block-box {
        padding: 1rem 2rem !important;
    }
    .lang-level span {
        font-weight: 700;
    }
    .normal {
        color:slategrey;
    }
    .medium {
        color:lightseagreen
    }
    .expert {
        color:slateblue
    }
    .user-preview h6 {
        margin: 0;
    }
    .lang-container {
        display: flex;
        gap: 1rem;
    }
    .user-preview {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        position: sticky;
        top: 10rem;
    }
    .user-image {
        width: 80px;
        border-radius: 100%;
        overflow: hidden;
        margin: auto;
    }
    .user-image img {
        width: 100%
    }
    label {
        font-weight: 700;
    }
    .custom-range {
        display: flex;
        align-items: center;
    }

    .custom-range label {
        width: 20%;
        margin: 0;
    }
    .form-range {
        height: unset !important;
        width: 100%;
    }
    .custom-range {
        height: unset !important;
    }
    .level-input {
        width: 80%;
    }
    .level-input .levels {
        display: flex;
        justify-content: space-between;

    }
    .line-separator {
        display: block;
        height: 2px;
        width: 100%;
        border-top: 2px solid rgba(0, 0, 0, 0.4);
        margin: 1rem 0;
    }
    .tags-input-root .tags-input input {
        height: unset !important;
        padding-left: 20px !important;
    }
    .select {
        height: 50px !important;
        padding-left: 20px !important;
    }
    .tags-input-wrapper-default {
        padding: 0.5em 0;
    }
    .radioBox {
        display: flex;
        align-items: center;
        gap: 10%;
    }
    .radioBox label {
        margin: 0;
    }
    .radioBox input {
        height: unset !important;
        width: auto;
    }

    .box-choise {
        display: flex;
        gap: 3rem;
    }
    .box-choise .choise {
        display: flex;
        width: auto;
        align-items: center;
        gap: 1rem;
    }
    .box-choise .choise label {
        margin: 0;
    }

    .submit-external {
        display: none;
    }

    .submit-internal {
        text-align: end;
    }

    @media (max-width: 991px) {
        .radioBox {
            flex-direction: column;
            align-items: unset;
        }
        .custom-range {
            flex-direction: column;
            align-items: unset;
        }
        .submit-internal {
            display: none;
        }
        .submit-external {
            display: unset;
            text-align: center;
        }
        .form-group .submit-btn {
            width: 100%;
        }
    }

</style>


@endsection

