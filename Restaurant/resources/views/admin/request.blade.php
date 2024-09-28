@extends('admin/layout2')
@section('title', 'Main page')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Reservation request</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/Admin')}}">Home</a></li>
          <li class="breadcrumb-item">Report</li>
          <li class="breadcrumb-item active">Reservation request</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Reservation request</h5>
              <p>show the Request of resevation </p>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    {{-- <th scope="col">EMP_ID</th> --}}
                    <th scope="col">Email</th>
                    <th scope="col">phone number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">No of person</th>
                    <th scope="col">message</th>
                    {{-- <th scope="col">contact num</th> --}}
                    {{-- <th scope="col">join Date</th> --}}
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
                        <td>{{ $item->NAME }}</td>
                        <td>{{ $item->NUMBER}}</td>
                        <td>{{ $item->DATEOF }}</td>
                        <td>{{ $item->TIME }}</td>
                        <td>{{ $item->PERSON }}</td>
                        <td>{{ $item->MESSAGE }}</td>
                        
                    </tr>
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