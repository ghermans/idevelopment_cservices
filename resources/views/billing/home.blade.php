@extends('layout')
@section('content')
<div class="page-header">
<h2>Facturatie</h2>
</div>

<table class="table table-striped table-bordered">
       <thead>
           <tr>
               <th class="col-md-2">Factuur nummer</th>
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
@endsection
