<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('public/css/st.css') }}">
    <title>User Profile</title>
</head>
<body>
    <div class="container">
        @foreach($user as $value)
        <div class="row">
            
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                
            </div>
            
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                
                    <div class="profile-img">
                        <img src="https://vcdn-ngoisao.vnecdn.net/2020/04/20/lee-min-ho-the-king-eternal-mo-7182-2745-1587357114.jpg" alt=""/>
                        <div class="file btn btn-lg btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                  
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                <div class="row">
                    <div class="profile-head">
                        <h5>
                        {!! $value["username"] !!}
                        </h5>
                        <h6>
                        {!! $value["user_role"] !!}
                        </h6>
                        
                    </div>
                </div>

            </div>
            
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                
            </div>
            
        </div>

        <div class="row">
                
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    
                </div>
                <div class="col-md-5">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>User Id:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{!! $value["id"] !!}</p>
                                </div>           
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{!! $value["username"] !!}</p>
                                </div>
                            </div>            
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{!! $value["email"] !!}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{!! $value["phone"] !!}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Profession:</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{!! $value["user_role"] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    
                </div>
                
        </div>
        
        
        
        
    @endforeach   
    </div>
</body>
</html>