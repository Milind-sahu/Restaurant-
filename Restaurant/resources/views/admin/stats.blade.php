@extends('admin/layout2')
@section('title', 'Main page')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Statistics Report</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/Admin')}}">Home</a></li>
          <li class="breadcrumb-item">Report</li>
          <li class="breadcrumb-item active">stats request</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
    <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Update today's Stats</h5>
  
                <!-- General Form Elements -->
                <form action="{{ url('/storestats') }}" method="POST">
                  @csrf
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-10">
                      <input type="text" name="DATE" class="form-control">
                    </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputText" class="col-sm-2 col-form-label">Sales</label>
                      <div class="col-sm-10">
                        <input type="number" name="SALES" class="form-control">
                      </div>
                    </div>
  
                    <div class="row mb-3">
                      <label for="inputNumber" class="col-sm-2 col-form-label">revenue</label>
                      <div class="col-sm-10">
                        <input type="number" name="REVENUE" class="form-control">
                      </div>
                    </div>
  
  
                    <div class="row mb-3">
                      <label for="inputNumber" class="col-sm-2 col-form-label">customer</label>
                      <div class="col-sm-10">
                        <input type="number" name="CUSTOMERS" class="form-control">
                      </div>
                    </div>
  
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                  </div>
  
                </form><!-- End General Form Elements -->
  
              </div>
            </div>
  
          </div>
        </div>
      </section>



      

    <section class="section">
      <div class="row">


        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Stats Report</h5>
              <p>show the Request of resevation </p>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    {{-- <th scope="col">EMP_ID</th> --}}
                    <th scope="col">Date</th>
                    <th scope="col">Sales</th>
                    <th scope="col">revenue</th>
                    <th scope="col">customer</th>
                    {{-- <th scope="col">No of person</th> --}}
                    {{-- <th scope="col">message</th> --}}
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
                        <td>{{ $item->DATE }}</td>
                        <td>{{ $item->SALES}}</td>
                        <td>{{ $item->REVENUE }}</td>
                        <td>{{ $item->CUSTOMERS }}</td>
                        {{-- <td>{{ $item->PERSON }}</td> --}}
                        {{-- <td>{{ $item->MESSAGE }}</td> --}}
                        
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