@extends('dashboard_master')
@section('dashboard_content')
<h1 class="medium-heading">Add Categories</h1>
<div class="category__wrapper">
    <form class="category__form" action="{{ route('admin.category.store') }}" method="POST">
        @csrf
        <div class="category__info">
            <h4>Basic Information</h4>
            <input class="category__nameInput" type="text" name="cat_name" id="cat_name" placeholder="Category Name" required>
            <div class="category__formBtn">
                <input type="submit" value="Add Category">
            </div>
        </div>
        <div class="category__visibility">
            <h4>Visibility</h4>
            <div class="category__visibilityRow">
                <input type="radio" name="category__visibilityOpt" value="public" id="category__visibilityOpt" checked="checked">
                <label>Public</label>
            </div>
            <div class="category__visibilityRow">
                <input type="radio" name="category__visibilityOpt" value="hidden" id="category__visibilityOpt">
                <label>Hidden</label>
            </div>
        </div>
    </form>
</div>
@endsection