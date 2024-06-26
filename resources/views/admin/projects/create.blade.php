@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
    <section>
        <div class="container my-4">
            <a href="{{ route('admin.projects.index') }}" class="mb-3 btn btn-primary"><i
                    class="fa-solid fa-list-check me-2"></i>See all Projects</a>
            <h1 class="mb-3">Create Project</h1>
            <form action="{{ route('admin.projects.store') }}" class="row g-3" method="POST">
                @csrf
                <div class="col-12">
                    <label class="form-label" for="img">Image</label>
                    <input class="form-control" type="img" id="img" name="">
                </div>
                <div class="col-12">
                    <label class="form-label" for="title">Project Name</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <div class="col-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" type="text" id="description" name="description"> </textarea>
                </div>

                <div class="col-12">
                    <label class="form-label" for="git-link">Git Link</label>
                    <input class="form-control" type="text" id="git-link" name="git-link"> </input>
                </div>

                <div class="col-12 my-4">
                    <button class="btn btn-success">
                        <i class="fa-solid fa-floppy-disk me-2"></i> Save
                    </button>
                </div>

            </form>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
