@extends('admin.layout.master')
@section('header')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('static/plugins/datatables/dataTables.bootstrap.css') }}">
<style type="text/css">
.table_list{
  list-style:none;
  padding:3px;
  margin-left:-30px;
}
</style>
@endsection
        @section('body')
        <div class="row">
          <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('admin.category')}}  ">
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
                  <label for="exampleInputFile">Parent_Category</label>
                  <select name="parent_id"  class="form-control">
                  <option value="">Select</option>
                      @foreach($categorys as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                  
                      </select>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          </div>
          <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kategori</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Category</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp
                @foreach($categorys as $category)
                <tr>
                  <td width="40px">{{ $no++ }}</td>
                  <td>{{ $category->name}}</td>
                 <ul>
                  @foreach($category->children as $subcategory)
               <li class="table_list">- {{ $subcategory->name }}</li>
                @endforeach 
                </ul>
                </td>
                </tr>
                @endforeach 
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div> 
          </div>
        </div> 
          <!-- /.box -->
        @endsection
        @section('footer')
           <!-- DataTables -->
           <script src="{{ asset('static/plugins/datatables/jquery.dataTables.min.js') }}"></script>
            <script src="{{ asset('static/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
            <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
        @endsection
@show