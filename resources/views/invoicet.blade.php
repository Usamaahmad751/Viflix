<style>
    <?php include(public_path().'/css/invoiceBS.css');?>
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container">

    <div class="row">
        <div class="col-xs-12">
        <div class="invoice-title">
          <h2 style="color: #1bb1dc">VIFLIX</h2>
          <h3 class="pull-right">Invoice No. # {{ $title }} </h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-condensed">
              <thead>
                  <tr>
                    <td><strong>Client Name</strong></td>
                    <td class="text-center"><strong>Email</strong></td>
                    <td class="text-right"><strong>Date</strong></td>
                  </tr>
              </thead>
              <tbody>
                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                <tr>
                  <td>{{$name}}</td>
                  <td class="text-center">{{$email}}</td>
                  <td class="text-right">{{$date}}</td>
                </tr> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div style="background-color: #d6f3fc" class="panel-heading">
            <h3 class="panel-title"><strong>Bank Wire Transfer</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                    <tr>
                      <td><strong>Account Title</strong></td>
                      <td class="text-center"><strong>IBAN</strong></td>
                      <td class="text-center"><strong>Swift Code</strong></td>
                      <td class="text-right"><strong>Branch Code</strong></td>
                    </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                    <td>Muhammad Saad Raza</td>
                    <td class="text-center">PK39HABB0006407901150203</td>
                    <td class="text-center">HABBPKKA</td>
                    <td class="text-right">640</td>
                  </tr>
                  <tr>
                    <td> </td>
                    <td class="text-center"> </td>
                    <td class="text-center"></td>
                    <td class="text-right"></td>
                  </tr>
                  <tr>
                    <td>Or pay us through Payoneer wire transfer!</td>
                  </tr>
                  <tr>
                    <td>Email:  Viflix9099@gmail.com</td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-right"></td>
                  </tr> 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div style="background-color: #d6f3fc" class="panel-heading">
            <h3 class="panel-title"><strong>Order summary</strong></h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-condensed">
                <thead>
                                <tr>
                      <td><strong>Products</strong></td>
                      <td class="text-center"><strong>Final Video Duration</strong></td>
                      <td class="text-center"><strong>Raw Footage Duration</strong></td>
                      <td class="text-center"><strong>Music Provided</strong></td>
                      <td class="text-right"><strong>Total</strong></td>
                                </tr>
                </thead>
                <tbody>
                  <!-- foreach ($order->lineItems as $line) or some such thing here -->
                  <tr>
                    <td>{{$category}}</td>
                    <td class="text-center">{{$totallength}} Minutes</td>
                    <td class="text-center">{{$rawlength}} Minutes</td>
                    <td class="text-center">{{$music}}</td>
                    <td class="text-right">${{$total}}</td>
                  </tr>

                  <tr>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line"></td>
                    <td class="thick-line text-center"><strong>Subtotal</strong></td>
                    <td class="thick-line text-right">${{$total}}</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Discount</strong></td>
                    <td class="no-line text-right">{{$promo}}% = ${{($promo/100)*($total)}}</td>
                  </tr>
                  <tr>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line"></td>
                    <td class="no-line text-center"><strong>Net Total</strong></td>
                    <td class="no-line text-right">${{$total-(($promo/100)*($total))}}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>

<style type="text/css">
  .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
</style>
