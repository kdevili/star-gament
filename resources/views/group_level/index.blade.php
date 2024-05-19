@extends('group_level.lay')


@section('title' , __('Group'))


@section('style')


@endsection

@section('content')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card overflow-x-scroll">
                    <div class="card-body d-flex">
                        <div class="col-lg-1 col-md-2 col-sm-3 col-4 text-center">
                            <canvas id="tutorial" width="700" height="700"></canvas>
                        </div>
                        <div class="col-lg-4 col-md-2 col-sm-3 col-4 text-center">
                            <a href="javascript:;" class="avatar avatar-lg rounded-circle border border-primary">
                                <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-1.jpg">
                            </a>
                            <p class="mb-0 text-sm">Abbie W</p>
                            <p class="mb-0 text-sm">Abbie W</p>
                            <p class="mb-0 text-sm">Abbie W</p>
                            <p class="mb-0 text-sm">Abbie W</p>
                            <p class="mb-0 text-sm">Abbie W</p>
                        </div>

                        <div class="col-lg-4 col-md-2 col-sm-3 col-4 text-center">
                            <a href="javascript:;" class="avatar avatar-lg rounded-circle border border-primary">
                                <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-1.jpg">
                            </a>
                            <p class="mb-0 text-sm">Abbie W</p>
                        </div>

                        <div class="col-lg-4 col-md-2 col-sm-3 col-4 text-center">
                            <a href="javascript:;" class="avatar avatar-lg rounded-circle border border-primary">
                                <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-1.jpg">
                            </a>
                            <p class="mb-0 text-sm">Abbie W</p>
                        </div>

                        <div class="col-lg-4 col-md-2 col-sm-3 col-4 text-center">
                            <a href="javascript:;" class="avatar avatar-lg rounded-circle border border-primary">
                                <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-1.jpg">
                            </a>
                            <p class="mb-0 text-sm">Abbie W</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e08a8f888ea095938592ce838f8d">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">43431</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programator</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="47262b223f2607323422356924282a">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">93021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Executive</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-dark"></i>
<span class="text-dark text-xs">neutral</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d212c383f2823390d383e283f632e2220">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">10392</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Backend developer</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe93979d969f9b92be8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">34002</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-danger"></i>
<span class="text-dark text-xs">negative</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe8c979d969f8c9abe8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">91879</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programtor</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="630e0a110a020e23161006114d000c0e">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23042</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-6">
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e08a8f888ea095938592ce838f8d">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">43431</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programator</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="47262b223f2607323422356924282a">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">93021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Executive</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-dark"></i>
<span class="text-dark text-xs">neutral</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d212c383f2823390d383e283f632e2220">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">10392</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Backend developer</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe93979d969f9b92be8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">34002</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-danger"></i>
<span class="text-dark text-xs">negative</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe8c979d969f8c9abe8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">91879</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programtor</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="630e0a110a020e23161006114d000c0e">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23042</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e08a8f888ea095938592ce838f8d">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">43431</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programator</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="47262b223f2607323422356924282a">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">93021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Executive</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-dark"></i>
<span class="text-dark text-xs">neutral</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d212c383f2823390d383e283f632e2220">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">10392</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Backend developer</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe93979d969f9b92be8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">34002</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-danger"></i>
<span class="text-dark text-xs">negative</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe8c979d969f8c9abe8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">91879</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programtor</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="630e0a110a020e23161006114d000c0e">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23042</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row my-4">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Review</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">John Michael</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e08a8f888ea095938592ce838f8d">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">43431</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Alexa Liras</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programator</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="47262b223f2607323422356924282a">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">93021</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Executive</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-dark"></i>
<span class="text-dark text-xs">neutral</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d212c383f2823390d383e283f632e2220">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">10392</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Michael Levi</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Backend developer</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe93979d969f9b92be8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">34002</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Richard Gran</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Manager</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-danger"></i>
<span class="text-dark text-xs">negative</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fe8c979d969f8c9abe8b8d9b8cd09d9193">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">91879</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="../../../assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="avatar image">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Miriam Eric</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-sm text-secondary mb-0">Programtor</p>
                            </td>
                            <td>
