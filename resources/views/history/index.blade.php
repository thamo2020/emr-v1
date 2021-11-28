@extends('layouts.main')

@section('content')

<h2>Patient History</h2>

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

      <!--tr>
        <th scope="row">3</th>
        <th>Fever</th>
        <td>Viral fever</td>
        <td>110/70</td>
        <td>96/mm</td>
        <td>18/mm</td>
        <td>Eaminarion - Normal</td>
        <td>FBC <br>CRP <br> UFR </td>
        <td>Paracetamol 2tab 6hours 3d <br>
          Piriton 4mg 12hours 3d
          </td>
        <td>No</td>
        <td>2021-11-29 </td>
        <td>2021-11-29 </td>
      </!--tr-->

      <tr>
        <th scope="row">2</th>
        <th>Abdominal pain, Fever</th>
        <td>Urinary tracr injection</td>
        <td>150/90</td>
        <td>84/mm</td>
        <td>18</td>
        <td>Lower abdominal tenderness</td>
        <td>FBC <br> UFR</td>
        <td>Paracetamol 2tab 6hours 3d <br>
        Crprofioxacin 500mg 12hours 3d
        </td>
        <td>No</td>
        <td>2021-11-01 </td>
        <td>2021-11-01 </td>
      </tr>

      <tr>
        <th scope="row">1</th>
        <th>Headache</th>
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
        <td>2021-10-25 </td>
        <td>2021-10-25 </td>

      </tr>
      
     
    </tbody>
  </table>


@endsection