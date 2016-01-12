@extends('layout')
@section('content')
<div class="page-header">
<h2>Account beheer</h2>
</div>

<div class="well">
<p>Indien we u contacteren over uw diensten bij <strong>iDevelopment</strong> gebruiken we hiervoor onderstaande gegevens. Hou ze dus zeker up-to-date!</p>


</div>
<form class="">
 <div class="col-sm-6 col-md-6">
  <div class="form-group">
    <label for="name" class="control-label">Naam</label>
      <input type="text" id="name" name="name" value="{{ $info['0']['contact_name']}}" class="form-control">
  </div>
  <div class="form-group">
    <label for="fname" class="control-label">Voornaam</label>
      <input type="text" name="fname" class="form-control" id="fname" value="">
  </div>

  <div class="form-group">
    <label for="address" class="control-label">Adres</label>
      <input type="text" name="address"  id="address" value="{{ $info['0']['address']}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="city" class="control-label">Gemeente</label>
      <input type="text" name="city"  id="city" value="{{ $info['0']['city']}}" class="form-control">
  </div>

  <div class="form-group">
    <label for="country" class="control-label">Land</label>
      <select id="country" class="form-control">
        <option value="{{ $info['0']['country']}}">Belgium</option>
      </select>
  </div>
</div>

  <div class="col-sm-6 col-md-6">
    <div class="form-group">
      <label for="email" class="control-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{ $info['0']['email']}}">
    </div>

    <div class="form-group">
      <label for="phone" class="control-label">Telefoon</label>
        <input type="phone" name="phone" class="form-control" id="phone" value="{{ $info['0']['phone']}}">
    </div>
</div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-4">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</div>
</form>


@endsection
