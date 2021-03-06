@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" >
            
                        {{-- @if(Session::has('success'))
                            <div class="alert alert-info">Thanks for contacting us!</div>
                        @endif --}}
                        @if(session('success'))
                            <div class="alert alert-info">
                                {{ session('success') }}
                            </div>
                        @endif
                    <div class="card">
                                <div class="card-header">
                                    <h3>Manuscripts</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="container">
                                            <table class="table table-sm">
                                                @if($manuscripts->count() > 0)

                                                    <tbody>

                                                    @foreach ( $manuscripts as $manuscript )
                                                        <tr>
                                                            <td>{{ $manuscript->id }}.</td>
                                                            <td>
                                                                <p>{{ $manuscript->title }}</p>
                                                                <p></p>
                                                                <p><small>{{ $manuscript->user->name }} | {{ Carbon\Carbon::parse( $manuscript->created_at)->format('d.m.Y  H:i') }}</small></p>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('manuscripts.show', ['id' => $manuscript->id]) }}" class="btn btn-primary btn-sm">Show</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('manuscripts.edit', ['id' => $manuscript->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                                            </td>
                                                            <td>
                                                                <form action="{{ route('manuscripts.destroy', ['id' => $manuscript->id]) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm">Del</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                @else
                                                    <tr class="container">
                                                        <p>No manuscripts</p>
                                                    </tr>
                                                @endif
                                            </table>

                                            <div class="container">
                                                <div class="container">
                                                    <a href="{{route('manuscripts.create')}}" class="btn btn-sm btn-primary">Submit New Manuscript</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="container">
                                    {{ $manuscripts->links() }}
                                </div>
                    </div>
            </div>
                
    </div>
</div>
@endsection