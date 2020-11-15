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
          <div class="col-md-8">
          <div class="box box-primary offset-2">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('category.update',$category->id)}} " method="POST">
            {{ csrf_field() }}
            {{method_field('PUT')}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Category" name="name" value="{{$category->name}}"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Slug</label>
                  <input type="text" class="form-control" placeholder="Enter Slug" name="slug" value="{{$category->slug}}"> 
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Icon</label>
                  <input type="text" class="form-control" placeholder="Enter icon" name="icon" value="{{$category->icon}}"> 
                </div>
                <div class="form-group">
                @if($category->parent_id==null)
                <input type="hidden" name="parent_id" value="">
                @else

                  <label for="exampleInputFile">Parent_Category</label>
                  <select  id="" class="form-control" name="parent_id">
                  @foreach($categorys as $cas)
                    <option value="{{$cas->id}}">
                    @if($cas->id == $category->parent_id)
         
                @endif
                {{$cas->name}} </option>
                  @endforeach
                  
                  </select>
                  @endif
                  </div>
              </div>
                  
               
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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