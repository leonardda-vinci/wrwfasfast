@extends('layout.master')


@section('content')

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h5 class="header center teal-text text-lighten-2">Transaction
        </h5>
        <td>
        <form action="/store" method="PUT">
            @include('store.error')
            @csrf
            <div class="input-field col s8">
                 <select name="companies_id" class="browser-default">
                @foreach($companies as $company)
                <option value="{{$company->id}}">{{ $company->name }}</option>
                @endforeach
            <label>Company: </label>
            
            </select>
            </div>           
            <label form="">Name</label>
            <input type="text" name="name" value="">
            <label form="">Products</label>
            <input type="text" name="products" value="">
            <button class="waves-effect waves-light btn" type="submit" name="action">Submit
                            <i class="material-icons right">send</i>
                        </button>
        </form>
        </td>
       </div> 
      </div>
    </div>
    
    <script>
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script>

@endsection