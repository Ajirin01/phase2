@extends('layouts.admin_base2')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Sales</h3>
                <a style="float: right" href="{{route('sales.create')}}"><h3 class="card-title">Add Product</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sale Code</th>
                    {{-- <th>Wholesale Stock</th> --}}
                    <th>Total Amount</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($sales as $sale)
                    <tr>
                        <td>{{$sale->sale_number}}</td>
                        <td>{{$sale->total}}</td>
                        <td>{{$sale->payment_method}}</td>
                        <td>{{$sale->status}}</td>
                        <td>
                            <form action="{{ route('sales.destroy', $sale->id) }}" method="POST" id="delete-form">
                              @method('DELETE')
                              @csrf
                            </form>
                            <a class="btn" href="{{ route('sales.destroy', $sale->id) }}"
                              onclick="event.preventDefault(); document.getElementById('delete-form').submit()"
                              >
                                <i class="fas fa-edit text-danger"></i> delete
                            </a>
                            <a class="btn" href="{{ route('sales.show', $sale->id) }}">
                                <i class="fas fa-eye text-primary"></i> View
                            </a>
                            {{-- <a class="btn">
                                <i class="fas fa-pause"></i> Pause
                            </a> --}}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Product Nanme</th>
                    <th>Wholesale Stock</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <script>
      
    </script>
@endsection