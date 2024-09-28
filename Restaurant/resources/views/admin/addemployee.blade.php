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
              <h5 class="card-title">Add new Employees</h5>

              <!-- General Form Elements -->
              <form action="{{ url('/addemp') }}" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="NAME" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-10">
                      <input type="text" name="POSITION" class="form-control">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Age</label>
                    <div class="col-sm-10">
                      <input type="number" name="AGE" class="form-control">
                    </div>
                  </div>


                  

                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="GENDER" id="gridRadios1" value="M"
                          checked>
                        <label class="form-check-label" for="gridRadios1">
                          Male
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="GENDER" id="gridRadios2" value="F">
                        <label class="form-check-label" for="gridRadios2">
                          Female
                        </label>
                      </div>
                    </div>
                  </fieldset>

                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Salary</label>
                  <div class="col-sm-10">
                    <input type="number" name="SALARY" class="form-control">
                  </div>
                 </div>

                 <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Mobile number</label>
                    <div class="col-sm-10">
                      <input type="number" name="MOBNUM" class="form-control">
                    </div>
                   </div>



                <div class="row mb-3">
                  <label for="inputDate"  class="col-sm-2 col-form-label">Joining Date</label>
                  <div class="col-sm-10">
                    <input type="date" name="JOINDT" class="form-control">
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

  </main>

@endsection