@extends('adminNoVue.masterTable')

@section('table')
<div class="card">
    <div class="card-body">
      <h4 class="card-title">Student table</h4>
      <p class="card-description">

      </p>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>User</th>
              <th>email</th>
              <th>mobile</th>
              <th>speciality</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td >{{ $student->mobile }}</td>
                <td><label class="badge badge-success">{{ $student->speciality }}</label></td>
            </tr>
            @endforeach

          </tbody>

        </table>
        {{ $students->links() }}

      </div>
    </div>
  </div>
@endsection
