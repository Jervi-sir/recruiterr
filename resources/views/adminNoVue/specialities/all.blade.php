@extends('adminNoVue.masterTable')

@section('table')
<div class="card">
    <div class="card-body">
        <h4 class="card-title d-flex align-items-center justify-content-between">
            <span>Speciality table</span>
            <a href="{{ route('speciality.add') }}" class="mt-1">
                <button class="btn btn-block btn-success"> add speciality</button>
            </a>
        </h4>
      <p class="card-description">

      </p>
      <div class="table-responsive">
        <table id="order-listing" class="table table-hover">
          <thead>
            <tr>
                <th hidden>id</th>
                <th>speciality name</th>
                <th>name english</th>
                <th>description</th>
                <th class="table-action"></th>
            </tr>
          </thead>
          <tbody>
            <tr  v-for="(result, index) in results">
                <td hidden>@{{ result.id }}</td>
                <td>@{{ result.name }}</td>
                <td>@{{ result.name_eng }}</td>
                <td >@{{ result.description }}</td>
                <td class="table-action"><button class="badge badge-success" @click="editModal(index)">view</button> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

    <div class="modal" :class="showModal ? 'd-block' : ''">
        <div class="overlay-modal" @click="showModal = false; noSubmit = true;"></div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" action="{{ route('speciality.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" v-model="modal.id">
                        <div class="form-group">
                        <label for="exampleInputUsername1">Speciality name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputUsername1" placeholder="name" v-model="modal.name" @keypress="noSubmit = false;">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Speciality name in english</label>
                        <input name="name_eng" type="text" class="form-control" id="exampleInputEmail1" placeholder="english name" v-model="modal.name_eng" @keypress="noSubmit = false;">
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">description</label>
                            <textarea name="description" class="form-control" id="exampleTextarea1" rows="8" v-model="modal.description" @keypress="noSubmit = false;"></textarea>
                        </div>
                        <div class="row-actions">
                            <button type="submit" class="btn btn-success" :disabled="noSubmit">Submit</button>
                            <button type="button" class="btn btn-light" @click="showModal = false; noSubmit = true;">Cancel</button>
                            <a href="" class="text-danger" @click.prevent="deleteModal(modal.index)">delete</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" :class="showDeleteModal ? 'd-block' : ''">
        <div class="overlay-modal" @click="showDeleteModal = false; noDelete = true;"></div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" action="{{ route('speciality.delete') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" v-model="modal.id">
                        <h4>Are you sure to delete </h4>
                        <div class="form-group">
                            <label for="exampleInputUsername1">please type <mark>@{{modal.name}}</mark> to delete it</label>
                            <input name="name" type="text" class="form-control" id="exampleInputUsername1" placeholder="name" v-model="confirmDelete" @keyup="verifySimilarity">
                        </div>
                        <button type="submit" class="btn btn-danger" :disabled="noDelete">Yes</button>
                        <button type="button" class="btn btn-light" @click="showDeleteModal = false; noDelete = true;">No</button>
                    </form>
                </div>
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
            showModal: false,
            showDeleteModal: false,
            noSubmit: true,
            noDelete: true,
            confirmDelete: '',
            modal: {
                index: '',
                id: '',
                name: 'z',
                name_eng: 'ss',
                description: 'asd',
            },
        },
        methods: {
            editModal: function(index) {
                this.showModal= true;
                this.modal.index = index;
                this.modal.id = this.results[index].id;
                this.modal.name = this.results[index].name;
                this.modal.name_eng = this.results[index].name_eng;
                this.modal.description = this.results[index].description;
            },
            deleteModal: function(index) {
                console.log(index);
                this.showDeleteModal= true;

            },
            verifySimilarity: function() {
                if(this.confirmDelete === this.modal.name){
                    this.noDelete = false;
                } else {
                    this.noDelete = true;
                }
            }
        },
        created() {
            var specialities = {!! json_encode($specialities) !!};
            this.results = specialities;
        }

    })
</script>
@endsection
