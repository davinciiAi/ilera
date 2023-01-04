<!--Dashboard top-->
<section class="section-padding-sm-2 blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                <div class="card">
                    <div class="card-header">
                        Profile <a href="{{ url('profile') }}"><i class="ti-arrow-top-right"></i></a>
                    </div>
                    <div class="card-body">
                        <p>Hi! <strong> {{ ucwords(Auth::user()->name) }}</strong></p>
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
                        <p>Account Balance: <strong>${{ number_format(Auth::user()->account->balance, 2) }}</strong></p>
                        <p>Active Investment: <strong>${{ number_format($active_investments_amount, 2) }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-20">
                <div class="card">
                    <div class="card-header">
                        Affiliate Link
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="ref"><i class="ti-check cl-primary"></i> {{ url('/?ref='. Auth::user()->username) }}</li>
                        <li class="list-group-item"><a href="#" onclick="event.preventDefault(); copyToClipboard('#ref')"><i class="ti-control-play"></i> Click to copy </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Dashboard top-->
