@extends('adminlte::page')
@section('content')

<section class="content-header">
    <h1>
      {{ $title }}
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">{{ $title }} </li>
    </ol>
</section>
<br>

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary box-solid">
                <div class="box-header box-header-background with-border">
                    <h3 class="box-title">User List</h3>
                </div>

                <!-- /.box-header --> 
                <div class="box-body table-responsive">
                    <table id="example" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($all_user) > 0)

                                @foreach($all_user as $user)

                                    <tr>
                                        <td>{{ $user->id }} </td>
                                        <td>{{ $user->name }} </td>
                                        <td>{{ $user->email }} </td>
                                    </tr>

                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

@endsection

@section('js')
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection