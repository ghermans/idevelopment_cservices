@extends('layout')
@section('content')
<div class="row">
  <div class="col-md-6">
  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-user"></i> Openstaande facturen</div>
    <div class="panel-body">
      <table class="table table-striped">
             <thead>
                 <tr>
                     <th class="col-md-3">Factuur nummer</th>
                     <th>Factuur datum</th>
                     <th>Prijs</th>
                     <th>Status</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>1</td>
                     <td>03/12/1987</td>
                     <td>€ 20.00</td>
                     <td>Niet betaald</td>
                 </tr>
                 <tr>
                     <td>2</td>
                     <td>03/12/1987</td>
                     <td>€ 20.00</td>
                     <td>Betaald</td>
                 </tr>
                 <tr>
                     <td>3</td>
                     <td>John</td>
                     <td>€ 20.00</td>
                     <td>Betaald</td>
                 </tr>
             </tbody>
         </table>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading"><i class="fa fa-user"></i> Uw diensten</div>
    <div class="panel-body">
      <table class="table table-striped">
             <thead>
                 <tr>
                     <th class="col-md-3">&nbsp;</th>
                     <th>Type</th>
                     <th>Prijs</th>
                     <th>Status</th>
                 </tr>
             </thead>
             <tbody>
                 <tr>
                     <td>idevelopment.be</td>
                     <td>Webhosting</td>
                     <td>Niet betaald</td>
                 </tr>

             </tbody>
         </table>
    </div>
  </div>
</div>

<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-newspaper-o"></i> Mededelingen</div>
  <div class="panel-body">
    fsfdsfsdfsdfsdfdsfsd
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-life-ring"></i> Recente tickets</div>
  <div class="panel-body">
    <table class="table table-striped">
           <thead>
               <tr>
                   <th class="col-md-3">Ticket nummer</th>
                   <th>Onderwerp</th>
                   <th>Status</th>
                   <th>Gewijzigd op</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td>1</td>
                   <td>03/12/1987</td>
                   <td>Open</td>
                   <td>03/12/1987</td>
               </tr>
               <tr>
                   <td>2</td>
                   <td>03/12/1987</td>
                   <td>Gesloten</td>
                   <td>03/12/1987</td>
               </tr>
  </div>
</div>
</div>
</div>

@endsection
