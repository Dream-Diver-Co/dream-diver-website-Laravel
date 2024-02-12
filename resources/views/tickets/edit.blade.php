@extends('layouts.master')


@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket Reply</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ticket comment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form  action="{{ route('tickethistory_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ticket-card">
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Ticket id (hidden)</label>
                                        <input type="text"  name="ticket_id"  class="form-control col-5" id="inputAddress2" value="{{ $ticket->id}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">User id (hidden)</label>
                                        <input type="text" name="user_id" class="form-control col-5" id="inputAddress2" value="{{ auth()->user()->id }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">User Email</label>
                                        <input type="text"  name="email"  class="form-control col-5" id="inputAddress2" value="{{ $ticket->email}}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Issue</label>
                                        <input type="text"  name="issue"  class="form-control col-5" id="inputAddress2" value="{{ $ticket->issue}}"  placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Atached files</label><br>
                                        @foreach($attachments as $attachment)
                                            <img src="{{ asset('storage/' .$attachment->attachment_name) }}" alt="image"  class="ticket-img col-5">
                                        @endforeach
                                    </div>

                                </div>
                            </div>


                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                      <label for="inputAddress2" class="col-3 text-right">Status</label>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" {{ $ticket->status == 'on' ? 'checked' : '' }} readonly>
                                            <label for="statusYes" class="form-check-label">On</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusNo" class="form-check-input" value="off" {{ $ticket->status == 'off' ? 'checked' : '' }} readonly>
                                            <label for="statusNo" class="form-check-label">Off</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                    <label for="inputAddress2" class="col-3 text-right">Ticket comment history</label>
                                    <table class="table table-bordered table-striped col-5">
                                        <thead>
                                            <tr>
                                                <th>Ticket Creator</th>
                                                <th>Admin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ticket_history as $history)
                                                <tr>
                                                    @if($history->comment_user_id != 1)
                                                        <td class="table-success">{{$history->comment}}</td>
                                                        <td></td>
                                                    @else
                                                        <td></td>
                                                        <td class="table-info">{{$history->comment}}</td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                   </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Comment for ticket</label>
                                        <input type="text"  name="comment"  class="form-control col-5" id="inputAddress2" value=""  placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <label for="inputAddress2" class="col-3 text-right"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
