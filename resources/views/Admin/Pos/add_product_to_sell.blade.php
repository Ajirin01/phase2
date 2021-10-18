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
                <h3 class="card-title">All Products</h3>
                <a style="float: right" href="" onclick="event.preventDefault()"><h3 class="card-title">SALE# {{$sale_number}}</h3></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('add_product_to_sell') }}" method="post">
                    @csrf
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th width="100px">Quantity</th>
                            <th>Price</th>
                            <th>Add</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($products as $product)
                            <tr>
                                
                                    
                                    <td>{{$product->id}} <input id="product-id{{$product->id}}" type="hidden"  value="{{$product->id}}"></td>
                                    <td>{{$product->name}} <input id="product-name{{$product->id}}" type="hidden"  value="{{$product->name}}"></td>
                                    <td width="100px"><input id="product-quantity{{$product->id}}" class="form-control" type="number"  id="" value="1"></td>
                                    <td>{{$product->price}} <input id="product-price{{$product->id}}" type="hidden"  value="{{$product->price}}"></td>
                                    <td>
                                        <input type="checkbox" class="form-control" name="add[]" id="add{{$product->id}}" onclick="return checkall('selector[]',{{$product->id}});">
                                    </td>
                            
                            </tr>
                            @endforeach
                    <input id="continue-btn" class="btn btn-primary form-control" type="submit" value="Continue">

                        
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Add</th>
                        </tr>
                        </tfoot>
                    
                    </table>
                </form>
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
      var continue_btn= document.getElementById('continue-btn')
      continue_btn.style.display = 'none'
    function checkall(selector,id) {
        console.log("add"+id)
        var check_item = document.getElementById('add'+id)
        var product_id = document.getElementById('product-id'+id)
        var product_price = document.getElementById('product-price'+id)
        var product_name = document.getElementById('product-name'+id)
        var product_quantity = document.getElementById('product-quantity'+id)
        
        console.log(check_item.checked == true)
        if (check_item.checked == true) {
            product_id.name = "product_id[]"
            product_price.name = "product_price[]"
            product_name.name = "product_name[]"
            product_quantity.name = "product_quantity[]"
            continue_btn.style.display = 'block'
        } else {
            product_id.name = ""
            product_price.name = ""
            product_name.name = ""
            product_quantity.name = ""
            continue_btn.style.display = 'none'
        }

    }
    </script>
@endsection