@extends('template')

@section('content')
<section class="hero">
  <div class="container text-center">
    <h1 class="mb-4">Paguyuban Wargi Sunda</h1>

    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="mb-2">
            </div>
            <a href="#" class="text-warning mb-1">Cash Deposits</a>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="mb-2">
            </div>
            <p class="text-danger mb-1">Invested Dividends</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-3">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="mb-2">
            </div>
            <p class="text-info mb-1">Withdrawals</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
