@extends('layout.master')


@section('content')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h5 class="header center teal-text text-lighten-2">Companies {{ $company->name }} store</h5>

        <table class="header center teal-text text-lighten-2">
        <tread>
          <tr>
            <td>Name</td>
            <td>Products</td>
          </tr>
        </tread>
        <<tbody>
          @foreach($company->stores as $store)
          <tr>
            <td>{{ $store->name }}</td>
            <td>{{ $store->products }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
         </div>
      </div>
    </div>
@endsection