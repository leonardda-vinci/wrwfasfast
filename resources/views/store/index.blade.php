@extends('layout.master')


@section('content')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h5 class="header center teal-text text-lighten-2">Store</h5>

        <table class="header center teal-text text-lighten-2">
        <tread>
          <tr>           
            <th>Company</th>
            <th>Company Location</th>
            <th>Name</th>
            <th>Products</th>
            <th>Time for Opening and Closing</th>
            <th>Transaction</th>
          </tr>
        </tread>
        <tbody>
          @foreach($stores as $store)
          <tr>
            <td>{{ $store->company->name }}</td>
            <td>{{ $store->company->location }}</td>
            <td>{{ $store->name }}</td>
            <td>{{ $store->products }}</td>
            <td>
              @foreach($store->open_times as $open_time)
              <p>
                {{ \Carbon\Carbon::parse($open_time->open_time)->format('h:i:sa') }}
                 - 
                {{ \Carbon\Carbon::parse($open_time->close_time)->format('h:i:sa ') }}
              </p>
              @endforeach
            </td>
            <td>
            <a href="/store/{{ $store->id }}/edit">Transaction</a>
          </td>
        </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      </div>
    </div>
@endsection