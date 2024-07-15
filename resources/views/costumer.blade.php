@extends('layouts.app')

@section('title', 'management costumer')

@section('contents')
    <div class="card mt-4">
        <div class="body-card p-4">
            <div class="bio d-flex">
                <img class="border border-primary rounded-circle mr-2" src="{{ asset('admin-asset/img/undraw_profile_1.svg') }}" width="47">
                <aside class="ml-2 mb-0">
                    <div class="">{{ auth()->user()->name }}</div>
                    <span class="">{{ auth()->user()->email }}</span>
                </aside>
            </div>
        </div>
    </div>
    <button class="btn btn-primary mt-3 px-4 py-2">
        Add Costumer
    </button>
@endsection
