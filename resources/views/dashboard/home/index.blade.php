@extends('dashboard.constants.layout')
@section('content')

<!-- <br>
 <h2>Dashboard</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,003</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,004</td>
              <td>text</td>
              <td>random</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,005</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>placeholder</td>
            </tr>
            <tr>
              <td>1,006</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,007</td>
              <td>placeholder</td>
              <td>tabular</td>
              <td>information</td>
              <td>irrelevant</td>
            </tr>
            <tr>
              <td>1,008</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,009</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
            <tr>
              <td>1,010</td>
              <td>data</td>
              <td>rich</td>
              <td>dashboard</td>
              <td>tabular</td>
            </tr>
            <tr>
              <td>1,011</td>
              <td>information</td>
              <td>placeholder</td>
              <td>illustrative</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,012</td>
              <td>text</td>
              <td>placeholder</td>
              <td>layout</td>
              <td>dashboard</td>
            </tr>
            <tr>
              <td>1,013</td>
              <td>dashboard</td>
              <td>irrelevant</td>
              <td>text</td>
              <td>visual</td>
            </tr>
            <tr>
              <td>1,014</td>
              <td>dashboard</td>
              <td>illustrative</td>
              <td>rich</td>
              <td>data</td>
            </tr>
            <tr>
              <td>1,015</td>
              <td>random</td>
              <td>tabular</td>
              <td>information</td>
              <td>text</td>
            </tr>
          </tbody>
        </table>
      </div>
 -->

<br>
<br>

 <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 fw-bold fs-3">Dashboard</div>
    </div>
    <div class="row mt-2">
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-info h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-success h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-warning h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card text-white bg-danger h-100">
          <div class="card-header fw-bold"><h5 class="text-dark">Header</h5></div>
          <div class="card-body">
            <h5 class="text-dark">Primary card title</h5>
            <p class="text-dark">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12 fw-bold fs-3">Coaches Statistics</div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12">
        <div class="card-table">
          <div class="card-header">
          Coaches Datatables
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table data-table" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 4; $i++)
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    @endfor

                </tbody>
            
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>


    <div class="row">
      <div class="col-md-12 fw-bold fs-3">Customers Statistics</div>
    </div>
    <div class="row mt-2">
      <div class="col-md-12">
        <div class="card-table">
          <div class="card-header">
          Customers Datatables
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="example" class="table data-table" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- for loop 10 times -->
                    @for ($i = 0; $i < 7; $i++)
                    <tr>
                        <td>{{$i+1}}</td>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    @endfor
                </tbody>
            
            </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
