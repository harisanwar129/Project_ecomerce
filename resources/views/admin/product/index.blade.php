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
        @section('body')
        <div class="row">
         
          <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Product</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Photo</th>
                  <th>Product</th>
                  <th>Stok</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                $no=1;
                @endphp
               @foreach($product as $item)
                        <td>{{$no++}}</td>
                        <td><img src="{{url($item->photo)}}" alt="" width="50px"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->stock}}</td>
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
           
        @endsection
     
@show