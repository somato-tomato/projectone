@extends('dashLayout.app')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div style="float: right">
                    <nav aria-label="breadcrumb" class="main-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
{{--                            <li class="breadcrumb-item"><a href="javascript:void(0)">Team</a></li>--}}
                            <li class="breadcrumb-item active" aria-current="page">Package Info</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <div class="card-title">
                        Team
                    </div>
                    <hr>
                    <div class="">
                        <a href="{{route('package.create')}}" class="btn btn-primary">Buat Baru Package</a>
                    </div>
                    <br>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Package</th>
                            <th>Call Us</th>
                            <th>Aksi</th>
                        </tr>
                        @php $i=1;@endphp

                        @foreach($package as $ret)
                            <tr>
                                <td class="col-lg-none">{{$i++}}</td>
                                <td>{{$ret->judul ?? ''}}</td>
                                <td>{{\Carbon\Carbon::parse($ret->created_at ?? '')->format('d M Y')}}</td>
                                <td>
                                    <form method="post" class="delete_form" action="{{ route('package.destroy',$ret->id) }}" id="studentForm_{{$ret->id}}">
                                        <a href="{{route('package.show',$ret->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        {{ method_field('delete') }}
                                        {{  csrf_field() }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                    </div>
                </div>

            </div>

        </div>
    </div>
        @endsection

@push('modals')
            <script>
                $(document).ready(function(){
                    $('.delete_form').on('submit', function(){
                        if(confirm("Are you sure you want to delete it?"))
                        {
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    });
                });
            </script>

@endpush
