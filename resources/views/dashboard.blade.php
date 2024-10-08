@extends('layouts.master')
@push('css-links')

@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card my-5">
                <div class="card-body">
                    <ul class="nav nav-tabs d-flex justify-content-center" id="custom-content-below-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-content-below-profile-tab" data-toggle="pill"
                                href="#custom-content-below-profile" role="tab"
                                aria-controls="custom-content-below-profile" aria-selected="true">Github Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-content-below-repos-tab" data-toggle="pill"
                                href="#custom-content-below-repos" role="tab" aria-controls="custom-content-below-repos"
                                aria-selected="false">Github Public Repository</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="custom-content-below-tabContent">
                        <div class="tab-pane fade show active" id="custom-content-below-profile" role="tabpanel"
                            aria-labelledby="custom-content-below-profile-tab">
                            <div class="row d-flex justify-content-center my-5">
                                <div class="col-md-6">
                                    <div class="card ">
                                        <div class="card-header text-center">
                                            <span class="text-info">Profile Information
                                                {{ auth()->user()->name ?? '' }}</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 d-flex justify-content-center">
                                                    <img class="rounded-circle" width="120px"
                                                        src="{{ $getProfile->avatar_url ?? 'data:image/png;base64,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' }}"
                                                        alt="profile-image">
                                                </div>
                                                <div class="col-md-12 my-2">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped table-sm">
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <th class="w-50" scope="col">ID</th>
                                                                    <td class="w-50" scope="col">
                                                                        {{ $getProfile->id ?? '' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w-50" scope="col">User Name</th>
                                                                    <td class="w-50" scope="col">
                                                                        {{ $getProfile->login ?? '' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w-50" scope="col">Name</th>
                                                                    <td class="w-50" scope="col">
                                                                        {{ auth()->user()->name ?? '' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w-50" scope="col">Email</th>
                                                                    <td class="w-50" scope="col">
                                                                        {{ $getProfile->email ?? '' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w-50" scope="col">Bio</th>
                                                                    <td class="w-50" scope="col">
                                                                        {{ $getProfile->bio ?? '' }}
                                                                </tr>
                                                                <tr>
                                                                    <th class="w-50" scope="col">Following</th>
                                                                    <td class="w-50" scope="col">
                                                                        {{ $getProfile->following ?? 0 }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th class="w-50" scope="col">Public Repository</th>
                                                                    <td class="w-50" scope="col">
                                                                        {{ $getProfile->public_repos ?? 0 }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="custom-content-below-repos" role="tabpanel"
                            aria-labelledby="custom-content-below-repos-tab">

                            <div class="row my-5">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-sm table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th style="width: 5%;">#SL</th>
                                                    <th style="width: 25%;">Repository Name</th>
                                                    <th style="width: 30%;">Description</th>
                                                    <th style="width: 10%;">Stars</th>
                                                    <th style="width: 10%;">Forks</th>
                                                    <th style="width: 10%;">Language</th>
                                                    <th style="width: 10%;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($getRepos as $getRepo)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $getRepo->name ?? '' }}</td>
                                                        <td>{{ $getRepo->description ?? '' }}</td>
                                                        <td>{{ $getRepo->stargazers_count ?? 0 }}</td>
                                                        <td>{{ $getRepo->forks ?? 0 }}</td>
                                                        <td>{{ $getRepo->language ?? '' }}</td>
                                                        <td>
                                                            <a href="{{ $getRepo->html_url }}" target="_blank"
                                                                class="btn btn-sm btn-info">Repo Link</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
@push('scripts')

@endpush
