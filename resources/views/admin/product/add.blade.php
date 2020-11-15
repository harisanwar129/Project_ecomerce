@extends('admin.layout.master')
@section('header')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('static/plugins/datatables/dataTables.bootstrap.css') }}">
<style type="text/css">
.table_list{
  list-style:none;  
  padding:3px;
  margin-left:-40px;
}
</style>

@endsection
        @section('body')
        <div class="row">
         
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('admin/product')}} " method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Category" name="name"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control" placeholder="Enter Slug" name="slug"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Stock</label>
                  <input type="text" class="form-control" placeholder="Enter stock" name="stock"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="number" class="form-control" placeholder="Enter price" name="price"> 
                </div>
               
                <div class="form-group">
                  <label for="exampleInputFile">Parent_Category</label>
                  <select name="category_id"  class="form-control">
                     <option value="">Select</option>
                      @foreach($categorys as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @foreach($category->children as $sub)
                      <option value="{{$sub->id}}"> - {{$sub->name}}</option>
                      @endforeach
                      @endforeach

                  
                      </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Photo</label>
                  <input type="file" class="form-control" placeholder="Enter photo" name="file"> 
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>     
            </div>
          </div>       
    </div>
</div>       


          <!-- /.box -->
        
        @endsection
        @section('footer')
           <!-- DataTables -->
           <script src="{{ asset('static/plugins/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('static/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
           
        @endsection
     
@show