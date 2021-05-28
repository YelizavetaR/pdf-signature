@extends('layouts.app')

@section('pricing')
<style>
/* this styles comes from new design */
body {
  background: white;
}

/* because table header stiky */
.main {
  overflow: initial;
}
</style>

<div class="block block--top box--pricing">
  <div class="block__container">
    <div class="block__header">
      <h1 class="title">Choose the plan that's right for you</h1>
    </div>
    <div class="payment-period">
      <div class="payment-period__payments">
        <div class="payment-period__payments__item" data-period-rel="monthly">
          <span>Monthly Billing</span>
        </div>
        <div class="payment-period__payments__item  payment-period__payments__item--active" data-period-rel="yearly">
          <span>Yearly Billing</span>
          <div class="payment-period__payments__item__badge">-33%</div>
        </div>
      </div>
    </div>

    <div class="pricing">
      <div class="pricing__account pricing__account--registered">
        <div class="pricing__account__header">
          <h3 class="pricing__account__tier">Free</h3>
          <h2 class="pricing__account__price">
            <span class="pricing__price__code">RUB</span><span class="pricing__price__numbers">0</span> <span
              class="pricing__account__price__resume"></span>
          </h2>
          <div class="pricing__account__header__folding">
            <svg width="122px" height="123px" viewBox="0 0 122 123" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                transform="translate(-372.000000, -311.000000)">
                <polygon id="Path" fill="#e5322d" points="372 311 494 434 372 434"></polygon>
              </g>
            </svg>
          </div>
        </div>
        <div class="pricing__account__action">
          <a class="btn btn--white" href="/">Get started</a>

        </div>
        <div class="pricing__account__body">
          <p>Free features include:</p>
          <ul class="listcheck">
            <li class="listcheck__item listcheck__item--ok">Access to iLovePDF tools</li>
            <li class="listcheck__item listcheck__item--ok">Limited document processing</li>
            <li class="listcheck__item listcheck__item--ok">Work on Web</li>
          </ul>
        </div>
      </div>
      <div class="pricing__account pricing__account--premium">
        <div class="pricing__account__header">
          <h3 class="pricing__account__tier">Premium</h3>
          <div class="hidden" data-period-selected="monthly">
            <h2 class="pricing__account__price">
              <span class="pricing__price__code">RUB</span><span class="pricing__price__numbers">620</span> <span
                class="pricing__account__price__resume">/ month</span>
            </h2>
            <!--<p><span class="pricing__price__code">RUB</span><span class="pricing__price__numbers">620</span> Billed monthly</p>-->
          </div>
          <div data-period-selected="yearly">
            <h2 class="pricing__account__price">
              <span class="pricing__price__code">RUB</span><span class="pricing__price__numbers">415</span> <span
                class="pricing__account__price__resume">/ month</span>
            </h2>
            <p class="small white">Billed annually<br />Billed as one payment of <strong class="white"><span
                  class="pricing__price__code">RUB</span><span class="pricing__price__numbers">4,980</span></strong>
            </p>
          </div>
          <div class="pricing__account__header__folding">
            <svg width="122px" height="123px" viewBox="0 0 122 123" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                transform="translate(-372.000000, -311.000000)">
                <polygon id="Path" fill="#FFB400" points="372 311 494 434 372 434"></polygon>
              </g>
            </svg>
          </div>
        </div>
        <div class="pricing__account__action">
          <a class="btn btn--orange" href="/user/premium">Go Premium</a>
        </div>
        <div class="pricing__account__body web--text">
          <p>Premium features include:</p>
          <ul class="listcheck">
            <li class="listcheck__item listcheck__item--ok">Full access to iLovePDF tools</li>
            <li class="listcheck__item listcheck__item--ok">Unlimited document processing</li>

            <li class="listcheck__item listcheck__item--ok">Work on Web, Mobile and Desktop</li>
            <li class="listcheck__item listcheck__item--ok">Convert scanned PDF to Word with OCR, sign with
              certificate-based digital signatures, convert to PDF/A</li>
            <li class="listcheck__item listcheck__item--ok">No Ads</li>
            <li class="listcheck__item listcheck__item--ok">Customer support</li>
          </ul>
        </div>
      </div>
      <div class="pricing__account pricing__account--business">
        <div class="pricing__account__header">
          <h3 class="pricing__account__tier">Business</h3>
          <h2 class="pricing__account__price"><span class="pricing__account__price__resume"><strong>Custom
                pricing</strong></span>
          </h2>
          <p>Pricing plan tailored for your business</p>

          <div class="pricing__account__header__folding">
            <svg width="122px" height="123px" viewBox="0 0 122 123" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                transform="translate(-372.000000, -311.000000)">
                <polygon id="Path" fill="#3CB6E2" points="372 311 494 434 372 434"></polygon>
              </g>
            </svg>
          </div>
        </div>
        <div class="pricing__account__action">
          <a class="btn btn--white" href="/contact">Contact sales</a>
        </div>
        <div class="pricing__account__body web--text">
          <p>Business features include all Premium features plus:</p>
          <ul class="listcheck">
            <li class="listcheck__item listcheck__item--ok">Flexible payment options</li>
            <li class="listcheck__item listcheck__item--ok">Custom contract</li>
            <li class="listcheck__item listcheck__item--ok">Dedicated customer success</li>
            <li class="listcheck__item listcheck__item--ok">Dedicated hardware</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="block__container text-center">
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <h2 class="title2">The security of your data is our priority</h2>
        <p>In addition to data encryption in transit and at rest, we operate in compliance with industry-accepted
          standards, regulations, and certifications. </p>
        <br><br>
        <div class="new-premium__logos">
          <img width="55px" height="25px" style="margin-top: 1px;"
            src="{{asset('assets/img/logos/pdf-association-logo.svg')}}" title="PDF Association">
          <img width="67px" height="30px" src="{{asset('assets/img/logos/iso-logoy.svg')}}" title="ISO27001 certified">
          <img width="80px" height="26px" src="{{asset('assets/img/logos/secure-payment-logo.svg')}}"
            title="Secure Data">
          <img width="80px" height="26px" src="{{asset('assets/img/logos/ssl-encrypted-logo.svg')}}"
            title="Secure connection Https">
        </div>
      </div>
    </div>
  </div>
