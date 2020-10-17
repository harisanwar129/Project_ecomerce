@extends('admin.layout.master')
@section('header')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('static/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
        @section('body')
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Np</th>
                  <th>Category</th>
                  <th>Sub Category</th>
                  <th>Slug</th>
                </tr>
                </thead>
                <tbody>
                @php
                    $no=1;
                @endphp
                @foreach($categorys as $category)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $category->name}}</td>
                  <td>
                  <ul>
                  @foreach($category->children as $subcategory)
                  <li>{{ $subcategory->name }}</li> 
                  @endforeach   
                  </ul>
                  </td>
                  <td>
                  <ul>
                  @foreach($category->children as $subcategory)
                  <li>{{ $subcategory->slug }}</li>
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