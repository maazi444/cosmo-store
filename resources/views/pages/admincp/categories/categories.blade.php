@extends('dashboard_master')
@section('dashboard_content')
<div class="categories__toolbar">
    <h1 class="medium-heading">Categories</h1>
    <a class="toolbar__createBtn" href="{{ route('admin.create.category') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z" clip-rule="evenodd" />
        </svg>
        New Category
    </a>
</div>
<div class="categories__wrapper">

    <div class="categories__table">
        <div class="table-header">
            <div class="header__item"><a id="name" class="filter__link">Name</a></div>
            <div class="header__item"><a id="wins" class="filter__link filter__link--number">Items</a></div>
            <div class="header__item"><a id="draws" class="filter__link filter__link--number">Visibility</a></div>
            <div class="header__item"><a id="losses" class="filter__link filter__link--number">Actions</a></div>
            <!-- <div class="header__item"><a id="total" class="filter__link filter__link--number">Total</a></div> -->
        </div>
        <div class="table-content">
            <div class="table-row">
                <div class="table-data">Lipsticks</div>
                <div class="table-data">2</div>
                <div class="table-data">0</div>
                <div class="table-data">1</div>
            </div>
            <div class="table-row">
                <div class="table-data">Foundations</div>
                <div class="table-data">1</div>
                <div class="table-data">1</div>
                <div class="table-data">2</div>
            </div>
            <div class="table-row">
                <div class="table-data">Perfumes</div>
                <div class="table-data">0</div>
                <div class="table-data">2</div>
                <div class="table-data">2</div>
            </div>
        </div>
    </div>
</div>
@endsection