</div>


<div class="block">
  <div class="block__container text-center">
    <h2 class="title1">Compare plan features</h2>
    <div style="overflow-x:auto;">
      <table class="pricing__table" id="pricingTable">
        <thead id="pricingTableHead">
          <tr>
            <th scope="col"></th>
            <th scope="col">Free</th>
            <th scope="col">Premium</th>
            <th scope="col">Business</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="col">Service</th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
          </tr>
          <tr>
            <td>Tools</td>
            <td>
              <div class="list__dropdown" data-rel="tools">Included tools</div>
              <ul class="listcheck">
                <li class="listcheck__item listcheck__item--ok">
                  Merge PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Split PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Compress PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Office to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  WORD to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  POWERPOINT to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  EXCEL to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to WORD </li>
                <li class="listcheck__item listcheck__item--fail">
                  PDF to WORD&nbsp;<b>(OCR)</b>
                </li>

                <li class="listcheck__item listcheck__item--ok">
                  PDF to POWERPOINT </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to EXCEL </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to JPG </li>
                <li class="listcheck__item listcheck__item--ok">
                  Image to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Add page numbers </li>
                <li class="listcheck__item listcheck__item--ok">
                  Add watermark </li>
                <li class="listcheck__item listcheck__item--ok">
                  Rotate PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Unlock PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Protect PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Remove PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  Reorder PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  Organize PDF pages </li>
                <li class="listcheck__item listcheck__item--fail">
                  PDF to PDF/A </li>
                <li class="listcheck__item listcheck__item--ok">
                  Repair PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Web to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Edit PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF Signature </li>
                <li class="listcheck__item listcheck__item--ok">
                  Certify PDF </li>
              </ul>
            </td>
            <td>
              <div class="list__dropdown" data-rel="tools">All tools included</div>
              <ul class="listcheck">
                <li class="listcheck__item listcheck__item--ok">
                  Merge PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Split PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Compress PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Office to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  WORD to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  POWERPOINT to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  EXCEL to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to WORD </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to WORD&nbsp;<b>(OCR)</b>
                </li>

                <li class="listcheck__item listcheck__item--ok">
                  PDF to POWERPOINT </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to EXCEL </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to JPG </li>
                <li class="listcheck__item listcheck__item--ok">
                  Image to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Add page numbers </li>
                <li class="listcheck__item listcheck__item--ok">
                  Add watermark </li>
                <li class="listcheck__item listcheck__item--ok">
                  Rotate PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Unlock PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Protect PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Remove PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  Reorder PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  Organize PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to PDF/A </li>
                <li class="listcheck__item listcheck__item--ok">
                  Repair PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Web to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Edit PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF Signature </li>
                <li class="listcheck__item listcheck__item--ok">
                  Certify PDF </li>
              </ul>
            </td>
            <td>
              <div class="list__dropdown" data-rel="tools">All tools included</div>
              <ul class="listcheck">
                <li class="listcheck__item listcheck__item--ok">
                  Merge PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Split PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Compress PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Office to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  WORD to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  POWERPOINT to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  EXCEL to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to WORD </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to WORD&nbsp;<b>(OCR)</b>
                </li>

                <li class="listcheck__item listcheck__item--ok">
                  PDF to POWERPOINT </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to EXCEL </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to JPG </li>
                <li class="listcheck__item listcheck__item--ok">
                  Image to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Add page numbers </li>
                <li class="listcheck__item listcheck__item--ok">
                  Add watermark </li>
                <li class="listcheck__item listcheck__item--ok">
                  Rotate PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Unlock PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Protect PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Remove PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  Reorder PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  Organize PDF pages </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF to PDF/A </li>
                <li class="listcheck__item listcheck__item--ok">
                  Repair PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Web to PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  Edit PDF </li>
                <li class="listcheck__item listcheck__item--ok">
                  PDF Signature </li>
                <li class="listcheck__item listcheck__item--ok">
                  Certify PDF </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Batch processing</td>
            <td>
              <div class="list__dropdown" data-rel="files">Limited</div>
              <ul class="list__tabled">
                <li>
                  <span>Merge PDF</span>
                  <span>25</span>
                </li>
                <li>
                  <span>Split PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>Compress PDF</span>
                  <span>2</span>
                </li>
                <li>
                  <span>Office to PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>WORD to PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>POWERPOINT to PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>EXCEL to PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF to Office</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF to WORD</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF to POWERPOINT</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF to EXCEL</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF to JPG</span>
                  <span>2</span>
                </li>
                <li>
                  <span>Image to PDF</span>
                  <span>20</span>
                </li>
                <li>
                  <span>Add page numbers</span>
                  <span>2</span>
                </li>
                <li>
                  <span>Add watermark</span>
                  <span>2</span>
                </li>
                <li>
                  <span>Rotate PDF</span>
                  <span>20</span>
                </li>
                <li>
                  <span>Unlock PDF</span>
                  <span>2</span>
                </li>
                <li>
                  <span>Protect PDF</span>
                  <span>2</span>
                </li>
                <li>
                  <span>Organize PDF pages</span>
                  <span>5</span>
                </li>
                <li>
                  <span>PDF to PDF/A</span>
                  <span>1</span>
                </li>
                <li>
                  <span>Repair PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>Edit PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF Signature</span>
                  <span>3</span>
                </li>
              </ul>
            </td>
            <td>
              <div class="list__dropdown" data-rel="files">
                Unlimited </div>
              <ul class="list__tabled">
                <li>
                  <span>Merge PDF</span>
                  <span>500</span>
                </li>
                <li>
                  <span>Split PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>Compress PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Office to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>WORD to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>POWERPOINT to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>EXCEL to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to Office</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to WORD</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to POWERPOINT</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to EXCEL</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to JPG</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Image to PDF</span>
                  <span>80</span>
                </li>
                <li>
                  <span>Add page numbers</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Add watermark</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Rotate PDF</span>
                  <span>80</span>
                </li>
                <li>
                  <span>Unlock PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Protect PDF</span>
                  <span>80</span>
                </li>
                <li>
                  <span>Organize PDF pages</span>
                  <span>20</span>
                </li>
                <li>
                  <span>PDF to PDF/A</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Repair PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Edit PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF Signature</span>
                  <span>5</span>
                </li>
              </ul>
            </td>
            <td>
              <div class="list__dropdown" data-rel="files">
                Unlimited </div>
              <ul class="list__tabled">
                <li>
                  <span>Merge PDF</span>
                  <span>500</span>
                </li>
                <li>
                  <span>Split PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>Compress PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Office to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>WORD to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>POWERPOINT to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>EXCEL to PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to Office</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to WORD</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to POWERPOINT</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to EXCEL</span>
                  <span>10</span>
                </li>
                <li>
                  <span>PDF to JPG</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Image to PDF</span>
                  <span>80</span>
                </li>
                <li>
                  <span>Add page numbers</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Add watermark</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Rotate PDF</span>
                  <span>80</span>
                </li>
                <li>
                  <span>Unlock PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Protect PDF</span>
                  <span>80</span>
                </li>
                <li>
                  <span>Organize PDF pages</span>
                  <span>20</span>
                </li>
                <li>
                  <span>PDF to PDF/A</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Repair PDF</span>
                  <span>10</span>
                </li>
                <li>
                  <span>Edit PDF</span>
                  <span>1</span>
                </li>
                <li>
                  <span>PDF Signature</span>
                  <span>5</span>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Filesize per task</td>
            <td>
              <div class="list__dropdown" data-rel="sizes">Limited</div>
              <ul class="list__tabled">
                <li>
                  <span>Merge PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Split PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Compress PDF</span>
                  <span>200 MB</span>
                </li>
                <li>
                  <span>Office to PDF</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>WORD to PDF</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>POWERPOINT to PDF</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>EXCEL to PDF</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>PDF to Office</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>PDF to WORD</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>PDF to POWERPOINT</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>PDF to EXCEL</span>
                  <span>15 MB</span>
                </li>
                <li>
                  <span>PDF to JPG</span>
                  <span>25 MB</span>
                </li>
                <li>
                  <span>Image to PDF</span>
                  <span>40 MB</span>
                </li>
                <li>
                  <span>Add page numbers</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Add watermark</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Rotate PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Unlock PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Protect PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Organize PDF pages</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>PDF to PDF/A</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Repair PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>Edit PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>PDF Signature</span>
                  <span>50 MB</span>
                </li>
              </ul>
            </td>
            <td>
              <div class="list__dropdown" data-rel="sizes">
                Unlimited </div>
              <ul class="list__tabled">
                <li>
                  <span>Merge PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Split PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Compress PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Office to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>WORD to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>POWERPOINT to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>EXCEL to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to Office</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to WORD</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to POWERPOINT</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to EXCEL</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to JPG</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Image to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Add page numbers</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Add watermark</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Rotate PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Unlock PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Protect PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Organize PDF pages</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to PDF/A</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Repair PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Edit PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>PDF Signature</span>
                  <span>50 MB</span>
                </li>
              </ul>
            </td>
            <td>
              <div class="list__dropdown" data-rel="sizes">
                Unlimited </div>
              <ul class="list__tabled">
                <li>
                  <span>Merge PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Split PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Compress PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Office to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>WORD to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>POWERPOINT to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>EXCEL to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to Office</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to WORD</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to POWERPOINT</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to EXCEL</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to JPG</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Image to PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Add page numbers</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Add watermark</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Rotate PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Unlock PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Protect PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Organize PDF pages</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>PDF to PDF/A</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Repair PDF</span>
                  <span>4 GB</span>
                </li>
                <li>
                  <span>Edit PDF</span>
                  <span>100 MB</span>
                </li>
                <li>
                  <span>PDF Signature</span>
                  <span>50 MB</span>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td class="tooltip"
              data-title="The cost of licences adapt according the amount of users you need to add to your team.">
              Teams</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>Up to 100 users</td>
            <td>More than 100 users</td>
          </tr>
          <tr>
            <td>Volume discount</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>Starting at 10 users</td>
            <td>
              Custom pricing </td>
          </tr>
          <tr>
            <td>Support</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>Contact Form</td>
            <td>Dedicated Account Manager</td>
          </tr>
          <tr>
            <td>Add-free service</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <th scope="col">Devices</th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
          </tr>
          <tr>
            <td>Web</td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td class="tooltip" data-title="Work offline">Desktop</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td>Mobile</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <th scope="col">E-signature</th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
          </tr>
          <tr>
            <td class="tooltip"
              data-title="A Simple Electronic Signature is commonly used to indicate a person’s consent or approval on a document. Note that with this type of signature, the integrity of the document cannot be guaranteed.">
              Simple Electronic Signatures</td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td class="tooltip" data-title="Send documents to be signed">Signatures Requests</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td class="tooltip"
              data-title="A Digital Signature is a more advanced version of a Simple Electronic Signature. It certifies the document with a qualified timestamp to assure the integrity of the signed document.">
              Digital Signatures</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div>5 / month included<br /> Customizable volume</div>
            </td>
            <td>
              <div>Customizable volume</div>
            </td>
          </tr>
          <tr>
            <td class="tooltip"
              data-title="Digitally sign documents with your own Certificate (issued by our Certification Authority partners). By default, documents are Digitally Signed with a certificate issued to ILOVEPDF SL.">
              Customized certificate</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td class="tooltip"
              data-title="Include your logo in emails and signing pages for a fully customized signing experience.">
              Personalized branding</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td class="tooltip"
              data-title="Get a step-by-step record of the signing process including information of all the parts involved and their specific time of signing.">
              Audit Trail</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td>Signed document custody</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <th scope="col">Security</th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
            <th scope="colgroup"></th>
          </tr>
          <tr>
            <td>Secure connection Https</td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td>ISO27001 certified</td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr>
            <td>Dedicated hardware</td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__no"></div>
            </td>
            <td>
              <div class="feature__yes"></div>
            </td>
          </tr>
          <tr class="no-border">
            <th class="clean"></th>
            <td><a class="btn btn--white" href="/">Get started</a></td>
            <td>
              <a class="btn btn--orange" href="/user/premium">Go Premium</a>
            </td>
            <td><a class="btn btn--white" href="/contact">Contact</a></td>
          </tr>
        </tbody>
      </table>
      <div>
      </div>
    </div>

    <div class="block block--grey-light">
      <div class="block__container">
        <div class="block__header">
          <h4 class="title1 text-center">Frequently Asked Questions</h4>
          <h5 class="subtitle">Our support team answers these questions almost daily</h5>
        </div>
        <div class="block__body">
          <div class="row justify-content-md-center">
            <div class="col-md-8">
              <div class="accordion">
                <div class="accordion__item">
                  <div class="accordion__title">
                    Can I try before I subscribe? </div>
                  <div class="accordion__content">
                    <p>As a free user you have a limited access to all our tools. By upgrading to Premium, you get
                      access to the same tools with the highest task and size limits.</p>
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="accordion__title">
                    I want to purchase multiple user accounts. Can I get a discount? </div>
                  <div class="accordion__content">
                    <p>iLovePDF is already priced to be very affordable. Up to 10 users, there is only Annual
                      membership discount, 33% off. For larger volume of user accounts, please email us.</p>
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="accordion__title">
                    Is there any discount available? </div>
                  <div class="accordion__content">
                    <p>Yes. We offer special discounts to students. Just sign up with your student e-mail address
                      and you will automatically qualify for the discount. If your student e-mail address is not
                      recognized, please contact our support team.</p>
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="accordion__title">
                    Can I share single billing for multiple accounts? </div>
                  <div class="accordion__content">
                    <p>Yes. You can put everyone's account on one credit card for centralized billing. Just enter
                      the email addresses of your team members and your plan will automatically upgrade.</p>
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="accordion__title">
                    What payment methods do you accept? </div>
                  <div class="accordion__content">
                    <p>We accept payments through Visa, MasterCard, Discover, American Express and others. If you
                      don't want to use a credit card, we accept PayPal among others. If you need to use any other
                      payment method, let us know.</p>
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="accordion__title">
                    Can I cancel my subscription? </div>
                  <div class="accordion__content">
                    <p>Absolutely! If your account doesn’t fit your needs, you can cancel your subscription at any
                      time.</p>
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="accordion__title">
                    What if I need to change my plan partway through my contract? </div>
                  <div class="accordion__content">
                    <p>You can add and remove licenses as needed from your Account. In the same way, you can upgrade
                      your subscription and we'll automatically adjust the pricing.</p>
                  </div>
                </div>
                <div class="accordion__item">
                  <div class="accordion__title">
                    Can you invoice me? </div>
                  <div class="accordion__content">
                    <p>Yes, Tax Invoicing is available for all the Plans. All prices are VAT included. We offer
                      monthly and annual billing. You can manage your Invoices and edit your billing settings from
                      your Account page.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{asset('assets/js/pricing.js')}}"></script>
  </div>
</div>
@endsection