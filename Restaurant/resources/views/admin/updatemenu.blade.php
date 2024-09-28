@extends('admin/layout2')
@section('title', 'Main page')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/Admin')}}">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update menu</h5>

              <!-- General Form Elements -->
              <form action="{{ url('/updatemenu') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="NAME" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="number" name="PRICE" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">DESCRIPTION</label>
                    <div class="col-sm-10">
                      <input type="text" name="DESCRIPTION" class="form-control">
                    </div>
                  </div>
      
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">CATEGORY</label>
                  <div class="col-sm-10">
                    <input type="text" name="CATEGORY" class="form-control">
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
                      <th scope="col">Name</th>
                      <th scope="col">Dscription</th>
                      <th scope="col">Price</th>
                      {{-- <th scope="col">customer</th> --}}
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
                          <td>{{ $item->NAME }}</td>
                          <td>{{ $item->DESCRIPTION}}</td>
                          <td>₹{{ $item->PRICE }}</td>
                          {{-- <td>{{ $item->CUSTOMERS }}</td> --}}
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