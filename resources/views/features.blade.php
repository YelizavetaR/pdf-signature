@extends('layouts.app')

@section('feature')
<div class="block block--intro block--grey">
  <div class="block__container">
    <div class="block__header">
      <h1 class="title">Our features</h1>
      <h2 class="subtitle">Some good reasons to join us</h2>
    </div>
    <div class="block__body">
      <div class="row align-items-center">
        <div class="col-md-3">
          <h3 class="title2">We are very easy to use</h3>
          <p>Not so computer-savvy? No problem. Even if it’s your first time using iLovePDF, we made it extremely
            simple. Our interface is user friendly. Our tools know how to do their job. So you shouldn’t encounter
            any setbacks.</p>
        </div>
        <div class="col-md-6 text-center">
          <img src="{{asset('assets/img/features/features.svg')}}" alt="Our features">
        </div>
        <div class="col-md-3">
          <h3 class="title2">We speak your language</h3>
          <p>It doesn't matter where you come from. We will definitely understand each other. iLovePDF has been
            happily translated to 25 languages, you can choose yours from the menu.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block--full block--white">
  <div class="block__container">
    <div class="block__header">
      <h2 class="title1">What matters to you, matters to us</h2>
      <h3 class="subtitle">When it comes to dealing with your files, it is our task and duty to provide the best
        possible service</h3>
    </div>
    <div class="block__body">
      <div class="infounit__list">
        <div class="infounit">
          <div class="infounit__img">
            <img src="{{asset('assets/img/features/quality.svg')}}" alt="The importance of a file">
          </div>
          <div class="infounit__title">The importance of a file</div>
          <div class="infounit__content">
            <p>We strive to bring you the smallest file size possible while maintaining the quality at its best.</p>
          </div>
        </div>
        <div class="infounit">
          <div class="infounit__img">
            <img src="{{asset('assets/img/features/security.svg')}}" alt="Your security is our concern">
          </div>
          <div class="infounit__title">Your security is our concern</div>
          <div class="infounit__content">
            <p>In order to combat file theft, we automatically eliminate all your archives within two hours.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block--full block--red-light">
  <div class="block__container">
    <div class="block__header">
      <h2 class="title1">Enjoy a wiser use of time</h2>
      <h3 class="subtitle">We have created an entire suite of optimal tools which will speed up your document
        processes</h3>
    </div>
    <div class="block__body">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div>
            <img src="{{asset('assets/img/features/files.svg')}}" alt="We'll help you save time and effort">
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="box">
            <h3 class="title2">We help you save your precious time</h3>
            <p>You can batch edit your files instead of painfully dealing with them one at a time. Your files are
              processed at high speed, so no need to wait, well… as long as you have a proper Internet connection.
            </p>
          </div>
          <div class="box">
            <h3 class="title2">Freedom to manage your files</h3>
            <p>Arrange them alphabetically or in inverse alphabetical order. Forgot one? You can add more, remove
              some of them, or rotate them after uploading. Because dealing with files can be a messy business.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block--full block--white">
  <div class="block__container">
    <div class="block__header">
      <h2 class="title1">Freedom to choose your platform</h2>
      <h3 class="subtitle">Keep up with your work from your favorite device. Our tools are accessible from the web,
        mobile and desktop</h3>
    </div>
    <div class="block__body">
      <div class="row align-items-center">
        <div class="col-md-5">
          <div class="box">
            <h3 class="title2">Work from the cloud</h3>
            <p>We are integrated with Google Drive and Dropbox. This allows you to take your files from the cloud
              and, once processed, save them back to your cloud storage accounts.</p>
          </div>
          <div class="box">
            <h3 class="title2">Edit on the go</h3>
            <p>Because business doesn't stop while you are on the go, you can edit and convert your PDFs on your
              smartphone with <a href="#">iLovePDF Mobile App</a>. Available for iOS and Android.</p>
          </div>
          <div class="box">
            <h3 class="title2">Bring our tools to your Desktop</h3>
            <p>Compress, merge, split, convert and edit your PDF files offline for maximum privacy with <a
                href="#">iLovePDF Desktop</a>. Process your files directly on your computer and speed up
              editing performance.</p>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6">
          <div class="text-center">
            <img src="{{asset('assets/img/features/mobile.svg')}}" alt="Save mobile data working straight to the cloud">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="block block--full block--premium">
  <div class="bg"></div>
  <div class="block__container">
    <div class="block__header">
      <h2 class="title1">Get even more with Premium</h2>
      <h3 class="subtitle">Sometimes you just require a little something extra. Upgrade your iLovePDF experience and
        boost your document productivity</h3>
    </div>
    <div class="block__body">
      <div class="bg"></div>
      <div class="row align-items-center">
        <div class="col-md-6">
          <div>
            <img style="max-width: 100%;" src="{{asset('assets/img/features/team.svg')}}"
              alt="You can build up your own team!">
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="box">
            <h3 class="title3">Create a team</h3>
            <p>Premium features include managing your own team to share default actions. Adding a watermark with
              your corporate logo or setting a page number format are just a couple of ideas.</p>
          </div>
          <div class="box">
            <h3 class="title3">Power up your tools</h3>
            <p>Take our tools to the next level and get the job done faster by increasing file size barriers and
              incrementing batch numbers per process. Offering ads-free workspace and unlimited access to all our
              services.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="block block--separator block--white text-center">
  <div class="bg"></div>
  <div class="block__container">
    <div class="block__body">
      <div class="max800">
        <svg class="heart" width="48px" height="43px" viewBox="0 0 48 43" version="1.1"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-696.000000, -3270.000000)" fill="#E5322D">
              <g transform="translate(404.000000, 3270.000000)">
                <path
                  d="M322.540678,19.3072731 L322.540678,3.40535522 L338.11729,19.3072731 L322.540678,19.3072731 Z M322.74695,1.27357969 C320.054976,2.59988235 318.035548,4.83527527 316.560604,7.36902534 C314.189828,3.30021404 310.420528,0 304.712397,0 C299.00158,0 292,4.94803538 292,13.3063021 C292,21.768491 298.916802,25.7793984 302.342517,28.0446575 C306.004353,30.4635142 312.252192,34.8614631 316.560604,43 C320.87021,34.8614631 327.117452,30.4635142 330.780184,28.0446575 C333.353649,26.3416752 337.900571,23.6521943 340,18.8272807 L322.74695,1.27357969 Z"
                  id="Fill-1"></path>
              </g>
            </g>
          </g>
        </svg>
        <h3 class="title2" style="color: #626870;">Because every PDF problem you might now have can be our next
          challenge</h3>
      </div>
    </div>
  </div>
</div>
@endsection