<!DOCTYPE html>
<html>
<head>
    <title>Whatsapp</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>body {
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
}

hr{
    margin-top: 0px;
    margin-bottom: 0px;
}

::placeholder { 
    font-size: 14px;
    padding: 24px;
    color: #f8f8f8;
}


.col-9{
    padding: 0px;
}

.wa-chat{
    background-image: url('images/bg.png');
    min-height: 90vh;
}

.wa-navbar{
    background-color: #eee;
    height: 58px;
}

.wa-navbar img{
    width: 44px;
    margin: 8px;
}

.wa-contatos{
    background-color: #f8f8f8;
}

.wa-item-chat{
    margin-top: 10px;
    margin-bottom: 6px;
}

.wa-item-chat:hover{
    background-color: #e9ebeb;
}

.wa-item-chat img{
    width: 54px;
    margin-left: 12px;
}

.wa-item-chat b{
    margin-left: 12px;
    font-weight: 500;
}

.wa-item-chat span{
    color: rgba(0,0,0,.4);
    font-size: 14px;
}

.wa-preview-message{
    color: rgba(0,0,0,.6);
    font-size: 14px;
    margin-left: 12px;
}

.wa-input{
    border-radius: 20px;
    margin-left: 10px;
    margin-top: 8px;
    margin-bottom: 8px;
    border: none;
}

.wa-badge{
    background-color: #09d261;
    color: white !important;
}

.wa-introducao{
    background-color: #f7f9fa;
    min-height: 99vh;
    border-bottom: 6px solid #58e870;
}

.wa-card-introducao{
    width: 550px;
    text-align: center;
}

.wa-card-introducao h1{
    font-size: 32px;
    color: #4b5961;
}

.wa-card-introducao p{
    font-size: 14px;
    color: #929fa6;
}

.wa-card-introducao a{
    color: #07bc4c;
    text-decoration: none;
}

.wa-icon{
    color: #7e868a;
    margin-top: 16px;
}

.dropdown-item{
    font-size: 14px;
    color: #4b5961;
}

.dropdown-menu{
    left: -64px !important;
}

.wa-panel-texto{
    position: absolute;
    bottom: 0;
    left: 0;
    background-color: #eee;
    width: 100%;
}



.wa-card-chat{
    font-size: 14px !important;
    padding: 7px !important;
}

.wa-card-yellow{
    background-color: #fdf1c7;
}

.wa-card-green{
    background-color: #e2f4ca;
}

.wa-card-green:after {
	left: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	position: absolute;
	border-left-color: #e2f4ca;
    border-width: 10px;
    margin-top: 0px;
}

.wa-card-default{
    background-color: white;
    margin-left: 36px;
}

.wa-card-default:after {
	right: 100%;
	top: 50%;
	border: solid transparent;
	content: " ";
	position: absolute;
	border-right-color: white;
    border-width: 10px;
    margin-top: 0px;
}

.wa-chat-icon{
    color: #8dcbe2;
    font-size: 16px !important;
}</style>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">

                <div class="row wa-navbar">
                    <div class="col-8">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-2">
                        <i class="large material-icons wa-icon">chat</i>
                    </div>
                    <div class="col-2">
                        <div class="dropdown">
                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="large material-icons wa-icon">more_vert</i>
                            </a>
                            
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">New group</a>
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Archived</a>
                                <a class="dropdown-item" href="#">Starred</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="{{ route('account.logout') }}">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 wa-contacts">
                        <input class="form-control wa-input" placeholder="Search or start a new conversation"/>
                    </div>
                </div>
                <div class="row wa-item-chat">
                    <div class="col-2">
                        <img src="/me.webp"  height="70px"class="rounded-circle"/>
                    </div>
                    <div class="col-8">
                        <b>Ishfaq.</b><br/>
                        <p class="wa-preview-message">can you see me sir</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <hr/>
                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>Sheeran.</b><br/>
                        <p class="wa-preview-message">thk chuka boiya</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>zakir.</b><br/>
                        <p class="wa-preview-message">ok</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>love.</b><br/>
                        <p class="wa-preview-message">love you too</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>juniad.</b><br/>
                        <p class="wa-preview-message">ok</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>Rebeca G.</b><br/>
                        <p class="wa-preview-message">alright</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>dG.</b><br/>
                        <p class="wa-preview-message">yes</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>Rakib.</b><br/>
                        <p class="wa-preview-message">very sad</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>

                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>imran</b><br/>
                        <p class="wa-preview-message">Send kar</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">81</span>
                    </div>
                </div>
                <hr/>

                <div class="row wa-item-chat">
                    <div class="col-2">
                         <img src="/me.webp"  height="70px"class="rounded-circle">
                    </div>
                    <div class="col-8">
                        <b>Amjit sir</b><br/>
                        <p class="wa-preview-message">very good</p>
                    </div>
                    <div class="col-2" style="text-align: right">
                        <span>16:24</span>
                        <span class="badge badge-pill wa-badge">54</span>
                    </div>
                </div>
                <hr/>

            </div>
            <div class="col-9">

                <div class="wa-navbar">
                    <div class="container">
                        <div class="row">
                            <div class="col-1">
                                 <img src="/me.webp"  height="70px"class="rounded-circle">
                            </div>
                            <div class="col-9">
                                <div style="margin-top: 10px">
                                    <span style="font-size: 12px">sheeran jio</span><br/>
                                    <span style="font-size: 12px">active</span>
                                </div>
                            </div>
                            <div class="col-1">
                                <i class="large material-icons wa-icon">search</i>
                                <i class="large material-icons wa-icon">attach_file</i>
                            </div>
                            <div class="col-1">
                                <div class="dropdown">
                                    <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="large material-icons wa-icon">more_vert</i>
                                    </a>
                                    
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Contact info</a>
                                        <a class="dropdown-item" href="#">Select messages</a>
                                        <a class="dropdown-item" href="#">Mute</a>
                                        <a class="dropdown-item" href="#">Clear messages</a>
                                        <a class="dropdown-item" href="#">Delete chat</a>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>

                </div>


                <div class="wa-chat" id="messageContainer">
                    <!-- Messages will be displayed here -->
                </div>

                <div class="wa-panel-text " >
                    <div style="text-align: center">
                        <div class="row">
                            <div class="col-1">
                                <i class="large material-icons wa-icon">mood</i>
                            </div>
                            <div class="col-9">
                                <input class="form-control wa-input" id="messageInput" placeholder="Type a message"/>
                            </div>
                            <div class="col-1">
                                <button class="btn btn-primary" onclick="sendMessage()">Send</button>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>

    </div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    function sendMessage() {
        var messageInput = document.getElementById("messageInput");
        var message = messageInput.value;
        var messageContainer = document.getElementById("messageContainer");
        var messageDiv = document.createElement("div");
        messageDiv.className = "row";
        messageDiv.innerHTML = '<div class="offset-6 col-5"><div class="card wa-card-chat wa-card-green">' + message + '<div style="text-align: right"><span>Now</span><i class="large material-icons wa-icon wa-chat-icon">done_all</i></div></div></div>';
        messageContainer.appendChild(messageDiv);
        messageInput.value = "";
    }
</script>
</html>
