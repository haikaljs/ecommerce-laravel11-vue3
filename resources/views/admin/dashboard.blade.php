@extends('admin.layouts.app')

@section('title')
  Dashboard
@endsection

@section('content')
  <div class="row">
    @include('admin.layouts.sidebar')
    <div class="col-md-9">
      <div class="row mt-2">
        <div class="col-md-12">
          <div class="card-header bg-white">
            <h3 class="mt-2">
              Dashboard
            </h3>
            <hr>

          </div>
          <div class="card-body">
            <div class="row mb-2">
              {{-- todays order --}}
              <div class="col-md-6 mb-3">
                <div class="card shadow-sm">
                  <div class="bg-white p-2">
                    <div class="d-flex justify-content-between">
                      <strong class="badge bg-dark">Today's Orders</strong>
                      <span class="badge bg-dark">{{$todayOrders->count()}}</span>
                    </div>
                  </div>
                  <div class="card-footer text-center bg-white">
                    <strong class="badge bg-dark">$ {{$todayOrders->sum('total')}}</strong>

                  </div>
                </div>
              </div>

              {{-- Yesterday orders --}}
              <div class="col-md-6 mb-3">
                <div class="card shadow-sm">
                  <div class="bg-white p-2">
                    <div class="d-flex justify-content-between">
                      <strong class="badge bg-primary">Yesterday's Orders</strong>
                      <span class="badge bg-primary">{{$yesterdayOrders->count()}}</span>
                    </div>
                  </div>
                  <div class="card-footer text-center bg-white">
                    <strong class="badge bg-primary">$ {{$yesterdayOrders->sum('total')}}</strong>

                  </div>
                </div>
              </div>
              {{-- Month orders --}}
              <div class="col-md-6 mb-3">
                <div class="card shadow-sm">
                  <div class="bg-white p-2">
                    <div class="d-flex justify-content-between">
                      <strong class="badge bg-warning">Month's Orders</strong>
                      <span class="badge bg-warning">{{$monthOrders->count()}}</span>
                    </div>
                  </div>
                  <div class="card-footer text-center bg-white">
                    <strong class="badge bg-warning">$ {{$monthOrders->sum('total')}}</strong>

                  </div>
                </div>
              </div>
              {{-- Year orders --}}
              <div class="col-md-6 mb-3">
                <div class="card shadow-sm">
                  <div class="bg-white p-2">
                    <div class="d-flex justify-content-between">
                      <strong class="badge bg-success">Year's Orders</strong>
                      <span class="badge bg-success">{{$yearOrders->count()}}</span>
                    </div>
                  </div>
                  <div class="card-footer text-center bg-white">
                    <strong class="badge bg-success">$ {{$yearOrders->sum('total')}}</strong>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

