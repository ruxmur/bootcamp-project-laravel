@extends('layout')
@section('content')
<section>
    <h2>Create an article</h2>
    <form id="createArticleForm">
        <!-- bootstrap 5 eto -->
        <div class="mb-3">
            <label for="titleInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="titleInput" placeholder="ArticleTitle">
        </div>

        <div class="mb-3">
            <label for="desriptionInput" class="form-label">Description</label>
            <textarea class="form-control" id="desriptionInput" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="desriptionInput" class="form-label">Category</label>
            <select class="form-select" name="category" id="categoryInput">
                <option selected disabled>Select any category from list</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <div class="row">
                <div class="col-9">
                    <label for="imageInput" class="form-label">Upload image for your article</label>
                    <input class="form-control" accepr="image/*" type="file" id="imageInput"></input>
                </div>
                <div class="mb-3">
                    <img class="width:100" scr="" alt="prewiew uploaded image" id="imagePrewiew" hiden>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
            </div>
        </div>
    </form>
</section>
@endsection



<!-- @extends('layout')
@section('content')
    <section>
        <h>Create an article</h>

        <form id="createArticleForm" action="">

            <div class="mb-3">
                <label for="titleInput" class="form-label">Title</label>
                <input type="text" class="form-control" id="titleInput" placeholder="Article title">
            </div>

            <div class="mb-3">
                <label for="descriptionInput" class="form-label">Description</label>
                <textarea class="form-control" id="descriptionInput" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="categoryInput" class="form-label">Category</label>
                <select id="categoryInput" class="form-select" name="category">
                    <option selected disabled>Select category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="authorInput" class="form-label">Author</label>
                <select id="authorInput" class="form-select" name="author">
                    <option selected disabled>Select author</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <div class="row">
                    <div class="col-9">
                        <label for="imageInput" class="form-label">Upload image for your article</label>
                        <input class="form-control" type="file" id="imageInput">
                    </div>
                    <div class="col-3">
                        <img class="w-100" src="" alt="preview uploaded image" id="imagePreview" hidden>
                    </div>
                </div>


            </div>

            <div class="mb-3">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </div>
        </form>
    </section>

    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11" error-toasts-region>

    </div>
@endsection -->