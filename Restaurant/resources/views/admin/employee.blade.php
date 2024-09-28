@extends('admin/layout2')

@section('title', 'Main page')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/Admin')}}">Home</a></li>
          <li class="breadcrumb-item">Report</li>
          <li class="breadcrumb-item active">Employee details</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Employee Detail</h5>
              <p>show the detalis of Employee</p>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">EMP_ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Salary</th>
                    <th scope="col">contact num</th>
                    <th scope="col">join Date</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>28</td>
                    <td>2016-05-25</td>
                  </tr> --}}
                  @foreach($list as $item)
                    <tr>
                        <td>{{ $item->EMP_ID }}</td>
                        <td>{{ $item->NAME }}</td>
                        <td>{{ $item->POSITION }}</td>
                        <td>{{ $item->AGE }}</td>
                        <td>{{ $item->GENDER }}</td>
                        <td>{{ $item->SALARY }}</td>
                        <td>{{ $item->MOBNUM }}</td>
                        <td>{{ $item->JOIN_DATE }}</td>
                    
                @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>


@endsection