<span class="badge badge-dot me-4">
<i class="bg-info"></i>
<span class="text-dark text-xs">positive</span>
</span>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-secondary mb-0 text-sm"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="630e0a110a020e23161006114d000c0e">[email&#160;protected]</a></p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-sm">23042</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        let items = [
            {"section": "Environmental Impact","Discription": "Water Polution","degrees": 315, "Percentage": 30, "colour": "orange"},
            {"section": "Environmental Impact","Discription": "Waste","degrees": 305, "Percentage": 31, "colour": "orange"},
            {"section": "Environmental Impact","Discription": "Water use","degrees": 295, "Percentage": 29, "colour": "orange"},
            {"section": "Environmental Impact","Discription": "Bio diversity Impact","degrees": 285, "Percentage": 20, "colour": "green"},
            {"section": "Environmental Impact","Discription": "Non Renewable Energy","degrees": 275, "Percentage": 60, "colour": "red"},
            {"section": "Environmental Impact","Discription": "Renewable Energy","degrees": 265, "Percentage": 25, "colour": "green"},
            {"section": "Environmental Impact","Discription": "GHG","degrees": 255, "Percentage": 90, "colour": "red"},
            {"section": "Social Impact","Discription": "Liviyhooods","degrees": 130, "Percentage": 20, "colour": "green"},
            {"section": "Social Impact","Discription": "Health","degrees": 140, "Percentage": 20, "colour": "green"},
            {"section": "Social Impact","Discription": "Education","degrees": 150, "Percentage": 30, "colour": "green"},
            {"section": "Social Impact","Discription": "Empowerment","degrees": 160, "Percentage": 35, "colour": "green"},
            {"section": "Economical Impact","Discription": "Investment","degrees": 10, "Percentage": 35, "colour": "orange"},
            {"section": "Economical Impact","Discription": "Payroll","degrees": 20, "Percentage": 20, "colour": "green"},
            {"section": "Economical Impact","Discription": "Profit","degrees": 30, "Percentage": 30, "colour": "green"},
        ];
        draw2();

        let fillStyle;
        function draw2() {
            const ctx = document.getElementById('tutorial').getContext('2d');
            const img = new Image();
            img.onload = function() {
                ctx.drawImage(img, 275, 275,250,250);
            };
            img.src = '{{ asset('img/arc2.png') }}';

            items.forEach(function(item) {
                // console.log(item);
                draw(item.Discription,item.degrees, item.Percentage,item.colour)
            })
        }

        // items.push(
        //     {"degrees": degrees, "length": l, "colour": fillStyle}
        // );

        // console.log(items);
        // draw(i, l);

        // draw(350,50);
        // draw(353,100);
        //
        // draw(110,50);
        // draw(113,100);
        //
        // draw(230,50);
        // draw(233,100);
        function draw(Discription,degrees, lenthP,colour) {

            let lenth = 1.75* lenthP;
            lenth = lenth + 125;
            let centerpointX = 400;
            let centerpointY = 400;
            let maxlength = 400;
            let x =0;
            let y = 0;

            var font, lineHeight;
            font = 12;
            lineHeight = 15; // this is guess and check as far as I know


            // if(degrees < 90){
            var tita = degrees * Math.PI / 180;
            var ninty = 90* Math.PI / 180;
            // if(tita < 1.5708){

            x = maxlength + (lenth * Math.cos(ninty - tita));
            y = maxlength - (lenth  * Math.cos(tita));
            // console.log('x '+x);
            // console.log('Y '+y);
            // }

            const canvas = document.getElementById('tutorial');
            if (canvas.getContext) {
                const ctx = canvas.getContext('2d');
                ctx.font = font + 'px Arial';

                ctx.save();
                ctx.translate(x, y);
                ctx.fillStyle = 'black';

                if (degrees<180){
                    ctx.rotate((degrees-90) * Math.PI / 180);
                    ctx.textAlign = 'left';
                    ctx.fillText('   '+Discription+' - '+lenthP+'%', 0, lineHeight / 2);
                }else {
                    ctx.rotate((degrees-270) * Math.PI / 180);
                    ctx.textAlign = 'right';
                    ctx.fillText(Discription+' - '+lenthP+'%   ', 0, lineHeight / 2);
                }
                // ctx.textAlign = 'left';
                ctx.restore();

                ctx.fillStyle = colour;
                ctx.strokeStyle = colour;

                ctx.beginPath();
                ctx.moveTo(centerpointX, centerpointY);
                ctx.lineTo(x, y);
                ctx.stroke();

                ctx.beginPath();
                ctx.arc(x, y, 5, 0, Math.PI * 2, true); // Outer circle
                ctx.fill();





            }
        }
    </script>
@endsection
