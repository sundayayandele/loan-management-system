@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', 'Blocked')
@section('message', __('Too Many Requests attempts please try again after 60 seconds'))
