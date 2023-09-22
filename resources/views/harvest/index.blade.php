@extends('layouts.master')
@section('title')
    Harvest
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="mb-0">Datatable Search</h5>
            <p class="text-sm mb-0">
                A lightweight, extendable, dependency-free javascript HTML table plugin.
            </p>
        </div>
        <div class="table-responsive">
            <table class="table table-flush" id="datatable-search">
                <thead class="thead-light">
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
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
                        <td class="text-sm font-weight-normal">Junior Technical Author</td>
                        <td class="text-sm font-weight-normal">San Francisco</td>
                        <td class="text-sm font-weight-normal">66</td>
                        <td class="text-sm font-weight-normal">2009/01/12</td>
                        <td class="text-sm font-weight-normal">$86,000</td>
                    </tr>
                    <tr>
                        <td class="text-sm font-weight-normal">Cedric Kelly</td>
                        <td class="text-sm font-weight-normal">Senior Javascript Developer</td>
                        <td class="text-sm font-weight-normal">Edinburgh</td>
                        <td class="text-sm font-weight-normal">22</td>
                        <td class="text-sm font-weight-normal">2012/03/29</td>
                        <td class="text-sm font-weight-normal">$433,060</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
