@extends('group_level.lay')


@section('title' , __('Users'))


@section('style')
<style>
    .text-gradient.text-primary {
        background-image: linear-gradient(1deg,#7928ca,#ff0080);
    }
</style>

@endsection

@section('content')
    @php
        $clusters = \App\Cluster::with('garment')->get();
    @endphp
    @php
        $Graph_details = \App\Graph::get();

    @endphp
    <div class="row mt-4 m-1">
                <div class="col-lg-12 mb-lg-0 mb-4">
                        <div class="row">
                            <div class="col-sm">
                                <div class="card mb-2">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <h1 class="text-gradient text-primary mb-0"><span id="status4" countto="417">05</span></h1>
                                                    <h6 class="mb-0 text_grey">
                                                       Group Level
                                                    </h6>
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">Users</p>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                    <img src="{{ asset('assets/img/user.png') }}" class="border-radius-lg w-100" style="" alt="main_logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card mb-2">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <h1 class="text-gradient text-primary mb-0"><span id="status4" countto="417">17</span></h1>
                                                    <h6 class="mb-0 text_grey">
                                                        Cluster Level
                                                    </h6>
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">Users</p>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('assets/img/user.png') }}" class="border-radius-lg w-100" style="" alt="main_logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="card mb-2">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="numbers">
                                                    <h1 class="text-gradient text-primary mb-0"><span id="status4" countto="417">36</span></h1>
                                                    <h6 class="mb-0 text_grey">
                                                        Facility Level
                                                    </h6>
                                                    <p class="text-sm mb-0 text-capitalize font-weight-bold text-secondary">Users</p>
                                                </div>
                                            </div>
                                            <div class="col-4 text-center">
                                                <img src="{{ asset('assets/img/user.png') }}" class="border-radius-lg w-100" style="" alt="main_logo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
    </div>

    <div class="row mt-4 m-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="row">
                <div class="card">
                        <div class="card-body p-3">
                            <div class="nav-wrapper position-relative w-25">
                                <ul class="nav nav-pills nav-fill p-1 text_grey" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mb-0 px-0 py-1 active text_grey" data-bs-toggle="tab" href="#cam1" role="tab" aria-controls="cam1" aria-selected="true">
                                            New
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mb-0 px-0 py-1 text_grey" data-bs-toggle="tab" href="#cam2" role="tab" aria-controls="cam2" aria-selected="false" tabindex="-1">
                                            Edit
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mb-0 px-0 py-1 text_grey" data-bs-toggle="tab" href="#cam3" role="tab" aria-controls="cam3" aria-selected="false" tabindex="-1">
                                            Approval
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <div class="card-body p-3 mt-2">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show position-relative active border-radius-lg" id="cam1" role="tabpanel" aria-labelledby="cam1">
                                <form class="text_gray">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Full Name</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Email</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email@stargarments.lk">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Contact</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Password</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Default@123">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Level</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Cluster</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Facility</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Department</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1" class="text_grey">Job Role</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                    <button type="button" class="btn bg-gradient-info btn-lg">Create</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show position-relative border-radius-lg" id="cam2" role="tabpanel" aria-labelledby="cam2" style="">

                            </div>
                            <div class="tab-pane fade show position-relative border-radius-lg" id="cam3" role="tabpanel" aria-labelledby="cam2" style="">

                            </div>
                        </div>
                    </div>
                </div>
    </div>
        </div>
    </div>
    <div class="row mt-4 m-3">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="card">
                    <div class="card-header p-0 mx-3 mt-3 position-relative z-index-1">
                        <div class="row">
                        <div class="col-md-4"><h5 class="text_grey">User List</h5></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Select Level</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Select Cluster</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Select Facility</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div></div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    <input class="form-control" placeholder="Type here..." type="text">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-flush" id="example">
                                <thead class="thead-light">
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Position
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Office
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Age
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Start date
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Salary
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-sm font-weight-normal">Tiger Nixon</td>
                                    <td class="text-sm font-weight-normal">System Architect</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">61</td>
                                    <td class="text-sm font-weight-normal">2011/04/25</td>
                                    <td class="text-sm font-weight-normal">$320,800</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Garrett Winters</td>
                                    <td class="text-sm font-weight-normal">Accountant</td>
                                    <td class="text-sm font-weight-normal">Tokyo</td>
                                    <td class="text-sm font-weight-normal">63</td>
                                    <td class="text-sm font-weight-normal">2011/07/25</td>
                                    <td class="text-sm font-weight-normal">$170,750</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Ashton Cox</td>
                                    <td class="text-sm font-weight-normal">
                                        Junior Technical Author
                                    </td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">66</td>
                                    <td class="text-sm font-weight-normal">2009/01/12</td>
                                    <td class="text-sm font-weight-normal">$86,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Cedric Kelly</td>
                                    <td class="text-sm font-weight-normal">
                                        Senior Javascript Developer
                                    </td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">22</td>
                                    <td class="text-sm font-weight-normal">2012/03/29</td>
                                    <td class="text-sm font-weight-normal">$433,060</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Airi Satou</td>
                                    <td class="text-sm font-weight-normal">Accountant</td>
                                    <td class="text-sm font-weight-normal">Tokyo</td>
                                    <td class="text-sm font-weight-normal">33</td>
                                    <td class="text-sm font-weight-normal">2008/11/28</td>
                                    <td class="text-sm font-weight-normal">$162,700</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Brielle Williamson</td>
                                    <td class="text-sm font-weight-normal">
                                        Integration Specialist
                                    </td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">61</td>
                                    <td class="text-sm font-weight-normal">2012/12/02</td>
                                    <td class="text-sm font-weight-normal">$372,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Herrod Chandler</td>
                                    <td class="text-sm font-weight-normal">Sales Assistant</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">59</td>
                                    <td class="text-sm font-weight-normal">2012/08/06</td>
                                    <td class="text-sm font-weight-normal">$137,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Rhona Davidson</td>
                                    <td class="text-sm font-weight-normal">
                                        Integration Specialist
                                    </td>
                                    <td class="text-sm font-weight-normal">Tokyo</td>
                                    <td class="text-sm font-weight-normal">55</td>
                                    <td class="text-sm font-weight-normal">2010/10/14</td>
                                    <td class="text-sm font-weight-normal">$327,900</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Colleen Hurst</td>
                                    <td class="text-sm font-weight-normal">
                                        Javascript Developer
                                    </td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">39</td>
                                    <td class="text-sm font-weight-normal">2009/09/15</td>
                                    <td class="text-sm font-weight-normal">$205,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Sonya Frost</td>
                                    <td class="text-sm font-weight-normal">Software Engineer</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">23</td>
                                    <td class="text-sm font-weight-normal">2008/12/13</td>
                                    <td class="text-sm font-weight-normal">$103,600</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Jena Gaines</td>
                                    <td class="text-sm font-weight-normal">Office Manager</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">30</td>
                                    <td class="text-sm font-weight-normal">2008/12/19</td>
                                    <td class="text-sm font-weight-normal">$90,560</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Quinn Flynn</td>
                                    <td class="text-sm font-weight-normal">Support Lead</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">22</td>
                                    <td class="text-sm font-weight-normal">2013/03/03</td>
                                    <td class="text-sm font-weight-normal">$342,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Charde Marshall</td>
                                    <td class="text-sm font-weight-normal">Regional Director</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">36</td>
                                    <td class="text-sm font-weight-normal">2008/10/16</td>
                                    <td class="text-sm font-weight-normal">$470,600</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Haley Kennedy</td>
                                    <td class="text-sm font-weight-normal">
                                        Senior Marketing Designer
                                    </td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">43</td>
                                    <td class="text-sm font-weight-normal">2012/12/18</td>
                                    <td class="text-sm font-weight-normal">$313,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">
                                        Tatyana Fitzpatrick
                                    </td>
                                    <td class="text-sm font-weight-normal">Regional Director</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">19</td>
                                    <td class="text-sm font-weight-normal">2010/03/17</td>
                                    <td class="text-sm font-weight-normal">$385,750</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Michael Silva</td>
                                    <td class="text-sm font-weight-normal">Marketing Designer</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">66</td>
                                    <td class="text-sm font-weight-normal">2012/11/27</td>
                                    <td class="text-sm font-weight-normal">$198,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Paul Byrd</td>
                                    <td class="text-sm font-weight-normal">
                                        Chief Financial Officer (CFO)
                                    </td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">64</td>
                                    <td class="text-sm font-weight-normal">2010/06/09</td>
                                    <td class="text-sm font-weight-normal">$725,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Gloria Little</td>
                                    <td class="text-sm font-weight-normal">
                                        Systems Administrator
                                    </td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">59</td>
                                    <td class="text-sm font-weight-normal">2009/04/10</td>
                                    <td class="text-sm font-weight-normal">$237,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Bradley Greer</td>
                                    <td class="text-sm font-weight-normal">Software Engineer</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">41</td>
                                    <td class="text-sm font-weight-normal">2012/10/13</td>
                                    <td class="text-sm font-weight-normal">$132,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Dai Rios</td>
                                    <td class="text-sm font-weight-normal">Personnel Lead</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">35</td>
                                    <td class="text-sm font-weight-normal">2012/09/26</td>
                                    <td class="text-sm font-weight-normal">$217,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Jenette Caldwell</td>
                                    <td class="text-sm font-weight-normal">Development Lead</td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">30</td>
                                    <td class="text-sm font-weight-normal">2011/09/03</td>
                                    <td class="text-sm font-weight-normal">$345,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Yuri Berry</td>
                                    <td class="text-sm font-weight-normal">
                                        Chief Marketing Officer (CMO)
                                    </td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">40</td>
                                    <td class="text-sm font-weight-normal">2009/06/25</td>
                                    <td class="text-sm font-weight-normal">$675,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Caesar Vance</td>
                                    <td class="text-sm font-weight-normal">Pre-Sales Support</td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">21</td>
                                    <td class="text-sm font-weight-normal">2011/12/12</td>
                                    <td class="text-sm font-weight-normal">$106,450</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Doris Wilder</td>
                                    <td class="text-sm font-weight-normal">Sales Assistant</td>
                                    <td class="text-sm font-weight-normal">Sidney</td>
                                    <td class="text-sm font-weight-normal">23</td>
                                    <td class="text-sm font-weight-normal">2010/09/20</td>
                                    <td class="text-sm font-weight-normal">$85,600</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Angelica Ramos</td>
                                    <td class="text-sm font-weight-normal">
                                        Chief Executive Officer (CEO)
                                    </td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">47</td>
                                    <td class="text-sm font-weight-normal">2009/10/09</td>
                                    <td class="text-sm font-weight-normal">$1,200,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Gavin Joyce</td>
                                    <td class="text-sm font-weight-normal">Developer</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">42</td>
                                    <td class="text-sm font-weight-normal">2010/12/22</td>
                                    <td class="text-sm font-weight-normal">$92,575</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Jennifer Chang</td>
                                    <td class="text-sm font-weight-normal">Regional Director</td>
                                    <td class="text-sm font-weight-normal">Singapore</td>
                                    <td class="text-sm font-weight-normal">28</td>
                                    <td class="text-sm font-weight-normal">2010/11/14</td>
                                    <td class="text-sm font-weight-normal">$357,650</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Brenden Wagner</td>
                                    <td class="text-sm font-weight-normal">Software Engineer</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">28</td>
                                    <td class="text-sm font-weight-normal">2011/06/07</td>
                                    <td class="text-sm font-weight-normal">$206,850</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Fiona Green</td>
                                    <td class="text-sm font-weight-normal">
                                        Chief Operating Officer (COO)
                                    </td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">48</td>
                                    <td class="text-sm font-weight-normal">2010/03/11</td>
                                    <td class="text-sm font-weight-normal">$850,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Shou Itou</td>
                                    <td class="text-sm font-weight-normal">Regional Marketing</td>
                                    <td class="text-sm font-weight-normal">Tokyo</td>
                                    <td class="text-sm font-weight-normal">20</td>
                                    <td class="text-sm font-weight-normal">2011/08/14</td>
                                    <td class="text-sm font-weight-normal">$163,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Michelle House</td>
                                    <td class="text-sm font-weight-normal">
                                        Integration Specialist
                                    </td>
                                    <td class="text-sm font-weight-normal">Sidney</td>
                                    <td class="text-sm font-weight-normal">37</td>
                                    <td class="text-sm font-weight-normal">2011/06/02</td>
                                    <td class="text-sm font-weight-normal">$95,400</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Suki Burks</td>
                                    <td class="text-sm font-weight-normal">Developer</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">53</td>
                                    <td class="text-sm font-weight-normal">2009/10/22</td>
                                    <td class="text-sm font-weight-normal">$114,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Prescott Bartlett</td>
                                    <td class="text-sm font-weight-normal">Technical Author</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">27</td>
                                    <td class="text-sm font-weight-normal">2011/05/07</td>
                                    <td class="text-sm font-weight-normal">$145,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Gavin Cortez</td>
                                    <td class="text-sm font-weight-normal">Team Leader</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">22</td>
                                    <td class="text-sm font-weight-normal">2008/10/26</td>
                                    <td class="text-sm font-weight-normal">$235,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Martena Mccray</td>
                                    <td class="text-sm font-weight-normal">Post-Sales support</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">46</td>
                                    <td class="text-sm font-weight-normal">2011/03/09</td>
                                    <td class="text-sm font-weight-normal">$324,050</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Unity Butler</td>
                                    <td class="text-sm font-weight-normal">Marketing Designer</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">47</td>
                                    <td class="text-sm font-weight-normal">2009/12/09</td>
                                    <td class="text-sm font-weight-normal">$85,675</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Howard Hatfield</td>
                                    <td class="text-sm font-weight-normal">Office Manager</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">51</td>
                                    <td class="text-sm font-weight-normal">2008/12/16</td>
                                    <td class="text-sm font-weight-normal">$164,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Hope Fuentes</td>
                                    <td class="text-sm font-weight-normal">Secretary</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">41</td>
                                    <td class="text-sm font-weight-normal">2010/02/12</td>
                                    <td class="text-sm font-weight-normal">$109,850</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Vivian Harrell</td>
                                    <td class="text-sm font-weight-normal">
                                        Financial Controller
                                    </td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">62</td>
                                    <td class="text-sm font-weight-normal">2009/02/14</td>
                                    <td class="text-sm font-weight-normal">$452,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Timothy Mooney</td>
                                    <td class="text-sm font-weight-normal">Office Manager</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">37</td>
                                    <td class="text-sm font-weight-normal">2008/12/11</td>
                                    <td class="text-sm font-weight-normal">$136,200</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Jackson Bradshaw</td>
                                    <td class="text-sm font-weight-normal">Director</td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">65</td>
                                    <td class="text-sm font-weight-normal">2008/09/26</td>
                                    <td class="text-sm font-weight-normal">$645,750</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Olivia Liang</td>
                                    <td class="text-sm font-weight-normal">Support Engineer</td>
                                    <td class="text-sm font-weight-normal">Singapore</td>
                                    <td class="text-sm font-weight-normal">64</td>
                                    <td class="text-sm font-weight-normal">2011/02/03</td>
                                    <td class="text-sm font-weight-normal">$234,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Bruno Nash</td>
                                    <td class="text-sm font-weight-normal">Software Engineer</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">38</td>
                                    <td class="text-sm font-weight-normal">2011/05/03</td>
                                    <td class="text-sm font-weight-normal">$163,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Sakura Yamamoto</td>
                                    <td class="text-sm font-weight-normal">Support Engineer</td>
                                    <td class="text-sm font-weight-normal">Tokyo</td>
                                    <td class="text-sm font-weight-normal">37</td>
                                    <td class="text-sm font-weight-normal">2009/08/19</td>
                                    <td class="text-sm font-weight-normal">$139,575</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Thor Walton</td>
                                    <td class="text-sm font-weight-normal">Developer</td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">61</td>
                                    <td class="text-sm font-weight-normal">2013/08/11</td>
                                    <td class="text-sm font-weight-normal">$98,540</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Finn Camacho</td>
                                    <td class="text-sm font-weight-normal">Support Engineer</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">47</td>
                                    <td class="text-sm font-weight-normal">2009/07/07</td>
                                    <td class="text-sm font-weight-normal">$87,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Serge Baldwin</td>
                                    <td class="text-sm font-weight-normal">Data Coordinator</td>
                                    <td class="text-sm font-weight-normal">Singapore</td>
                                    <td class="text-sm font-weight-normal">64</td>
                                    <td class="text-sm font-weight-normal">2012/04/09</td>
                                    <td class="text-sm font-weight-normal">$138,575</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Zenaida Frank</td>
                                    <td class="text-sm font-weight-normal">Software Engineer</td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">63</td>
                                    <td class="text-sm font-weight-normal">2010/01/04</td>
                                    <td class="text-sm font-weight-normal">$125,250</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Zorita Serrano</td>
                                    <td class="text-sm font-weight-normal">Software Engineer</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">56</td>
                                    <td class="text-sm font-weight-normal">2012/06/01</td>
                                    <td class="text-sm font-weight-normal">$115,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Jennifer Acosta</td>
                                    <td class="text-sm font-weight-normal">
                                        Junior Javascript Developer
                                    </td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">43</td>
                                    <td class="text-sm font-weight-normal">2013/02/01</td>
                                    <td class="text-sm font-weight-normal">$75,650</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Cara Stevens</td>
                                    <td class="text-sm font-weight-normal">Sales Assistant</td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">46</td>
                                    <td class="text-sm font-weight-normal">2011/12/06</td>
                                    <td class="text-sm font-weight-normal">$145,600</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Hermione Butler</td>
                                    <td class="text-sm font-weight-normal">Regional Director</td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">47</td>
                                    <td class="text-sm font-weight-normal">2011/03/21</td>
                                    <td class="text-sm font-weight-normal">$356,250</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Lael Greer</td>
                                    <td class="text-sm font-weight-normal">
                                        Systems Administrator
                                    </td>
                                    <td class="text-sm font-weight-normal">London</td>
                                    <td class="text-sm font-weight-normal">21</td>
                                    <td class="text-sm font-weight-normal">2009/02/27</td>
                                    <td class="text-sm font-weight-normal">$103,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Jonas Alexander</td>
                                    <td class="text-sm font-weight-normal">Developer</td>
                                    <td class="text-sm font-weight-normal">San Francisco</td>
                                    <td class="text-sm font-weight-normal">30</td>
                                    <td class="text-sm font-weight-normal">2010/07/14</td>
                                    <td class="text-sm font-weight-normal">$86,500</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Shad Decker</td>
                                    <td class="text-sm font-weight-normal">Regional Director</td>
                                    <td class="text-sm font-weight-normal">Edinburgh</td>
                                    <td class="text-sm font-weight-normal">51</td>
                                    <td class="text-sm font-weight-normal">2008/11/13</td>
                                    <td class="text-sm font-weight-normal">$183,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Michael Bruce</td>
                                    <td class="text-sm font-weight-normal">
                                        Javascript Developer
                                    </td>
                                    <td class="text-sm font-weight-normal">Singapore</td>
                                    <td class="text-sm font-weight-normal">29</td>
                                    <td class="text-sm font-weight-normal">2011/06/27</td>
                                    <td class="text-sm font-weight-normal">$183,000</td>
                                </tr>
                                <tr>
                                    <td class="text-sm font-weight-normal">Donna Snider</td>
                                    <td class="text-sm font-weight-normal">Customer Support</td>
                                    <td class="text-sm font-weight-normal">New York</td>
                                    <td class="text-sm font-weight-normal">27</td>
                                    <td class="text-sm font-weight-normal">2011/01/25</td>
                                    <td class="text-sm font-weight-normal">$112,000</td>
                                </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{{--    <div class="row mt-4">--}}
{{--        <div class="col-lg-12 mb-lg-0 mb-4">--}}
{{--            <div class="card z-index-2">--}}
{{--                <div class="card-header pb-0">--}}
{{--                    <h6>Add Users</h6>--}}
{{--                </div>--}}
{{--                <div class="card-body p-3">--}}
{{--                    <form  action="{{ route('super_admin/save-user') }}" method="POST" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name" name="fname">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Last Name" name="lname">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Email" name="email">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Contact Number" name="mnumber">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="exampleFormControlSelect5">Select Level</label>--}}
{{--                                <select class="form-control" id="exampleFormControlSelect5" required name="user_type">--}}

{{--                                    <option value=""> -- Select Level -- </option>--}}
{{--                                    <option value="Group Level">Group Level</option>--}}
{{--                                    <option value="Cluster Level">Cluster Level</option>--}}
{{--                                    <option value="Facility Level">Facility Level</option>--}}
{{--                                    <option value="Recoder">Recoder</option>--}}

{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-md-6" id="hiding_cluster">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect6">Select Cluster</label>--}}
{{--                                    <select class="form-control" id="exampleFormControlSelect6" required name="cluster">--}}
{{--                                        <option value="">-- Please select --</option>--}}
{{--                                        @foreach($clusters as $clusters_name)--}}
{{--                                            <option value="{{$clusters_name->id}}">{{ $clusters_name->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6" id="hiding_garment">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="exampleFormControlSelect7">Select Facility</label>--}}
{{--                                    <select class="form-control" id="exampleFormControlSelect7" required name="garment">--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row" id="hiding_check_field">--}}
{{--                            @foreach($Graph_details as $Graph_detail)--}}
{{--                                <div class="col-md-12" >--}}
{{--                                    <div class="form-check">--}}

{{--                                        <input class="form-check-input" type="checkbox" value="{{$Graph_detail->id}}" id="fcustomCheck1" name="fields_of_graph[]">--}}
{{--                                        <label class="custom-control-label" for="customCheck1">{{$Graph_detail->type_of_data}}</label>--}}

{{--                                    </div></div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}

{{--                        <button class="btn btn-primary" type="submit">Save</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    </div>--}}


{{--    </div>--}}
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            dataTable = $("#example").DataTable({
                "columnDefs": [
                    {
                        "targets": [5],
                        "visible": false
                    }
                ]
            });
        });

        $(document).ready(function () {

            $("#exampleFormControlSelect6").change(function (event) {
                cluster_id  = $(this).val();
                var taskSelect = $('#exampleFormControlSelect7');
                taskSelect.empty();
                taskSelect.append(
                    $('<option></option>').val('').html('-- Please select related Garment --')
                );
                $.ajax({
                    type:'POST',
                    url:'{{ route('super_admin/adduserto/cluster') }}',
                    headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
                    data: {
                        'cluster_id' : cluster_id,

                    },
                    success:function(data){
                        //console.log(data);
                        if(data.length >= 0){
                            $.each(data , function(index, val) {
                                console.log(val);

                                taskSelect.append(
                                    $('<option></option>').val(val.id).html(val.name)
                                );
                            });
                        }else{
                            console.log('no data');
                        }
                        taskSelect.append(
                            $('<option></option>').val('not_found').html('-- Not on this list --')
                        );

                    }
                });
                // alert("You have Selected  :: "+$(this).val());
            });

            $("#exampleFormControlSelect5").change(function (event) {
                var level_value  = $(this).val();
                if(level_value === 'Group Level') {
                    $("#hiding_cluster").hide();
                    $("#hiding_garment").hide();
                    $("#hiding_check_field").hide();
                    $('#exampleFormControlSelect6').prop('required',false);
                    $('#exampleFormControlSelect7').prop('required',false);
                    $('#fcustomCheck1').prop('required',false);

                }else if(level_value === 'Cluster Level') {
                    $("#hiding_cluster").show();
                    $("#hiding_garment").hide();
                    $("#hiding_check_field").hide();
                    $('#exampleFormControlSelect6').prop('required',true);
                    $('#exampleFormControlSelect7').prop('required',false);
                    $('#fcustomCheck1').prop('required',false);
                }else if(level_value === 'Facility Level') {
                    $("#hiding_cluster").show();
                    $("#hiding_garment").show();
                    $("#hiding_check_field").hide();
                    $('#exampleFormControlSelect6').prop('required',true);
                    $('#exampleFormControlSelect7').prop('required',true);
                    $('#fcustomCheck1').prop('required',false);
                }else if(level_value === 'Recoder') {
                    $("#hiding_cluster").show();
                    $("#hiding_garment").show();
                    $("#hiding_check_field").show();
                    $('#exampleFormControlSelect6').prop('required',true);
                    $('#exampleFormControlSelect7').prop('required',true);
                    $('#fcustomCheck1').prop('required',false);
                }
            });
        });
    </script>
@endsection
