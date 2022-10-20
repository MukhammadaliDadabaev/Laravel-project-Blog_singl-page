@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="text-center m-3"><b>Ma'lumotlarni ko'rish</b></h1>
            <div class="row mb-2">
                <div class="col-sm-8">
                    <h5 class="m-0"><span>Ma'lumot nomi 👉 </span><b>{{ $tag->title }}</b></h5>
                    <form class="mt-2" action="{{ route('admin.tag.delete', $tag->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span><b>Edit:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        <a class="text-success" href="{{ route('admin.tag.edit', $tag->id) }}"><i class="fas fa-pencil-alt"></i></a><br>
                        <span><b>Delete:</b>&nbsp; </span>
                        <button type="submit" class="border-0 bg-transparent">
                           <i class="fas fa-trash-alt text-danger"></i>
                        </button>
                    </form>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/tags') }}">Home</a></li>
                        <li class="breadcrumb-item active">Tahrirlash paneli</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class=" text-center"><b>Ma'lumotlarni ko'rish</b></h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <th>Id raqami</th>
                                        <td>{{ $tag->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sarlavha nomi</th>
                                        <td>{{ $tag->title }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
