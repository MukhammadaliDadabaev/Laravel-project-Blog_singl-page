@extends('admin.layouts.main')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post qo'shish </h1><span>👇</span>
                </div><!-- /.colДобавление категории -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/posts') }}">Home</a></li>
                        <li class="breadcrumb-item active">Boshqaruv paneli</li>
                    </ol>
                </div><!-- /.colDashboard -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
               <div class="col-12">
                   <form action="{{ route('admin.post.store') }}" method="POST">
                       @csrf
                       <div class="form-group" class="w-25">
                           <input type="text" class="form-control w-25" name="title" placeholder="Post nomi" value="{{ old('title') }}">
                           @error('title')
                                <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>
                       <div class="form-group w-75">
                           <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                           @error('content')
                           <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-primary" value="Qo'shish">
                       </div>
                   </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
