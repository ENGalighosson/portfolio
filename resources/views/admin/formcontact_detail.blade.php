@extends('backend.master')
@section('main')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Website Page</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Form contact detail Page</li>
                        </ol>
 

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Form Contact Detail
                            </div>
                            <div class="card-body">

                                <legend>Form Contact Detail Message</legend>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label"><strong>Name:</strong></label>
                                    {{ $formcontact->name }}
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label"><strong>Email:</strong></label>
                                    {{ $formcontact->email }}
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label"><strong>Subject:</strong></label>
                                    {{ $formcontact->subject }}
                                    </div>
                                    <div class="mb-3">
                                    <label for="disabledTextInput" class="form-label"><strong>Message:</strong></label>
                                    {{ $formcontact->message }}
                                    </div>

                      



                            </div>
                        </div>
                    </div>
                </main>
@endsection