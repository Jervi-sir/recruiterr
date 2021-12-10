@extends('admin.masterTable')

@section('table')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Student table</h4>
      <p class="card-description">

      </p>
      <div class="table-responsive">
        <table id="order-listing"  class="table table-hover">
          <thead>
            <tr>
              <th>User</th>
              <th>email</th>
              <th>mobile</th>
              <th>speciality</th>
            </tr>
          </thead>
          <tbody>
            <tr  v-for="(result, index) in results">
                <td>@{{ result.name }}</td>
                <td>@{{ result.email }}</td>
                <td >@{{ result.mobile }}</td>
                <td><label class="badge badge-success">@{{ result.speciality }}</label></td>
            </tr>
          </tbody>
        </table>
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
        },

        created() {
            var students = {!! json_encode($students) !!};
            this.results = students;
        }

    })
</script>
@endsection
