@extends('admin.masterTable')

@section('table')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Add skill</h4>
      <p class="card-description">

      </p>
      <div class="table-responsive">
        <form class="forms-sample" action="{{ route('skill.add') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputUsername1">Skill name</label>
              <input name="name" type="text" class="form-control" id="exampleInputUsername1" placeholder="name" v-model="name" @keypress="nameEng">
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">description</label>
                <textarea name="description" class="form-control" id="exampleTextarea1" rows="8" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary me-2">add</button>
          </form>
      </div>
    </div>
  </div>
@endsection

@section('vuejs')
<script>
    // this requires the compiler
    var app = new Vue({
        el: '#app',
        data: {
            results: [],
            name: '',
            name_eng:'',
            disable_eng: false,
        },
        methods: {
            nameEng: function () {
                if(!this.disable_eng) {
                    this.name_eng = this.name;
                }
            },
            disableEng: function() {
                this.disable_eng = true;
            }
        },

        created() {

        }

    })
</script>
@endsection
