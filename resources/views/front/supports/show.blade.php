@extends('layouts.app')

@section('content')
    <div class="container mb-5 pb-5">
       <div class="card shadow mt-5">
           <div class="card-body">
               <h4>خیر گرامی، از شما متشکریم</h4>
               <div><strong>نام خیر:</strong> {{ $support->supporter_name }} </div>
               <div><strong>شماره موبایل:</strong>{{ $support->supporter_mobile }}</div>
               <div><strong>فرزندان معنوی شما:</strong></div>
               <div>
                  <table class="table stripped hover">
                      <thead>
                      <tr>
                          <th>نام فرزند</th>
                          <th>سن</th>
                          <th>تولد</th>
                          <th>شهر</th>
                          <th>شناسه بانکی</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($support->children as $child)
                          <tr>
                              <td>{{ $child->full_name }}</td>
                              <td>{{ $child->age  }}</td>
                              <td>{{ $child->birth_date_fa->format(" %d %B %Y")  }}</td>
                              <td>{{ $child->city  }}</td>
                              <td>{{ $child->bank_id }}</td>
                          </tr>
                      @endforeach
                      </tbody>
                  </table>
               </div>
           </div>
       </div>
    </div>
@endsection
