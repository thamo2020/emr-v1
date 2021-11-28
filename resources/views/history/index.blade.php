@extends('layouts.main')

@section('content')

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Reason for visit</th>
        <th scope="col">Diagnosis</th>
        <th scope="col">Blood Presure</th>
        <th scope="col">Pulse Rate</th>
        <th scope="col">Respiratory Rate</th>
        <th scope="col">Other</th>
        <th scope="col">Investigation</th>
        <th scope="col">Treatments</th>
        <th scope="col">Special Notes</th>
        <th scope="col">Created Date</th>
        <th scope="col">Updated Date</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Migraine</td>
        <td>120/76</td>
        <td>72/mm</td>
        <td>16</td>
        <td>Neurology - Normal</td>
        <td>No</td>
        <td>Paracetamol 2tab 6hours 3d <br>
        Stematil 5mg 1tab 8hours 3d <br>
        Famotidine 20mg 12hours 3d <br>
        </td>
        <td>No</td>
        <td>2021-10-31 07:24:50</td>
        <td>2021-10-31 07:24:5</td>

      </tr>
      <tr>
        <th scope="row">1</th>
        <td>John</td>
        <td>65</td>
        <td>102</td>
        <td>102</td>
        <td>No</td>
        <td>No</td>
        <td>No</td>
        <td>No</td>
        <td>2021-10-31 07:24:50</td>
        <td>2021-10-31 07:24:5</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Smith</td>
        <td>65</td>
        <td>102</td>
        <td>102</td>
        <td>No</td>
        <td>No</td>
        <td>No</td>
        <td>No</td>
        <td>2021-10-31 07:24:50</td>
        <td>2021-10-31 07:24:5</td>
      </tr>
    </tbody>
  </table>


@endsection