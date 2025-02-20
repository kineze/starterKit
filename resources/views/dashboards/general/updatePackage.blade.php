@extends('layouts.general.app')

@section('content')

<livewire:update-package :id="$package->id" />

@endsection
