@extends('layout.master')

@section('content')

<div class="container">
  <div class="section"> 
    <h5>Companies</h5>

      @foreach($companies as $company)
        <li>
        	<a href="/companies/{{ $company->id }}">{{  $company->name  }}</a>
        	</li>
      @endforeach

  </div>
</div>

@endsection