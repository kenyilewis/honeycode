@extends('master')
@if ($usuario->id == auth()->user()->id)
  @include('profile/own')
  @else
    @include('profile.other')
@endif
