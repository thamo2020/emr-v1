@extends('layouts.main')

@section('content')

<h2>Creating Records</h2>

<form>

    <div class="form-group">
        <label for="diagnosis">Reason for visit / diagnosis</label>
        <textarea class="form-control" id="diagnosis" rows="5"></textarea>
      </div>
    
      <div class="form-group col-md-6">
          <label for="fname">Examination</label>
          
          <p>
      <a class="btn btn-primary" data-toggle="collapse" href="#bp" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Blood Presure</a>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#pulsrate" aria-expanded="false" aria-controls="multiCollapseExample2">Pulsrate</button>
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#respiratoryrate" aria-expanded="false" aria-controls="multiCollapseExample2">Respiratoryrate</button>
    
      <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#other" aria-expanded="false" aria-controls="multiCollapseExample2">Other Findings</button>
    
      <!--button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button-->
    </p>
    <div class="row">
      <div class="col">
        <div class="collapse multi-collapse" id="blood_presure">
          <div class="card card-body">
          <input type="text" class="form-control" id="blood_presure" placeholder="Blood presure">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="collapse multi-collapse" id="pulse_rate">
          <div class="card card-body">
          <input type="text" class="form-control" id="pulse_rate" placeholder="Pulsrate">
          </div>
        </div>
      </div>
      <div class="col">
        <div class="collapse multi-collapse" id="respiratory_rate">
          <div class="card card-body">
          <input type="text" class="form-control" id="respiratory_rate" placeholder="Respiratoryrate">
          </div>
        </div>
      </div>
    
      <div class="col">
        <div class="collapse multi-collapse" id="other">
          <div class="card card-body">
          <label for="other">Other Findings</label>
          <textarea class="form-control" id="other" rows="5"></textarea>
          </div>
        </div>
      </div>
    
    </div>
</div>
      <div class="form-group">
        <label for="investigation">Investigation</label>
    
        <textarea class="form-control" id="investigation" rows="5"> </textarea>
         
    </div>
        
   
      <div class="form-group">
        <label for="treatments">Treatments</label>
        <textarea class="form-control" id="treatments" rows="10"></textarea>
      </div>
    
    
      <div class="form-group">
        <label for="special_notes">Special Notes</label>
        <textarea class="form-control" id="special_notes" rows="5"></textarea>
      </div>
    
      <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Done') }}
            </button>
        </div>
    </div>
      </form>

  @endsection