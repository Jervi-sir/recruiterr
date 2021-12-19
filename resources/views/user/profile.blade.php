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
            <div class="block-box p-5">
                <h3 class="item-title">Complete your profile</h3>
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="row gutters-20">
                        <div class="col-lg-6 form-group">
                            <label for="">First Name</label>
                            <input v-model='user.familyName' type="text" class="form-control" name="first_name" placeholder="Enter your First Name">
                        </div>
                        <div class="col-lg-6 form-group">
                            <label for="">Last Name</label>
                            <input v-model='user.firstName' type="text" class="form-control" name="last_name" placeholder="Enter your Last Name">
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Email</label>
                            <input v-model='user.email' type="email" class="form-control" name="email" placeholder="E-mail">
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Birthdate</label>
                            <input v-model='user.birthdate' type="date" class="form-control" name="birth-date" placeholder="E-mail">
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Phone number</label>
                            <input v-model='user.phone' type="text" class="form-control" name="phone_number" placeholder="Phone">
                        </div>

                        <div class="col-lg-6 form-group">
                            <label for="">Student Code</label>
                            <input v-model='user.code' type="text" class="form-control" name="student_code" placeholder="Code">
                        </div>

                        <div class="col-lg-12 form-group">
                            <label for="">Grade</label>
                            <select v-model='user.grade' name="grade" @change='selectGrade' class="custom-select select" id="inputGroupSelect01">
                                <option hidden selected>Select your grade</option>
                                <option v-for="(speciality, index) in specialities" :value='speciality.id'>
                                    @{{ speciality.name }}
                                </option>
                            </select>
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

                        <div class="col-lg-12 form-group">
                            <label for="">my Skills</label>
                            <tags-input name="skills" element-id="tags"
                                v-model="selectedTags"
                                placeholder="Add a skill"
                                :typeahead="true"
                                :typeahead-hide-discard="true"
                                :only-existing-tags="true"
                                :existing-tags="existingTags"
                                id-field="id"
                                text-field="name">
                            </tags-input>
                        </div>

                        <div class="line-separator"></div>

                        <div class="col-lg-4 form-group">
                            <label for="">What formation you need</label>
                            <select name="formations" class="form-select custom-select" size="3" aria-label="size 3 select example">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-lg-12 form-group radioBox">
                            <label for="">Do u need help from Entp</label>
                            <div class="box-choise">
                                <div class="choise">
                                    <input id="help-yes" name="entp-help" value="yes" type="radio" class="form-control" aria-label="yes">
                                    <label for="help-yes">Yes</label>
                                </div>
                                <div class="choise">
                                    <input id="help-no" name="entp-help" value="no" type="radio" class="form-control" aria-label="no">
                                    <label for="help-no">No</label>
                                </div>
                                <div class="choise">
                                    <input id="help-probably" name="entp-help" value="probably" type="radio" class="form-control" aria-label="probably">
                                    <label for="help-probably">Probably</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 form-group">
                            <label for="">Bio about me</label>
                            <textarea v-model='user.bio' name="bio" id="message" cols="30" rows="3" class="textarea form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 form-group">
                            <input type="submit" class="submit-btn" value="Send Us Message">
                        </div>
                    </div>
                    <div class="form-response"></div>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="block-box p-5 user-preview">
                <div class="user-image">
                    <img src="media/figure/chat_1.jpg" alt="">
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
        },
        methods: {
            selectGrade: function() {
                this.selectedSpeciality = this.specialities.find(item => item.id === this.user.grade).name;
            }
        },
        mounted() {
            this.existingTags = JSON.parse({!! json_encode($skills) !!});
            this.specialities = JSON.parse({!! json_encode($specialities) !!});
        }
    });

</script>

@endsection


@section('bottom-style')
<style>
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

    @media (max-width: 991px) {
        .radioBox {
            flex-direction: column;
            align-items: unset;
        }
        .custom-range {
            flex-direction: column;
            align-items: unset;
        }
    }

</style>


@endsection

