@extends('layouts.invoiceview')

@section('content')

<div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
   <!-- <todo-component></todo-component> -->
   <div class="container-fluid mt-4">
      <div class="wd-flex flex-column justify-content-center align-items-center">
              <div class="row">
                      <div class="col-12">
      
                              <!-- Main content -->
                              <div class="invoice p-3 mb-3">
                                <!-- title row -->
                                <div class="row">
                                  <div class="col-12">
                                    <h4>
                                      <i class="fa fa-globe"></i> NgeeekAdmin.
                                      <small class="float-right">Date: 2/10/2018</small>
                                    </h4>
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                  <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                      <strong>NgeeekAdmin.</strong><br>
                                      795 Folsom Ave, Suite 600<br>
                                      San Francisco, CA 94107<br>
                                      Phone: (804) 123-5432<br>
                                      Email: info@ngeeek.com
                                    </address>
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4 invoice-col">
                                    To
                                    <address>
                                      <strong>Emmy Osawaradu</strong><br>
                                      795 Folsom Ave, Suite 600<br>
                                      San Francisco, CA 94107<br>
                                      Phone: (555) 539-1037<br>
                                      Email: emmyosawarando@gmail.com
                                    </address>
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-sm-4 invoice-col">
                                    <b>Invoice #007612</b><br>
                                    <br>
                                    <b>Order ID:</b> 4F3S8J<br>
                                    <b>Payment Due:</b> 2/22/2014<br>
                                    <b>Account:</b> 968-34567
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->
      
                                <!-- Table row -->
                                <div class="row">
                                  <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                      <thead>
                                      <tr>
                                        <th>Qty</th>
                                        <th>Product</th>
                                        <th>Serial #</th>
                                        <th>Description</th>
                                        <th>Subtotal</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                        <td>1</td>
                                        <td>Call of Duty</td>
                                        <td>455-981-221</td>
                                        <td>game for playstation 5</td>
                                        <td>$64.50</td>
                                      </tr>
                                      <tr>
                                        <td>1</td>
                                        <td>Need for Speed IV</td>
                                        <td>247-925-726</td>
                                        <td>game for playstation 5</td>
                                        <td>$50.00</td>
                                      </tr>
                                      <tr>
                                        <td>1</td>
                                        <td>Playstation 5</td>
                                        <td>735-845-642</td>
                                        <td>playstation 5 console</td>
                                        <td>$399.70</td>
                                      </tr>
                                      <tr>
                                        <td>1</td>
                                        <td>controller pad for PS5</td>
                                        <td>422-568-642</td>
                                        <td>Ps5 controller pad</td>
                                        <td>$100.99</td>
                                      </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->
      
                                <div class="row">
                                  <!-- accepted payments column -->
                                  <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/visa.png" alt="Visa">
                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/american-express.png" alt="American Express">
                                    <img src="https://adminlte.io/themes/dev/AdminLTE/dist/img/credit/paypal2.png" alt="Paypal">
      
                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                      This payment must be confirmed upon recieving your products.
                                    </p>
                                  </div>
                                  <!-- /.col -->
                                  <div class="col-6">
                                    <p class="lead">Amount Due 2/22/2014</p>
      
                                    <div class="table-responsive">
                                      <table class="table">
                                        <tbody><tr>
                                          <th style="width:50%">Subtotal:</th>
                                          <td>$800.30</td>
                                        </tr>
                                        <tr>
                                          <th>Tax (9.3%)</th>
                                          <td>$10.34</td>
                                        </tr>
                                        <tr>
                                          <th>Shipping:</th>
                                          <td>$20.80</td>
                                        </tr>
                                        <tr>
                                          <th>Total:</th>
                                          <td>$830.24</td>
                                        </tr>
                                      </tbody></table>
                                    </div>
                                  </div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->
      
                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                  <div class="col-12">
      
                                    <a href="" @click.prevent="printme" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-success float-right">
                                        <i class="fa fa-credit-card"></i>
                                        Submit Payment
                                    </button>
      
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                      <i class="fa fa-download"></i> Generate PDF
                                    </button>
      
                                  </div>
                                </div>
      
                              </div>
                              <!-- /.invoice -->
                            </div>
              </div>
          </div>
        </div>
      </div>
</div>

@endsection