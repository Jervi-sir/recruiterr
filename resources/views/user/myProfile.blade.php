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
        <div class="col-lg-12">
            <div class="block-box block-title">
                <h3>My Profile</h3>
                <a href="{{ route('profile.editMine') }}">Edit</a>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block-box">
                <div class="image">
                    <img src="media/figure/chat_1.jpg" alt="">
                </div>
                <div class="row-card">
                    <label>Username</label>
                    <span>@{{ user.username }}</span>
                </div>
                <div class="row-card">
                    <label>Email</label>
                    <span>@{{ user.email }}</span>
                </div>
                <div class="row-card">
                    <label>Phone number</label>
                    <span>@{{ user.phone }}</span>
                </div>
                <div class="row-card">
                    <label>Joined at</label>
                    <span>@{{ user.joined_at }}</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block-box">
                <div class="row-card">
                    <label>FamilyName</label>
                    <span>@{{ user.familyName }}</span>
                </div>
                <div class="row-card">
                    <label>FirstName</label>
                    <span>@{{ user.firstName }}</span>
                </div>
                <div class="row-card">
                    <label>Birthdate</label>
                    <span>@{{ user.birthdate }}</span>
                </div>
                <div class="row-card">
                    <label>Grade</label>
                    <span>@{{ user.grade }}</span>
                </div>
                <div class="row-card">
                    <label>Code</label>
                    <span>@{{ user.code }}</span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block-box">
                <h5>Languages</h5>
                <div class="row-card">
                    <label>Arabic</label>
                    <div class="lang-level">
                        <span class="normal" v-show="user.language.arabic == 0">Normal</span>
                        <span class="medium" v-show="user.language.arabic == 1">Medium</span>
                        <span class="expert" v-show="user.language.arabic == 2">Expert</span>
                    </div>
                </div>
                <div class="row-card">
                    <label>English</label>
                    <div class="lang-level">
                        <span class="normal" v-show="user.language.english == 0">Normal</span>
                        <span class="medium" v-show="user.language.english == 1">Medium</span>
                        <span class="expert" v-show="user.language.english == 2">Expert</span>
                    </div>
                </div>
                <div class="row-card">
                    <label>French</label>
                    <div class="lang-level">
                        <span class="normal" v-show="user.language.french == 0">Normal</span>
                        <span class="medium" v-show="user.language.french == 1">Medium</span>
                        <span class="expert" v-show="user.language.french == 2">Expert</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block-box">
                <h5>Skills</h5>
                <div class="user-skills">
                    <span v-for="(item, index) in selectedTags" class="tags-input-badge tags-input-badge-pill tags-input-badge-selected-default">
                        @{{item.name}}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="block-box">
                <h5>Bio</h5>
                <div class="bio">
                    @{{ user.bio }}
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div class="block-box block-title">
                <h3>Acheivements <i class="icofont-badge"></i> </h3>
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
            user: '',
        },
        methods: {
            selectGrade: function() {
                this.selectedSpeciality = this.specialities.find(item => item.id === this.user.grade).name;
            },
            submit:function() {
                document.getElementById('submit-btn').click();
            }
        },
        mounted() {
            this.user = JSON.parse({!! json_encode($profile) !!});
            this.selectedTags = JSON.parse({!! json_encode($userSkills) !!});

        }
    });

</script>

@endsection


@section('bottom-style')
<style>

    .normal {
        color:slategrey;
    }
    .medium {
        color:lightseagreen
    }
    .expert {
        color:slateblue
    }

    .block-box {
        padding: 1rem 2rem !important;
    }

    .block-title a {
        text-decoration: none;
        color: white;
        height: auto;
        border: none;
        border-radius: 4px;
        font-weight: 700;
        color: #ffffff;
        font-size: 14px;
        padding: 8px 25px;
        background-color: #615dfa;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .block-title a:hover {
        background-color: #5edfff;
    }

    .block-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }


    .row-card {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #00000030;
        padding: 0 5px;
        margin-bottom: 0.5rem
    }

    .row-card:last-of-type {
        border-bottom: none;
    }

    .block-box .image {
        margin-bottom: 1rem;
        text-align: center;
    }

    .block-box .image img {
        width: 70px;
        border-radius: 100%;
    }

    .row-card label {
        margin: 0;
        font-weight: 700;
    }

    @media (max-width: 991px) {

    }

</style>


@endsection

