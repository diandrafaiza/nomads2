@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
<main>
    <section class="section-detail-header"></section>
      <section class="section-detail-content">
        <div class="container">
          <div class="row">
            <div class="col p-0"> <!-- biar sejajar sm yg bawah yg kirinya-->
              <nav>
                <ol class="breadcrumb"> <!-- breadcrumb itu tulisan yg Paket Travel/Details-->
                  <li class="breadcrumb-item ">
                    Paket Travel
                  </li>
                  <li class="breadcrumb-item">
                    Details
                  </li>
                  <li class="breadcrumb-item active">
                    Checkout
                  </li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-detail">
                <h1>Who is Going</h1>
                <p>
                  Trip to Ubud, Bali, Indonesia
                </p>

                <div class="attendee">
                    <table class="table table-responsive-sm text-center">
                      <thead>
                        <tr>
                          <td scope="col">Picture</td>
                          <td scope="col">Name</td>
                          <td scope="col">Nationality</td>
                          <td scope="col">Visa</td>
                          <td scope="col">Passport</td>
                          <td scope="col"></td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img
                              src="{{url('frontend/images/avatar-1.png')}}"
                              alt=""
                              height="60"
                            />
                          </td>
                          <td class="align-middle">Angga Risky</td>
                          <td class="align-middle">CN</td>
                          <td class="align-middle">N/A</td>
                          <td class="align-middle">Active</td>
                          <td class="align-middle">
                            <a href="#">
                              <img src="{{url('frontend/images/ic_remove.png')}}" alt="" />
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img
                              src="{{url('frontend/images/avatar-1.png')}}"
                              alt=""
                              height="60"
                            />
                          </td>
                          <td class="align-middle">Galih Pratama</td>
                          <td class="align-middle">SG</td>
                          <td class="align-middle">30 Days</td>
                          <td class="align-middle">Active</td>
                          <td class="align-middle">
                            <a href="#">
                              <img src="{{url('frontend/images/ic_remove.png')}}" alt="" />
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                <div class="member mt-3">
                  <h2>Add Member</h2>
                  <form class="form-inline">
                    <label for="inputUsername" class="sr-only"> Name </label> <!--sr = screen reader-->
                    <input type="text"
                    class="form-control mb-2 mr-sm-2"
                    id="inputUsername"
                    placeholder="username"
                    name="inputUsername">

                    <label for="inputVisa" class="sr-only"> VISA </label> <!--sr = screen reader-->
                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                      <option value="VISA" selected>VISA</option>
                      <option value="30 Days">30 Days></option>
                      <option value="N/A">N/A></option>
                    </select>

                    <label for="doePassport" class="sr-only">DOE Passport</label> <!--sr = screen reader-->
                    <div class="input-group mb-2 mr-sm-2">
                      <input type="text" class="form-control datepicker"
                      id="doePassport" placeholder="DOE Passport">
                    </div>

                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                      Add Now
                    </button>
                  </form>

                  <h3 class="mt-2 mb-0">Note</h3>
                  <p class="disclaimer mb-0">
                    You are only able to invite member that has registered in Nomads
                  </p>
                </div>
              </div>
            </div>

            <div class="col lg-4">
              <div class="card card-detail card-right">
                <h2>Checkout Information</h2>
                <table class="trip-informations">
                  <tr>
                    <th width="50%">Members</th> <!-- Table heading-->
                    <td width="50%" class="text-right">
                      2 Person
                    </td> <!--Table data-->
                  </tr>
                  <tr>
                    <th width="50%">Additional VISA</th> <!-- Table heading-->
                    <td width="50%" class="text-right">
                      $ 190,00
                    </td> <!--Table data-->
                  </tr>
                  <tr>
                    <th width="50%">Trip Price</th> <!-- Table heading-->
                    <td width="50%" class="text-right">
                      $80,00 / person
                    </td> <!--Table data-->
                  </tr>
                  <tr>
                    <th width="50%">Sub Total</th> <!-- Table heading-->
                    <td width="50%" class="text-right">
                      $200,00
                    </td> <!--Table data-->
                  </tr>
                  <tr>
                    <th width="50%">Total (+Unique)</th> <!-- Table heading-->
                    <td width="50%" class="text-right text-total">
                      <span class="text-blue">
                        $279,
                      </span>
                      <span class="text-orange">
                        33
                      </span>
                    </td> <!--Table data-->
                  </tr>
                </table>
                <hr>

                <h2>Payment Instruction</h2>
                <p class="payment-instruction">
                  Please complete your payment before continue to the wonderful trip
                </p>
                <div class="bank">
                  <div class="bank-item pb-3">
                    <img src="{{url('frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                    <div class="description">
                      <h3> PT Nomads ID</h3>
                      <p>
                        0881 8819 82882
                        <br>
                        Bank Central Asia
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="bank-item pb-3">
                    <img src="{{url('frontend/images/ic_bank.png')}}" alt="" class="bank-image">
                    <div class="description">
                      <h3> PT Nomads ID</h3>
                      <p>
                        0282 8293 7373
                        <br>
                        Bank HSBC
                      </p>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>

              </div>

              <div class="join-container">
                <a href="{{url('/checkout/success')}}" class="btn btn-block btn-join-now mt-3 py-2">
                  I've made a payment
                </a>
              </div>
              <div class="text-center mt-3">
                <a href="{{url('/detail')}}" class="text-muted">
                  Cancel Booking
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
  </main>

@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/libraries/gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
    <script>
      $(document).ready(function() {
        $('.datepicker').datepicker({
          uiLibrary: 'bootstrap4',
          icons: {
            rightIcon: '<img src="{{url('frontend/images/ic_doe.png')}}" alt="" />'
          }
        });
      });
    </script>


@endpush
