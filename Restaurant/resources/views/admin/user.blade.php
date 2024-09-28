@extends('admin/layout2')
@section('title', 'Main page')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>User details</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/Admin')}}">Home</a></li>
          <li class="breadcrumb-item">Report</li>
          <li class="breadcrumb-item active">user</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User Details</h5>
              <p>show the detalis of user</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>
                      <b>N</b>ame
                    </th>
                    {{-- <th>Ext.</th> --}}
                    <th>Email</th>
                    {{-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> --}}
                    <th>Number</th>
                    <th>password</th>
                  </tr>
                </thead>
                <tbody>
                  {{-- <tr>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>37%</td>
                  </tr> --}}
                  @foreach($list as $item)
                    <tr>
                        <td>{{ $item->USER_ID }}</td>
                        <td>{{ $item->NAME }}</td>
                        <td>{{ $item->EMAIL }}</td>
                        <td>{{ $item->NUMBER }}</td>
                        <td>{{ $item->PASSWORD }}</td>
                    {{-- <li>{{ $item }}</li> --}}
                @endforeach

                  
                  {{-- @foreach($book_list as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->acc_no }}</td>
                        <td>{{ $item->year_published }}</td>
                    </tr>
                @endforeach --}}
                  
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              {{-- <ul>
                @foreach($list as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul> --}}
            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

@endsection