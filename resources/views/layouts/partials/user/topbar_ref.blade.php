<!--Dashboard top-->
<section class="section-padding-sm-2 blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                <div class="card">
                    <div class="card-header">
                        Profile
                    </div>
                    <div class="card-body">
                        <p>Referrer:  <strong> {{ isset(Auth::user()->referrer) ? ucwords(Auth::user()->referrer) : 'None'  }}</strong></p>
                        <p> Member since: <strong> {{ Auth::user()->created_at->setTimezone(Auth::user()->time_zone)->toDayDateTimeString()}}</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                <div class="card">
                    <div class="card-header">
                        Balance
                    </div>
                    <div class="card-body">
                        <p>Active referrals: <strong>{{ $active_refs }} referral(s)</strong></p>
                        <p>Paid Active referrals: <strong>${{ $earned }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                <div class="card">
                    <div class="card-header">
                        Affiliate Link
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" ><i class="ti-check cl-primary"></i> <b id="ref"> {{ url('/?ref='. Auth::user()->username) }} </b> </li>
                        <li class="list-group-item"><a href="#" onclick="event.preventDefault(); copyToClipboard('#ref')"><i class="ti-control-play"></i> Click to copy </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Dashboard top-->
