@extends('pages.layouts.master')
@section('content')
            <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="{{ route('homepages') }}">Home</a> ></li>
                            <li>My account</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
            <section class="main-content-area my-account ptb-100">
				<div class="container">
	                <div class="account-dashboard">
	                    <div class="row">
	                        <div class="col-sm-12 col-md-3 col-lg-3">
	                            
	                            <ul role="tablist" class="nav flex-column dashboard-list">
	                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a></li>
	                                <li> <a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
	                                <li> <a href="#view" data-toggle="tab" class="nav-link">View history</a></li>
	                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
	                                <li><a href="login.html" class="nav-link">logout</a></li>
	                            </ul>
	                        </div>
	                        <div class="col-sm-12 col-md-9 col-lg-9">
	                            <!-- Tab panes -->
	                            <div class="tab-content dashboard-content">
	                                <div class="tab-pane fade show active" id="dashboard">
	                                    <h3>Dashboard </h3>
	                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">Edit your password and account details.</a></p>
	                                </div>
	                                <div class="tab-pane fade" id="orders">
	                                    <h3>Orders</h3>
	                                    <div class="organic-table-area table-responsive">
	                                        <table class="table">
	                                            <thead>
	                                                <tr>
	                                                    <th>Order</th>
	                                                    <th>Date</th>
	                                                    <th>Status</th>
	                                                    <th>Total</th>
	                                                    <th>Actions</th>	 	 	 	
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            	@foreach($cakes as $cake)
	                                                <tr>
	                                                    <td>{{ $cake->id }}</td>
	                                                    <td>{{ $cake->created_at }}</td>
	                                                    <td><span class="success">{{ $cake->status }}</span></td>
	                                                    <td>{{ $cake->total_price }} $ for {{ $cake->total_quanity }} item </td>
	                                                    <td><a href="cart.html" class="view">view</a></td>
	                                                </tr>
	                                                @endforeach
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                                  <div class="tab-pane fade" id="view">
	                                    <h3>View history</h3>
	                                    <div class="organic-table-area table-responsive">
	                                        <table class="table">
	                                            <thead>
	                                                <tr>
	                                                    <th>Cakes</th>
	                                                    <th>Date</th>
	                                                </tr>
	                                            </thead>
	                                            <tbody>
	                                            	@foreach($views as $view)
	                                                <tr>
	                                                    <td>{{ $view->name}}</td>
	                                                    <td>{{ $view->pivot->created_at }}</td>
	                                                </tr>
	                                                @endforeach
	                                            </tbody>
	                                        </table>
	                                    </div>
	                                </div>
	                               
	                                <div class="tab-pane" id="address">
	                                   <p>The following addresses will be used on the checkout page by default.</p>
	                                    <h4 class="billing-address">Billing address</h4>
	                                    <a href="#" class="view">Edit</a>
	                                    <p><strong>Bobby Jackson</strong></p>
	                                    <address>
	                                    	House #15<br>
	                                    	Road #1<br>
	                                    	Block #C <br>
	                                    	Banasree <br>
	                                    	Dhaka <br>
	                                    	1212
	                                    </address>
	                                    <p>Bangladesh</p>   
	                                </div>
	                                <div class="tab-pane fade" id="account-details">
	                                    <h3>Account details </h3>
	                                    <div class="login">
	                                        <div class="login-form-container">
	                                            <div class="account-login-form">
	                                                <form action="#">
	                                                    <p>Already have an account? <a href="#">Log in instead!</a></p>
	                                                    <div class="input-radio">
	                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
	                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
	                                                    </div> <br>
	                                                    <label>First Name</label>
	                                                    <input type="text" name="first-name">
	                                                    <label>Last Name</label>
	                                                    <input type="text" name="last-name">
	                                                    <label>Email</label>
	                                                    <input type="text" name="email-name">
	                                                    <label>Password</label>
	                                                    <input type="password" name="user-password">
	                                                    <label>Birthdate</label>
	                                                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
	                                                    <span class="example">
	                                                      (E.g.: 05/31/1970)
	                                                    </span>
	                                                    <span class="custom-checkbox">
	                                                        <input type="checkbox" value="1" name="optin">
	                                                        <label>Receive offers from our partners</label>
	                                                    </span>
	                                                    <span class="custom-checkbox">
	                                                        <input type="checkbox" value="1" name="newsletter">
	                                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
	                                                    </span>
	                                                    <div class="save-button primary-btn default-button">
	                                                        <a href="#">Save</a>
	                                                    </div>
	                                                </form>
	                                            </div>
	                                        </div>
			                            </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>       	
            </section>			
	@endsection
